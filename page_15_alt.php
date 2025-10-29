<?php
$isEmriNo = "AÇ100170";
$plaka = "06CBA285";
$sasiNo = "VF3LCBHZCJS123405";
$tseNo = "06-HYB-5825";
$sayfaNo = "9 / 31";
$paketTutari = "1000,00 TL";
$kdv = "200,00 TL";
$genelToplam = "1200,00 TL";
$tarih = date('d.m.Y H:i');

function e($v)
{
  return htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <title>Kaporta-Boya Ekspertiz (Sol) - Sayfa 9 - <?= e($sasiNo) ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
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
      box-sizing: border-box;
      border: 3px solid #111;
      padding: 10px 26px;
      position: relative;
      color: #111;
    }

    .header {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
      margin-bottom: 8px;
    }

    .header .left div {
      line-height: 1.4;
    }

    .header .right {
      font-weight: bold;
    }

    .title {
      text-align: center;
      font-weight: bold;
      font-size: 15px;
      margin-bottom: 10px;
    }

    .vehicle {
      position: relative;
      width: 100%;
      height: 400px;
      background: url('arac-sol.png') no-repeat center center;
      background-size: contain;
      margin-bottom: 20px;
    }

    .label {
      position: absolute;
      width: 120px;
      font-size: 10px;
      background: #eaeaea;
      border: 1px solid #999;
      border-radius: 4px;
      padding: 4px;
      text-align: center;
      font-weight: bold;
    }

    .sol-on-camurluk {
      top: 60px;
      left: 40px;
    }

    .sol-on-kapi {
      top: 120px;
      left: 60px;
    }

    .sol-arka-kapi {
      top: 180px;
      left: 60px;
    }

    .sol-arka-camurluk {
      top: 240px;
      left: 40px;
    }

    .sol-marspiyel {
      top: 300px;
      left: 60px;
    }

    .sol-sase-ucu {
      top: 360px;
      left: 40px;
    }

    .pricing {
      font-size: 12px;
      font-weight: bold;
      border: 1px solid #000;
      border-radius: 6px;
      padding: 8px;
    }

    .footer-bottom {
      margin-top: 15px;
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }

    .qr {
      font-weight: bold;
      font-size: 10px;
    }

    .qr span {
      font-size: 9px;
    }

    .qr img {
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="page">
    <div class="header">
      <div class="left">
        <div><strong>İş Emri No :</strong> <?= $isEmriNo ?></div>
        <div><strong>Plaka :</strong> <?= $plaka ?></div>
        <div><strong>Şasi No :</strong> <?= $sasiNo ?></div>
        <div><strong>TSE-HYB No :</strong> <?= $tseNo ?></div>
      </div>
      <div class="right"><?= $sayfaNo ?></div>
    </div>

    <div class="title">KAPORTA - BOYA EKSPERTİZ (SOL)</div>

    <div class="vehicle">
      <div class="label sol-on-camurluk">Sol Ön Çamurluk<br>Boyalı<br>Lokal Boyalı</div>
      <div class="label sol-on-kapi">Sol Ön Kapı<br>Boyalı<br>Lokal Boyalı</div>
      <div class="label sol-arka-kapi">Sol Arka Kapı<br>Boyalı<br>Lokal Boyalı</div>
      <div class="label sol-arka-camurluk">Sol Arka Çamurluk<br>Değişmiş<br>Lokal Boyalı</div>
      <div class="label sol-marspiyel">Sol Marşpiyel<br>Boyalı<br>Lokal Boyalı</div>
      <div class="label sol-sase-ucu">Sol Arka Şase Ucu<br>Değişmiş<br>Lokal Boyalı</div>
    </div>

    <div class="pricing">
      <div>EKSPERTİZ ÜCRETİ: <?= $paketTutari ?></div>
      <div>KDV (%20): <?= $kdv ?></div>
      <div>GENEL TOPLAM: <?= $genelToplam ?></div>
      <div>RAPOR TARİHİ: <?= $tarih ?></div>
    </div>

    <div class="footer-bottom">
      <div class="qr">
        <span>BU RAPORU TELEFONUNUZA İNDİRMEK İÇİN, QR KODU OKUTARAK RAPORU GÖRÜNTÜLEYEBİLİRSİNİZ.<br></span>
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=<?= urlencode($isEmriNo) ?>" alt="QR">
      </div>
    </div>
  </div>
</body>

</html>