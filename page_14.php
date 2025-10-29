<?php
$isEmriNo = "AEÜ01170";
$plaka = "06CHJ966";
$sasiNo = "SJNFAAJ11U2934005";
$tseNo = "06-HYB-5885";
$sayfaNo = "8 / 31";
$paketTutari = "10000,00 TL";
$odeme = "9750,00 TL";
$tarih = date('d.m.Y H:i');


function e($v)
{
  return htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
function tl($v)
{
  return number_format((float)$v, 2, ',', '.') . " TL";
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <title>Oto Ekspertiz Raporu - Sayfa 14 - <?= e($sasiNo) ?></title>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600;800&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">


  <style>
    @page {
      size: A4;
      margin: 0;
    }

    html,
    body {
      height: 100%;
      background: #f0f0f0;
    }

    body {
      margin: 0;
      display: flex;
      justify-content: center;
      font-family: "Roboto", Arial, sans-serif;
      -webkit-print-color-adjust: exact;
    }

    .page {
      width: 210mm;
      height: 297mm;
      background: #fff;
      border: 3px solid #111;
      box-sizing: border-box;
      padding: 10px 26px;
      color: #111;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .header {
      font-size: 12px;
      display: flex;
      justify-content: space-between;
      margin-top: 8px;
    }

    .header-left div {
      line-height: 1.5;
    }

    .header-right {
      font-weight: bold;
      align-self: flex-start;
    }

    .title {
      text-align: center;
      font-weight: bold;
      font-size: 15px;
      margin: 10px 0 15px;
    }

    .image-container {
      text-align: center;
      margin-top: 10px;
    }

    .image-container img {
      max-width: 90%;
      height: auto;
      border: 1px solid #ccc;
    }

    .footer {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      font-size: 10px;
      line-height: 1.3;
    }

    .footer-left {
      max-width: 45%;
    }

    .footer-left img {
      width: 60px;
      height: 60px;
      display: block;
      margin-top: 4px;
    }

    .footer-center {
      text-align: center;
      font-size: 10px;
    }

    .footer-center .arrow {
      font-size: 18px;
      display: block;
      line-height: 0.8;
    }

    .footer-right {
      text-align: right;
      font-size: 11px;
      font-weight: bold;
    }

    @media print {
      body {
        background: #fff;
      }

      .page {
        border: none;
      }
    }
  </style>
</head>

<body>

  <div class="page">
    <!-- HEADER -->
    <div>
      <div class="header">
        <div class="header-left">
          <div><strong>İş Emri No :</strong> <?= $isEmriNo ?></div>
          <div><strong>Plaka :</strong> <?= $plaka ?></div>
          <div><strong>Şasi No :</strong> <?= $sasiNo ?></div>
          <div><strong>TSE-HYB No :</strong> <?= $tseNo ?></div>
        </div>
        <div class="header-right"><?= $sayfaNo ?></div>
      </div>

      <div class="title">KAPORTA - BOYA EKSPERTİZ VE CHECK-UP KARALAMA KAĞIDI</div>

      <div class="image-container">
        <img src="images/karalama.png" alt="Kaporta Boya Karalama Kağıdı">
      </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
      <div class="footer-left">
        <div><strong>Bu Raporu Telefonunuza İndirmek İçin,</strong><br> QR Kod’u Okutarak Raporu Görüntüleyebilirsiniz.</div>
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=90x90&data=<?= urlencode($isEmriNo) ?>" alt="QR">
      </div>

      <div class="footer-center">
        <div class="arrow">👇</div>
        <div>BU ALANA GÖRÜŞ YAZILIR.</div>
        <div class="arrow">👇</div>
      </div>

      <div class="footer-right">
        <div>EKSPERTİZ PAKET TUTARI: <?= $paketTutari ?></div>
        <div>YAPILAN ÖDEME: <?= $odeme ?></div>
        <div>RAPOR TARİHİ: <?= $tarih ?></div>
      </div>
    </div>
  </div>

</body>

</html>