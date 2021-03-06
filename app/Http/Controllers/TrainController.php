<?php

namespace App\Http\Controllers;
use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public static function index() {
        //$trains = Train::where('data_di_partenza','=', date('Y-m-d'))->get();

        $trains = Train::orderBy('data_di_partenza')->paginate(10);

        return view('guest.home.index',compact('trains'));
    }

    public static function show($id) {
        //$trains = Train::where('data_di_partenza','=', date('Y-m-d'))->get();

        $train = Train::findOrFail($id);

        return view('guest.home.show',compact('train'));
    }
}
