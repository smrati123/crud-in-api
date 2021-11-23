<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberConrtoller extends Controller
{
    //
    function addData(Request $req)
    {
        $member = new Member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;
        // $member->save();
        // return redirect('list');
         
       $validateData=$req->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'address'=>'required'
        ]);
        // return $req->input();
        $member->save();
        return redirect('list');
        // return redirect('')->back()->with('status','dsdhfgjsdg');

    }

     function show()
    {
        $data= Member::paginate(3);
        return view('list',['members'=>$data]);
    }

    function delete($id)
    {
        $data = Member::find($id);
        $data->delete();
        return redirect('list');
    }

    function showData($id)
    {
        $data = Member::find($id);
        return view('edit',['data'=>$data]);
    }                                                                                                                           
    function update(Request $req)
    {
        $data = Member::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        return redirect('list');
    }


    //file uploads
    function index(Request $req)
    {
        return $req->file('filename')->store('img');
    }

}

