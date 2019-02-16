<?php

namespace App\Http\Controllers;

use App\upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    //
    public function showUploadForm()
    {
        return view('upload');
    }
    //
    public function showUploadFormDragAndDrop()
    {
        return view('uploadForDragAndDrop');
    }

    public function storeFile(Request $request)
    {
        if($request->hasFile('file'))
        {
            $filename = $request->file->getClientOriginalName();

            $filesize = $request->file->getClientSize();

            $request->file->storeAs('public/upload',$filename);

            $url = url('/');

            $url = $url.'/storage/upload/'.$filename;


            return view('view',compact('url'));
        }
    }

    public function showFile(Request $request)
    {

        $imageValue = $request->filesName;

        return view('dragView',compact('imageValue'));
    }
}
