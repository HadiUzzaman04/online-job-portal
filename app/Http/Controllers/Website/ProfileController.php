<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function userprofile (){
       return view('website.pages.profile');
   }

   public function updateprofile(Request $request,$id){
       $user = User::find($id);
       $user->update([
           'name'=>$request->name,
           'email'=>$request->email,
           'phone'=>$request->phone,

       ]);
       return redirect()->route('user.profile')->with('message','Profile Updated');

   }
}
