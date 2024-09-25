<div class="step active">
    <div class="parties">


        <h3 class="contract-title text-start">SEVERABILITY</h3>
        <ul>
            <li>The Employer and the Employee acknowledge that this Agreement is reasonable, valid, and enforceable. However, if any term, covenant, condition or provision of this Agreement is held by a court of competent jurisdiction to be invalid, void, or unenforceable, it is the parties' intent that such provision be changed in scope by the court only to the extent deemed necessary by that court to render the provision reasonable and enforceable and the remainder of the provisions of this Agreement will in no way be affected, impaired, or invalidated as a result.</li>
        </ul>
        <h3 class="contract-title text-start">SEVERABILITY</h3>
        <ul>
            <li>Any notices, deliveries, requests, demands, or other communications required here will be deemed to be completed when hand-delivered, delivered by agent, or seven days after being placed in the post, postage prepaid, to the parties at the following addresses or as the parties may later designate in writing:
                <h3 class="contract-title text-start mt-3">Employer:</h3>

                <div class="d-flex align-items-center gap-5">
                    <label class="contract-title-1" for="">Name:</label>
                    <p class="m-0 contract-title-1">HybridX Inc.</p>
                </div>
                <div class="d-flex align-items-center gap-4">
                    <label class="contract-title-1" for="">Address:</label>
                    <a class="contract-title-1" href="">50 Steeles Ave E unit 211 , Milton Ontario L9T4W9</a>
                </div>
                <div class="contract-title text-start text-capitalize mt-3">Employee:</div>

                <div class="d-flex align-items-center gap-5">
                    <label class="contract-title-1" for="">Name:</label>
                    <input class="input-field" type="text" name="employee_name" value="{{ old('employee_name') ?? ($data->employee_name ?? '') }}" >
                </div>
                <div class="d-flex align-items-center gap-4">
                    <label class="contract-title-1" for="">Address:</label>
                    <input class="input-field" type="text" name="employee_address" value="{{ old('employee_address') ?? ($data->employee_address ?? '') }}" >
                </div>
            </li>
        </ul>

    </div>
    <h3 class="contract-title text-start mt-3">MODIFICATION OF AGREEMENT</h3>
    <div class="parties">
        <ul>
            <li>Any amendment or modification of this Agreement or additional obligation assumed by either party in connection with this Agreement will only be binding if evidenced in writing signed by each party or an authorized representative of each party. </li>
        </ul>

        <div class="contract-title text-start">ADDITIONAL TERMS</div>
        <ul>
            <li class="flex-row"><span>The Employee is expected to generate a minimum sales revenue of</span><span> $<input type="text" class="input-field w-80" id="sales_revenue" name="sales_revenue" value="{{ old('sales_revenue') ?? ($data->sales_revenue ?? '') }}" /></span><span> per week.</span>
            </li>
            <li>"If an employee takes multiple consecutive days off due to illness, a doctor's note is required. Without this, the time off will be unpaid."</li>
            <li>The Employee cannot give office Leads to any other individual or entity, and cannot be employed anywhere else
                during the term of employment with HybridX Inc.
            </li>
            <li>The salary and commission will be paid on 1st and 15th of every month.</li>
            <li class="flex-row">
                <div>The Employee's S.I.N. number is <input type="text" class="input-field w-90" id="sin_number" name="sin_number" value="{{ old('sin_number') ?? ($data->sin_number ?? '') }}"/> </div>
                <div> and the Driver's license number is
                    <input type="text" class="input-field  w-90" id="drivers_license" name="drivers_license" value="{{ old('drivers_license') ?? ($data->drivers_license ?? '') }}" />.
                </div>
            </li>

        </ul>
    </div>
    <div class="signature-section">
        @if(isset($data->signature_step8))
        <img src="{{ $data->signature_step8 }}" style="width: 150px;">
         @else
        <canvas id="signaturePad8" class="signature-pad"></canvas>
        <div class="flex-row mt-3">
            <label for="signaturePad8">Signature</label>
            <a href="javascript:;" class="clearsignature" onclick="clearSignature(8)">Clear Signature</a>
            <input type="hidden" id="signature_step8" name="signature_step8" value="{{ old("signature_step8") }}">

            @error('signature_step8')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        @endif
    </div>
    <div class="form-footer">
        <button type="button" onclick="prevStep()">Previous</button>
        <button type="button" onclick="nextStep()">Next</button>
    </div>
    {{-- <button type="button" class="" onclick="nextStep()">Next</button> --}}
</div>
