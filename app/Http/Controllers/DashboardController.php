<?php

namespace App\Http\Controllers;
use App\Models\Appointment;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.layouts.index');
    }

    public function appointment(){
        $appointment = Appointment::orderBy('id','desc')->get();
        return view('backend.layouts.appointment',['appointments'=>$appointment]);
    }
}
