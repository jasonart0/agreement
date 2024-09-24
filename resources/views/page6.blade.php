<div class="step active">
    <h3 class="contract-title text-start">CONFIDENTIAL INFORMATION</h3>
    <div class="parties">
        <ul>
            <li>Is generally known in the industry of the Employer;</li>
            <li>Is now or subsequently becomes generally available to the public through no wrongful act of the Employee;</li>
            <li>Was rightfully in the possession of the Employee prior to the disclosure to the Employee by the Employer;</li>
            <li>Is independently created by the Employee without direct or indirect use of the Confidential Information; or</li>
            <li>The Employee rightfully obtains from a third party who has the right to transfer or disclose it.</li>
            <li>The Confidential Information will also not include anything developed or produced by the Employee during the Employee's term of employment with the Employer, including but not limited to, any intellectual property, process, design, development, creation, research, invention, know-how, trade name, trade-mark or copyright that:</li>
            <li>Was developed without the use of equipment, supplies, facility or Confidential Information of the Employer</li>
            <li>Was developed entirely on the Employee's own time;</li>
            <li>Does not result from any work performed by the Employee for the Employer; and</li>
            <li>Does not relate to any actual or reasonably anticipated business opportunity of the Employer.</li>
        </ul>


    </div>

    <div class="commencement">
        <h3 class="contract-title text-start">DUTIES AND OBLIGATIONS CONCERNING CONFIDENTIAL INFORMATION</h3>
        <p>The Employee agrees that a material term of the Employee's contract with the Employer is to keep all Confidential Information absolutely confidential and protect its release from the public. The Employee agrees not to divulge, reveal, report or use, for any purpose, any of the Confidential Information which the Employee has obtained or which was disclosed to the Employee by the Employer as a result of the Employee's employment by the Employer. The Employee agrees that if there is any question as to such disclosure then the Employee will seek out senior management of the Employer prior to making any disclosure of the Employer's information that may be covered by this Agreement.</p>
        <p>The Employee agrees and acknowledges that the Confidential Information is of a proprietary and
            confidential nature and that any disclosure of the Confidential Information to a third party in
            breach of this Agreement cannot be reasonably or adequately compensated for in money damages, would cause irreparable injury to Employer, would gravely affect the effective and
            successful conduct of the Employer's business and goodwill, and would be a material breach of
            this Agreement.</p>

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

        <div class="signature-section">
            @if(isset($data->signature_step6))
            <img src="{{ $data->signature_step6 }}" style="width: 150px;">
             @else
            <canvas id="signaturePad6" class="signature-pad"></canvas>
            <div class="flex-row mt-3">
                <label for="signaturePad6">Signature</label>
                <a href="javascript:;" class="clearsignature" onclick="clearSignature(6)">Clear Signature</a>
                <input type="hidden" id="signature_step6" name="signature_step6" value="{{ old("signature_step6") }}">

                @error('signature_step6')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            @endif
        </div>
    </div>
    <div class="form-footer">
        <div class="form-footer">
            <button type="button" onclick="prevStep()">Previous</button>
            <button type="button" onclick="nextStep()">Next</button>
        </div>
    </div>
    {{-- <button type="button" class="" onclick="nextStep()">Next</button> --}}
</div>
