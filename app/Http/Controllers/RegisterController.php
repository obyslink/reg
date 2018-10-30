<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Register;
use Cloudder;

class RegisterController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'height' => 'required',
            'dob' => 'required|date',
            'country' => 'required',
            'gender' => 'required',
            'talent' => 'required',
            'language' => 'required',
            'message' => 'required',
            'video' => 'mimes:mp4,mov,ogg,qt | max:25000',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'Question1' =>'required',
            'Question2' => 'required',
            'Question3' => 'required',
        ]);

        

        
     //Register::create($request->all());
     $register = new Register;
     $register->name = $request->input('name');
     $register->surname = $request->input('surname');
     $register->email = $request->input('email');
     $register->telephone = $request->input('telephone');
     $register->height = $request->input('height');
     $register->dob = $request->input('dob');
     $register->country = $request->input('country');
     $register->gender = $request->input('gender');
     $register->talent = $request->input('talent');
     $register->language = $request->input('language');
     $register->message = $request->input('message');
     $register->link = $request->input('link');
     $register->Question1 = $request->input('Question1');
     $register->Question2 = $request->input('Question2');
     $register->Question3 = $request->input('Question3');
     
            //upload to server

    //  if(Input::hasFile('image')){
    //     $file = Input::file('image');
    //     $file->move(public_path().'/passports_photo/',
    //     $file->getClientOriginalName());
    //     $url = URL::to("/").'/passports_photo/'.
    //     $file->getClientOriginalName();
        
    // }

    // upload image to cloudinary
    
    $image = $request->file('image');
    $i_name = $request->file('image')->getClientOriginalName();
    $image_name = $request->file('image')->getRealPath();;
    Cloudder::upload($image_name, null);
    list($width, $height) = getimagesize($image_name);
    $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);

    //save to uploads directory
    // $image->move(public_path("passports_photo"), $name);

    // upload video to cloudinary

    $video = $request->file('video');

    $v_name = $request->file('video')->getClientOriginalName();
    $video_name = $request->file('video')->getRealPath();;
    Cloudder::uploadVideo($video_name, null);
    //list($vwidth, $vheight) = getimagesize($video_name);
    
   $video_url= Cloudder::show(Cloudder::getPublicId(), ["resource_type" => "video", "width" => 300, "height"=>200]);
    

    $register->image = $image_url;
    $register->video = $video_url;
    $register->save();
    
        return redirect()->back()->with('message', 'Registration successful! ');

    }


    public function terms(){
        return view('terms');
    }

    
}
