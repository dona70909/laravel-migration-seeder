<?php

namespace App\Http\Controllers;
use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        return view('guest.home.index');
    }
}
