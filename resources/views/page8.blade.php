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

    </div>

    <!-- <div class="background">
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
    </div> -->

    <div class="commencement">

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
    <div class="signature-section">
        <canvas id="signaturePad8" class="signature-pad"></canvas>
        <div class="flex-row mt-3">
            <label for="signaturePad8">Signature</label>
            <a href="javascript:;" class="clearsignature" onclick="clearSignature(8)">Clear Signature</a>
            <input type="hidden" id="signature_step8" name="signature_step8" value="{{ old("signature_step8") }}">
            @error('signature_step8')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-footer">
        <button type="button" onclick="prevStep()">Previous</button>
        <button type="button" onclick="nextStep()">Next</button>
    </div>
</div>
