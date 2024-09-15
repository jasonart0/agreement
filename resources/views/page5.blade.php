

<div class="step active">
    <h3 class="contract-title">CONFIDENTIAL INFORMATION</h3>
<ol>
    <li class="clause">The Employee acknowledges that, in any position the Employee may hold, in and as a result of
        the Employee's employment by the Employer, the Employee will, or may, be making use of,
        acquiring or adding to information which is confidential to the Employer (the "Confidential
        Information") and the Confidential Information is the exclusive property of the Employer.</li>
    <li class="clause">The Confidential Information will include all data and information relating to the business and
        management of the Employer, including but not limited to, proprietary and trade secret
        technology and accounting records to which access is obtained by the Employee, including
        Work Product, Computer Software, Other Proprietary Data, Business Operations, Marketing and
        Development Operations, and Customer Information.</li>
    <li class="clause">The Confidential Information will also include any information that has been disclosed by a third
        party to the Employer and is governed by a non-disclosure agreement entered into between that
        third party and the Employer</li>
    <li class="clause">The Confidential Information will not include information that:
        <ol class="uper">
            <li class="clause">Is generally known in the industry of the Employer;</li>
            <li class="clause">Is now or subsequently becomes generally available to the public through no wrongful act of
                the Employee;</li>
            <li class="clause">Was rightfully in the possession of the Employee prior to the disclosure to the Employee by
                the Employer;</li>
            <li class="clause">Is independently created by the Employee without direct or indirect use of the Confidential
                    Information; or</li>
            <li class="clause">The Employee rightfully obtains from a third party who has the right to transfer or disclose it.
            </li>
        </ol>
    </li>
    <li class="clause">The Confidential Information will also not include anything developed or produced by the
        Employee during the Employee's term of employment with the Employer, including but not
        limited to, any intellectual property, process, design, development, creation, research, invention,
        know-how, trade name, trade-mark or copyright that:
    <ol class="uper">
        <li class="clause">Was developed without the use of equipment, supplies, facility or Confidential Information of
            the Employer;</li>
        <li class="clause">Was developed entirely on the Employee's own time;</li>
        <li class="clause">. Does not result from any work performed by the Employee for the Employer; and</li>
        <li class="clause">Does not relate to any actual or reasonably anticipated business opportunity of the
            Employer</li>
    </ol>
    </li>
</ol>
    {{-- <div class="parties">
        <p class="text-center mt-2">THIS EMPLOYMENT CONTRACT (the "Agreement") dated this </p>
        <div class="flex-row">
            <label for="contractDay">Day</label>
            <input type="text" required class="input-field" id="contractDay" />
            <span>day of </span>
            <label for="contract_month">Month</label>
            <input type="text" required class="input-field" id="contract_month" name="contract_month"
                value="{{ old('contract_month') }}" />,
            <label for="contract_year">Year</label>
            <input type="text" required class="input-field" id="contract_year" name="contract_year"
                value="{{ old('contract_year') }}" />.
        </div>
        <p>BETWEEN:</p>
        <p><strong>HybridX Inc.<br /></strong> of 50 Steeles Ave E unit 211, Milton Ontario L9T 4W9, Canada (the
            "Employer")</p>
        <p>OF THE FIRST PART</p>
        <h5 class="text-center">- AND -</h5>
        <label for="employee_name">Employee Name</label>
        <input type="text" required class="input-field w-100" id="employee_name" name="employee_name"
            value="{{ old('employee_name') }}" />
        <p class="text-center mt-2">(the "Employee")</p>
        <p>OF THE SECOND PART</p>
    </div> --}}

    {{-- <div class="background">
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
    </div> --}}

    {{-- <div class="commencement">
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
        </div>
        <p class="clause">
            <strong>2.</strong> The Employee must successfully complete a probationary period of Eight weeks (the
            'Probationary Period') beginning on the Commencement Date. At any time during the Probationary Period, as
            and where permitted by law, the Employer will have the right to terminate employment without any notice or
            compensation to the Employee other than wages owed for hours of work already completed.
        </p>
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
    </div> --}}
    <div class="form-footer">
        <div class="form-footer">
            <button type="button" onclick="prevStep()">Previous</button>
            <button type="button" onclick="nextStep()">Next</button>
        </div>
    </div>
    {{-- <button type="button" class="" onclick="nextStep()">Next</button> --}}
</div>
