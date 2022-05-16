<?php

namespace App\Http\Controllers;
use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public static function index() {
        //$trains = Train::where('data_di_partenza','=', date('Y-m-d'))->get();

        $trains = Train::all();
        return view('guest.home.index',compact('trains'));
    }
}
