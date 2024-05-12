<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;



class DashboardController extends Controller
{
    // GUEST
    public function schedule() {
        $training = Training::all();
        return view('schedulePage', compact(['training']));
    }
    // ADMIN FUNCTION
    public function dashboard() {
        return view('admin.dashboard');
    }
}
