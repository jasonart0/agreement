<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>


    <title>Employment Contract Wizard Form</title>
    <style>
        .wizard-step {
            display: none;
        }
        .wizard-step.active {
            display: block;
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
        .uper li{
            list-style-type: lower-alpha;
            margin-top: 10px
        }
        ol li{
            margin-top: 10px;
            font-size: 14px;
        }
    </style>

    <style>
        @page {
            size: A4;
            margin: 10mm;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.4;
            -webkit-print-color-adjust: exact;
        }

        .container {
            width: 100%;
            max-width: 190mm;
            /* Reduced width to fit on A4 */
            margin: 0 auto;
            padding: 10mm;
            /* Reduced padding */
            box-sizing: border-box;
        }

        .contract-title {
            text-align: center;
            font-size: 18px;
            /* Smaller font size */
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .section-title {
            font-weight: bold;
            margin: 10px 0 5px;
            /* Reduced margin */
            text-transform: uppercase;
            font-size: 14px;
            /* Smaller font size */
        }

        .clause {
            margin-left: 10px;
            /* Reduced margin */
            font-size: 14px;
            /* Smaller font size */
        }

        .parties {
            margin-bottom: 10px;
        }

        .input-field {
            width: 100%;
            padding: 3px;
            /* Reduced padding */
            margin-left: 3px;
            /* Reduced margin */
            border: none;
            max-height: 61px;
            border-bottom: 1px solid;
            font-size: 12px;
            /* Smaller font size */
        }

        .flex-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 5px;
            /* Reduced margin */
        }

        .flex-row input {
            flex: 1;
            margin-left: 3px;
            /* Reduced margin */
            margin-right: 3px;
            /* Reduced margin */
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
            /* Reduced margin */
        }

        .btn {
            font-size: 12px;
            /* Smaller font size */
            padding: 5px 10px;
            /* Reduced padding */
        }

        /* Style for the modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Print styles */
        @media print {
            .btn {
                display: none;
                /* Hide buttons when printing */
            }

            .container {
                width: 100%;
                padding: 0;
                /* Remove padding for print */
            }
        }
    </style>

</head>
<body>
    <div class="container mt-5">

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

        <form id="employmentContractForm" method="POST" onsubmit="event.preventDefault();" action="{{ route('contract.store') }}">

            @csrf
            <!-- Step 1: Introduction and Parties -->
            <div class="wizard-step active" id="step1">
                @include('page1')

                {{-- <div class="contract-header">EMPLOYMENT CONTRACT</div>
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

                </div> --}}

                {{-- <div class="form-footer">
                    <button type="button" onclick="nextStep()">Next</button>
                </div> --}}
            </div>

            <!-- Step 2: Job Title and Description -->
            <div class="wizard-step" id="step2">
                @include("page2")
                {{-- <div class="contract-header">JOB TITLE AND DESCRIPTION</div>
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
                </div> --}}


            </div>

            <!-- Step 3: Employee Compensation -->
            <div class="wizard-step" id="step3">
                @include("page3")

                {{-- <div class="contract-header">EMPLOYEE COMPENSATION</div>
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
                </div> --}}



                <div class="form-footer">
                    <button type="button" onclick="prevStep()">Previous</button>
                    <button type="button" onclick="nextStep()">Next</button>
                </div>
            </div>

            <!-- Step 4: Benefits and Vacation -->
            <div class="wizard-step " id="step4">
                @include("page4")
                {{-- <div class="contract-header">BENEFITS AND VACATION</div>
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
                </div> --}}

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
                @include("page5")
                {{-- <div class="contract-header">CONFIDENTIALITY</div>
                <div class="form-section">
                    <label for="confidentiality_agree">Agree to Confidentiality Clause</label>
                    <!-- Hidden input with default value (unchecked value) -->
                    <input type="hidden" name="confidentiality_agree" value="0">
                    <input type="checkbox" id="confidentiality_agree" name="confidentiality_agree" value="1" {{ old('confidentiality_agree') ? 'checked' : '' }}>
                    @error('confidentiality_agree')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div> --}}

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
                    <button type="button" onclick="nextStep()">Next</button>
                </div>
            </div>

            <!-- Step 6: Benefits and Vacation -->
            <div class="wizard-step" id="step6">
                @include("page6")
                {{-- <div class="contract-header">BENEFITS AND VACATION</div>
                <div class="form-section">
                </div> --}}
                <div class="signature-section">
                    <label for="signaturePad6">Signature</label>
                    <canvas id="signaturePad6" class="signature-pad"></canvas>
                    <button type="button" onclick="clearSignature(6)">Clear Signature</button>
                    <input type="hidden" id="signature_step5" name="signature_step5" value="{{ old("signature_step5") }}">
                    @error('signature_step5')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-footer">
                    <button type="button" onclick="prevStep()">Previous</button>
                    <button type="button" onclick="nextStep()">Next</button>
                </div>
            </div>

            <!-- Step 7: Benefits and Vacation -->
            <div class="wizard-step" id="step7">
                @include("page7")
                {{-- <div class="contract-header">BENEFITS AND VACATION</div>
                <div class="form-section">
                </div> --}}
                <div class="signature-section">
                    <label for="signaturePad7">Signature</label>
                    <canvas id="signaturePad7" class="signature-pad"></canvas>
                    <button type="button" onclick="clearSignature(7)">Clear Signature</button>
                    <input type="hidden" id="signature_step5" name="signature_step5" value="{{ old("signature_step5") }}">
                    @error('signature_step5')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-footer">
                    <button type="button" onclick="prevStep()">Previous</button>
                    <button type="button" onclick="nextStep()">Next</button>
                </div>
            </div>
            <!-- Step 8: Benefits and Vacation -->
            <div class="wizard-step" id="step8">
                @include("page8")
                {{-- <div class="contract-header">BENEFITS AND VACATION</div>
                <div class="form-section">
                </div> --}}
                <div class="signature-section">
                    <label for="signaturePad8">Signature</label>
                    <canvas id="signaturePad8" class="signature-pad"></canvas>
                    <button type="button" onclick="clearSignature(8)">Clear Signature</button>
                    <input type="hidden" id="signature_step5" name="signature_step5" value="{{ old("signature_step5") }}">
                    @error('signature_step5')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-footer">
                    <button type="button" onclick="prevStep()">Previous</button>
                    <button type="button" onclick="nextStep()">Next</button>
                </div>
            </div>
            <!-- Step 9: Benefits and Vacation -->
            <div class="wizard-step" id="step9">
                @include("page9")
                {{-- <div class="contract-header">BENEFITS AND VACATION</div>
                <div class="form-section">
                </div> --}}
                <div class="signature-section">
                    <label for="signaturePad9">Signature</label>
                    <canvas id="signaturePad9" class="signature-pad"></canvas>
                    <button type="button" onclick="clearSignature(9)">Clear Signature</button>
                    <input type="hidden" id="signature_step5" name="signature_step5" value="{{ old("signature_step5") }}">
                    @error('signature_step5')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-footer">
                    <button type="button" onclick="prevStep()">Previous</button>
                    <button type="button" onclick="nextStep()">Next</button>
                </div>
            </div>

            <!-- Step 10: Benefits and Vacation -->
            <div class="wizard-step" id="step10">
                @include("page10")
                {{-- <div class="contract-header">BENEFITS AND VACATION</div>
                <div class="form-section">
                </div> --}}
                <div class="signature-section">
                    <label for="signaturePad10">Signature</label>
                    <canvas id="signaturePad10" class="signature-pad"></canvas>
                    <button type="button" onclick="clearSignature(10)">Clear Signature</button>
                    <input type="hidden" id="signature_step5" name="signature_step5" value="{{ old("signature_step5") }}">
                    @error('signature_step5')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-footer">
                    <button type="button" onclick="prevStep()">Previous</button>
                    <button type="button" onclick="nextStep()">Next</button>
                </div>
            </div>

            <!-- Step 11: Benefits and Vacation -->
            <div class="wizard-step" id="step11">
                @include("page11")
                {{-- <div class="contract-header">BENEFITS AND VACATION</div>
                <div class="form-section">
                </div> --}}
                <div class="signature-section">
                    <label for="signaturePad11">Signature</label>
                    <canvas id="signaturePad11" class="signature-pad"></canvas>
                    <button type="button" onclick="clearSignature(11)">Clear Signature</button>
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

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
          const canvas = document.getElementById('canvas');
          const ctx = canvas.getContext('2d');
          const signatureSave = document.getElementById('signature-save');
          const submitBtn = document.getElementById('submitBtn');
          const clearBtn = document.getElementById('clearBtn');

          let drawing = false;

          // Start drawing
          canvas.addEventListener('mousedown', () => {
              drawing = true;
          });

          // Draw on the canvas
          canvas.addEventListener('mousemove', (event) => {
              if (drawing) {
                  const rect = canvas.getBoundingClientRect();
                  const x = event.clientX - rect.left;
                  const y = event.clientY - rect.top;
                  ctx.lineTo(x, y);
                  ctx.stroke();
              }
          });

          // Stop drawing
          canvas.addEventListener('mouseup', () => {
              drawing = false;
              ctx.beginPath();
          });

          // Handle Submit button
          submitBtn.addEventListener('click', () => {
              const dataURL = canvas.toDataURL('image/svg+xml');
              signatureSave.innerHTML = `<img src="${dataURL}" alt="Signature"/>`;
          });

          // Handle Clear button
          clearBtn.addEventListener('click', () => {
              ctx.clearRect(0, 0, canvas.width, canvas.height);
              signatureSave.innerHTML = '';
          });
      });

    </script>
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
        initializeSignaturePad(6);
        initializeSignaturePad(7);
        initializeSignaturePad(8);
        initializeSignaturePad(9);
        initializeSignaturePad(10);
        initializeSignaturePad(11);
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
