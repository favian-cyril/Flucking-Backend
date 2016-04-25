<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
class UploadController extends Controller
{
    public function upload(Request $request)
    {
      $file = array('fileToUpload' => Request::file('fileToUpload'));
      $rules = array('fileToUpload' => 'required|mimes:jpeg,bmp,png,gif|max:5000',);
      $validator = Validator::make($file, $rules);
      if ($validator->fails()){
        return Redirect::to('upload')->withInput()->withErrors($validator);
      } else {
         if (Request::file('fileToUpload')->isValid()) {
           $destinationPath = public_path('public/asset'); // upload path
           $extension = Request::file('fileToUpload')->getClientOriginalExtension();
           $user = Auth::user();
           $filename = $user->id . '.' . $extension;
           DB::table('users')->where('id', $user->id)->update(['profilepict' => 'public/asset/' . $filename]);
           Request::file('fileToUpload')->move($destinationPath, $filename);
           Session::flash('success', 'Upload successfully');
           return Redirect::to('upload');
         } else {
           Session::flash('error', 'uploaded file is not valid');
           return Redirect::to('upload');
         }
      }
    }//
}
