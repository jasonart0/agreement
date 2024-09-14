<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmploymentContract;

class EmploymentContractController extends Controller
{
    // Show the form
    public function showForm()
    {
        return view('employment_contract_form'); // Ensure you have a corresponding Blade view
    }

    // Handle form submission
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the form inputs
        $validated = $request->validate([
            'employer_name' => 'required|string|max:255',
            'employer_address' => 'required|string|max:255',
            'employee_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'job_duties' => 'required|string',
            'salary' => 'required|numeric',
            'commission' => 'required|numeric',
            'vacation_days' => 'required|integer',
            'confidentiality_agree' => 'required|in:1', // This makes sure the checkbox is checked (must be 1)
            'signature_step1' => 'required|string',
            'signature_step2' => 'required|string',
            'signature_step3' => 'required|string',
            'signature_step4' => 'required|string',
            'signature_step5' => 'required|string',
            // Add validation for other signatures and fields

        ]);

        // Save the validated data into the database
        EmploymentContract::create($validated);

        // Redirect to a success page (you can create this view)
        return redirect()->route('contract.form')->with('success', 'Contract submitted successfully!');

    }



    // Show the dashboard with all contracts
    public function showDashboard()
    {
        // Fetch all records from the employment_contracts table
        $contracts = EmploymentContract::all();
        // dd($contracts);

        // Pass the contracts data to the dashboard view
        return view('dashboard', compact('contracts'));
    }
}
