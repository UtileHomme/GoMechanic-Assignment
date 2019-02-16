#include <iostream>
#include <bits/stdc++.h>

using namespace std;

int verifyItems(vector <string> origItems, vector <float> origPrices, vector <string> items, vector <float> prices)
{
    map<string, float> hashAlexItems;
    map<string, float> :: iterator it;

    //create a hash of all items sold by Alex
    for(int i=0; i<items.size(); i++)
    {
        hashAlexItems.insert({items[i], prices[i]});
    }

    int countOfMismatchedItems = 0;

    // for(auto it=hashAlexItems.begin(); it!=hashAlexItems.end(); it++)
    // {
    //     cout<<it->first<<" "<<it->second<<endl;
    // }

    for(int j=0; j<origItems.size(); j++)
    {
        string inventoryItemName = origItems[j];
        float inventoryItemPrice = origPrices[j];

        if(hashAlexItems.find(inventoryItemName)!=hashAlexItems.end())
        {
            string itemSoldName = hashAlexItems.find(inventoryItemName)->first;
            float itemSoldPrice = hashAlexItems.find(inventoryItemName)->second;

            if(inventoryItemPrice!=itemSoldPrice)
            {
                countOfMismatchedItems++;
            }
        }
        else
        {
            continue;
        }


    }

    return countOfMismatchedItems;




}

int main()
{
    int n, m;

    vector<string> origItems;
    vector<float> origPrices;

    vector<string> items;
    vector<float> prices;

    string itemName;
    float itemPrice;

    //Take the count of Orig Items in the inventory
    cin >> n;

    if (n < 1 || n > 100000)
    {
        cout << "Please enter the item count in the range 1 and 100000 only";
        return 0;
    }

    for (int i = 0; i < n; i++)
    {
        cin >> itemName;

        origItems.push_back(itemName);
    }

    cin >> n;

     if (n < 1 || n > 100000)
    {
        cout << "Please enter the item count in the range 1 and 100000 only";
        return 0;
    }

    for (int i = 0; i < n; i++)
    {
        cin >> itemPrice;

        origPrices.push_back(itemPrice);
    }

    //  Take the count of Items sold by alex
    cin >> m;

    if (m > n)
    {
        cout << "The items sold should be less than the items in the inventory";
        return 0;
    }

    for (int i = 0; i < m; i++)
    {
        cin >> itemName;

        items.push_back(itemName);
    }

    cin >> m;

     if (m > n)
    {
        cout << "The items sold should be less than the items in the inventory";
        return 0;
    }

    for (int i = 0; i < m; i++)
    {
        cin >> itemPrice;

        prices.push_back(itemPrice);
    }

    int cntOfMismatchItems = verifyItems(origItems, origPrices, items, prices);

    cout<<cntOfMismatchItems;
    return 0;
}