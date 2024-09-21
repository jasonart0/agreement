<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ asset('assets/css/app.css'), '/') }}') }}" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>


    <title><?php echo isset($data) ? $data->employee_name . ' - Contract Agreement' : 'Employment Contract Wizard Form'; ?> </title>
    <style>
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
            /* border-top: 2px solid #000; */
            margin-top: 30px;
            padding-top: 10px;
            width: 300px;
            margin-bottom: 20px;
            margin-left: auto;
            text-align: right;
        }
        .clearsignature {
            color: #000;
            text-decoration: none;
            padding: 5px;
            border: 1px solid #ccc;
        }
        .signature-label {
            font-style: italic;
        }
        canvas {
            border: 1px solid #CCC;
        }
        .uper{

            margin-top: 8px
        }
        .uper li{

            margin-top: 0px
        }
        ul li{
            margin-top: 16px;
            font-size: 14px;
            color: #000;
        }
        .contract-title-1{
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            color:#000;
        }
        .signature-container, #openModalBtn {
            display:none !important;
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
            max-width: 180mm;
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
            color:#000;
        }
        .wizard-step p{
              font-size: 14px;
              color: #000;

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
        .w-80 {
            width: 80%;
        }
        .w-90 {
            width: 90%;
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

        @if (isset($data))


        .signature-section .flex-row, .form-footer {
            display: none;
        }

        @else
        .wizard-step {
            display: none;
        }
        @endif

        /* Print styles */
        @media print {
            .signature-section canvas { width: 150px; }
            .signature-section {
                margin-top: 0;
                margin-bottom: 0;
            }
            .wizard-step {
                display: block;
            }
            /* Force a page break after the element */
            .wizard-step {
                page-break-after: always;
            }
            .printbtn, .btn {
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
     <!-- <style>
        /* Combined Stylesheet */

        /* Wizard step and active state */
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
            margin-top: 30px;
            padding-top: 10px;
            width: 300px;
            margin-bottom: 20px;
            margin-left: auto;
            text-align: right;
        }

        .clearsignature {
            color: #000;
            text-decoration: none;
            padding: 5px;
            border: 1px solid #ccc;
        }

        .signature-label {
            font-style: italic;
        }

        canvas {
            border: 1px solid #CCC;
        }

        .uper {
            margin-top: 8px;
        }

        .uper li {
            margin-top: 0px;
        }

        ul li {
            margin-top: 16px;
            font-size: 14px;
            color: #000;
        }

        .contract-title-1 {
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            color: #000;
        }

        .signature-container,
        #openModalBtn {
            display: none !important;
        }

        /* Page settings */
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
            max-width: 180mm;
            margin: 0 auto;
            padding: 10mm;
            box-sizing: border-box;
        }

        .contract-title {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .section-title {
            font-weight: bold;
            margin: 10px 0 5px;
            text-transform: uppercase;
            font-size: 14px;
        }

        .clause {
            margin-left: 10px;
            font-size: 14px;
            color: #000;
        }

        .wizard-step p {
            font-size: 14px;
            color: #000;
        }

        .parties {
            margin-bottom: 10px;
        }

        .input-field {
            width: 100%;
            padding: 3px;
            margin-left: 3px;
            border: none;
            max-height: 61px;
            border-bottom: 1px solid;
            font-size: 12px;
        }

        .flex-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 5px;
        }

        .flex-row input {
            flex: 1;
            margin-left: 3px;
            margin-right: 3px;
        }

        .w-80 {
            width: 80%;
        }

        .w-90 {
            width: 90%;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            font-size: 12px;
            padding: 5px 10px;
        }

        /* Modal styles */
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

        /* Conditional Styles based on $data */
        @if (isset($data))
            .signature-section .flex-row,
            .form-footer {
                display: none;
            }
        @else
            .wizard-step {
                display: none;
            }
        @endif

        /* Print styles */
        @media print {
            .signature-section canvas {
                width: 150px;
            }

            .wizard-step {
                display: block;
            }

            .wizard-step {
                page-break-after: always;
            }

            .printbtn,
            .btn {
                display: none;
            }

            .container {
                width: 100%;
                padding: 0;
            }
        }
    </style> -->



</head>

<body>

    <div class="container mt-5">

        <?php //var_dump($data);
        ?>

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

        @if (isset($data))

        <!-- Hidden button to trigger the modal -->
            <button id="hiddenButton" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#successModal" style="display: none;">
                Launch modal
            </button>

            <!-- Bootstrap Modal -->
            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content1 alert alert-success">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Success</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Contract submitted successfully!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-row">
                <a href="#" class="btn btn-primary printbtn" rel="nofollow"
                    onclick="window.print(); return false;">
                    <span class="printfriendly-text2 printandpdf">
                        <img style="border:none;margin-right:6px;" src="http://cdn.printfriendly.com/pf-print-icon.gif"
                            width="16" height="15" alt="">Print </span>
                </a>
            </div>
        @endif

        <form id="employmentContractForm" method="POST" action="">

            @csrf
            <!-- Step 1: Introduction and Parties -->
            <div class="wizard-step active1" id="step1">
                @include('page1')
            </div>

            <!-- Step 2: Job Title and Description -->
            <div class="wizard-step" id="step2">
                @include('page2')
            </div>

            <!-- Step 3: Employee Compensation -->
            <div class="wizard-step" id="step3">
                @include('page3')
            </div>

            <!-- Step 4: Benefits and Vacation -->
            <div class="wizard-step" id="step4">
                @include('page4')
            </div>

            <!-- Step 5: Confidentiality and Final Submission -->
            <div class="wizard-step" id="step5">
                @include('page5')
            </div>

            <!-- Step 6: Benefits and Vacation -->
            <div class="wizard-step" id="step6">
                @include('page6')
            </div>

            <!-- Step 7: Benefits and Vacation -->
            <div class="wizard-step" id="step7">
                @include('page7')
            </div>
            <!-- Step 8: Benefits and Vacation -->
            <div class="wizard-step" id="step8">
                @include('page8')
            </div>
            <!-- Step 9: Benefits and Vacation -->
            <div class="wizard-step" id="step9">
                @include('page9')
            </div>

            <!-- Step 10: Benefits and Vacation -->
            <div class="wizard-step" id="step10">
                @include('page10')
            </div>

            <!-- Step 11: Benefits and Vacation -->
            <div class="wizard-step" id="step11">
                @include('page11')
            </div>

            <!-- Step 12: Benefits and Vacation -->
            <div class="wizard-step active" id="step12">
                @include('page12')
            </div>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <!-- JavaScript to trigger the hidden button click -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simulate a click on the hidden button after the page has loaded
            document.getElementById('hiddenButton').click();

        });

        // Add event listener to remove backdrop on modal hide
        var myModal = document.getElementById('successModal');
        myModal.addEventListener('show.bs.modal', function () {
            // Ensure the backdrop is removed after a delay
            setTimeout(function() {
                var backdrop = document.querySelector('.modal-backdrop');
                if (backdrop) {
                    backdrop.remove();
                }
            }, 1000);

        });
    </script>

</body>

</html>
