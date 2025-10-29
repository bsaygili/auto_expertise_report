<?php
$workOrder     = "AE01J070";
$plate         = "06CHJ966";
$chassis       = "SJNFAAJ11U2934005";
$tseHyb        = "08-HYB-5885";
$companyName   = "HANGAR MOTORLU ARAÇLAR";
$companySub    = "SEÇİM SOKAK NO:2 ALTINDAĞ - ANKARA";
$supportPhone  = "0 (531) 270-85-93";
$bayiName     = "Rapor Sahibinin";

$workOrder = "AEÜ01170";
$plaka = "06CHJ966";
$sasiNo = "SJNFAAJ11U2934005";
$tseNo = "06-HYB-5885";
$sayfaNo = "2 / 31";

$chassis = "***4005";
$model = "NISSAN QASHQAI 1.5 DCI 115 DCT MIDNIGHT EDITION";
$paketTutari = "10000,00 TL";
$odeme = "9750,00 TL";
$tarih = "03.09.2025";

function e($v){ return htmlspecialchars($v, ENT_QUOTES|ENT_SUBSTITUTE, 'UTF-8'); }
function tl($v){ return number_format((float)$v, 2, ',', '.') . " TL"; }
?>

<!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8">
  <title>Oto Ekspertiz Raporu - Sayfa 8 - <?= e($chassis) ?></title>
  <!-- Google font (opsiyonel, internete bağlı isen birebir görünür) -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600;800&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

<style>
    /* A4 ve yazdırma ayarları */
  @page { size: A4; margin: 0; }
  html, body { 
    height:100%; background:#f0f0f0;
  }
  
  body {
    margin:0;
    padding:18px;
    display:flex;
    justify-content:center;
    font-family: "Roboto", Arial, sans-serif;
    -webkit-print-color-adjust: exact;
  }
  
  /* Sayfa kutusu (A4) */
 .page {
    width:210mm;
    height:290mm;
    background:#fff;
    box-sizing:border-box;
    border:3px solid #111;   /* siyah çerçeve */
    padding:10px 26px;
    color:#111;
  }

  /* Üst bilgi bölümü */
  .top {
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    margin-bottom:6px;
  }
  .top-left { font-size:12px; line-height:1.4; }
  .top-left .small{ color:#666; font-size:11px; }
  .top-right { text-align:right; font-size:12px; color:#333; }

  .title {
  text-align: center;
  font-weight: bold;
  font-size: 14px;
  margin-bottom: 4px;
}
.subtitle {
  text-align: center;
  font-size: 11px;
  margin-bottom: 12px;
}
.table { border-collapse: collapse; width: 100%; margin-bottom: 8px; }
.table td {
  border: 1px solid #000;
  padding: 6px 8px;
  vertical-align: top;
}
.section-title {
  background: #efefef;
  font-weight: bold;
  text-align: center;
  padding: 4px;
  border: 1px solid #000;
}
.checkbox-cell {
  width: 22px;
  text-align: center;
}
.note {
  font-size: 10px;
  line-height: 1.3;
  margin-top: 4px;
}
.bottom-info {
  text-align: right;
  font-weight: bold;
  margin-top: 12px;
}
.footer {
  text-align: center;
  font-size: 10px;
  margin-top: 6px;
  line-height: 1.3;
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
    <div class="title">ARAÇ DOSYA EKSPERTİZ RAPORU</div>
  <div class="subtitle">
    Bu rapor iş emri numarasının aynı olduğu İş Emri / Araç Kabul / Teslim / Bilgi formu ile birlikte bir raporun devamıdır.<br>
    <strong>İŞ EMRİ OLMADAN GEÇERSİZDİR</strong><br>
    İş emrinde bulunan imza ile arka sayfada yazılı tüm genel ekspertiz bakım ve muayene şartlarını kabul etmiş olursunuz.
  </div>
   <!-- ANA TABLO -->
  <table class="table">
    <tr>
      <td style="width:50%; vertical-align:top;">
        <div class="section-title">VERGİ BORCU SORGUSU</div>
        <div style="padding:8px;">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/77/Gelir_Idaresi_Baskanligi_logo.png" alt="" width="60"><br><br>
          <strong>☑ YOK</strong> &nbsp;&nbsp; ☐ VAR
        </div>
      </td>
      <td style="width:50%; vertical-align:top;">
        <div class="section-title">TRAMER KAYIT RAPORU</div>
        <div style="padding:8px;">
          <img src="https://upload.wikimedia.org/wikipedia/commons/3/39/Tramer_logo.png" alt="" width="60"><br><br>
          <strong>☑ YOK</strong> &nbsp;&nbsp; ☐ VAR<br><br>
          <div class="note">
            <?= $chassis ?> şasi nolu <?= $model ?> markalı aracın SBM kayıtlarında geçmiş hasarı bulunmamıştır.
          </div>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div class="section-title">ARAÇ HASAR KAYDI</div>
        <div style="padding:8px;">☑ BAKILAMADI &nbsp;&nbsp; ☐ VAR</div>
      </td>
      <td>
        <div class="section-title">ARAÇ MUAYENE BİTİŞ</div>
        <div style="padding:8px;">06.08.2025</div>
      </td>
    </tr>

    <tr>
      <td>
        <div class="section-title">DİĞER NOTLAR</div>
        <div style="height:80px;"></div>
      </td>
      <td>
        <div class="section-title">KİLOMETRE BİLGİSİ SORGULAMA</div>
        <div style="padding:8px;">
          ☐ VAR &nbsp;&nbsp; ☑ YOK<br><br>
          <div class="note">
            Kilometre sorgu sonucu resim olarak çekilmiştir.<br>
            SEÇİLİ EKSPERTİZ PAKETİ MOTOR MEKANİK GARANTİSİNİ KAPSAMAMAKTADIR. BU EKSPERTİZ RAPORU ARACIN İSTASYONUMUZA GİRİŞ ÇIKIŞ KİLOMETRELERİNDEKİ VERİLERİ YANSITMAKTADIR.<br><br>
            https://hgs.epttavm.com/arac-km-sorgula adresinden kilometre sorgulaması yapabilirsiniz.
          </div>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div class="section-title">EGZOZ EMİSYON BİTİŞ</div>
        <div style="padding:8px;">06.08.2026</div>
      </td>
      <td>
        <div class="section-title">OGS - HGS - MGS CEZA BORCU</div>
        <div style="padding:8px;">
          ☑ YOK &nbsp;&nbsp; ☐ VAR<br><br>
          <img src="https://upload.wikimedia.org/wikipedia/commons/6/63/HGS_logo.svg" alt="" width="50"><br><br>
          <div class="note">Geçiş borcu yoktur.</div>
        </div>
      </td>
    </tr>
  </table>
    <!-- ALT BİLGİ -->
  <div class="footer">
    <strong>BU RAPORU TELEFONUNUZA İNDİRMEK İÇİN, QR KODU OKUTARAK RAPORU GÖRÜNTÜLEYEBİLİRSİNİZ.</strong><br>
    <img src="https://api.qrserver.com/v1/create-qr-code/?size=80x80&data=<?= urlencode($workOrder) ?>" alt="QR"><br>
  </div>

  <div class="bottom-info">
    EKSPERTİZ PAKET TUTARI: <?= $paketTutari ?> &nbsp;&nbsp;
    YAPILAN ÖDEME: <?= $odeme ?> &nbsp;&nbsp;
    RAPOR TARİHİ: <?= $tarih ?>
  </div>
  </div>
</body>
</html>
