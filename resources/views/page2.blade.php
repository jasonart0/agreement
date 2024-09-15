<div class="step active">
    <h3 class="contract-title">Job Title and Description</h3>
    <div class="parties">
        <ol>
            <li>The initial job title of the Employee will be the following: <strong>Sales representative</strong>.</li>
            <li>The initial job duties the Employee will be expected to perform include:</li>
            <ul>
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
        </ol>
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
