<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Register;

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
            'link' => 'required',
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
     

     if(Input::hasFile('image')){
        $file = Input::file('image');
        $file->move(public_path().'/passports_photo/',
        $file->getClientOriginalName());
        $url = URL::to("/").'/passports_photo/'.
        $file->getClientOriginalName();
        
    }
    $register->image = $url;
    $register->save();
    
    // return back()->with('success', 'Thanks for contacting us!');

        return redirect()->back()->with('message', 'Registration successful! ');

    }


    public function terms(){
        return view('terms');
    }

    
}
