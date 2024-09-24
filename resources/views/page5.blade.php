<div class="step active">
    <h3 class="contract-title text-start">NON-SOLICITATION</h3>

    <div class="">
        <ul>
            <li class="clause">The Employee understands and agrees that any attempt on the part of the Employee to induce other employees or contractors to leave the Employer's employ, or any effort by the Employee to interfere with the Employer's relationship with its other employees and contractors would be harmful and damaging to the Employer. The Employee agrees that during the Employee's term of employment with the Employer and for a period of two years after the end of that term, the Employee will not in any way, directly or indirectly:
            </li>
            <ul class="uper">
                <li class="clause">Induce or attempt to induce any employee or contractor of the Employer to quit employmentor retainer with the Employer;</li>
                <li class="clause">Otherwise interfere with or disrupt the Employer's relationship with its employees and contractors;
                </li>
                <li class="clause">Discuss employment opportunities or provide information about competitive employment to any of the Employer's employees or contractors; or</li>
                <li class="clause">Solicit, entice, or hire away any employee or contractor of the Employer for the purpose of an employment opportunity that is in competition with the Employer.</li>
            </ul>

            <li class="clause">This non-solicitation obligation as described in this section will be limited to employees or contractors who were employees or contractors of the Employer during the period that the Employee was employed by the Employer.</li>
            <li class="clause">During the term of the Employee's active employment with the Employer, and for two years thereafter, the Employee will not divert or attempt to divert from the Employer any business the Employer had enjoyed, solicited, or attempted to solicit, from its customers, prior to termination or expiration, as the case may be, of the Employee's employment with the Employer.
            </li>
        </ul>

    </div>


        <h3 class="contract-title text-start">CONFIDENTIAL INFORMATION</h3>
        <ul>
        <li class="clause">The Employee acknowledges that, in any position the Employee may hold, in and as a result of the Employee's employment by the Employer, the Employee will, or may, be making use of, acquiring or adding to information which is confidential to the Employer (the "Confidential Information") and the Confidential Information is the exclusive property of the Employer.</li>
        <li class="clause">The Confidential Information will include all data and information relating to the business and management of the Employer, including but not limited to, proprietary and trade secret technology and accounting records to which access is obtained by the Employee, including Work Product, Computer Software, Other Proprietary Data, Business Operations, Marketing and Development Operations, and Customer Information.</li>
        <li class="clause">The Confidential Information will also include any information that has been disclosed by a third party to the Employer and is governed by a non-disclosure agreement entered into between that third party and the Employer</li>
        <li class="clause">The Confidential Information will not include information that:

        </li>
        <li class="clause">The Confidential Information will also not include anything developed or produced by the Employee during the Employee's term of employment with the Employer, including but not limited to, any intellectual property, process, design, development, creation, research, invention, know-how, trade name, trade-mark or copyright that:

        </li>
    </ul>
    <!-- Trigger Button -->

    <div class="d-flex" id="openModalBtn">
        <span>day of </span>
        <div class="signature-save" id="signature-save"></div>
    </div>

    <div class="signature-section">
        @if(isset($data->signature_step5))
        <img src="{{ $data->signature_step5 }}" style="width: 150px;">
         @else
        <canvas id="signaturePad5" class="signature-pad"></canvas>
        <div class="flex-row mt-3">
            <label for="signaturePad5">Signature</label>
            <a href="javascript:;" class="clearsignature" onclick="clearSignature(5)">Clear Signature</a>
            <input type="hidden" id="signature_step5" name="signature_step5" value="{{ old("signature_step5") }}">

            @error('signature_step5')
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
