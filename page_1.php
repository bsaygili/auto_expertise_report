<?php
// === DİNAMİK VERİLER ===
$workOrder     = "AE01J070";
$plate         = "06CHJ966";
$chassis       = "SJNFAAJ11U2934005";
$tseHyb        = "08-HYB-5885";
$motorNo       = "K9KUB37D126202";
$mileage       = "86.665 Km";
$companyName   = "HANGAR MOTORLU ARAÇLAR";
$companySub    = "SEÇİM SOKAK NO:2 ALTINDAĞ - ANKARA";
$supportPhone  = "0 (531) 270-85-93";
$dealerAddress = "Efir Mahallesi, Dumlupınar Bulvarı (Eskişehir yolu üzeri), No:356 Shell benzinlik içi / Etimesgut-Ankara";
$noteLine      = "BU RAPOR, Hangar Motorlu Araçlar Anonim Şirketi TARAFINDAN ÜRETİLMİŞTİR. HER OTORAPOR, BAĞIMSIZ FRANCHISE İŞLETMESİDİR. HER İŞLETME KENDİ ÜRETTİĞİ RAPORDAN SORUMLUDUR.";
$photoFile     = "images/car-photo.jpg";    // projede olmalı
$qrFile        = "images/qrcode.png";       // projede olmalı
$appIosFile    = "images/appstore.svg";     // projede olmalı
$appAndFile    = "images/playstore.png";    // projede olmalı
$reportDate    = date("d.m.Y");


function e($v)
{
  return htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <title>Oto Ekspertiz Raporu - Sayfa 1 - <?= e($chassis) ?></title>

  <!-- Google font (opsiyonel, internete bağlı isen daha yakın görünür) -->
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
      padding: 18px;
      display: flex;
      justify-content: center;
      font-family: "Roboto", Arial, sans-serif;
      -webkit-print-color-adjust: exact;
    }

    /* A4 sayfa kutusu (kopya sayfa içinde merkezi) */
    .page {
      width: 210mm;
      height: 297mm;
      background: #fff;
      box-sizing: border-box;
      border: 3px solid #111;
      /* siyah çerçeve */
      padding: 18px 26px;
      color: #111;
    }

    /* Üst bilgi bölümü */
    .top {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 6px;
    }

    .top-left {
      font-size: 12px;
      line-height: 1.4;
    }

    .top-left .small {
      color: #666;
      font-size: 11px;
    }

    .top-right {
      text-align: right;
      font-size: 12px;
      color: #333;
    }

    /* Büyük merkez başlıklar */
    .center-title {
      text-align: center;
      margin-top: 6px;
      margin-bottom: 6px;
    }

    .center-title .chassis {
      font-family: "Montserrat", "Roboto", Arial, sans-serif;
      font-size: 26px;
      font-weight: 800;
      letter-spacing: 1px;
    }

    .center-title .h1 {
      font-size: 20px;
      font-weight: 700;
      margin-top: 8px;
      text-transform: uppercase;
    }

    .center-sub {
      text-align: center;
      font-size: 12px;
      color: #222;
      margin-top: 8px;
      margin-bottom: 6px;
    }

    /* bayi adres satırı ince çerçeve */
    .dealer {
      font-size: 11px;
      text-align: center;
      color: #222;
      margin: 6px 0 12px 0;
      padding: 6px 10px;
      border-radius: 3px;
      background: #fafafa;
      border: 1px solid #eee;
    }

    /* Foto alanı */
    .photo-wrap {
      display: flex;
      justify-content: center;
      margin: 12px 0;
    }

    .photo {
      width: 260px;
      height: 200px;
      position: relative;
      border: 1px solid #ddd;
      display: inline-block;
      overflow: hidden;
      box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.02) inset;
    }

    .photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .mileage {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      bottom: 8px;
      background: rgba(0, 0, 0, 0.55);
      color: #fff;
      padding: 6px 14px;
      font-weight: 700;
      border-radius: 3px;
      font-size: 14px;
      letter-spacing: 0.6px;
    }

    .under-photo {
      text-align: center;
      margin-top: 10px;
      font-size: 14px;
    }

    .under-photo strong {
      display: inline-block;
      margin: 6px 0;
      font-weight: 700;
    }

    /* Dikkat / QR kutusu */
    .notice {
      margin-top: 18px;
      padding: 12px;
      border-radius: 8px;
      border: 1px solid #222;
      display: flex;
      gap: 12px;
      align-items: flex-start;
      background: #fff;
    }

    .notice .left {
      flex: 1;
      font-size: 12px;
      line-height: 1.45;
      color: #111;
    }

    .notice .right {
      width: 210px;
      text-align: center;
    }

    .notice .right img.qr {
      width: 120px;
      height: 120px;
      object-fit: contain;
      display: block;
      margin: 0 auto 8px;
    }

    .notice .apps {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 6px;
    }

    .notice .apps img {
      width: 86px;
      height: auto;
    }

    /* küçük dikkat başlığı */
    .notice strong {
      display: block;
      margin-bottom: 6px;
      font-weight: 700;
    }

    /* Footer küçük yazı */
    .footer {
      margin-top: 14px;
      font-size: 10px;
      color: #444;
      text-align: center;
      line-height: 1.35;
    }

    /* print optimizasyon */
    @media print {
      body {
        padding: 0;
        background: #fff;
      }

      .page {
        box-shadow: none;
        border: 6px solid #000;
      }
    }

    /* bazı responsive küçük düzeltmeler */
    @media (max-width:900px) {
      .page {
        width: 100%;
        height: auto;
        border-width: 3px;
      }
    }
  </style>
</head>

