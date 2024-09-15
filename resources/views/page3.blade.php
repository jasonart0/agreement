

<div class="step active">
    <h3 class="contract-title">EMPLOYEE COMPENSATION</h3>
    <div class="parties">
        <p class="text-center mt-2">Compensation paid to the Employee for the services rendered by the Employee as required by this Agreement (the "Compensation") will consist of a salary of $<input type="text" required class="input-field" id="salary" name="salay" value="{{ old("salary") }}" /> (CAD) per year plus a commission according to the following commission formula: </p>


    </div>

    <div class="background">
        <div class="section-title">Background:</div>
        <p class="clause">
            <strong>A.</strong> The Employer is of the opinion that the Employee has the necessary qualifications,
            experience, and abilities to assist and benefit the Employer in its business.
        </p>
        <p class="clause">
            <strong>B.</strong> The Employer desires to employ the Employee and the Employee has agreed to accept and
            enter such employment upon the terms and conditions set out in this Agreement.
        </p>
        <p>
            <strong>IN CONSIDERATION OF</strong> the matters described above and of the mutual benefits and obligations
            set forth in this Agreement, the receipt and sufficiency of which consideration is hereby acknowledged, the
            parties to this Agreement agree as follows:
        </p>
    </div>

    <div class="commencement">
        <div class="section-title">Commencement Date and Term</div>
        <div class="">
            <p class="clause">
                <strong>1.</strong> The Employee will commence permanent full-time employment with the Employer on the
            </p><br />
            <div class="flex-row">
                <label for="commencement_day">Day</label>
                <input type="text" required class="input-field" id="commencement_day" name="commencement_day"
                    value="{{ old('commencement_day') }}" />
                <span>day of </span>
                <label for="commencement_month">Month</label>
                <input type="text" required class="input-field" id="commencement_month" name="commencement_month"
                    value="{{ old('commencement_month') }}" />,
                <label for="commencement_year">Year</label>
                <input type="text" required class="input-field" id="commencement_year" name="commencement_year"
                    value="{{ old('commencement_year') }}" />
            </div>
            <p class="text-center mt-2">(the "Commencement Date").</p>

            plus a commission according to the following commission formula: <input class="input-field" type="text"> of the Gross profit
            <ol>
                <li class="clause">Insurance benefits after 3 months of signing the contract.</li>
                <li class="clause"> Company provides Zoom info software, Cell Phone, and laptop </li>
                <li class="clause">deleting any data all leads belong to Hybrid X Inc Property. After the termination property is given back in 24 Hrs Last Payment is made after One month of pride. Misleading company property takes legal action against the employees.
                </li>
            </ol>
            <div>
            <ol class="p-0">
                <li class="clause">This Compensation will be payable twice per month while this Agreement is in force. The
                    Employer is entitled to deduct from the Employee's Compensation, or from any other
                    compensation in whatever form, any applicable deductions and remittances as required by law.</li>
                <li class="clause">The Employee understands and agrees that any additional remuneration paid to the Employee
                    in the form of bonuses or other similar incentive remuneration will rest in the sole discretion of
                    the Employer and that the Employee will not earn or accrue any right to incentive remuneration
                    by reason of the Employee's employment.</li>
                <li class="clause">The Employer will reimburse the Employee for all reasonable expenses, in accordance with the
                    Employer's lawful policies as in effect from time to time, including but not limited to, any travel
                    and entertainment expenses incurred by the Employee in connection with the business of the
                    Employer. Expenses will be paid within a reasonable time after submission of acceptable
                    supporting documentation.
                    <div class="section-title">
                        PLACE OF WORK
                    </div>
                    The Employee's primary place of work will be at the following
                    location: 50 Steeles Ave E unit 211 , Milton Ontario L9T 4W9,
                    Canada</li>
                <li class="clause"><div class="section-title">TIME OF WORK</div></li>
                <li class="clause">The Employee's normal hours of work, including breaks, ("Normal Hours of Work") are as
                    and
                <input class="input-field" type="text"></li>
                <li class="clause">However, the Employee will, on receiving reasonable notice from the Employer, work additional
                    hours and/or hours outside of the Employee's Normal Hours of Work as deemed necessary by
                    the Employer to meet the business needs of the Employer.
                    <div class="section-title">
                        EMPLOYEE BENEFITS
                    </div>
                </li>
                <li class="clause">The Employee will be entitled to only those additional benefits that are currently available as
                    described in the lawful provisions of the Employer's employment booklets, manuals, and policy</li>
                <li class="clause">Employer discretionary benefits are subject to change, without compensation, upon the
                    Employer providing the Employee with 60 days written notice of that change and providing that
                    any change to those benefits is taken generally with respect to other employees and does not single out the Employee.</li>
            </ol>
        </div>
        </div>
        <p class="clause">
            <strong>2.</strong> The Employee must successfully complete a probationary period of Eight weeks (the
            'Probationary Period') beginning on the Commencement Date. At any time during the Probationary Period, as
            and where permitted by law, the Employer will have the right to terminate employment without any notice or
            compensation to the Employee other than wages owed for hours of work already completed.
        </p>

        <div class="signature-section">
            <label for="signaturePad3">Signature</label>
            <canvas id="signaturePad3" class="signature-pad"></canvas>
            <button type="button" onclick="clearSignature(3)">Clear Signature</button>
            <input type="hidden" id="signature_step3" name="signature_step3" value="{{ old("signature_step3") }}">
            @error('signature_step3')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <!-- Trigger Button -->

        <div class="d-flex" id="openModalBtn">
            <span>day of </span>
            <div class="signature-save" id="signature-save"></div>
        </div>

        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="d-flex">
                    <button type="button" class="btn w-100" id="submitBtn">Submit</button>
                    <button type="button" class="btn w-100" id="clearBtn">Clear</button>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="form-footer">
        <div class="form-footer">
            <button type="button" onclick="prevStep()">Previous</button>
            <button type="button" onclick="nextStep()">Next</button>
        </div>
    </div> --}}
    {{-- <button type="button" class="" onclick="nextStep()">Next</button> --}}
</div>
