<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        notify()->success('Welcome to Admin Panel');
        return view('admin.pages.index');
    }
}
