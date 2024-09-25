<div class="step active">
    <h3 class="contract-title text-start">Job Title and Description</h3>
    <div class="parties">
        <ul>
            <li>The initial job title of the Employee will be the following: <strong>Sales representative</strong>.</li>
            <li>The initial job duties the Employee will be expected to perform include:</li>
            <ul class="uper">
                <li>Generating leads.</li>
                <li>Meeting or exceeding sales goals.</li>
                <li>Negotiating all contracts with prospective clients.</li>
                <li>Helping determine pricing schedules for quotes, promotions, and negotiations.</li>
                <li>Preparing weekly and monthly reports.</li>
                <li>Giving sales presentations to a range of prospective clients.</li>
                <li>Coordinating sales efforts with marketing programs.</li>
                <li>Understanding and promoting company programs.</li>
                <li>Obtaining deposits and balance of payments from clients.</li>
                <li>Preparing and submitting sales contracts for orders.</li>
                <li>Visiting clients and potential clients to evaluate needs or promote products and services.</li>
                <li>Maintaining client records.</li>
                <li>Answering client questions about credit terms, products, prices, and availability.</li>
            </ul>

            <li>The Employee agrees to be employed on the terms and conditions set out in this Agreement and will perform any and all duties as requested by the Employer.</li>
            <li>The Employee will perform any and all duties as requested by the Employer that are reasonable and that are customarily performed by a person holding a similar position in the industry or business of the Employer. </li>
            <li>The Employer may make changes to the job title or duties of the Employee where the changes would be considered reasonable for a similar position in the industry or business of the Employer. The Employee's job title or duties may be changed by agreement and with the approval of both the Employee and the Employer or after a notice period required under law. </li>
            <li>The Employee agrees to abide by the Employer's rules, regulations, policies, and practices, including those concerning work schedules, vacation, and sick leave, as they may from time to time be adopted or modified. </li>
        </ul>
    </div>
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
                </ul>
        </div>
    </div>
    <div class="signature-section">
        @if(isset($data->signature_step2))
        <img src="{{ $data->signature_step2 }}" style="width: 150px;">
         @else
        <canvas id="signaturePad2" class="signature-pad"></canvas>
        <div class="flex-row mt-3">
            <label for="signaturePad2">Signature</label>
            <a href="javascript:;" class="clearsignature" onclick="clearSignature(2)">Clear Signature</a>
            <input type="hidden" id="signature_step2" name="signature_step2" value="{{ old("signature_step2") }}">

            @error('signature_step2')
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
