<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservation - Banky Less</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../../assets/css/mico-marco.css">
</head>
<body>
  <div class="page" id="reservation">
    <?php $active = 'reservation'; include __DIR__ . '/partials/nav.php'; ?>

    <section class="section">
      <div class="reservation">
        <div class="reservation-header">
          <h2>Banky Less' Five Star Hotel</h2>
          <h3>ONLINE RESERVATION</h3>
        </div>

        <div class="reservation-body">
          <div id="reservationErrors" style="display:none;margin-bottom:16px;padding:12px 14px;border:1px solid #fecaca;background:#fee2e2;color:#b91c1c;border-radius:4px;">
            <p style="font-weight:600;margin-bottom:6px;">Please fix the following errors:</p>
            <ul style="padding-left:20px;margin:0;"></ul>
          </div>

          <div class="reservation-subtitle-row">
            <h4>RESERVATION (SUPPLY THE NECESSARY INFORMATION BELOW)</h4>
          </div>

          <form id="reservationForm" method="post" action="billing.php" novalidate>
            <div class="form-grid">
              <div class="field">
                <label>Customer Name:</label>
                <input type="text" id="customerName" name="customerName" placeholder="John Apolis">
              </div>
              <div class="field">
                <label>Contact Number:</label>
                <input type="text" id="contactNumber" name="contactNumber" placeholder="09xx xxx xxxx">
              </div>
              <div class="field" style="grid-column:1 / -1; margin-top:4px;">
                <label>Reservation Date:</label>
              </div>
              <div class="field">
                <label>From:</label>
                <input type="date" id="fromDate" name="fromDate">
            </div>
              <div class="field">
                <label>To:</label>
                <input type="date" id="toDate" name="toDate">
            </div>
              <div class="field">
                <label>Room Type</label>
                <div style="display:flex;gap:12px;flex-wrap:wrap;">
                <label><input type="radio" name="roomType" value="Regular"> Regular</label>
                <label><input type="radio" name="roomType" value="Deluxe"> Deluxe</label>
                <label><input type="radio" name="roomType" value="Suite"> Suite</label>
                </div>
              </div>
              <div class="field">
                <label>Room Capacity</label>
                <div style="display:flex;gap:12px;flex-wrap:wrap;">
                <label><input type="radio" name="roomCapacity" value="Single"> Single</label>
                <label><input type="radio" name="roomCapacity" value="Double"> Double</label>
                <label><input type="radio" name="roomCapacity" value="Family"> Family</label>
                </div>
              </div>
              <div class="field">
                <label>Payment Type</label>
                <div class="payment-type">
                  <label><input type="radio" name="paymentType" value="Cash"> Cash</label>
                  <label><input type="radio" name="paymentType" value="Cheque"> Cheque</label>
                  <label><input type="radio" name="paymentType" value="Credit Card"> Credit Card</label>
                </div>
              </div>
            </div>
            <input type="hidden" id="dateReserved" name="dateReserved">
            <input type="hidden" id="timeReserved" name="timeReserved">
            <div class="reservation-footer">
              <div class="form-actions">
                <button class="btn btn-primary" type="submit">Submit Reservation</button>
                <button class="btn btn-secondary" type="reset">Clear Entry</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <?php include __DIR__ . '/partials/footer.php'; ?>
  </div>
  <script>
    (function () {
      var form = document.getElementById('reservationForm');
      if (!form) return;

      var nameInput = document.getElementById('customerName');
      var contactInput = document.getElementById('contactNumber');
      var dateReservedInput = document.getElementById('dateReserved');
      var timeReservedInput = document.getElementById('timeReserved');
      var fromDateInput = document.getElementById('fromDate');
      var toDateInput = document.getElementById('toDate');
      var errorsContainer = document.getElementById('reservationErrors');
      var errorsList = errorsContainer ? errorsContainer.querySelector('ul') : null;

      function clearErrors() {
        if (!errorsContainer || !errorsList) return;
        errorsContainer.style.display = 'none';
        while (errorsList.firstChild) {
          errorsList.removeChild(errorsList.firstChild);
        }
      }

      function showErrors(messages) {
        if (!errorsContainer || !errorsList) return;
        for (var i = 0; i < messages.length; i++) {
          var li = document.createElement('li');
          li.textContent = messages[i];
          errorsList.appendChild(li);
        }
        errorsContainer.style.display = 'block';
      }

      function getCheckedValue(groupName) {
        var checked = document.querySelector('input[name="' + groupName + '"]:checked');
        return checked ? checked.value : '';
      }

      form.addEventListener('submit', function (event) {
        clearErrors();

        var errors = [];

        if (!nameInput || !nameInput.value || !nameInput.value.trim()) {
          errors.push('Customer Name is required');
        }

        if (!contactInput || !contactInput.value || !contactInput.value.trim()) {
          errors.push('Contact Number is required');
        }

        var roomCapacityValue = getCheckedValue('roomCapacity');
        var roomTypeValue = getCheckedValue('roomType');
        var paymentTypeValue = getCheckedValue('paymentType');

        if (!roomCapacityValue) {
          errors.push('No selected room capacity');
        }

        if (!roomTypeValue) {
          errors.push('No selected room type');
        }

        if (!paymentTypeValue) {
          errors.push('No selected type of payment');
        }

        // Validate reservation dates
        var fromDateVal = fromDateInput ? fromDateInput.value : '';
        var toDateVal = toDateInput ? toDateInput.value : '';

        if (!fromDateVal) {
          errors.push('From date is required');
        }

        if (!toDateVal) {
          errors.push('To date is required');
        }

        if (fromDateVal && toDateVal) {
          var fromDate = new Date(fromDateVal);
          var toDate = new Date(toDateVal);
          if (fromDate > toDate) {
            errors.push('From date must be before To date');
          }
        }

        if (errors.length > 0) {
          event.preventDefault();
          showErrors(errors);
          return;
        }

        var now = new Date();
        var dateReserved = now.toLocaleDateString('en-US', {
          month: 'long',
          day: 'numeric',
          year: 'numeric'
        });
        var timeReserved = now.toLocaleTimeString('en-US', {
          hour: '2-digit',
          minute: '2-digit',
          hour12: true
        });

        if (dateReservedInput) dateReservedInput.value = dateReserved;
        if (timeReservedInput) timeReservedInput.value = timeReserved;
      });

      form.addEventListener('reset', function () {
        clearErrors();
        if (dateReservedInput) dateReservedInput.value = '';
        if (timeReservedInput) timeReservedInput.value = '';
      });
    })();
  </script>
</body>
</html>


