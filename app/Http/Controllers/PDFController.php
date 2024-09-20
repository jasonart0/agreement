<?php

namespace App\Http\Controllers;

use App\Models\EmploymentContract;  // Use the correct namespace for your model
use Illuminate\Http\Request;
use PDF;  // Assuming you're using barryvdh/laravel-dompdf

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        // Your logic to generate PDF
        $data = EmploymentContract::findOrFail($id); // Example fetching data from a model
        // $data = ['title' => 'domPDF in Laravel 10'];
        // Return or store the generated PDF

        return view('employment_contract_form_print', compact('data'));


        // $pdf = PDF::loadView('employment_contract_form', compact('data'));
        // dd($pdf);

        // return $pdf->setPaper('a4', 'portriate')->setWarnings(false)->download('document.pdf'); // Or return view directly
    }
}
