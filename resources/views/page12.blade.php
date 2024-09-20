<div class="step active">
    <div class="general-provisions">
        <div class="contract-title text-start">GENERAL PROVISIONS</div>
        <ul>
            <li>
                This Agreement will inure to the benefit of and be binding upon the respective heirs, executors,
                administrators, successors, and assigns, as the case may be, of the Employer and the Employee.
            </li>
            <li>
                This Agreement may be executed in counterparts. Facsimile signatures are binding and are considered to
                be original signatures.
            </li>
            <li>
                If, at the time of execution of this Agreement, there is a pre-existing employment agreement still in
                effect between the parties to this Agreement, then in consideration of and as a condition of the parties
                entering into this Agreement and other valuable consideration, the receipt and sufficiency of which
                consideration is acknowledged, this Agreement will supersede any and all pre-existing employment
                agreements between the Employer and the Employee. Any duties, obligations, and liabilities still in
                effect from any pre-existing employment agreement are void and no longer enforceable after execution of
                this Agreement.
            </li>
            <li>
                This Agreement constitutes the entire agreement between the parties and there are no further items or
                provisions, either oral or written. The parties to this Agreement stipulate that neither of them has
                made any representations with respect to the subject matter of this Agreement except such
                representations as are specifically set forth in this Agreement.
            </li>
        </ul>
    </div>

    <div class="witness-section">
        <p>
            <strong>IN WITNESS WHEREOF,</strong> The parties have duly affixed their signatures under hand and seal on
            this
        <div class="d-flex gap-2">
            <?php $widtness_day = ($data) ? $data->widtness_day : old("widtness_day"); ?>
            <span><input type="number" min="1" max="31" class="input-field w-90" name="widtness_day" value="{{ $widtness_day }}"
                    id="witness-day" placeholder="Day" /></span>
            <span>day of</span>
            <?php $widtness_month = ($data) ? $data->widtness_month : old("widtness_month"); ?>
            <span><input type="number" min="1" max="12" class="input-field w-80" name="widtness_month" value="{{ $widtness_month }}"
                    id="witness-month" placeholder="Month" />,</span>
                    <?php $widtness_year = ($data) ? $data->widtness_year : old("widtness_year"); ?>
            <span> <input type="number" min="1900" max="2100" class="input-field w-90" name="widtness_year" value="{{ $widtness_year }}"
                    id="witness-year" placeholder="Year" />.</span>
        </div>
        </p>

        <div class="signatures flex-row">
            <div class="w-50">
                <div class="signature-block">
                    <?php $fitness_field_one = ($data) ? $data->fitness_field_one : old("fitness_field_one"); ?>
                    <input type="text" class="input-field w-90" name="fitness_field_one" value="{{ $fitness_field_one }}"/>
                    <p>Witness</p>
                </div>

                <div class="signature-block">
                    <?php $witness_name_1 = ($data) ? $data->witness_name_1 : old("witness_name_1"); ?>
                    <input type="text" class="input-field w-90" name="witness_name_1" value="{{ $witness_name_1 }}" />
                    <p>Witness</p>
                </div>
            </div>
            <div class="w-50">
                <div class="signature-block">
                    <p><strong>HybridX Inc.</strong></p>
                    <?php $witness_person = ($data) ? $data->witness_person : old("witness_person"); ?>
                    <p>Per:<input type="text" class="input-field w-90" name="witness_person" value="{{ $witness_person }}" /></p>
                    <?php $witness_person_name =  ($data) ? $data->witness_person_name : old("witness_person_name"); ?>
                    <p>Name:<input type="text" class="input-field w-90" name="witness_person_name" value="{{ $witness_person_name }}" /></p>
                </div>
                <div class="signature-block">
                    <?php $witness_field2 = ($data) ? $data->witness_field2 : old("witness_field2"); ?>
                    <p><input type="text" class="input-field w-90" name="witness_field2" value="{{ $witness_field2 }}"/></p>
                    <p>Marcuse Cornhill</p>
                </div>
            </div>
        </div>
    </div>


    <div class="signature-section">
        @if (isset($data->signature_step12))
            <img src="{{ $data->signature_step12 }}" style="width: 150px;">
        @else
            <canvas id="signaturePad12" class="signature-pad"></canvas>
            <div class="flex-row mt-3">
                <label for="signaturePad12">Signature</label>
                <a href="javascript:;" class="clearsignature" onclick="clearSignature(12)">Clear Signature</a>
                <?php $signature_step12 = ($data) ? $data->signature_step12 : old("signature_step12"); ?>
                <input type="hidden" id="signature_step12" name="signature_step12" value="{{ $signature_step12 }}"
                    value="{{ old('signature_step12') }}">

                @error('signature_step12')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
        @endif
    </div>
    <div class="form-footer">
        <input type="submit" value="Submit">
    </div>
    {{-- <button type="button" class="" onclick="nextStep()">Next</button> --}}
</div>
