<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;

class VisitorController extends Controller
{
    function VisitorIndex(){
        // dd("ok");
        $VisitorData['allData'] = VisitorModel::orderBy('id', 'desc')->take(20)->get();
        // $VisitorData['allData'] = VisitorModel::all();
        return view('Visitor', $VisitorData);
    }
}


