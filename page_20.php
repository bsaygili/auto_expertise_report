<?php
$isEmriNo = "AEÜ01170";
$plaka = "06CHJ966";
$sasiNo = "SJNFAAJ11U2934005";
$tseNo = "06-HYB-5885";
$sayfaNo = "14 / 31";
$paketTutari = "10000,00 TL";
$odeme = "9750,00 TL";
$tarih = date('d.m.Y H:i');

$cokOnemliKontroller = [];
$ortaOnemliKontroller = [];
$azOnemliKontroller = [];

$kontroller = [
  ["Ön Kaput", "Çizik,Ezik Mevcut,Kaplama", ": 250 Üzeri µ (mikron)"],
  ["Arka Tampon", "⚠️", "Plastik Parça,Çizik,Ezik Mevcut,Kırık,Darbe-Hasar Mevcut"],
  ["Sol Ön - Kapı", "Çizik,Ezik Mevcut,Göçük Mevcut", ": 90-110 µ (mikron)"],
  ["Sağ Arka - Kapı", "Orijinal,Çizik,Ezik Mevcut,Göçük Mevcut", ": 90-110 µ (mikron)"],
  ["Sağ Ön Kapı", "Orijinal,Çizik,Ezik Mevcut,Göçük Mevcut", ": 90-110 µ (mikron)"],
  ["Sol Ön - Çamurluk", "Orijinal,Çizik,Ezik Mevcut", ": 90-110 µ (mikron)"],
  ["Sol Arka - Kapı", "Orijinal,Çizik,Ezik Mevcut", ": 90-110 µ (mikron)"],
  ["Sol Arka - Çamurluk", "Orijinal,Çizik,Ezik Mevcut,Göçük Mevcut", ": 90-110 µ (mikron)"],
  ["Sağ Arka Çamurluk", "Çizik,Ezik Mevcut,Göçük Mevcut", ": 90-110 µ (mikron)"],
  ["Arka Bagaj", "Çizik Mevcut", ": 90-110 µ (mikron)"],
  ["Araçta Noktasal Ezik-Çizik Mevcut mu? Fotoğraf", "Evet", ""],
  ["Ön Tampon", "Plastik Parça,Çizik", ""],
  ["Sağ Marşbiyel", "Plastik,Çizik Mevcut", ""],
  ["Sol Marşbiyel", "Plastik,Çizik Mevcut", ""],
  ["Kapı Fitil Lastikleri ve Kapı Gergileri", "⚠️ Orta", ""],
  ["Ön Panjur", "✓ Sorunsuz", ""],
  ["Tavanda Göçük Mevcut mu?", "✓ Sorunsuz", ""],
  ["Tavan", "✓ Orjinal", ": 90-110 µ (mikron)"],
];

