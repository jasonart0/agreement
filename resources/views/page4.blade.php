<div class="step active">
    <h3 class="contract-title text-start">VACATION</h3>
    <div class="parties">
        <ul>
            <li class="flex-row">The Employee will be entitled to the following unpaid vacation each year during the term of this Agreement: <input class="input-field" name="vacations" type="text" value="{{ old("vacations") }}"></li>
            <li class="clause">The times and dates for any vacation will be determined by mutual agreement between the Employer and the Employee.</li>
            <li class="clause">deleted</li>
        </ul>
    </div>

    <div class="background">
        <div class="section-title">DUTY TO DEVOTE FULL TIME</div>
        <ul>
            <li class="clause">employment duties and obligations as described in this Agreement</li>
        </ul>

    </div>

    <div class="commencement">
        <div class="section-title">CONFLICT OF INTEREST</div>
        <div class="">
            <ul>
                <li class="clause">During the term of the Employee's active employment with the Employer, it is understood and agreed that any business opportunity relating to or similar to the Employer's actual or reasonably anticipated business opportunities (with the exception of personal investments in less than 5% of the equity of a business, investments in established family businesses, real estate, or investments in stocks and bonds traded on public stock exchanges) coming to the attention of the Employee, is an opportunity belonging to the Employer. Therefore, the Employee will advise the Employer of the opportunity and cannot pursue the opportunity, directly or indirectly, without the written consent of the Employer.</li>
                <li class="clause">During the term of the Employee's active employment with the Employer, the Employee will not, directly or indirectly, engage or participate in any other business activities that the Employer, in its reasonable discretion, determines to be in conflict with the best interests of the Employer without the written consent of the Employer. And is the Employee's job to bring the lead within 4 week/</li>
            </ul>
        </div>

        <!-- Trigger Button -->

        <div class="d-flex" id="openModalBtn">
            <span>day of </span>
            <div class="signature-save" id="signature-save"></div>
        </div>
        <div class="signature-section">
            <canvas id="signaturePad4" class="signature-pad"></canvas>
            <div class="flex-row mt-3">
                <label for="signaturePad4">Signature</label>
                <a href="javascript:;" class="clearsignature" onclick="clearSignature(4)">Clear Signature</a>
                <input type="hidden" id="signature_step4" name="signature_step4" value="{{ old("signature_step4") }}">
                @error('signature_step4')
                <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-footer">
            <button type="button" onclick="prevStep()">Previous</button>
            <button type="button" onclick="nextStep()">Next</button>
        </div>
    </div>
</div>
