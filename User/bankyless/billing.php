<?php
function h($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }

function peso($n) {
  return number_format((float)$n, 2, '.', ',');
}

function formatLongDate($isoDate) {
  if (!$isoDate) return '';
  try {
    $dt = new DateTime($isoDate);
    return $dt->format('F j, Y');
  } catch (Exception $e) {
    return '';
  }
}

$data = $_POST;
$customerName = trim($data['customerName'] ?? '');
$contactNumber = trim($data['contactNumber'] ?? '');
$fromDate = trim($data['fromDate'] ?? '');
$toDate = trim($data['toDate'] ?? '');
$roomType = trim($data['roomType'] ?? '');
$roomCapacity = trim($data['roomCapacity'] ?? '');
$paymentType = trim($data['paymentType'] ?? '');

$dateReserved = trim($data['dateReserved'] ?? '');
$timeReserved = trim($data['timeReserved'] ?? '');
if (!$dateReserved || !$timeReserved) {
  $now = new DateTime('now');
  if (!$dateReserved) $dateReserved = $now->format('F j, Y');
  if (!$timeReserved) $timeReserved = $now->format('h:i A');
}

$errors = [];
if ($customerName === '') $errors[] = 'Customer Name is required';
if ($contactNumber === '') $errors[] = 'Contact Number is required';
if ($fromDate === '') $errors[] = 'From date is required';
if ($toDate === '') $errors[] = 'To date is required';
if ($roomType === '') $errors[] = 'No selected room type';
if ($roomCapacity === '') $errors[] = 'No selected room capacity';
if ($paymentType === '') $errors[] = 'No selected type of payment';

$days = 0;
if ($fromDate && $toDate) {
  try {
    $from = new DateTime($fromDate);
    $to = new DateTime($toDate);
    if ($from > $to) {
      $errors[] = 'From date must be before To date';
    } else {
      // Nights: difference in days (e.g., July 27 to July 30 = 3 days)
      $days = (int)$from->diff($to)->days;
      if ($days <= 0) $errors[] = 'Reservation must be at least 1 day';
    }
  } catch (Exception $e) {
    $errors[] = 'Invalid reservation dates';
  }
}

$rates = [
  'Single' => ['Regular' => 100, 'Deluxe' => 300, 'Suite' => 500],
  'Double' => ['Regular' => 200, 'Deluxe' => 500, 'Suite' => 800],
  'Family' => ['Regular' => 500, 'Deluxe' => 750, 'Suite' => 1000],
];

$ratePerDay = $rates[$roomCapacity][$roomType] ?? 0;
if ($roomType && $roomCapacity && $ratePerDay <= 0) {
  $errors[] = 'Invalid room selection';
}

$amountDue = $ratePerDay * $days;

$paymentCharges = [
  'Cash' => 0.00,
  'Cheque' => 0.05,
  'Credit Card' => 0.10,
];
$chargeRate = $paymentCharges[$paymentType] ?? 0.00;
$additionalCharge = $amountDue * $chargeRate;

// Discounts: 10% for 3-5 days, 15% for 6+ days (applies to any payment type)
$discountRate = 0.00;
if ($days >= 3 && $days <= 5) $discountRate = 0.10;
if ($days >= 6) $discountRate = 0.15;
$discountAmount = $amountDue * $discountRate;

$totalBill = $amountDue + $additionalCharge - $discountAmount;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Billing - Banky Less</title>
  <link rel="stylesheet" href="../../assets/css/billing.css">
