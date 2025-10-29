<?php
function barcode128($code)
{
  $codes = [
    '0' => "10101110111010",
    '1' => "11101010101110",
    '2' => "10111010101110",
    '3' => "11101110101010",
    '4' => "10101110101110",
    '5' => "11101011101010",
    '6' => "10111011101010",
    '7' => "10101011101110",
    '8' => "11101010111010",
    '9' => "10111010111010"
  ];

  // Barkod çizgileri
  $html = "<div style='display:flex;'>";
  for ($i = 0; $i < strlen($code); $i++) {
    $digit = $code[$i];
    if (isset($codes[$digit])) {
      foreach (str_split($codes[$digit]) as $bar) {
        $color = $bar == "1" ? "black" : "white";
        $html .= "<div style='background:$color;width:2px;height:50px;'></div>";
      }
    }
  }
  $html .= "</div>";

  // Barkod numarasını altına ekleme
  $html .= "<div style='text-align:center;font-family:monospace;margin-top:5px;'>$code</div>";

  return $html;
}



$barcodeValue = "06GA9346";
$businessName = "HANGAR LASTİK";
$customerName = "HOMER";
$workOrder = "#322034";
$tireInfo = "PETLAS – 205/55R16 – MULTIACTION – 2 mm – Aşınmalar Var 2021";
$date = "23/04/2025";
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <title>A4 Barkod Etiket</title>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .page {
      width: 210mm;
      height: 297mm;
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-template-rows: 1fr 1fr;
      box-sizing: border-box;
    }

    .border {
      border: 1px solid #000;
    }

    .label {
      padding: 10px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      font-family: Arial, sans-serif;
    }

    .label h2 {
      margin: 5px 0;
      font-size: 18px;
    }

    .label p {
      margin: 2px 0;
      font-size: 14px;
      text-align: center;
    }

    .barcode {
      margin: 10px 10px;
    }
  </style>
</head>

<body>
  <div class="page">
    <?php for ($i = 0; $i < 4; $i++): ?>
      <div class="label border">
        <h2><?= $barcodeValue ?></h2>
        <div class="label">
          <p><strong><?= $businessName ?></strong></p>
          <p><strong>Müşteri:</strong> <?= $customerName ?></p>
          <p><strong>İş Emri:</strong> <?= $workOrder ?></p>
          <p><strong>Lastik:</strong> <?= $tireInfo ?></p>
          <div class="barcode"><?= barcode128($barcodeValue) ?></div>
          <p><strong>Depo Giriş Tarihi:</strong> <?= $date ?></p>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</body>

</html>