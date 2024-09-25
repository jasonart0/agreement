<div class="step active">
    <div class="background">
        <div class="section-title">DUTY TO DEVOTE FULL TIME</div>
        <ul>
            <li class="clause">employment duties and obligations as described in this Agreement</li>
            <li class="clause">Duration: Clearly state the length of the probationary period, in this case, six months.</li>
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
        <h3 class="contract-title text-start">NON-SOLICITATION</h3>

        <div class="">
            <ul>
                <li class="clause">The Employee understands and agrees that any attempt on the part of the Employee to induce other employees or contractors to leave the Employer's employ, or any effort by the Employee to interfere with the Employer's relationship with its other employees and contractors would be harmful and damaging to the Employer. The Employee agrees that during the Employee's term of employment with the Employer and for a period of two years after the end of that term, the Employee will not in any way, directly or indirectly:
                </li>
                <ul class="uper">
                    <li class="clause">Induce or attempt to induce any employee or contractor of the Employer to quit employmentor retainer with the Employer;</li>
                    <li class="clause">Otherwise interfere with or disrupt the Employer's relationship with its employees and contractors;
                    </li>
                    <li class="clause">Discuss employment opportunities or provide information about competitive employment to any of the Employer's employees or contractors; or</li>
                    <li class="clause">Solicit, entice, or hire away any employee or contractor of the Employer for the purpose of an employment opportunity that is in competition with the Employer.</li>
                </ul>

                <li class="clause">This non-solicitation obligation as described in this section will be limited to employees or contractors who were employees or contractors of the Employer during the period that the Employee was employed by the Employer.</li>
                <li class="clause">During the term of the Employee's active employment with the Employer, and for two years thereafter, the Employee will not divert or attempt to divert from the Employer any business the Employer had enjoyed, solicited, or attempted to solicit, from its customers, prior to termination or expiration, as the case may be, of the Employee's employment with the Employer.
                </li>
            </ul>

        </div>

        <!-- Trigger Button -->

        <div class="signature-section">
            @if(isset($data->signature_step4))
            <img src="{{ $data->signature_step4 }}" style="width: 150px;">
             @else
            <canvas id="signaturePad4" class="signature-pad"></canvas>
            <div class="flex-row mt-3">
                <label for="signaturePad4">Signature</label>
                <a href="javascript:;" class="clearsignature" onclick="clearSignature(4)">Clear Signature</a>
                <input type="hidden" id="signature_step4" name="signature_step4" value="{{ old("signature_step4") }}">

                @error('signature_step4')
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
</div>
