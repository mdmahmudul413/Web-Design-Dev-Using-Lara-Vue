<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    private $result, $calculation = '';

    public function calculator(){
        return view('calculator.index', ['calculation' => $this->calculation]);
    }

    public function calculate(Request $request){
        switch ($request->choice){
            case '+':
                $this->result = $request->first_number + $request->second_number;
                return redirect('/calculator')->with('calculation', $this->result);
                break;
            case '-':
                $this->result = $request->first_number - $request->second_number;
                return redirect('/calculator')->with('calculation', $this->result);
                break;
            case 'x':
                $this->result = $request->first_number * $request->second_number;
                return redirect('/calculator')->with('calculation', $this->result);
                break;
            case '/':
                $this->result = $request->first_number / $request->second_number;
                return redirect('/calculator')->with('calculation', $this->result);
                break;
            case '%':
                $this->result = $request->first_number % $request->second_number;
                return redirect('/calculator')->with('calculation', $this->result);
                break;
        }
    }
}
