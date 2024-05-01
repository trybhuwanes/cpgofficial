<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class DashboardController extends Controller
{
    //
    public function dashboard() {
        return view('admin.dashboard');
    }
}
