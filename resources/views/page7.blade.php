<div class="step active">
    <div class="parties">
        <ul>
            <li>The obligations to ensure and protect the confidentiality of the Confidential Information imposed on the Employee in this Agreement and any obligations to provide notice under this Agreement will survive the expiration or termination, as the case may be, of this Agreement and will cont nue indefinitely from the date of such expiration or termination.</li>
            <li>The Employee may disclose any of the Confidential Information:
                <ul>
                    <li>To a third party where Employer has consented in writing to such disclosure; or</li>
                    <li>To the extent required by law or by the request or requirement of any judicial, legislative, administrative or other governmental body after providing reasonable prior notice to the Employer.</li>
                </ul>
            </li>
            <li>. If the Employee loses or makes unauthorized disclosure of any of the Confidential Information,the Employee will immediately notify the Employer and take all reasonable steps necessary to retrieve the lost or improperly disclosed Confidential Information.</li>

        </ul>
        <h3 class="contract-title text-start">OWNERSHIP AND TITLE TO CONFIDENTIAL INFORMATION</h3>
        <ul>
            <li>The Employee acknowledges and agrees that all rights, title, and interest in any Confidential Information will remain the exclusive property of the Employer. Accordingly, the Employee specifically agrees and acknowledges that the Employee will have no interest in the Confidential Information, including, without limitation, no interest in know-how, copyright, trade-marks or trade names, notwithstanding the fact that the Employee may have created or contributed to the creation of the Confidential Information.</li>
            <li>The Employee waives any moral rights that the Employee may have with respect to the Confidential Information.</li>
            <li>The Employee agrees to immediately disclose to the Employer all Confidential Information developed in whole or in part by the Employee during the Employee's term of employment with the Employer and to assign to the Employer any right, title or interest the Employee may have in the Confidential Information. The Employee agrees to execute any instruments and to do all other things reasonably requested by the Employer, both during and after the Employee's employment with the Employer, in order to vest more fully in the Employer all ownership rights in those items transferred by the Employee to the Employer.</li>

        </ul>

    </div>

    <div class="commencement">

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
        <div class="signature-section">
            <canvas id="signaturePad7" class="signature-pad"></canvas>
            <div class="flex-row mt-3">
                <label for="signaturePad7">Signature</label>
                <a href="javascript:;" class="clearsignature" onclick="clearSignature(7)">Clear Signature</a>
                <input type="hidden" id="signature_step7" name="signature_step7" value="{{ old("signature_step7") }}">
                @error('signature_step7')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-footer">
            <button type="button" onclick="prevStep()">Previous</button>
            <button type="button" onclick="nextStep()">Next</button>
        </div>
    </div>

</div>
