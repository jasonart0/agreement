<div class="step active">
    <h3 class="contract-title text-start mt-3">MODIFICATION OF AGREEMENT</h3>
    <div class="parties">


        <ul>
            <li>Any amendment or modification of this Agreement or additional obligation assumed by either party in connection with this Agreement will only be binding if evidenced in writing signed by each party or an authorized representative of each party. </li>
        </ul>

        <div class="contract-title text-start">ADDITIONAL TERMS</div>
        <ul>
            <li class="flex-row"><span>The Employee is expected to generate a minimum sales revenue of</span><span> $<input type="text" class="input-field w-80" id="sales_revenue" name="sales_revenue" value="{{ old("sales_revenue")}}" /></span><span> per week.</span>
            </li>
            <li>The Employee cannot give office Leads to any other individual or entity, and cannot be employed anywhere else
                during the term of employment with HybridX Inc.
            </li>
            <li>The salary and commission will be paid on 1st and 15th of every month.
            </li>
            <li class="flex-row">
                <div>The Employee's S.I.N. number is <input type="text" class="input-field w-80" id="sin_number" name="sin_number" value="{{ old("sin_number") }}" /> </div>
                <div> and the Driver's license number is
                    <input type="text" class="input-field  w-80" id="drivers_license" name="drivers_license" value="{{ old("drivers_license") }}" />.
                </div>
            </li>
        </ul>
    </div>

    <div class="governing-law">
        <div class="contract-title text-start">GOVERNING LAW</div>
        <ul>
            <li>
                This Agreement will be construed in accordance with and governed by the laws of the Province of Ontario, Canada.
            </li>
        </ul>
    </div>

    <div class="definitions">
        <div class="contract-title text-start">DEFINITIONS</div>
        <ul>
            <li>For the purpose of this Agreement the following definitions will apply:

                <ul>
                    <li>'Work Product' means work product information, including but not limited to, work product resulting from or
                        related to work or projects performed or to be performed for the Employer or for clients of the Employer, of any
                        type or form in any stage of actual or anticipated research and development.
                    </li>
                    <li>'Computer Software' means computer software resulting from or related to work or projects performed or to be
                        performed for the Employer or for clients of the Employer, of any type or form in any stage of actual or anticipated
                        research and development, including but not limited to, programs and program modules, routines and subroutines,
                        processes, algorithms, design concepts, design specifications (design notes, annotations, documentation,
                        flowcharts, coding sheets, and the like), source code, object code and load modules.
                    </li>
                    <li>modules, programming, program patches, and system designs.</li>
                </ul>
            </li>
        </ul>
    </div>

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
        <canvas id="signaturePad10" class="signature-pad"></canvas>
        <div class="flex-row mt-3">
            <label for="signaturePad10">Signature</label>
            <a href="javascript:;" class="clearsignature" onclick="clearSignature(10)">Clear Signature</a>
            <input type="hidden" id="signature_step10" name="signature_step10" value="{{ old("signature_step10") }}">
            @error('signature_step10')
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
