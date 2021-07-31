<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');

    }

    public function import(Request $request){

        $file = $request->file('file');

        dd($file);

        if($request->hasFile('file')){
            $path = $request->file('file')->getrealpath();
            $data = Excel::selectSheetsByIndex(0)->load($path)->get();

            return $data;
        }

    // Excel::import(new UsersImport, request()->file('file'));
    // return redirect()->route('employee.index');


    }
}
