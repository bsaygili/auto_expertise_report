<?php
$isEmriNo = "AEÜ01170";
$plaka = "06CHJ966";
$sasiNo = "SJNFAAJ11U2934005";
$tseNo = "06-HYB-5885";
$sayfaNo = "18 / 31";
$paketTutari = "10000,00 TL";
$odeme = "9750,00 TL";
$tarih = date('d.m.Y H:i');

$puanlar = [
  ['kategori' => 'ÇOK ÖNEMLİ NOKTALAR', 'puan' => 10, 'toplam' => 10],
  ['kategori' => 'ORTA ÖNEMLİ NOKTALAR', 'puan' => 5, 'toplam' => 5],
  ['kategori' => 'AZ ÖNEMLİ NOKTALAR', 'puan' => 8, 'toplam' => 8],
  ['kategori' => 'TÜM NOKTALAR', 'puan' => 23, 'toplam' => 23],
];

$obdNoktalar = [
  'Hava Yastığı Elektroniği' => 'Yok',
  'Motor Işığı' => 'Yanmyor',
  'ABS / ESP / ESR Elektroniği' => 'Arıza Kaydı Yok',
  'Klima Elektroniği' => 'Arıza Kaydı Yok',
  'Motor Beyin Elektroniğinde' => 'Arıza Kaydı Var mı?',
  'Elektrikli Direksiyon' => 'Yok',
  'Lastik Basınç Elektroniği' => 'Arıza Kaydı Yok',
  'Gövde Elektronik Arızası' => 'Hayır',
  'Şanzıman Elektroniği' => 'Mevcut mu?',
  'OBD Test Çıktısı Görseli' => 'OBD Test Görseli',
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

<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <title>Oto Ekspertiz Raporu - Sayfa 24 - <?= e($sasiNo) ?></title>

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
      position: relative;
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

    .stars-section-container {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      margin-bottom: 20px;

    }

    /* Sağ üstteki araç görseli */
    .car-bg {
      width: 220px;
      opacity: 0.75;
      z-index: 0;
    }

    .obd-car-section {
      display: flex;
      justify-content: center;
      margin-bottom: 10px;
      width: 50%;
    }

    .stars-section {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 6px;
      text-align: center;
      font-size: 11px;
      font-weight: bold;
      margin-bottom: 10px;
      width: 50%;
    }

    .stars {
      color: #d62828;
      font-size: 13px;
      margin: 3px 0;
    }

    .obd-section {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 15px;
      margin: 25px 0 25px;
      /* position: relative; */
      /* z-index: 2; */
    }

    .obd-item {
      background: #f4f4f4;
      border-radius: 10px;
      padding: 6px 10px;
      font-size: 11px;
      border: 1px solid #ddd;
    }

    .obd-item strong {
      display: inline-block;
      width: 16px;
    }

    .summary {
      margin-top: 20px;
      font-size: 10.5px;
      position: relative;
      z-index: 2;
    }

    .summary h3 {
      font-size: 12px;
      font-weight: bold;
      color: #555;
    }

    .summary p {
      margin: 4px 0;
      line-height: 1.4;
    }

    .footer {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      font-size: 10px;
      line-height: 1.3;
      position: relative;
      z-index: 2;
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

      <div class="title">OBD / BEYİN TEST</div>
      <div class="stars-section-container">

        <!-- PUANLAR -->
        <div class="stars-section">
          <?php foreach ($puanlar as $p):
            $oran = ($p['puan'] / $p['toplam']) * 100;
            $stars = str_repeat('★', 5); // backend puanına göre dinamik yapılabilir
          ?>
            <div>
              <?= $p['kategori'] ?><br>
              <div class="stars"><?= $stars ?></div>
              <?= number_format($oran, 0) ?>% (<?= $p['puan'] ?> puan üzerinden <?= $p['toplam'] ?> puan)
            </div>
          <?php endforeach; ?>
        </div>
        <div class="obd-car-section">
          <img src="images/car_obd.png" alt="Araç Görseli" class="car-bg">
        </div>
      </div>

      <!-- OBD NOKTALARI -->
      <div class="obd-section">
        <?php $i = 1;
        foreach ($obdNoktalar as $ad => $durum): ?>
          <div class="obd-item">
            <strong><?= $i++ ?></strong> <?= $ad ?><br><?= $durum ?>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- ÖZET -->
      <div class="summary">
        <h3>EKSERTİZ ÖZETİ VE GENEL DURUM NOTLARI <span style="font-weight:normal;">(UZMAN TEKNİKER GÖRÜŞÜ)</span></h3>
        <p>
          <strong>“Servis Kontrolü Gereklidir”, “Acil Olarak Servis Bakımı Gereklidir.”</strong> ibaresi bulunan ve test noktalarında "kötü/orta" tespiti olan araçların, servis bakımları yapılmadan trafiğe çıkması sakıncalıdır.
        </p>
        <p>Servis müdahalesi gerektiren problemlerden doğacak durumlardan Otorapor sorumlu değildir.</p>
        <p>'Chip tuning, ateşleme yazılımı, gaz tepkime arttırıcı, şanzıman beyni update ve modifikasyonlar garantimiz dışındadır. Araç servis beyin güncellemesi almalıdır. Bu hususlar sorumluluğumuzda değildir. Ekspertiz hizmetimizde bu noktalar kontrol edilmemektedir.'</p>
        <p>Araç elektrikli ise; Aracın pil ve elektrik sistemi “OTORAPOR ELEKTİKLİ ARAÇ&BATARYA TEST PAKETİ” satın alınarak ölçülmelidir.</p>
        <p><strong>OBD Test Çıktısı Görseli :</strong> Add blue ve K9k arızası mevcut</p>
        <p><strong>Usta Görüşü:</strong> Add blue ve K9k arızası</p>
      </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
      <div class="footer-left">
        <div><strong>Bu Raporu Telefonunuza İndirmek İçin,</strong><br> QR Kod’u Okutarak Raporu Görüntüleyebilirsiniz.</div>
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=<?= urlencode($isEmriNo) ?>" alt="QR">
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