<div class="step active">
    <div class="definitions">
        <ul>
            {{-- <li>'Termination Date' means the date specified in this Agreement or in a subsequent notice by either the Employee or the Employer to be the last day of employment under this Agreement. The parties acknowledge that various provisions of this Agreement will survive the Termination Date.</li> --}}
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
        <?php $witness_username = (isset($data)) ? $data->witness_username : old("witness_username"); ?>
        <p class="d-flex gap-2">I <span><input type="text" class="input-field" name="witness_username" placeholder="Name" value="{{ $witness_username }}"
            id="witness_username"/></span> confirm that I have signed this contract electronically.</p>
        <p>
            <strong>IN WITNESS WHEREOF,</strong> The parties have duly affixed their signatures under hand and seal on
            this
        </p>
        <div class="d-flex gap-2 mb-4">
            <?php $widtness_day = (isset($data)) ? $data->widtness_day : old("widtness_day"); ?>
            <span><input type="number" min="1" max="31" class="input-field w-90" name="widtness_day" value="{{ $widtness_day }}" id="witness-day" placeholder="Day" /></span>
            <span>day of</span>
            <?php $widtness_month = (isset($data)) ? $data->widtness_month : old("widtness_month"); ?>
            <span><input type="number" min="1" max="11" class="input-field w-80" name="widtness_month" value="{{ $widtness_month }}" id="witness-month" placeholder="Month" />,</span>
            <?php $widtness_year = (isset($data)) ? $data->widtness_year : old("widtness_year"); ?>
            <span> <input type="number" min="1900" max="2100" class="input-field w-90" name="widtness_year" value="{{ $widtness_year }}" id="witness-year" placeholder="Year" />.</span>
        </div>

        <div class="signatures">
            <div class="d-flex justify-content-between gap-4">
                <div class="w-50">&nbsp;</div>
                <div class="mb-2 w-50"><strong>HybridX Inc.</strong></div>
            </div>
            <div class="d-flex gap-4 justify-content-between mb-2">
                <div class="signature-block w-50">
                    <?php $fitness_field_one = (isset($data)) ? $data->fitness_field_one : old("fitness_field_one"); ?>
                    <input type="text" class="input-field w-90 mb-1" name="fitness_field_one" value="{{ $fitness_field_one }}"/>
                    <p>Witness</p>
                </div>
                <div class="signature-block w-50">
                    <?php $witness_person = (isset($data)) ? $data->witness_person : old("witness_person"); ?>
                    <div class="flex-row">Per:<input type="text" class="input-field w-90" name="witness_person" value="{{ $witness_person }}" /></div>
                    <?php $witness_person_name =  (isset($data)) ? $data->witness_person_name : old("witness_person_name"); ?>
                    <p class="flex-row">Name:<input type="text" class="input-field w-90" name="witness_person_name" value="{{ $witness_person_name }}" /></p>
                </div>
            </div>
            <div class="d-flex justify-content-between gap-4">
                <div class="signature-block w-50">
                    <?php $witness_name_1 = (isset($data)) ? $data->witness_name_1 : old("witness_name_1"); ?>
                    <p><input type="text" class="input-field w-90" name="witness_name_1" value="{{ $witness_name_1 }}" /></p>
                    <p>Witness</p>
                </div>
                <div class="signature-block w-50">
                    <?php $witness_field2 = (isset($data)) ? $data->witness_field2 : old("witness_field2"); ?>
                    <div><p><input type="text" class="input-field" name="witness_field2" value="{{ $witness_field2 }}"/></p>
                    <p>Vikram Dutta / Mohsin Gafri</p></div>
                </div>
            </div>
        </div>

    </div>

    <div class="signature-section">
        @if(isset($data->signature_step10))
        <img src="{{ $data->signature_step10 }}" style="width: 150px;">
         @else
        <canvas id="signaturePad10" class="signature-pad"></canvas>
        <div class="flex-row mt-3">
            <label for="signaturePad10">Signature</label>
            <a href="javascript:;" class="clearsignature" onclick="clearSignature(10)">Clear Signature</a>
            <input type="hidden" id="signature_step10" name="signature_step10" value="{{ old("signature_step10") }}">

            @error('signature_step10')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        @endif
    </div>
    <div class="form-footer">
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
    {{-- <button type="button" class="" onclick="nextStep()">Next</button> --}}
</div>
