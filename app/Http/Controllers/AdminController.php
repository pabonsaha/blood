<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;



use DataTables;

class AdminController extends Controller
{
    public function getUsers(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)->make(true);
        }
    }
    public function deleteAdmin($id)
    {
        $admin=Admin::find($id);
        $admin->delete();
        return redirect()->back();
    }

    public function storeAdmin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|unique:admins|max:100',
            'password' => 'required|min:8|max:15',
            'name' =>'required'
        ]);

        if($validated)
        {
            $admin = new Admin();
            $admin->name= $request->name;
            $admin->email= $request->email;
            
            $admin->password=Hash::make($request->password);
            $admin->save();
            return redirect()->route('admin.allAdmins');

        }
    }

}      
