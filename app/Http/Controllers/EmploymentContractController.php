<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmploymentContract;
use Illuminate\Support\Facades\Validator;
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

            // Directly casting to int
            $contractDay = (int)$validated['contract_day'];
            $contractMonth = (int)$validated['contract_month'];
            $commencementDay = (int)$validated['commencement_day'];
            $commencementMonth = (int)$validated['commencement_month'];
            $witnessDay = (int)$validated['widtness_day'];
            $witnessMonth = (int)$validated['widtness_month'];

            // Save to the database
            $contract = EmploymentContract::create([
                'contract_day' => $contractDay,
                'contract_month' => $contractMonth,
                'contract_year' => $validated['contract_year'],
                'employee_name' => $validated['employee_name'],
                'commencement_day' => $commencementDay,
                'commencement_month' => $commencementMonth,
                'commencement_year' => $validated['commencement_year'],
                'salary' => $validated['salary'],
                'gross_profit_commission' => $validated['gross_profit_commission'],
                'employee_hours' => $validated['employee_hours'],
                'vacations' => $validated['vacations'],
                'sales_revenue' => $validated['sales_revenue'],
                'employee_address' => $validated['employee_address'],
                'sin_number' => $validated['sin_number'],
                'widtness_day' => $witnessDay,
                'widtness_month' => $witnessMonth,
                'widtness_year' => $validated['widtness_year'],
                'fitness_field_one' => $validated['fitness_field_one'],
                'witness_name_1' => $validated['witness_name_1'],
                'witness_person' => $validated['witness_person'],
                'witness_person_name' => $validated['witness_person_name'],
                'witness_field2' => $validated['witness_field2'],
                'drivers_license' => $validated['drivers_license'],
                'signature_step1' => $validated['signature_step1'],
                'signature_step2' => $validated['signature_step2'],
                'signature_step3' => $validated['signature_step3'],
                'signature_step4' => $validated['signature_step4'],
                'signature_step5' => $validated['signature_step5'],
                'signature_step6' => $validated['signature_step6'],
                'signature_step7' => $validated['signature_step7'],
                'signature_step8' => $validated['signature_step8'],
                'signature_step9' => $validated['signature_step9'],
                'signature_step10' => $validated['signature_step10'],
                'signature_step11' => $validated['signature_step11'],
                'signature_step12' => $validated['signature_step12'],
            ]);

            // Save the validated data into the database
            // $contract = EmploymentContract::create($validated);
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
