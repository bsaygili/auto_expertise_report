<?php
$isEmriNo = "AEÜ01170";
$plaka = "06CHJ966";
$sasiNo = "SJNFAAJ11U2934005";
$tseNo = "06-HYB-5885";
$sayfaNo = "8 / 31";
$paketTutari = "10000,00 TL";
$odeme = "9750,00 TL";
$tarih = date('d.m.Y H:i');

$bolumler = [
  [
    'class' => 'sol_on_camurluk',
    'renk' => 'green',
    'baslik' => 'Sol Ön Çamurluk',
    'aciklama' => 'Orijinal Çizik-Boya Mevcut'
  ],
  [
    'class' => 'sol_on_ic_direk',
    'renk' => 'green',
    'baslik' => 'Sol Ön İç Direk',
    'aciklama' => 'Orijinal'
  ],
  [
    'class' => 'sol_on_kapi',
    'renk' => 'orange',
    'baslik' => 'Sol Ön Kapı',
    'aciklama' => 'Çizik-Boya Mevcut'
  ],
  [
    'class' => 'sol_arka_kapi',
    'renk' => 'green',
    'baslik' => 'Sol Arka Kapı İç Direk',
    'aciklama' => 'Orijinal'
  ],
  [
    'class' => 'sol_arka_kapi2',
    'renk' => 'orange',
    'baslik' => 'Sol Arka Kapı',
    'aciklama' => 'Orijinal Çizik-Boya Mevcut<br>Mic-10'
  ],
  [
    'class' => 'sol_arka_camurluk',
    'renk' => 'orange',
    'baslik' => 'Sol Arka Çamurluk',
    'aciklama' => 'Orijinal Çizik-Boya Mevcut<br>Mic-20'
  ]
];

// Güvenlik fonksiyonları
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
  <title>Oto Ekspertiz Raporu - Sayfa 15 - <?= e($sasiNo) ?></title>

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
      margin: 0;
      padding: 0;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
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
    }

    .title {
      text-align: center;
      font-weight: bold;
      font-size: 15px;
      margin: 12px 0 18px;
    }

    .content {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-grow: 1;
    }

    .car-image {
      width: 600px;
      opacity: 0.9;
    }

    .rotate270 {
      transform: rotate(270deg);
    }

    .label {
      position: absolute;
      border: 1px solid;
      padding: 4px 8px;
      font-size: 10px;
      line-height: 1.2;
      border-radius: 3px;
      background: #fff;
      box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    /* Yeşil kutular */
    .green {
      border-color: #008000;
      color: #008000;
    }

    /* Turuncu kutular */
    .orange {
      border-color: #d97706;
      color: #d97706;
    }

    /* Kutuların pozisyonları */
    .label.sol_on_camurluk {
      top: 80px;
      left: 150px;
    }

    .label.sol_on_ic_direk {
      top: 140px;
      left: 170px;
    }

    .label.sol_arka_kapi {
      top: 210px;
      left: 160px;
    }

    .label.sol_arka_camurluk {
      top: 270px;
      left: 140px;
    }

    .label.sol_arka_kapi_orj {
      top: 210px;
      right: 200px;
    }

    .label.sol_arka_camurluk_orj {
      top: 270px;
      right: 180px;
    }

    .label.sol_arka_kapi2 {
      top: 160px;
      right: 210px;
    }

    .label.sol_on_kapi {
      top: 120px;
      right: 190px;
    }

    .label.sol_on_camurluk_orj {
      top: 70px;
      right: 170px;
    }

    .small-car {
      position: absolute;
      bottom: 50px;
      right: 50px;
      width: 80px;
      opacity: 0.8;
    }

    .footer {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      font-size: 10px;
      line-height: 1.3;
      margin-top: 20px;
    }

    .footer-left {
      max-width: 45%;
    }

    .footer-left img {
      width: 60px;
      height: 60px;
      margin-top: 4px;
    }

    .footer-center {
      text-align: center;
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

    .placeholder-image {
      width: 600px;
      height: 400px;
      background: #f5f5f5;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px dashed #ccc;
    }

    .placeholder-small {
      width: 80px;
      height: 80px;
      background: #f5f5f5;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px dashed #ccc;
      font-size: 8px;
      text-align: center;
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
          <div><strong>İş Emri No :</strong> <?= e($isEmriNo) ?></div>
          <div><strong>Plaka :</strong> <?= e($plaka) ?></div>
          <div><strong>Şasi No :</strong> <?= e($sasiNo) ?></div>
          <div><strong>TSE-HYB No :</strong> <?= e($tseNo) ?></div>
        </div>
        <div class="header-right"><?= e($sayfaNo) ?></div>
      </div>

      <div class="title">KAPORTA - BOYA EKSPERTİZ VE CHECK-UP DETAYLI SOL</div>
    </div>

    <!-- ORTA İÇERİK -->
    <div class="content">

      <img src="images/car-vector-left.png" alt="Araç Görseli" class="car-image rotate270">

      <!-- Dinamik olarak oluşturulan bölüm etiketleri -->
      <?php foreach ($bolumler as $bolum): ?>
        <div class="label <?= e($bolum['renk']) ?> <?= e($bolum['class']) ?>">
          <?= e($bolum['baslik']) ?><br><?= $bolum['aciklama'] ?>
        </div>
      <?php endforeach; ?>

      <div class="small-car placeholder-small">
        <span>side_small.png</span>
      </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
      <div class="footer-left">
        <div><strong>Bu Raporu Telefonunuza İndirmek İçin,</strong><br> QR Kod'u Okutarak Raporu Görüntüleyebilirsiniz.</div>
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=90x90&data=<?= urlencode($isEmriNo) ?>" alt="QR">
      </div>

      <div class="footer-center">
        <div class="arrow">👇</div>
        <div>BU ALANA GÖRÜŞ YAZILIR.</div>
        <div class="arrow">👇</div>
      </div>

      <div class="footer-right">
        <div>EKSPERTİZ PAKET TUTARI: <?= e($paketTutari) ?></div>
        <div>YAPILAN ÖDEME: <?= e($odeme) ?></div>
        <div>RAPOR TARİHİ: <?= e($tarih) ?></div>
      </div>
    </div>

  </div>
</body>

</html>