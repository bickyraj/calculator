<?php

namespace BickyRaj\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator::calculator');
    }
}