<body>
  <div class="page">

    <!-- üst bilgi (solda küçük liste, sağda tarihe veya iletişim bilgilerine yer verilebilir) -->
    <div class="top">
      <div class="top-left">
        <div><strong>İş Emri No :</strong> <?= e($workOrder) ?></div>
        <div><strong>Plaka :</strong> <?= e($plate) ?></div>
        <div><strong>Şasi No :</strong> <?= e($chassis) ?></div>
        <div><strong>TSE-HYB No :</strong> <?= e($tseHyb) ?></div>
      </div>
      <div class="top-right">
        <div style="font-weight:700;"><?= e($companyName) ?></div>
        <div class="small"><?= e($companySub) ?></div>
        <div class="small">İletişim: <?= e($supportPhone) ?></div>
      </div>
    </div>

    <!-- merkez başlıklar -->
    <div class="center-title">
      <div class="chassis"><?= e($chassis) ?></div>
      <div class="h1">Şasi Numaralı Aracın</div>
      <div class="h1" style="font-size:22px;">OTORAPOR</div>
      <div class="h1" style="font-size:18px;">OTO EKSPERTİZ RAPORUDUR</div>
    </div>

    <!-- kısa açıklama -->
    <div class="center-sub"><?= e($noteLine) ?></div>

    <!-- bayi adres -->
    <div class="dealer">Bayi Adresi: <?= e($dealerAddress) ?></div>
    <div class="dealer">Raporla İlgili Destek İstediğinizde <?= e($supportPhone) ?> Numaralı Telefondan Bize Ulaşabilirsiniz</div>
    <div class="center-sub">ARAÇ SATICISI, YÖNETMELİK GEREĞİ; (8 YAŞ 160.000 KM.) SATTIĞI ARACA 3 AY 5000 KM. GARANTİ VERMEK ZORUNDADIR.” ARAÇTA HERHANGİ BİR ARIZA ÇIKMASI HALİNDE, ARAÇ SATICISI İLE İRTİBATA GEÇİP, UZATILMIŞ GARANTİ İSTEYİNİZ VE GARANTİ FİRMASINI ARAYINIZ. </div>

    <!-- fotoğraf + alt bilgiler -->
    <div class="photo-wrap">
      <div class="photo" aria-hidden="true">
        <?php if (file_exists($photoFile)): ?>
          <img src="<?= e($photoFile) ?>" alt="Araç Fotoğrafı">
        <?php else: ?>
          <!-- yoksa boş placeholder -->
          <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:#999;font-size:13px;background:#f6f6f6;">Fotoğraf bulunamadı<br><?= e($photoFile) ?></div>
        <?php endif; ?>
        <div class="mileage"><?= e($mileage) ?></div>
      </div>
    </div>

    <div class="under-photo">
      <div><strong>Plaka :</strong> <?= e($plate) ?> &nbsp;&nbsp; <strong>Motor No :</strong> <?= e($motorNo) ?></div>
    </div>
    <div class="under-photo">
      <div><strong>ARACIN KRONİK ARIZALI PARÇA GERİ ÇAĞIRMA (RECALL) KAYDI OLUP OLMADIĞINI YETKİLİ SERVİSTEN SORGULATMAYI UNUTMAYINIZ. İMALAT KAYNAKLI ARIZAYA SAHİP RECALL EDİLMİŞ ARAÇLARIN TAZMİN YÜKÜMLÜLÜĞÜ ÜRETİCİ FİRMA SORUMLULUĞUNDADIR.</div>
    </div>

    <!-- dikkat/qr kutusu -->
    <div class="notice">
      <div class="left">
        <strong>DİKKAT</strong>
        Bu rapor doğa dostu özet rapordur ve sadece sizin için önemli noktaları içerir. Detaylı raporu, diğer fotoğrafları, ekspertiz sözleşmesini, raporun orijinal olup olmadığını teyit etmek için, Otorapor Mobil uygulamasını android veya iPhone işletim sistemine sahip akıllı telefonlarınıza indirip bu sayfadaki karekodu okutarak detaylı raporu görebilir ve raporunuzu ömür boyu telefonunuzda saklayabilirsiniz. Karekodu tarayınız ve raporu telefonunuza indiriniz.
        <div style="margin-top:8px;font-size:11px;color:#444;">
          Ayrıca otorapor.com sitemizden rapor iş emri numarası olan <?= e($workOrder) ?> kodu ile elinizdeki raporun değiştirilmemiş olduğunu teyit edebilirsiniz.
        </div>
        <div style="margin-top:8px;font-size:11px;color:#444;">
          Raporla ilgili destek: <?= e($supportPhone) ?> • Rapor Tarihi: <?= e($reportDate) ?>
        </div>
      </div>

      <div class="right">
        <?php if (file_exists($qrFile)): ?>
          <img class="qr" src="<?= e($qrFile) ?>" alt="QR Kod">
        <?php else: ?>
          <div style="width:120px;height:120px;border:1px dashed #ccc;display:flex;align-items:center;justify-content:center;color:#999;font-size:12px;">QR yok<br><?= e($qrFile) ?></div>
        <?php endif; ?>

        <div class="apps">
          <?php if (file_exists($appIosFile)): ?>
            <img src="<?= e($appIosFile) ?>" alt="iPhone">
          <?php endif; ?>
          <?php if (file_exists($appAndFile)): ?>
            <img src="<?= e($appAndFile) ?>" alt="Android">
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- footer küçük yasal metin -->
    <div class="footer">
      Bu rapor; araç satıcısı, üretici, distribütör veya üçüncü tarafların garantisini değiştirmez. Rapor, aracın ekspertiz tarihindeki durumu göz önüne alınarak hazırlanmıştır. Detaylı ekspertiz ve garanti konuları için lütfen bayi ile görüşünüz.
    </div>
  </div>
</body>

</html>