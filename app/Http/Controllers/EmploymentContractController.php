<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmploymentContract;
use DB;

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


         // Use try-catch block to handle the database operation
        try {
            // Start transaction
            DB::beginTransaction();

            // Save the validated data into the database
            $contract = EmploymentContract::create($validated);
            $contract_id = base64_encode($contract->id);


            // Commit transaction
            DB::commit();

            // Redirect to another route on success with a success message
            // Return a view and pass the created record to it
            return redirect()->route('success-form', ['id' => $contract_id])
                         ->with('success', 'Contract submitted successfully!');
                            ;
        } catch (\Exception $e) {
            // Rollback transaction in case of error
            DB::rollBack();

            // Redirect back to the form with an error message
            // Redirect to a success page (you can create this view)

            return redirect()->route('contract.form')->with('error', 'Failed to submit the contract. Please try again.');
        }

    }



    // Show the dashboard with all contracts
    public function showDashboard(Request $request)
    {
        if(!empty($request->get('search'))) {
            $search = $request->get('search');

            $contracts = EmploymentContract::when($search, function($query, $search) {
                return $query->where('employee_name', 'like', "%{$search}%")
                            ->orWhere('employee_address', 'like', "%{$search}%");
            })
            ->orderBy('id', 'desc') // Order by ID in descending order
            ->paginate(10); // Adjust pagination count as needed
        } else {

            // Fetch all records from the employment_contracts table
            $contracts = EmploymentContract::orderBy("id", 'desc')->paginate(10);
            // dd($contracts);
        }
        // Pass the contracts data to the dashboard view
        return view('dashboard', compact('contracts'));
    }
}
