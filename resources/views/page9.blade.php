<div class="step active">
    <div class="parties">
        <ul>
            {{-- <li>The Employee cannot give office Leads to any other individual or entity, and cannot be employed anywhere else
                during the term of employment with HybridX Inc.
            </li> --}}
            {{-- <li>The salary and commission will be paid on 1st and 15th of every month.</li>
            <li class="flex-row">
                <div>The Employee's S.I.N. number is <input type="text" class="input-field w-90" id="sin_number" name="sin_number" value="{{ old('sin_number') ?? ($data->sin_number ?? '') }}"/> </div>
                <div> and the Driver's license number is
                    <input type="text" class="input-field  w-90" id="drivers_license" name="drivers_license" value="{{ old('drivers_license') ?? ($data->drivers_license ?? '') }}" />.
                </div>
            </li> --}}
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

                <ul class="uper">
                    <li>'Work Product' means work product information, including but not limited to, work product resulting from or related to work or projects performed or to be performed for the Employer or for clients of the Employer, of any type or form in any stage of actual or anticipated research and development.
                    </li>
                    <li>'Computer Software' means computer software resulting from or related to work or projects performed or to be performed for the Employer or for clients of the Employer, of any type or form in any stage of actual or anticipated research and development, including but not limited to, programs and program modules, routines and subroutines, processes, algorithms, design concepts, design specifications (design notes, annotations, documentation, flowcharts, coding sheets, and the like), source code, object code and load modules.
                    </li>
                    <li>modules, programming, program patches, and system designs.</li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="definitions">
        <ul>
            <li>'Other Proprietary Data' means information relating to the Employer's proprietary rights prior to any public disclosure of such information, including but not limited to, the nature of the proprietary rights, production data, technical and engineering data, test data and test results, the status and details of research and development of products and services, and information regarding acquiring, protecting, enforcing, and licensing proprietary rights (including patents, copyrights, and trade secrets).</li>
            <li>'Business Operations' means operational information, including but not limited to, internal personnel and financial information, vendor names and other vendor information (including vendor characteristics, services, and agreements), purchasing and internal cost information, internal services and operational manuals, and the manner and methods of conducting the Employer's business.
            </li>
            <li>'Marketing and Development Operations' means marketing and development information, including but not limited to, marketing and development plans, price and cost data, price and fee amounts, pricing and billing policies, quoting procedures, marketing techniques and methods of obtaining business, forecasts and forecast assumptions and volumes, and future plans and potential strategies of the Employer which have been or are being considered.</li>
            <li>'Customer Information' means customer information, including but not limited to, names of customers and their representatives, contracts and their contents and parties, customer services, data provided by customers and the type, quantity and specifications of products and services purchased, leased, licensed, or received by customers of the Employer.
            </li>
            <li>'Termination Date' means the date specified in this Agreement or in a subsequent notice by either the Employee or the Employer to be the last day of employment under this Agreement. The parties acknowledge that various provisions of this Agreement will survive the Termination Date.</li>
        </ul>
    </div>

    <div class="signature-section">
        @if(isset($data->signature_step9))
        <img src="{{ $data->signature_step9 }}" style="width: 150px;">
         @else
        <canvas id="signaturePad9" class="signature-pad"></canvas>
        <div class="flex-row mt-3">
            <label for="signaturePad9">Signature</label>
            <a href="javascript:;" class="clearsignature" onclick="clearSignature(9)">Clear Signature</a>
            <input type="hidden" id="signature_step9" name="signature_step9" value="{{ old("signature_step9") }}">

            @error('signature_step9')
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
