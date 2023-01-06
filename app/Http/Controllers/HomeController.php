<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $forms = Form::get();
        return view('pages.app', compact('forms'));
    }
}
