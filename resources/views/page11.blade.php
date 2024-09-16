<div class="step active">
    <div class="definitions">
        <ul>
            <li>
                'Other Proprietary Data' means information relating to the Employer's proprietary rights prior
                to any public disclosure of such information, including but not limited to, the nature of the proprietary rights,
                production data, technical and engineering data, test data and test results, the status and details of research
                and development of products and services, and information regarding acquiring, protecting, enforcing, and
                licensing proprietary rights (including patents, copyrights, and trade secrets).
            </li>
            <li>
                'Business Operations' means operational information, including but not limited to, internal
                personnel and financial information, vendor names and other vendor information (including vendor characteristics,
                services, and agreements), purchasing and internal cost information, internal services and operational manuals,
                and the manner and methods of conducting the Employer's business.
            </li>
            <li>
                'Marketing and Development Operations' means marketing and development information,
                including but not limited to, marketing and development plans, price and cost data, price and fee amounts, pricing
                and billing policies, quoting procedures, marketing techniques and methods of obtaining business, forecasts and
                forecast assumptions and volumes, and future plans and potential strategies of the Employer which have been or
                are being considered.
            </li>
            <li>
                'Customer Information' means customer information, including but not limited to, names of
                customers and their representatives, contracts and their contents and parties, customer services, data provided by
                customers and the type, quantity and specifications of products and services purchased, leased, licensed, or
                received by customers of the Employer.
            </li>
            <li>
                'Termination Date' means the date specified in this Agreement or in a subsequent notice by
                either the Employee or the Employer to be the last day of employment under this Agreement. The parties
                acknowledge that various provisions of this Agreement will survive the Termination Date.
            </li>
        </ul>
    </div>

    <div class="general-provisions">
        <div class="contract-title text-start">GENERAL PROVISIONS</div>
        <ul>
            <li>
                'Time is of the essence' in this Agreement.
            </li>
            <li>
                'Headings' are inserted for the convenience of the parties only and are not to be considered
                when interpreting this Agreement. Words in the singular mean and include the plural and vice versa. Words in the
                masculine mean and include the feminine and vice versa.
            </li>
            <li>
                'No failure or delay' by either party to this Agreement in exercising any power, right or
                privilege under the Agreement shall be construed as a waiver thereof.
            </li>
        </ul>
    </div>

    <div class="signature-section">
        <canvas id="signaturePad11" class="signature-pad"></canvas>
        <div class="flex-row mt-3">
            <label for="signaturePad11">Signature</label>
            <a href="javascript:;" class="clearsignature" onclick="clearSignature(11)">Clear Signature</a>
            <input type="hidden" id="signature_step11" name="signature_step11" value="{{ old("signature_step11") }}">
            @error('signature_step11')
            <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-footer">
        <button type="button" onclick="prevStep()">Previous</button>
        <button type="button" onclick="nextStep()">Next</button>
    </div>
    {{-- <button type="button" class="" onclick="nextStep()">Next</button> --}}
</div>
