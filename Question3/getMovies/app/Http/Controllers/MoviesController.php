<?php

namespace App\Http\Controllers;

use App\moviedetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{
    public function getMatchedMoviesJSON()
    {
        $inputString = null;
        $pageNumber = null;

        if(isset($_GET['substr']))
        {
            $inputString = $_GET['substr'];
        }

        if(isset($_GET['page']))
        {
            $pageNumber = $_GET['page'];
        }


        $allTitlesCount = DB::table('moviedetails')->where('Title','LIKE','%'.strtolower($inputString).'%')->count();

        if($allTitlesCount>0)
        {

            $totalPagescount = intval($allTitlesCount/10);

            $totalPagescountRemainder = $allTitlesCount%10;

            if($totalPagescountRemainder>0)
            {
                $totalPagescount++;
            }

            $dataTobeSkippedAccordingToPageNumber = ($pageNumber-1)*10;

            $allTitlesData = DB::table('moviedetails')->where('Title','LIKE','%'.strtolower($inputString).'%')->offset($dataTobeSkippedAccordingToPageNumber)
            ->limit(10)->get();

            $allTitlesData = json_decode($allTitlesData);


            $basicArray = array();
            $finalArray = array();

            for($i=0; $i<count($allTitlesData); $i++)
            {

                $titleName = "Title";
                $titleValue = $allTitlesData[$i]->Title;

                $typeName = "Type";
                $typeValue = $allTitlesData[$i]->Type;

                $yearName = "Year";
                $yearValue = $allTitlesData[$i]->Year;

                $imdbName = "imdbID";
                $imdbValue = $allTitlesData[$i]->imdbID;

                $basicArray = array($titleName => $titleValue,
                $typeName => $typeValue,
                $yearName => $yearValue,
                $imdbName => $imdbValue,
            );

            array_push($finalArray, $basicArray);
        }


        $finalArray = json_encode($finalArray);


        return response()->json([
            'page' => $pageNumber,
            'per_page' => 10,
            'total' => $allTitlesCount,
            'total_pages' => $totalPagescount,
            'data' => $finalArray
        ], 404);

    }

    }

    public function getMatchedMoviesSorted()
    {

        $inputString = null;
        $pageNumber = null;

        if(isset($_GET['substr']))
        {
            $inputString = $_GET['substr'];
        }

        if(isset($_GET['page']))
        {
            $pageNumber = $_GET['page'];
        }

        $allTitlesCount = DB::table('moviedetails')->where('Title','LIKE','%'.strtolower($inputString).'%')->count();

        if($allTitlesCount>0)
        {

            $totalPagescount = intval($allTitlesCount/10);

            $totalPagescountRemainder = $allTitlesCount%10;

            if($totalPagescountRemainder>0)
            {
                $totalPagescount++;
            }

            $dataTobeSkippedAccordingToPageNumber = ($pageNumber-1)*10;

            $allTitlesData = DB::table('moviedetails')->where('Title','LIKE','%'.strtolower($inputString).'%')->offset($dataTobeSkippedAccordingToPageNumber)
            ->limit(10)->get();

            $allTitlesData = json_decode($allTitlesData);

            $titles = array();

            for($i=0; $i<count($allTitlesData);$i++)
            {
                array_push($titles,$allTitlesData[$i]->Title);
            }

            sort($titles);


            return $titles;

    }


}
}
