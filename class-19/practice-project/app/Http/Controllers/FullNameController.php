<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullNameController extends Controller
{
    public function fullName(){
        return view('full-name.index');
    }

    public function getFullName(Request $request){
        $this->fullName = $request->first_name . ' ' . $request->last_name;
        return redirect('/full-name')->with('result', $this->fullName);
    }
}
