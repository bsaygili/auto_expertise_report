<?php
// Barkod için kütüphane (picqer/php-barcode-generator)
// Kurulum: composer require picqer/php-barcode-generator
require __DIR__ . '/vendor/autoload.php';

use Picqer\Barcode\BarcodeGeneratorPNG;

$generator = new BarcodeGeneratorPNG();
$barcode = base64_encode($generator->getBarcode('06GA9346', $generator::TYPE_CODE_128, 3, 80));
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <title>A4 Barkod</title>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .page {
      width: 210mm;
      /* A4 genişliği */
      height: 297mm;
      /* A4 yüksekliği */
      display: grid;
      grid-template-columns: 1fr 1fr;
      /* 2 sütun */
      grid-template-rows: 1fr 1fr;
      /* 2 satır */
      gap: 0;
      padding: 10mm;
      box-sizing: border-box;
    }

    .barcode-box {
      display: flex;
      justify-content: center;
      align-items: center;
      border: 1px dashed #ccc;
    }

    img {
      width: auto;
      height: 80px;
    }
  </style>
</head>

<body>
  <div class="page">
    <div class="barcode-box">
      <div>
        <img src="data:image/png;base64,<?= $barcode ?>" alt="Barkod">
        <p style="text-align:center;font-size:14px;">06GA9346</p>
      </div>
    </div>
    <div class="barcode-box">
      <div>
        <img src="data:image/png;base64,<?= $barcode ?>" alt="Barkod">
        <p style="text-align:center;font-size:14px;">06GA9346</p>
      </div>
    </div>
    <div class="barcode-box">
      <div>
        <img src="data:image/png;base64,<?= $barcode ?>" alt="Barkod">
        <p style="text-align:center;font-size:14px;">06GA9346</p>
      </div>
    </div>
    <div class="barcode-box">
      <div>
        <img src="data:image/png;base64,<?= $barcode ?>" alt="Barkod">
        <p style="text-align:center;font-size:14px;">06GA9346</p>
      </div>
    </div>
  </div>
</body>

</html>