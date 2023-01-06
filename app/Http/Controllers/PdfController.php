<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function __invoke()
    {
        $forms = Form::get();

        $pdf = PDF::loadView('pdf.sample', compact('forms'));

        return $pdf->download('form.pdf');
    }

    public function show(Request $request)
    {
        $forms = Form::where('id', $request->id)->get();

        $pdf = PDF::loadView('pdf.sample', compact('forms'));

        return $pdf->download('form.pdf');
    }
}
