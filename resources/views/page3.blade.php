<div class="step active">
    <h3 class="contract-title text-start">EMPLOYEE COMPENSATION</h3>
    <div class="parties">
        <p class="mt-2">Compensation paid to the Employee for the services rendered by the Employee as required by this Agreement (the "Compensation") will consist of a salary of <span>$<input type="text" required class="input-field w-10" id="salary" name="salary" value="{{ old('salary') ?? ($data->salary ?? '') }}"></span> (CAD) per year plus a commission according to the following commission formula: </p>
    </div>


    <div class="commencement">
        <div class="">
            <p class="flex-row">plus a commission according to the following commission formula: <input class="input-field" name="gross_profit_commission" value="{{ old('gross_profit_commission') ?? ($data->gross_profit_commission ?? '') }}" type="text">  of the Gross profit</p>
            <ul>
                <li class="clause">Insurance benefits after 3 months of signing the contract.</li>
                <li class="clause"> Company provides Zoom info software, Cell Phone, and laptop </li>
                <li class="clause">deleting any data all leads belong to Hybrid X Inc Property. After the termination property is given back in 24 Hrs Last Payment is made after One month of pride. Misleading company property takes legal action against the employees.
                </li>
                </u>
                <div>
                    <ul class="uper">
                        <li class="clause">This Compensation will be payable twice per month while this Agreement is in force. The Employer is entitled to deduct from the Employee's Compensation, or from any other compensation in whatever form, any applicable deductions and remittances as required by law.</li>
                        <li class="clause">The Employee understands and agrees that any additional remuneration paid to the Employee in the form of bonuses or other similar incentive remuneration will rest in the sole discretion of the Employer and that the Employee will not earn or accrue any right to incentive remuneration by reason of the Employee's employment.</li>
                        <li class="clause">The Employer will reimburse the Employee for all reasonable expenses, in accordance with the Employer's lawful policies as in effect from time to time, including but not limited to, any travel and entertainment expenses incurred by the Employee in connection with the business of the Employer. Expenses will be paid within a reasonable time after submission of acceptable supporting documentation.
                            <div class="section-title">
                                PLACE OF WORK
                            </div>
                            The Employee's primary place of work will be at the following location: 50 Steeles Ave E unit 211 , Milton Ontario L9T 4W9, Canada
                        </li>
                        <li class="clause">
                            <div class="section-title">TIME OF WORK</div>
                        </li>
                        <li class="clause mb-2">The Employee's normal hours of work, including breaks, ("Normal Hours of Work") are as and remotely follows:<input class="input-field w-25" name="employee_hours" value="{{ old('employee_hours') ?? ($data->employee_hours ?? '') }}" type="text"></li>
                        <li class="clause">However, the Employee will, on receiving reasonable notice from the Employer, work additional hours and/or hours outside of the Employee's Normal Hours of Work as deemed necessary by the Employer to meet the business needs of the Employer.
                            <div class="section-title">
                                EMPLOYEE BENEFITS
                            </div>
                        </li>
                        <li class="clause">The Employee will be entitled to only those additional benefits that are currently available as described in the lawful provisions of the Employer's employment booklets, manuals, and policy documents or as required by law.</li>
                        <li class="clause">Employer discretionary benefits are subject to change, without compensation, upon the Employer providing the Employee with 60 days written notice of that change and providing that any change to those benefits is taken generally with respect to other employees and does not single out the Employee.</li>
                    </ul>
                </div>
        </div>


        <div class="d-flex" id="openModalBtn">
            <span>day of </span>
            <div class="signature-save" id="signature-save"></div>
        </div>

        <div class="signature-section">
            @if(isset($data->signature_step3))
            <img src="{{ $data->signature_step3 }}" style="width: 150px;">
             @else
            <canvas id="signaturePad3" class="signature-pad"></canvas>
            <div class="flex-row mt-3">
                <label for="signaturePad3">Signature</label>
                <a href="javascript:;" class="clearsignature" onclick="clearSignature(3)">Clear Signature</a>
                <input type="hidden" id="signature_step3" name="signature_step3" value="{{ old("signature_step3") }}">

                @error('signature_step3')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            @endif
        </div>

        <div class="form-footer">
            <button type="button" onclick="prevStep()">Previous</button>
            <button type="button" onclick="nextStep()">Next</button>
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
