

<div class="step active">
    <h3 class="contract-title">Employment Contract</h3>
    <div class="parties">
        <div class="d-flex align-items-center gap-2 mb-3">
        <p class="mt-2 mb-0"><strong>THIS EMPLOYMENT CONTRACT</strong> (the "Agreement") dated this </p>
        <div class="d-flex align-items-center w-25">
            <?php $contract_day = old("contract_day");
            if(isset($data->contract_day)) {
                $contract_day = $data->contract_day;
            } ?>
            <input type="number" max="31" min="1" required class="input-field" id="contract_day" name="contract_day" value="{{ $contract_day }}"  placeholder="Day" />

        <span class="w-100"> day of </span>
        </div>
        </div>
        <div class="flex-row w-50">
            <?php $contract_month = old("contract_month");
            if(isset($data->contract_day)) {
                $contract_month = $data->contract_month;
            } ?>
            <!-- <label for="contract_month">Month</label> -->
            <input type="number" max="12" min="1" required class="input-field" id="contract_month" name="contract_month"
            value="{{ $contract_month }}"  placeholder="Month"/>,

            <?php $contract_year = old("contract_year");
            if(isset($data->contract_day)) {
                $contract_year = $data->contract_year;
            } ?>
            <!-- <label for="contract_year">Year</label> -->
            <input type="number" min="1900" max="2100" required class="input-field" id="contract_year" name="contract_year"
                value="{{ $contract_year }}" placeholder="Year"/>.

        </div>


        <p class="mt-3"><strong>BETWEEN:</strong></p>
        <p class="text-center">HybridX Inc. of 50 Steeles Ave E unit 211, Milton Ontario L9T 4W9, <br>Canada (the
            "Employer")</p>
        <p class="text-end">OF THE FIRST PART</p>
        <h5 class="text-center"><strong>- AND -</strong></h5>
        <?php $employee_name = old("employee_name");
        if(isset($data->employee_name)) {
            $employee_name = $data->employee_name;
        } ?>
        <input type="text" required class="input-field w-100" id="employee_name" name="employee_name"
            value="{{ $employee_name }}" />
        <p class="text-center mt-2">(the "Employee")</p>
        <p class="text-end">OF THE SECOND PART</p>
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
            </p>
            <div class="flex-row">
                <?php $commencement_day = old("commencement_day");
                if(isset($data->commencement_day)) {
                    $commencement_day = $data->commencement_day;
                } ?>
                <input type="number" max="31" min="1" required class="input-field" id="commencement_day" name="commencement_day"
                    value="{{ $commencement_day }}"  placeholder="Day"/>
                <span>day of </span>
                <?php $commencement_month = old("commencement_month");
                if(isset($data->commencement_month)) {
                    $commencement_month = $data->commencement_month;
                } ?>
                <input type="number" max="12" min="1" required class="input-field" id="commencement_month" name="commencement_month"
                    value="{{ $commencement_month }}"  placeholder="Month"/>,
                <?php $commencement_year = old("commencement_year");
                if(isset($data->commencement_year)) {
                    $commencement_year = $data->commencement_year;
                } ?>
                <input type="number" min="1900" max="2100" required class="input-field" id="commencement_year" name="commencement_year"
                    value="{{ $commencement_year }}"  placeholder="Year"/>
                    <p class="text-center mt-2">(the "Commencement Date").</p>
            </div>
        </div>
        <p class="clause mt-3">
            <strong>2.</strong> The Employee must successfully complete a probationary period of 16 weeks (the
            'Probationary Period') beginning on the Commencement Date. At any time during the Probationary Period, as
            and where permitted by law, the Employer will have the right to terminate employment without any notice or
            compensation to the Employee other than wages owed for hours of work already completed.
        </p>
        <!-- Trigger Button -->

        <div class="signature-section">
            @if(isset($data->signature_step1))
            <img src="{{ $data->signature_step1 }}" style="width: 150px;">
             @else
            <canvas id="signaturePad1" class="signature-pad"></canvas>
            <div class="flex-row mt-3">
                <label for="signaturePad1">Signature</label>
                <a href="javascript:;" class="clearsignature" onclick="clearSignature(1)">Clear Signature</a>
                <input type="hidden" id="signature_step1" name="signature_step1" value="{{ old("signature_step1") }}">

                @error('signature_step1')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            @endif

        </div>
        <!-- Trigger button -->

        <!-- Signature Block 1 -->
        <div class="signature-container">
            <div class="d-flex openModalBtn">
                <span>Signature 1</span>
            </div>
            <div class="modal signatureModal" style="display:none;">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <canvas class="signatureCanvas" width="500" height="200" style="border:1px solid black;"></canvas>
                    <div class="signatureSave"></div>
                    <div class="d-flex">
                        <button type="button" class="btn w-100 submitSignature">Submit</button>
                        <button type="button" class="btn w-100 clearSignature">Clear</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="form-footer">
        <div class="form-footer">
            <button type="button" onclick="nextStep()">Next</button>
        </div>
    </div>
    {{-- <button type="button" class="" onclick="nextStep()">Next</button> --}}
</div>