function e($v)
{
  return htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
function tl($v)
{
  return number_format((float)$v, 2, ',', '.') . " TL";
}
?>
<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <title>Oto Ekspertiz Raporu - Sayfa 20 - <?= e($sasiNo) ?></title>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600;800&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

  <style>
    /* A4 ve yazdırma ayarları */
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

    /* Sayfa kutusu (A4) */
    .page {
      width: 210mm;
      height: 297mm;
      background: #fff;
      box-sizing: border-box;
      border: 3px solid #111;
      padding: 10px 26px;
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

    .section-title {
      background: #dcdcdc;
      text-align: center;
      font-weight: bold;
      padding: 6px;
      border-radius: 6px;
      margin-top: 10px;
      margin-bottom: 6px;
    }

    .table {
      width: 100%;
      border-collapse: collapse;
      font-size: 11.5px;
      color: #111;
    }

    .table tr:nth-child(even) td {
      background: #f2f2f2;
      /* daha koyu gri */
    }

    .table tr:nth-child(odd) td {
      background: #dbdbdbff;
      /* açık gri */
    }

    .table td {
      padding: 6px 8px;
      border-bottom: 1px solid #ccc;
      /* biraz daha belirgin çizgi */
    }

    .table td:nth-child(1) {
      width: 40%;
    }

    .table td:nth-child(2) {
      width: 30%;
      text-align: center;
      font-weight: bold;
    }

    .table td:nth-child(3) {
      width: 30%;
      text-align: center;
      font-weight: bold;
    }

    /* İsteğe bağlı: hover efekti */
    .table tr:hover td {
      background: #dfbdbdff;
    }

    .footer-bottom {
      margin-top: 5px;
      display: flex;
      justify-content: space-between;
      flex-direction: row;
      align-items: flex-start;

    }

    .qr {
      /* text-align:center; */
      margin-top: 10px;
      font-weight: bold;
      font-size: 10px;
    }

    .qr span {
      font-size: 9px;
    }

    .qr img {
      margin-top: 10px;
    }

    .bottom {
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      text-align: right;
      font-weight: bold;
      font-size: 10px;
      margin-top: 10px;
      border: solid 1px #000;
      border-radius: 5px;
      padding: 5px;
    }

    @media print {
      body {
        background: #fff;
        margin: 0;
      }

      .page {
        border: none;
      }
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

    <div class="title">KAPORTA - BOYA EKSPERTİZ VE CHECK-UP RAPORU</div>
    <?php if (!empty($cokOnemliKontroller)) : ?>
      <div class="section-title">ÇOK ÖNEMLİ NOKTALAR</div>
    <?php endif; ?>
    <table class="table">
      <?php foreach ($cokOnemliKontroller as $row): ?>
        <tr>
          <td><?= htmlspecialchars($row[0]) ?></td>
          <td><?= htmlspecialchars($row[1]) ?></td>
          <td><?= htmlspecialchars($row[2]) ?></td>
        </tr>
      <?php endforeach; ?>
    </table>

    <?php if (!empty($ortaOnemliKontroller)) : ?>
      <div class="section-title">ORTA ÖNEMLİ NOKTALAR</div>
    <?php endif; ?>
    <table class="table">
      <?php foreach ($ortaOnemliKontroller as $row): ?>
        <tr>
          <td><?= htmlspecialchars($row[0]) ?></td>
          <td><?= htmlspecialchars($row[1]) ?></td>
          <td><?= htmlspecialchars($row[2]) ?></td>
        </tr>
      <?php endforeach; ?>
    </table>

    <?php if (!empty($azOnemliKontroller)) : ?>
      <div class="section-title">AZ ÖNEMLİ NOKTALAR</div>
    <?php endif; ?>
    <table class="table">
      <?php foreach ($azOnemliKontroller as $row): ?>
        <tr>
          <td><?= htmlspecialchars($row[0]) ?></td>
          <td><?= htmlspecialchars($row[1]) ?></td>
          <td><?= htmlspecialchars($row[2]) ?></td>
        </tr>
      <?php endforeach; ?>
    </table>

    <?php if (!empty($kontroller)) : ?>
      <div class="section-title">KONTROLLER</div>
    <?php endif; ?>
    <table class="table">
      <?php foreach ($kontroller as $row): ?>
        <tr>
          <td><?= htmlspecialchars($row[0]) ?></td>
          <td><?= htmlspecialchars($row[1]) ?></td>
          <td><?= htmlspecialchars($row[2]) ?></td>
        </tr>
      <?php endforeach; ?>
    </table>

    <div class="footer-bottom">
      <div class="qr">
        <span>BU RAPORU TELEFONUNUZA İNDİRMEK İÇİN, QR KODU OKUTARAK RAPORU GÖRÜNTÜLEYEBİLİRSİNİZ.<br></span>
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=<?= urlencode($isEmriNo) ?>" alt="QR">
      </div>
      <div class="bottom">
        <div>EKSPERTİZ PAKET TUTARI: <?= $paketTutari ?></div>
        <div>YAPILAN ÖDEME: <?= $odeme ?></div>
        <div>RAPOR TARİHİ: <?= $tarih ?></div>
      </div>
    </div>

  </div>
</body>

</html>