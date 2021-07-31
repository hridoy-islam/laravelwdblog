<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeesExport;
use Maatwebsite\Excel\Facades\Excel;



class EmployeeController extends Controller
{
    public function export(){

        return Excel::download(new EmployeesExport, 'data.csv');
    }

    public function index(){
        $data = Employee::all();
        return view('admin.employee.list', compact('data'));
    }

    public function create(){
        return view('admin.employee.add');
    }

    public function store(Request $request){

    }
    public function show($id){

    }
    public function edit($id){

    }
    public function update(Request $request, $id){

    }

    public function destroy($id){

    }



}