</head>
<body>
  <div class="bill-wrap">
    <div class="bill-head">
      <h1>BANKY LESS' FIVE STAR HOTEL</h1>
      <div class="sub">BILLING INFORMATION</div>
    </div>

    <div class="bill-body">
      <div class="section-title">RESERVATION: BILLING INFORMATION</div>

      <?php if (!empty($errors)): ?>
        <div class="problem" style="border-style:solid;border-color:#fecaca;background:#fff1f2;">
          <h4 style="color:#b91c1c;">Missing / invalid information</h4>
          <ul>
            <?php foreach ($errors as $e): ?>
              <li><?= h($e) ?></li>
            <?php endforeach; ?>
          </ul>
          <div class="actions" style="margin-top:12px;">
            <a class="btn btn-secondary" href="reservation.php">Back</a>
          </div>
        </div>
      <?php else: ?>

      <p class="discount-note">Enjoy our <?= (int)($discountRate * 100) ?>% discount for <?= $days ?> day/s of reservation</p>
      <?php if ($days >= 6): ?>
        <p class="discount-note">Enjoy our 15% discount for 6 days or above of reservation</p>
      <?php endif; ?>

      <div class="top-grid" style="margin-top:12px;">
        <div class="kv">
          <div class="k">Customer Name:</div><div class="v"><?= h($customerName) ?></div>
          <div class="k">Contact Number:</div><div class="v"><?= h($contactNumber) ?></div>
          <div class="k">Date Reserved:</div><div class="v"><?= h($dateReserved) ?></div>
        </div>
        <div class="kv">
          <div class="k">Time:</div><div class="v"><?= h($timeReserved) ?></div>
          <div class="k muted"></div><div class="v muted"></div>
          <div class="k muted"></div><div class="v muted"></div>
        </div>
      </div>

      <div class="mid-grid">
        <div class="panel">
          <h3>Date of Reservation</h3>
          <div class="row"><div class="k">From:</div><div class="v"><?= h(formatLongDate($fromDate)) ?></div></div>
          <div class="row"><div class="k">To:</div><div class="v"><?= h(formatLongDate($toDate)) ?></div></div>
        </div>

        <div class="panel">
          <h3>Billing Statements</h3>
          <div class="row"><div class="k">Room Type:</div><div class="v"><?= h($roomType) ?></div></div>
          <div class="row"><div class="k">Room Capacity:</div><div class="v"><?= h($roomCapacity) ?></div></div>
          <div class="row"><div class="k">Payment Type:</div><div class="v"><?= h($paymentType) ?></div></div>
          <div class="right-summary">
            <div class="row"><div class="k">No. of Days:</div><div class="v"><?= h($days) ?></div></div>
            <div class="row"><div class="k">Amount Due:</div><div class="v">PHP <?= h(peso($amountDue)) ?></div></div>
            <div class="row"><div class="k">Discount:</div><div class="v">PHP <?= h(peso($discountAmount)) ?></div></div>
            <div class="row"><div class="k">Add'l Charge:</div><div class="v">PHP <?= h(peso($additionalCharge)) ?></div></div>
            <div class="row" style="font-weight:800;"><div class="k">Total Bill:</div><div class="v">PHP <?= h(peso($totalBill)) ?></div></div>
          </div>
        </div>
      </div>

      <div class="tables">
        <div>
          <div class="table-title">Room Rate Table</div>
          <table>
            <thead>
              <tr>
                <th>Room Capacity</th>
                <th>Room Type</th>
                <th>Rate/day</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($rates as $cap => $types): ?>
                <?php $first = true; ?>
                <?php foreach ($types as $type => $rate): ?>
                  <tr>
                    <td><?= $first ? h($cap) : '' ?></td>
                    <td><?= h($type) ?></td>
                    <td>PHP <?= h(peso($rate)) ?></td>
                  </tr>
                  <?php $first = false; ?>
                <?php endforeach; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div>
          <div class="table-title">Payment Type</div>
          <table>
            <thead>
              <tr>
                <th>Type of Payment</th>
                <th>Additional Charge</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Cash</td><td>No add'l charge</td></tr>
              <tr><td>Cheque</td><td>5%</td></tr>
              <tr><td>Credit Card</td><td>10%</td></tr>
            </tbody>
          </table>

          <div style="height:12px;"></div>

          <div class="table-title">Discounts</div>
          <table>
            <thead>
              <tr>
                <th>For Cash</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr><td>10% discount</td><td>3 - 5 days</td></tr>
              <tr><td>15% discount</td><td>6 days & above</td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="problem">
        <h4>Problem:</h4>
        <ul>
          <li>Compute the total bill based on the date of reservation from to the last day of stay.</li>
          <li>Supply all the necessary information in the Reservation page, otherwise display a message for incomplete information.</li>
          <li>Select room capacity, room type and payment type before clicking Submit Reservation button otherwise, will prompt you with "No selected room capacity" or "No selected room type" or "No selected type of payment".</li>
        </ul>
      </div>

      <div class="actions">
        <a class="btn btn-primary" href="#" id="submitBtn">Submit</a>
        <a class="btn btn-secondary" href="reservation.php">Back</a>
      </div>

      <?php endif; ?>
    </div>
  </div>
</body>
</html>

<script>
  document.getElementById('submitBtn').addEventListener('click', function (e) {
    e.preventDefault();
    // Show toast
    const toast = document.createElement('div');
    toast.style.cssText = `
      position: fixed;
      top: 20px;
      right: 20px;
      background: #0d47a1;
      color: #fff;
      padding: 12px 20px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      font-size: 14px;
      z-index: 9999;
      transition: opacity 0.3s;
    `;
    toast.textContent = 'Reservation submitted successfully!';
    document.body.appendChild(toast);
    setTimeout(() => {
      toast.style.opacity = '0';
      setTimeout(() => document.body.removeChild(toast), 300);
    }, 3000);
    // Optional: redirect after toast
    setTimeout(() => { window.location.href = 'index.php'; }, 3500);
  });
</script>


