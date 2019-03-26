<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{

    public function index()
    {
        $units = Unit::paginate();
        return view('unit.index',compact('units'));
    }

    public function store()
    {
        $units = Unit::create([
            'unit_'=>->,
            ''=>->,
            ''=>->,
            ]);

    }




}
