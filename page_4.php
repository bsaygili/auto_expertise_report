<?php
$workOrder     = "AE01J070";
$plate         = "06CHJ966";
$chassis       = "SJNFAAJ11U2934005";
$tseHyb        = "08-HYB-5885";
$companyName   = "HANGAR MOTORLU ARAÇLAR";
$companySub    = "SEÇİM SOKAK NO:2 ALTINDAĞ - ANKARA";
$supportPhone  = "0 (531) 270-85-93";
$bayiName     = "Rapor Sahibinin";
$reportOpenBy = "Onur Can Özkan";
$acceptTime   = "03.09.2025 11:51";
$closeTime    = "03.09.2025 12:59";
$otoraporGirisKm = "86665";
$otoraporCikisKm  = "86665";
$packageRequested = ["FULL PAKET" => true, "SADECE KAPORTA" => false, "ELEKTRİKLİ OTOMOBİL PAKETİ" => false]; // örnek
$vehicle = [
  'brand' => 'NISSAN',
  'year'  => '2020',
  'model' => 'QASHQAI 1.5 DCI 115 DCT',
  'variant' => 'MIDNIGHT EDITION',
  'fuel' => 'Dizel',
  'plate' => $plate,
  'motor_no' => 'K9KUB37D126202',
  'transmission' => 'Otomatik (DCT)',
  'chassis' => $chassis
];
$customer = [
  'name' => 'NECDAT ÇAY',
  'phone' => '(0555) 010 1127',
  'tc' => '20020341850',
  'address' => 'ANKARA'
];
$owner = [
  'name' => 'OSMAN COŞKUN',
  'tc' => '10369122576',
  'phone' => '(0312) 455 7747',
  'address' => 'ANKARA'
];
$proxy = ['name' => 'NECDAT ÇAY', 'phone' => $customer['phone'], 'tc' => $customer['tc']];
$seller = ['name' => 'OSMAN COŞKUN', 'phone' => '', 'tc' => ''];
$technicians = ['Onur Can Özkan', 'Mert Harmandaş', 'Yakup Taşdemir'];
$package_price = 10000.00;
$paid_amount = 8750.00;
$report_date = date("d.m.Y");

// resim dosyaları (opsiyonel; yoksa placeholder gösterilir)
$qrFile = 'images/qrcode.png';
$appIos = 'images/appstore.png';
$appAnd = 'images/playstore.png';

