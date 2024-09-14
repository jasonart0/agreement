<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>

    <title>Employment Contract Wizard Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
        }
        .wizard-step {
            display: none;
        }
        .wizard-step.active {
            display: block;
        }
        label {
            font-weight: bold;
        }
        input, textarea, select {
            display: block;
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        button[disabled] {
            background-color: #ccc;
            cursor: not-allowed;
        }
        .form-section {
            margin-bottom: 40px;
        }
        .contract-header {
            text-align: center;
            font-size: 18px;
            margin-bottom: 40px;
            font-weight: bold;
        }
        .form-footer {
            text-align: right;
        }
        .signature-section {
            border-top: 2px solid #000;
            margin-top: 30px;
            padding-top: 10px;
        }
        .signature-label {
            font-style: italic;
        }
        canvas {
            border: 1px solid #CCC;
        }
    </style>
</head>
<body>

<form id="employmentContractForm" method="POST" action="{{ route('contract.store') }}">

    @if ($errors->any())
        <div style="color: red;">
            <strong>Whoops! Something went wrong.</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div style="color: green; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif


    @csrf
    <!-- Step 1: Introduction and Parties -->
    <div class="wizard-step active" id="step1">
    @include('page1')
        <div class="contract-header">EMPLOYMENT CONTRACT</div>
        <div class="form-section">
            <p>This Employment Contract (the "Agreement") is entered into between:</p>
            <label for="employer_name">Employer Name</label>
            <input type="text" id="employer_name" name="employer_name" required value="{{ old("employer_name") }}">
            @error('employer_name')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <label for="employer_address">Employer Address</label>
            <input type="text" id="employer_address" name="employer_address" required value="{{ old("employer_address") }}">
            @error('employer_address')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <label for="employee_name">Employee Name</label>
            <input type="text" id="employee_name" name="employee_name" required value="{{ old("employee_name") }}">
            @error('employee_name')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="signature-section">
            <label for="signaturePad1">Signature</label>
            <canvas id="signaturePad1" class="signature-pad"></canvas>
            <button type="button" onclick="clearSignature(1)">Clear Signature</button>
            <input type="hidden" id="signature_step1" name="signature_step1" value="{{ old("signature_step1") }}">
            @error('signature_step1')
                <div style="color: red;">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-footer">
            <button type="button" onclick="nextStep()">Next</button>
        </div>
    </div>

    <!-- Step 2: Job Title and Description -->
    <div class="wizard-step" id="step2">
        <div class="contract-header">JOB TITLE AND DESCRIPTION</div>
        <div class="form-section">
            <label for="job_title">Job Title</label>
            <input type="text" id="job_title" name="job_title" required value="{{ old("job_title") }}">
            @error('job_title')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <label for="job_duties">Job Duties</label>
            <textarea id="job_duties" name="job_duties" required rows="6">{{ old("job_duties") }}</textarea>
            @error('job_duties')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="signature-section">
            <label for="signaturePad2">Signature</label>
            <canvas id="signaturePad2" class="signature-pad"></canvas>
            <button type="button" onclick="clearSignature(2)">Clear Signature</button>
            <input type="hidden" id="signature_step2" name="signature_step2" value="{{ old("signature_step2") }}">
            @error('signature_step2')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-footer">
            <button type="button" onclick="prevStep()">Previous</button>
            <button type="button" onclick="nextStep()">Next</button>
        </div>
    </div>

    <!-- Step 3: Employee Compensation -->
    <div class="wizard-step" id="step3">
        <div class="contract-header">EMPLOYEE COMPENSATION</div>
        <div class="form-section">
            <label for="salary">Salary</label>
            <input type="text" id="salary" name="salary" required value="{{ old("salary") }}">
            @error('salary')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <label for="commission">Commission (Percentage)</label>
            <input type="text" id="commission" name="commission" required value="{{ old("commission") }}">
            @error('commission')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="signature-section">
            <label for="signaturePad3">Signature</label>
            <canvas id="signaturePad3" class="signature-pad"></canvas>
            <button type="button" onclick="clearSignature(3)">Clear Signature</button>
            <input type="hidden" id="signature_step3" name="signature_step3" value="{{ old("signature_step3") }}">
            @error('signature_step3')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-footer">
            <button type="button" onclick="prevStep()">Previous</button>
            <button type="button" onclick="nextStep()">Next</button>
        </div>
    </div>

    <!-- Step 4: Benefits and Vacation -->
    <div class="wizard-step" id="step4">
        <div class="contract-header">BENEFITS AND VACATION</div>
        <div class="form-section">
            <label for="vacation_days">Number of Vacation Days</label>
            <input type="number" id="vacation_days" name="vacation_days" required value="{{ old("vacation_days") }}">
            @error('vacation_days')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <label for="benefits">Benefits</label>
            <textarea id="benefits" name="benefits" required rows="4">{{ old("benefits") }}</textarea>
            @error('benefits')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="signature-section">
            <label for="signaturePad4">Signature</label>
            <canvas id="signaturePad4" class="signature-pad"></canvas>
            <button type="button" onclick="clearSignature(4)">Clear Signature</button>
            <input type="hidden" id="signature_step4" name="signature_step4" value="{{ old("signature_step4") }}">
            @error('signature_step4')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-footer">
            <button type="button" onclick="prevStep()">Previous</button>
            <button type="button" onclick="nextStep()">Next</button>
        </div>
    </div>

    <!-- Step 5: Confidentiality and Final Submission -->
    <div class="wizard-step" id="step5">
        <div class="contract-header">CONFIDENTIALITY</div>
        <div class="form-section">
            <label for="confidentiality_agree">Agree to Confidentiality Clause</label>
            <!-- Hidden input with default value (unchecked value) -->
            <input type="hidden" name="confidentiality_agree" value="0">
            <input type="checkbox" id="confidentiality_agree" name="confidentiality_agree" value="1" {{ old('confidentiality_agree') ? 'checked' : '' }}>
            @error('confidentiality_agree')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="signature-section">
            <label for="signaturePad5">Signature</label>
            <canvas id="signaturePad5" class="signature-pad"></canvas>
            <button type="button" onclick="clearSignature(5)">Clear Signature</button>
            <input type="hidden" id="signature_step5" name="signature_step5" value="{{ old("signature_step5") }}">
            @error('signature_step5')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-footer">
            <button type="button" onclick="prevStep()">Previous</button>
            <button type="submit">Submit</button>
        </div>
    </div>
</form>


<script>
    let currentStep = 1;
    let signaturePads = [];

    // Initialize signature pads for each step where a signature is required
    function initializeSignaturePad(step) {
        const canvas = document.getElementById(`signaturePad${step}`);
        const signaturePad = new SignaturePad(canvas);
        signaturePads[step - 1] = signaturePad;
    }

    // Call the function to initialize signature pads on the respective steps
    initializeSignaturePad(1);
    initializeSignaturePad(2);
    initializeSignaturePad(3);
    initializeSignaturePad(4);
    initializeSignaturePad(5);
    // Add more signature pads for other steps as needed

    // Function to show the current step and hide others
    function showStep(step) {
        document.querySelectorAll('.wizard-step').forEach((el) => {
            el.classList.remove('active');
        });
        document.getElementById('step' + step).classList.add('active');
    }

    // Function to move to the next step, checking validation
    function nextStep() {
        let isValid = validateCurrentStep();

        if (isValid) {
            currentStep++;
            showStep(currentStep);
        }
    }

    // Function to move to the previous step
    function prevStep() {
        currentStep--;
        showStep(currentStep);
    }

    // Validate the current step's fields and signature
    function validateCurrentStep() {
        const form = document.getElementById('employmentContractForm');
        const currentStepElement = document.getElementById(`step${currentStep}`);

        // Check all required inputs on the current step
        let requiredFields = currentStepElement.querySelectorAll('input[required], textarea[required], select[required]');
        for (let i = 0; i < requiredFields.length; i++) {
            if (!requiredFields[i].value) {
                requiredFields[i].focus();
                alert("Please fill out all required fields.");
                return false;
            }
        }

        // Check if the signature is provided (using Signature Pad)
        if (signaturePads[currentStep - 1] && signaturePads[currentStep - 1].isEmpty()) {
            alert("Please provide your signature.");
            return false;
        }

        return true;
    }

    // Clear signature for a particular step
    function clearSignature(step) {
        signaturePads[step - 1].clear();
    }

    // Capture the signature image (in base64 format) and store it in the hidden input before form submission
    document.getElementById('employmentContractForm').addEventListener('submit', function(event) {
        signaturePads.forEach((pad, index) => {
            if (!pad.isEmpty()) {
                var signatureval = document.getElementById(`signature_step${index + 1}`).value = pad.toDataURL(); // Convert to base64
                console.log(signatureval);
            } else {
                alert(`Please sign in step ${index + 1}`);
                event.preventDefault(); // Prevent form submission
            }
        });
    });
</script>


</body>
</html>
