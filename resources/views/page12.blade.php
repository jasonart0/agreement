<div class="step active">
	<div class="general-provisions">
		<div class="contract-title text-start">GENERAL PROVISIONS</div>
		<ul>
			<li>
				This Agreement will inure to the benefit of and be binding upon the respective heirs, executors, administrators, successors, and assigns, as the case may be, of the Employer and the Employee.
			</li>
			<li>
				This Agreement may be executed in counterparts. Facsimile signatures are binding and are considered to be original signatures.
			</li>
			<li>
				If, at the time of execution of this Agreement, there is a pre-existing employment agreement still in effect between the parties to this Agreement, then in consideration of and as a condition of the parties entering into this Agreement and other valuable consideration, the receipt and sufficiency of which consideration is acknowledged, this Agreement will supersede any and all pre-existing employment agreements between the Employer and the Employee. Any duties, obligations, and liabilities still in effect from any pre-existing employment agreement are void and no longer enforceable after execution of this Agreement.
			</li>
			<li>
				This Agreement constitutes the entire agreement between the parties and there are no further items or provisions, either oral or written. The parties to this Agreement stipulate that neither of them has made any representations with respect to the subject matter of this Agreement except such representations as are specifically set forth in this Agreement.
			</li>
		</ul>
	</div>

	<div class="witness-section">
		<div class="contract-title text-start">IN WITNESS WHEREOF</div>
		<p>
			The parties have duly affixed their signatures under hand and seal on this <input type="text" class="input-field" id="witness-day" /> day of <input type="text" class="input-field" id="witness-month" />, <input type="text" class="input-field" id="witness-year" />.
		</p>

		<div class="signatures">
			<div class="signature-block">
				<p>_____________________________</p>
				<p>Witness</p>
			</div>
			<div class="signature-block">
				<p>_____________________________</p>
				<p>Witness</p>
			</div>
			<div class="signature-block">
				<p><strong>HybridX Inc.</strong></p>
				<p>Per: _________________________</p>
				<p>Name: ________________________</p>
			</div>
			<div class="signature-block">
				<p>_____________________________</p>
				<p>Marcuse Cornhill</p>
			</div>
		</div>
	</div>


	<div class="signature-section">
        <canvas id="signaturePad12" class="signature-pad"></canvas>
		<div class="flex-row mt-3">
			<label for="signaturePad12">Signature</label>
			<a href="javascript:;" class="clearsignature" onclick="clearSignature(12)">Clear Signature</a>
			<input type="hidden" id="signature_step12" name="signature_step12" value="{{ old("signature_step12") }}">
			@error('signature_step12')
			<div style="color: red;">{{ $message }}</div>
			@enderror
		</div>
	</div>
	<div class="form-footer">
		<input type="submit" value="Submit">
	</div>
	{{-- <button type="button" class="" onclick="nextStep()">Next</button> --}}
</div>
