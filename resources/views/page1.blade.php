<style>
      @page {
        size: A4;
        margin: 10mm;
      }

      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        line-height: 1.4;
        -webkit-print-color-adjust: exact;
      }

      .container {
        width: 100%;
        max-width: 190mm;
        /* Reduced width to fit on A4 */
        margin: 0 auto;
        padding: 10mm;
        /* Reduced padding */
        box-sizing: border-box;
      }

      .contract-title {
        text-align: center;
        font-size: 18px;
        /* Smaller font size */
        font-weight: bold;
        margin-bottom: 10px;
        text-transform: uppercase;
      }

      .section-title {
        font-weight: bold;
        margin: 10px 0 5px;
        /* Reduced margin */
        text-transform: uppercase;
        font-size: 14px;
        /* Smaller font size */
      }

      .clause {
        margin-left: 10px;
        /* Reduced margin */
        font-size: 12px;
        /* Smaller font size */
      }

      .parties {
        margin-bottom: 10px;
      }

      .input-field {
        width: 100%;
        padding: 3px;
        /* Reduced padding */
        margin-left: 3px;
        /* Reduced margin */
        border: none;
        max-height: 61px;
        border-bottom: 1px solid;
        font-size: 12px;
        /* Smaller font size */
      }

      .flex-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 5px;
        /* Reduced margin */
      }

      .flex-row input {
        flex: 1;
        margin-left: 3px;
        /* Reduced margin */
        margin-right: 3px;
        /* Reduced margin */
      }

      .button-container {
        text-align: center;
        margin-top: 20px;
        /* Reduced margin */
      }

      .step {
        display: none;
      }

      .step.active {
        display: block;
      }

      .btn {
        font-size: 12px;
        /* Smaller font size */
        padding: 5px 10px;
        /* Reduced padding */
      }

      /* Style for the modal */
      .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
      }

      .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 600px;
      }

      .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
      }

      /* Print styles */
      @media print {
        .btn {
          display: none;
          /* Hide buttons when printing */
        }

        .container {
          width: 100%;
          padding: 0;
          /* Remove padding for print */
        }
      }
  </style>
   <div class="container mt-5">
    <form id="wizardForm" onsubmit="event.preventDefault();">
      <div class="step active">
        <h3 class="contract-title">Employment Contract</h3>
        <div class="parties">
          <p class="text-center mt-2">THIS EMPLOYMENT CONTRACT (the "Agreement") dated this </p>
          <div class="flex-row">
            <label for="contractDay">Day</label>
            <input type="text" class="input-field" id="contractDay" />
            <span>day of </span>
            <label for="contractMonth">Month</label>
            <input type="text" class="input-field" id="contractMonth" />,
            <label for="contractYear">Year</label>
            <input type="text" class="input-field" id="contractYear" />.
          </div>
          <p>BETWEEN:</p>
          <p><strong>HybridX Inc.<br /></strong> of 50 Steeles Ave E unit 211, Milton Ontario L9T 4W9, Canada (the
            "Employer")</p>
          <p>OF THE FIRST PART</p>
          <h5 class="text-center">- AND -</h5>
          <label for="employeeName">Employee Name</label>
          <input type="text" class="input-field w-100" id="employeeName" />
          <p class="text-center mt-2">(the "Employee")</p>
          <p>OF THE SECOND PART</p>
        </div>

        <div class="background">
          <div class="section-title">Background:</div>
          <p class="clause">
            <strong>A.</strong> The Employer is of the opinion that the Employee has the necessary qualifications,
            experience, and abilities to assist and benefit the Employer in its business.
          </p>
          <p class="clause">
            <strong>B.</strong> The Employer desires to employ the Employee and the Employee has agreed to accept and
            enter such employment upon the terms and conditions set out in this Agreement.
          </p>
          <p>
            <strong>IN CONSIDERATION OF</strong> the matters described above and of the mutual benefits and obligations
            set forth in this Agreement, the receipt and sufficiency of which consideration is hereby acknowledged, the
            parties to this Agreement agree as follows:
          </p>
        </div>

        <div class="commencement">
          <div class="section-title">Commencement Date and Term</div>
          <div class="">
            <p class="clause">
              <strong>1.</strong> The Employee will commence permanent full-time employment with the Employer on the
            </p><br />
            <div class="flex-row">
              <label for="commencementDay">Day</label>
              <input type="text" class="input-field" id="commencementDay" />
              <span>day of </span>
              <label for="commencementMonth">Month</label>
              <input type="text" class="input-field" id="commencementMonth" />,
              <label for="commencementYear">Year</label>
              <input type="text" class="input-field" id="commencementYear" />
            </div>
            <p class="text-center mt-2">(the "Commencement Date").</p>
          </div>
          <p class="clause">
            <strong>2.</strong> The Employee must successfully complete a probationary period of Eight weeks (the
            'Probationary Period') beginning on the Commencement Date. At any time during the Probationary Period, as
            and where permitted by law, the Employer will have the right to terminate employment without any notice or
            compensation to the Employee other than wages owed for hours of work already completed.
          </p>
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
        <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
      </div>
    </form>
  </div>