<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Storage;
use App\Models\Image;

class ImageController extends Controller
{
    public function uploadFile(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'file' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
           'book_id' => 'required|exists:books,id'
        ]);

        if ($validator->fails()) {
            $response['success'] = 0;
            $response['error']   = $validator->errors()->first('file');

        } else {
             if ($request->file('file')) {
                  $path = $request->file('file')->store('books', 'public');

                  Image::create([
                    'book_id' => $request->book_id,
                    'path'    => $path,
                  ]);

                  $response['success'] = 1;
                  $response['message'] = 'Uploaded Successfully!';
                  $response['path'] = $path;
             } else {
                   $response['success'] = 0;
                   $response['message'] = 'File not uploaded.';
             }
        }

        return response()->json($response);
    }

    public function removeFile(Request $request)
    {
        Storage::disk('public')->delete($request->filename);

        Image::where([
          'book_id' => $request->book_id,
          'path'    => $request->filename
        ])->delete();

        return response()->json([
          'message' => 'File successfully deleted!'
        ]);
    }
}
