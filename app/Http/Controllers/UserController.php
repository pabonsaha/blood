<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\RequestBlood;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validation= $request->validate([
            'email' => 'required|unique:users|max:100',
            'password' => 'required|min:8|max:15',
            'confirm_password' => 'required|min:8|max:15',
            'name' =>'required',
            'blood_group'=>'required',
            'phone_1'=>'required',
            'address'=>'required',
            
        ]);

        if($validation)
        {
            if($request->password!=$request->confirm_password)
            {
                return redirect()->back()->with('password','Password and Confirm Password did not match');
            }
            else
            {
                $user= new User();
                $user->name= $request->name;
                $user->email= $request->email;
                $user->address= $request->address;
                $user->phone_1= $request->phone_1;
                $user->password= Hash::make($request->password);
                $user->blood_group= $request->blood_group;
                if(isset($request->phone_2))
                {
                    $user->phone_2=$request->phone_2;
                }
                if(isset($request->fb_link))
                {
                    $user->fb_link=$request->fb_link;
                }
                $user->save();
                return redirect('/login');
            }
        }
    }


    public function profile()
    {
        $userID = Auth::id();
        $user= User::find($userID);
        
        return view('user.userProfile',compact('user'));
    }
    
    public function edit()
    {
        $userID = Auth::id();
        $user= User::find($userID);
        return view('user.profileEdit',compact('user'));
    }

    public function basic(Request $request)
    {
        $validation= $request->validate([
            
            'name' =>'required',
            'blood_group'=>'required',
            'phone_1'=>'required',
            'address'=>'required',
            
        ]);

        if($validation)
        {
            $userID = Auth::id();
            $user= User::find($userID);
            $user->name= $request->name;
            $user->address= $request->address;
            $user->blood_group= $request->blood_group;
            $user->phone_1= $request->phone_1;
            $user->phone_2= $request->phone_2;
            $user->fb_link= $request->fb_link;
            $user->save();
            return redirect()->route('dashboard');

        }
    }

    public function blood(Request $request)
    {
        $userID = Auth::id();
        $user= User::find($userID);
        $user->last_donation_date= $request->date;
        $user->save();
        return redirect()->route('dashboard');
    }

    public function request()
    {
        return view('user.request');
    }

    public function saveRequest(Request $request)
    {
        $validation=$request->validate([
            'text'=>'required',
        ]);

        if($validation)
        {
            $req = new RequestBlood();
            $req->message=$request->text;
            $req->user_id=Auth::id();
            $req->save();
            return redirect()->route('allRequest');

        }
    }

    public function allRequest()
    {
        $userID=Auth::id();
        $requests = DB::table('request_bloods')
            ->where(  'user_id',$userID)->latest()->get();
        return view('user.allRequest',compact('requests'));
    }

}
