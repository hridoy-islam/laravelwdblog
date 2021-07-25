<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        notify()->success('Welcome to Laravel Notify');
        return view('admin.pages.index');
    }
}
