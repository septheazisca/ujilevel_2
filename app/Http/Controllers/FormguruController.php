<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormguruController extends Controller
{
    public function formguru()
    {
        return view('admin.guru.formguru');
    }
}