// yardımcı fonksiyonlar

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
  <title>Oto Ekspertiz Raporu - Sayfa 4 - <?= e($chassis) ?></title>
  <!-- Google font (opsiyonel, internete bağlı isen birebir görünür) -->
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
      padding: 18px;
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
      /* siyah çerçeve */
      padding: 10px 26px;
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

    /* orta başlık (şasi + büyük başlıklar) */
    .center-block {
      text-align: center;
      margin: 6px 0 8px 0;
    }

    .chassis {
      font-family: "Montserrat", "Roboto", Arial, sans-serif;
      font-size: 26px;
      font-weight: 800;
      letter-spacing: 1px;
      margin-bottom: 6px;
    }

    .big-title {
      font-family: "Montserrat", "Roboto", Arial, sans-serif;
      font-size: 18px;
      font-weight: 700;
      text-transform: uppercase;
      margin: 2px 0;
    }

    .center-sub {
      text-align: center;
      font-size: 11.5px;
      color: #222;
      margin: 10px 0 8px;
    }

    /* bayi adres çubuğu */
    .dealer {
      font-size: 11px;
      text-align: center;
      color: #222;
      margin: 6px 0 12px;
      padding: 6px 10px;
      border-radius: 3px;
      background: #fafafa;
      border: 1px solid #eee;
    }

    /* iki-kolon: iş emri / bayi */
    .two-col {
      display: flex;
      gap: 14px;
      margin-bottom: 8px;
    }

    .col {
      flex: 1;
      border: 1px solid #999;
      padding: 8px;
      background: #fff;
      font-size: 11px;
      box-sizing: border-box;
    }

    .col .title {
      font-weight: 700;
      margin-bottom: 6px;
      font-size: 12px;
    }

    /* talepler (checkbox) */
    .requests {
      margin: 8px 0;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 12px;
    }

    .requests .pkg {
      border: 1px solid #ddd;
      padding: 6px 10px;
      font-weight: 700;
      background: #fff;
    }

    /* Araç Bilgileri başlığı */
    .section-title {
      text-align: center;
      border-bottom: 2px solid #333;
      margin: 12px 0 6px;
      font-weight: 700;
      padding-bottom: 6px;
      font-size: 12px;
    }

    /* Araç bilgileri kutuları (iki sütun) */
    .vehicle-box {
      display: flex;
      gap: 14px;
      margin-bottom: 10px;
    }

    .v-left,
    .v-right {
      flex: 1;
      border: 1px solid #bbb;
      padding: 10px;
      background: #fff;
      font-size: 12px;
      box-sizing: border-box;
    }

    .v-left .row,
    .v-right .row {
      display: flex;
      justify-content: space-between;
      margin: 6px 0;
    }

    .v-left .label,
    .v-right .label {
      color: #666;
      font-size: 11px;
      width: 48%;
    }

    .v-left .value,
    .v-right .value {
      font-weight: 700;
      text-align: right;
      width: 48%;
    }

    /* paneller (müşteri, araç sahibi vb) */
    .form-grid {
      display: flex;
      gap: 14px;
      margin-bottom: 10px;
    }

    .panel {
      flex: 1;
      border: 1px solid #ddd;
      padding: 10px;
      background: #fff;
      font-size: 11px;
      box-sizing: border-box;
    }

    .panel h4 {
      margin: 0 0 8px;
      font-size: 12px;
      border-bottom: 1px solid #eee;
      padding-bottom: 6px;
    }

    .field {
      display: flex;
      gap: 8px;
      margin-bottom: 6px;
    }

    .field .label {
      width: 42%;
      color: #666;
      font-size: 11px;
    }

    .field .val {
      width: 58%;
      font-weight: 700;
    }

    /* tekniker + fiyat kutusu */
    .bottom-row {
      display: flex;
      gap: 14px;
      margin-top: 6px;
    }

    .tech {
      flex: 2;
      border: 1px solid #ddd;
      padding: 10px;
      background: #fff;
      font-size: 11px;
    }

    .price-box {
      flex: 1;
      border: 2px solid #222;
      padding: 12px;
      background: #fff;
      font-size: 12px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-end;
      gap: 6px;
    }

    .price-box .label {
      color: #666;
      font-size: 11px;
    }

    .price-box .val {
      font-weight: 800;
      font-size: 14px;
    }

    /* imza alanları */
    .signs {
      display: flex;
      gap: 10px;
      margin-top: 12px;
    }

    .sign {
      flex: 1;
      text-align: center;
      border-top: 1px solid #222;
      padding-top: 8px;
      font-size: 11px;
    }

    /* alt bölüm: dikkat / QR / app */
    .lower {
      display: flex;
      gap: 16px;
      margin-top: 14px;
      font-size: 10.5px;
    }

    .lower .left {
      flex: 2;
      color: #444;
      line-height: 1.35;
    }

    .lower .right {
      flex: 1;
      text-align: center;
    }

    .qr {
      width: 100px;
      height: 100px;
      border: 1px solid #ccc;
      display: inline-block;
    }

    .app-icons {
      margin-top: 8px;
      display: flex;
      gap: 8px;
      justify-content: center;
    }

    .app-icons img {
      width: 88px;
      height: auto;
    }

    .foot {
      text-align: center;
      margin-top: 8px;
      font-size: 9px;
      color: #666;
      border-top: 1px dashed #ddd;
      padding-top: 8px;
    }

    /* print optimizasyon */
    @media print {
      body {
        padding: 0;
        background: #fff;
      }

      .page {
        box-shadow: none;
        border: 3px solid #000;
      }
    }


    /* küçük ekran düzeltmeleri */
    @media (max-width:900px) {

      /* .two-col, */
      /* .form-grid, .vehicle-box, .bottom-row, .lower { flex-direction:column; } */
      .top {
        gap: 4px;
      }

      .top .right {
        text-align: left;
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

    <!-- BAŞLIK / SUB -->
    <div style="text-align:center; padding:5px 0 5px 0; font-size: 12px; background-color: #bbb; border-radius: 50px;"><?= e($bayiName) ?></div>

    <div style="text-align:center;border-top:2px solid #111;border-bottom:2px solid #111;padding:8px 6px;font-weight:700;font-size:13px;margin-bottom:10px;">
      İŞ EMRİ / ARAÇ KABUL / TESLİM / BİLGİ FORMU (İMZALAR)
    </div>

    <div class="two-col">
      <div class="col">
        <div class="title">İŞ EMRİ</div>
        <div style="font-size:11px; line-height:1.45;">
          <strong>İŞ EMRİ AÇAN TEKNİSYEN:</strong> <?= e($reportOpenBy) ?><br>
          <strong>ARAÇ KABUL TARİHİ / SAAT:</strong> <?= e($acceptTime) ?><br>
          <strong>KAPANIŞ TARİH / SAAT:</strong> <?= e($closeTime) ?><br>
          <strong>OTORAPOR GİRİŞ KM:</strong> <?= e($otoraporGirisKm) ?><br>
          <strong>OTORAPOR ÇIKIŞ KM:</strong> <?= e($otoraporCikisKm) ?><br>
        </div>
      </div>

      <div class="col">
        <div class="title">BAYİ</div>
        <div style="font-size:11px;">
          Bu rapor: <strong>Hangar Motorlu Araçlar Anonim Şirketi</strong> tarafından üretilmiştir.<br>
          <strong>Bayi Adres:</strong><br>
          <?= e($companySub) ?><br>
          <strong>Destek:</strong> <?= e($supportPhone) ?>
        </div>
      </div>
    </div>

    <div class="requests">
      <div class="pkg">TALEP EDİLEN PAKETLER</div>
      <label style="font-size:12px;"><input type="checkbox" <?= $packageRequested['FULL PAKET'] ? 'checked' : '' ?>> FULL PAKET</label>
      <label style="font-size:12px;"><input type="checkbox" <?= $packageRequested['SADECE KAPORTA'] ? 'checked' : '' ?>> SADECE KAPORTA</label>
      <label style="font-size:12px;"><input type="checkbox" <?= $packageRequested['ELEKTRİKLİ OTOMOBİL PAKETİ'] ? 'checked' : '' ?>> ELEKTRİKLİ OTOMOBİL PAKETİ</label>
    </div>

    <div class="section-title">ARAÇ BİLGİLERİ</div>

    <div class="vehicle-box">
      <div class="v-left">
        <div class="row">
          <div class="label">MARKA :</div>
          <div class="value"><?= e($vehicle['brand']) ?></div>
        </div>
        <div class="row">
          <div class="label">ÜRETİM YILI (TARİH) :</div>
          <div class="value"><?= e($vehicle['year']) ?></div>
        </div>
        <div class="row">
          <div class="label">ŞASİ NO :</div>
          <div class="value"><?= e($vehicle['chassis']) ?></div>
        </div>
        <div class="row">
          <div class="label">ARAÇ YAKIT CİNSİ :</div>
          <div class="value"><?= e($vehicle['fuel']) ?></div>
        </div>
      </div>

      <div class="v-right">
        <div class="row">
          <div class="label">MODEL (CİNSİ) :</div>
          <div class="value"><?= e($vehicle['model']) ?></div>
        </div>
        <div class="row">
          <div class="label">PLAKA :</div>
          <div class="value"><?= e($vehicle['plate']) ?></div>
        </div>
        <div class="row">
          <div class="label">MOTOR NO :</div>
          <div class="value"><?= e($vehicle['motor_no']) ?></div>
        </div>
        <div class="row">
          <div class="label">VİTES :</div>
          <div class="value"><?= e($vehicle['transmission']) ?></div>
        </div>
      </div>
    </div>

    <div class="form-grid">
      <div class="panel">
        <h4>EKSPERTİZ TALEP EDEN / MÜŞTERİ BİLGİLERİ (ALICI)</h4>
        <div class="field">
          <div class="label">ADI SOYADI :</div>
          <div class="val"><?= e($customer['name']) ?></div>
        </div>
        <div class="field">
          <div class="label">TELEFON (CEP) :</div>
          <div class="val"><?= e($customer['phone']) ?></div>
        </div>
        <div class="field">
          <div class="label">T.C. NO / VERGİ NO :</div>
          <div class="val"><?= e($customer['tc']) ?></div>
        </div>
        <div class="field">
          <div class="label">ADRES :</div>
          <div class="val"><?= e($customer['address']) ?></div>
        </div>
      </div>

      <div class="panel">
        <h4>ARAÇ SAHİBİ (RUHSATTA YAZAN)</h4>
        <div class="field">
          <div class="label">ADI SOYADI :</div>
          <div class="val"><?= e($owner['name']) ?></div>
        </div>
        <div class="field">
          <div class="label">T.C. NO / VERGİ NO :</div>
          <div class="val"><?= e($owner['tc']) ?></div>
        </div>
        <div class="field">
          <div class="label">TELEFON :</div>
          <div class="val"><?= e($owner['phone']) ?></div>
        </div>
        <div class="field">
          <div class="label">ADRES :</div>
          <div class="val"><?= e($owner['address']) ?></div>
        </div>
      </div>
    </div>

    <div class="form-grid">
      <div class="panel">
        <h4>EKSPERTİZ TALEP EDEN ALICI VEKİLİ</h4>
        <div class="field">
          <div class="label">ADI SOYADI :</div>
          <div class="val"><?= e($proxy['name']) ?></div>
        </div>
        <div class="field">
          <div class="label">TELEFON :</div>
          <div class="val"><?= e($proxy['phone']) ?></div>
        </div>
        <div class="field">
          <div class="label">T.C. NO :</div>
          <div class="val"><?= e($proxy['tc']) ?></div>
        </div>
      </div>

      <div class="panel">
        <h4>Araç Kullanan / Vekil / Satıcı</h4>
        <div class="field">
          <div class="label">ADI SOYADI :</div>
          <div class="val"><?= e($seller['name']) ?></div>
        </div>
        <div class="field">
          <div class="label">TELEFON :</div>
          <div class="val"><?= e($seller['phone']) ?></div>
        </div>
      </div>
    </div>

    <div class="bottom-row">
      <div class="tech">
        <strong>TEKNİKERLER</strong>
        <ul style="margin:8px 0 0 18px; padding:0; font-size:11px;">
          <?php foreach ($technicians as $t): ?>
            <li><?= e($t) ?></li>
          <?php endforeach; ?>
        </ul>
        <div style="margin-top:8px; font-size:11px; color:#666;">
          Yedek Anahtar?
          <label style="margin-left:6px">
            <input type="checkbox" checked> EVET
          </label>
          &nbsp;&nbsp;
          <label>
            <input type="checkbox"> HAYIR
          </label>
          &nbsp;&nbsp;
          <label>
            <input type="checkbox"> BİLMİYORUM
          </label>
        </div>
        <div style="margin-top:8px; font-size:11px; color:#666;">
          Ruhsatın aslı görüldü mü? <label style="margin-left:6px"><input type="checkbox" checked> EVET</label> &nbsp;&nbsp; <label><input type="checkbox"> HAYIR</label>
        </div>
      </div>

      <div class="price-box">
        <div class="label">PAKET TUTARI</div>
        <div class="val"><?= tl($package_price) ?></div>

        <div class="label">YAPILAN ÖDEME</div>
        <div class="val"><?= tl($paid_amount) ?></div>

        <div style="width:100%; height:1px; background:#ddd; margin:6px 0;"></div>
        <div class="label">KALAN</div>
        <div class="val"><?= tl($package_price - $paid_amount) ?></div>
      </div>
    </div>

    <div class="signs">
      <div class="sign">Müşteri / Alıcı İmza<br><span style="font-size:10px;color:#666">Adı Soyadı: <?= e($customer['name']) ?></span></div>
      <div class="sign">Satıcı / Ruhsat Sahibi İmza<br><span style="font-size:10px;color:#666">Adı Soyadı: <?= e($owner['name']) ?></span></div>
    </div>

    <div class="lower">
      <div class="left">
        <strong>DİKKAT:</strong>
        <div style="margin-top:6px;">
          Bu rapor özet rapordur ve yalnızca araçla ilgili tespit edilen önemli hususları içerir. Ayrıntılı rapor, fotoğraflar ve ekspertiz sözleşmesi için lütfen mobil uygulamamız aracılığıyla raporu doğrulayınız.
        </div>
        <div style="margin-top:6px; font-size:10px; color:#666;">
          Rapor Tarihi: <?= e($report_date) ?> • Destek: <?= e($supportPhone) ?>
        </div>
      </div>

      <div class="right">
        <?php if (file_exists($qrFile)): ?>
          <img src="<?= e($qrFile) ?>" alt="QR" class="qr">
        <?php else: ?>
          <div class="qr" style="display:flex;align-items:center;justify-content:center;color:#999;font-size:11px;">QR (<?= e($qrFile) ?>)</div>
        <?php endif; ?>

        <!-- <div class="app-icons">
          <?php if (file_exists($appIos)): ?><img src="<?= e($appIos) ?>" alt="iOS"><?php endif; ?>
          <?php if (file_exists($appAnd)): ?><img src="<?= e($appAnd) ?>" alt="Android"><?php endif; ?>
        </div> -->
      </div>
    </div>

    <div class="foot">
      Rapor dijital ortamda üretilmiş olup, sadece bilgilendirme amaçlıdır. Yazılı kopya ve asıl rapor ilişkili bayi tarafından onaylanır. Bu belge, iş emri kapsamında düzenlenmiştir.
    </div>

  </div>
</body>

</html>