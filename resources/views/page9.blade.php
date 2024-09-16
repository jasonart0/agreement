<div class="step active">
    <h3 class="contract-title text-start"></h3>
    <div class="parties">
        <ul>
            <li>The Termination Date specified by either the Employee or the Employer may expire on any day of the month and upon the Termination Date the Employer will forthwith pay to the Employee any outstanding portion of the compensation including any accrued vacation and banked time, if any, calculated to the Termination Date</li>
            <li>Once notice has been given by either party for any reason, the Employee and the Employer agree to execute their duties and obligations under this Agreement diligently and in good faith through to the end of the notice period. The Employer may not make any changes to compensation or any other term or condition of this Agreement between the time termination notice is given through to the end of the notice period.</li>
        </ul>
        <h3 class="contract-title text-start">REMEDIES</h3>
        <ul>
            <li>In the event of a breach or threatened breach by the Employee of any of the provisions of this Agreement, the Employee agrees that the Employer is entitled to a permanent injunction, in addition to and not in limitation of any other rights and remedies available to the Employer at law or in equity, in order to prevent or restrain any such breach by the Employee or by the Employee's partners, agents, representatives, servants, employees, and/or any and all persons directly or indirectly acting for or with the Employee.</li>
        </ul>
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
                    <input class="input-field" type="text" name="employee_name" value="{{ old("employee_name") }}">
                </div>
                <div class="d-flex align-items-center gap-4">
                    <label class="contract-title-1" for="">Address:</label>
                    <input class="input-field" type="text" name="employee_address" value="{{ old("employee_address") }}">
                </div>
            </li>
        </ul>

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
        <canvas id="signaturePad9" class="signature-pad"></canvas>
        <div class="flex-row mt-3">
            <label for="signaturePad9">Signature</label>
            <a href="javascript:;" class="clearsignature" onclick="clearSignature(9)">Clear Signature</a>
            <input type="hidden" id="signature_step9" name="signature_step9" value="{{ old("signature_step9") }}">
            @error('signature_step9')
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
