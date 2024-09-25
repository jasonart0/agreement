<div class="step active">
    <div class="">
        <div class="parties">
            <h3 class="contract-title text-start">CONFIDENTIAL INFORMATION</h3>
            <ul>
                <li class="clause1">The Employee acknowledges that, in any position the Employee may hold, in and as a result of the Employee's employment by the Employer, the Employee will, or may, be making use of, acquiring or adding to information which is confidential to the Employer (the "Confidential Information") and the Confidential Information is the exclusive property of the Employer.</li>
                <li class="clause1">The Confidential Information will include all data and information relating to the business and management of the Employer, including but not limited to, proprietary and trade secret technology and accounting records to which access is obtained by the Employee, including Work Product, Computer Software, Other Proprietary Data, Business Operations, Marketing and Development Operations, and Customer Information.</li>
                <li class="clause1">The Confidential Information will also include any information that has been disclosed by a third party to the Employer and is governed by a non-disclosure agreement entered into between that third party and the Employer</li>
                <li class="clause">The Confidential Information will not include information that:
                    <ul>
                        <li>Is generally known in the industry of the Employer;</li>
                        <li>Is now or subsequently becomes generally available to the public through no wrongful act of the
                            Employee;</li>
                        <li>Was rightfully in the possession of the Employee prior to the disclosure to the Employee by the
                            Employer;</li>
                        <li>Is independently created by the Employee without direct or indirect use of the Confidential
                            Information; or</li>
                        <li>The Employee rightfully obtains from a third party who has the right to transfer or disclose it.
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="">
        <div class="parties">

        </div>
    </div>

    <div class="">
        <div class="parties">
            <ul>
                <li>The Confidential Information will also not include anything developed or produced by the Employee
                    during the Employee's term of employment with the Employer, including but not limited to, any
                    intellectual property, process, design, development, creation, research, invention, know-how, trade
                    name, trade-mark or copyright that:
                    <ul>
                        <li>Was developed without the use of equipment, supplies, facility or Confidential Information
                            of the Employer</li>
                        <li>Was developed entirely on the Employee's own time;</li>
                        <li>Does not result from any work performed by the Employee for the Employer; and</li>
                        <li>Does not relate to any actual or reasonably anticipated business opportunity of the
                            Employer.</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    <!-- Trigger Button -->

    <div class="d-flex" id="openModalBtn">
        <span>day of </span>
        <div class="signature-save" id="signature-save"></div>
    </div>

    <div class="signature-section">
        @if (isset($data->signature_step5))
            <img src="{{ $data->signature_step5 }}" style="width: 150px;">
        @else
            <canvas id="signaturePad5" class="signature-pad"></canvas>
            <div class="flex-row mt-3">
                <label for="signaturePad5">Signature</label>
                <a href="javascript:;" class="clearsignature" onclick="clearSignature(5)">Clear Signature</a>
                <input type="hidden" id="signature_step5" name="signature_step5" value="{{ old('signature_step5') }}">

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
