<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Excel;

class UserController extends Controller
{
    public function exportUser(){
        //export user
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function importUser(Request $request){
        //Import
        //Validate
        Excel::import(new UsersImport, $request->file('file'));

}
 
 }