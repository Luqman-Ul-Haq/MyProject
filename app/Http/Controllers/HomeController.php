<?php

namespace App\Http\Controllers;
use App\Models\crudtbl;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function ShowData()
    {
        $data = crudtbl::all();
        return view('welcome', ['data' => $data]);
    }
    function InsertPage()
    {
        return view('Insert');
    }

    function InsertData(Request $req)
    {
        $req->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Phone' => 'required',
            'City' => 'required',
        ]);
        $obj = new crudtbl;
        $obj->Name  = $req->Name;
        $obj->Email = $req->Email;
        $obj->Phone = $req->Phone;
        $obj->City  = $req->City;
        $obj->save();
        return redirect('/');
    }
}
