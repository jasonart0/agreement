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
            'contract_day' => 'required|integer|between:1,31',
            'contract_month' => 'required|integer|between:1,12',
            'contract_year' => 'required|integer|digits:4',
            'employee_name' => 'required|string|max:255',
            'commencement_day' => 'required|integer|between:1,31',
            'commencement_month' => 'required|integer|between:1,12',
            'commencement_year' => 'required|integer|digits:4',
            'salary' => 'required|numeric|min:0',
            'gross_profit_commission' => 'required|numeric|min:0',
            'employee_hours' => 'required|integer|min:0',
            'vacations' => 'required|string',
            'sales_revenue' => 'required|string|max:255',
            'employee_address' => 'required|string|max:255',
            'sin_number' => 'required|string|max:255',

            'widtness_day' => 'required|integer|min:1|max:31',
            'widtness_month' => 'required|integer|min:1|max:12',
            'widtness_year' => 'required|integer|min:1900|max:2100',
            'fitness_field_one' => 'required|string|max:255',
            'witness_name_1' => 'required|string|max:255',
            'witness_person' => 'required|string|max:255',
            'witness_person_name' => 'required|string|max:255',
            'witness_field2' => 'required|string|max:255',

            'drivers_license' => 'required|string',
            'signature_step1' => 'required|string',
            'signature_step2' => 'required|string',
            'signature_step3' => 'required|string',
            'signature_step4' => 'required|string',
            'signature_step5' => 'required|string',
            'signature_step6' => 'required|string',
            'signature_step7' => 'required|string',
            'signature_step8' => 'required|string',
            'signature_step9' => 'required|string',
            'signature_step10' => 'required|string',
            'signature_step11' => 'required|string',
            'signature_step12' => 'required|string',
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
