<div class="step active">
    <h3 class="contract-title text-start">RETURN OF CONFIDENTIAL INFORMATION</h3>
    <div class="parties">
        <ul>
            <li>The Employee agrees that, upon request of the Employer or upon termination or expiration, as the case may be, of this employment, the Employee will turn over to the Employer all Confidential Information belonging to the Employer, including but not limited to, all documents, plans, specifications, disks or other computer media, as well as any duplicates or backups made of that Confidential Information in whatever form or media, in the possession or control of the Employee that:
                <ul class="uper">
                    <li>May contain or be derived from ideas, concepts, creations, or trade secrets and other proprietary and Confidential Information as defined in this Agreement; or</li>
                    <li>Is connected with or derived from the Employee's employment with the Employer.</li>
                </ul>
            </li>
        </ul>
        <h3 class="contract-title text-start">CONTRACT BINDING AUTHORITY</h3>
        <ul>
            <li>Notwithstanding any other term or condition expressed or implied in this Agreement to the contrary, the Employee will not have the authority to enter into any contracts or commitments for or on the behalf of the Employer without first obtaining the express written consent of the Employer</li>
        </ul>
        <h3 class="contract-title text-start">TERMINATION DUE TO DISCONTINUANCE OF BUSINESS</h3>
        <ul>
            <li>Notwithstanding any other term or condition expressed or implied in this Agreement, in the event that the Employer will discontinue operating its business at the location where the Employee is employed, then, at the Employer's sole option, and as permitted by law, this Agreement will terminate as of the last day of the month in which the Employer ceases operations at such location with the same force and effect as if such last day of the month were originally set as the Termination Date of this Agreement.</li>
        </ul>
        <h3 class="contract-title text-start">TERMINATION OF EMPLOYMENT</h3>
        <ul>
            <li>Where there is just cause for termination, the Employer may terminate the Employee's employment without notice, as permitted by law.</li>
            <li>The Employee and the Employer agree that reasonable and sufficient notice of termination of employment by the Employer is any minimum notice required by law.</li>
            <li>If the Employee wishes to terminate this employment with the Employer, the Employee will provide the Employer with 60 days notice. As an alternative, if the Employee co-operates with the training and development of a replacement, then sufficient notice is given if it is sufficient notice to allow the Employer to find and train the replacement.</li>
        </ul>
        <h3 class="contract-title text-start">REMEDIES</h3>
        <ul>
            <li>In the event of a breach or threatened breach by the Employee of any of the provisions of this Agreement, the Employee agrees that the Employer is entitled to a permanent injunction, in addition to and not in limitation of any other rights and remedies available to the Employer at law or in equity, in order to prevent or restrain any such breach by the Employee or by the Employee's partners, agents, representatives, servants, employees, and/or any and all persons directly or indirectly acting for or with the Employee.</li>
        </ul>

    </div>

    <div class="commencement">

        <div class="signature-section">
            @if(isset($data->signature_step7))
            <img src="{{ $data->signature_step7 }}" style="width: 150px;">
             @else
            <canvas id="signaturePad7" class="signature-pad"></canvas>
            <div class="flex-row mt-3">
                <label for="signaturePad7">Signature</label>
                <a href="javascript:;" class="clearsignature" onclick="clearSignature(7)">Clear Signature</a>
                <input type="hidden" id="signature_step7" name="signature_step7" value="{{ old("signature_step7") }}">

                @error('signature_step7')
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

</div>
