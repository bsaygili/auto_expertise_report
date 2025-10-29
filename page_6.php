<?php
$workOrder     = "AE01J070";
$plate         = "06CHJ966";
$chassis       = "SJNFAAJ11U2934005";
$tseHyb        = "08-HYB-5885";
$companyName   = "HANGAR MOTORLU ARAÇLAR";
$companySub    = "SEÇİM SOKAK NO:2 ALTINDAĞ - ANKARA";
$supportPhone  = "0 (531) 270-85-93";
$bayiName     = "Rapor Sahibinin";

$isEmriNo = "AEÜ01170";
$plaka = "06CHJ966";
$sasiNo = "SJNFAAJ11U2934005";
$tseNo = "06-HYB-5885";
$chassis = "***4005";
$model = "NISSAN QASHQAI 1.5 DCI 115 DCT MIDNIGHT EDITION";
$qrFile        = "images/qrcode.png";       // projede olmalı
$qrKodu        = "SJNFAAJ11U2934005";       // projede olmalı

$aciklama = [
  $chassis . " şasi nolu " . $model . " markalı aracın SBM kayıtlarında geçmiş hasarı bulunmamıştır.",
  "Kilometre Sorgusu",
  "Kilometre sorgu sonucu resim olarak çekilmiştir. SEÇİLİ EKSPERTİZ PAKETİ MOTOR MEKANİK GARANTİSİNİ KAPSAMAMAKTADIR. BU EKSPERTİZ RAPORU ARACIN İSTASYONUMUZA GİRİŞ ÇIKIŞ KİLOMETRELERİNDEKİ VERİLERİ YANSITMAKTADIR.",
  "https://hgs.epttavm.com/arac-km-sorgula adresinden kilometre sorgulaması yapabilirsiniz."
];

function e($v){ return htmlspecialchars($v, ENT_QUOTES|ENT_SUBSTITUTE, 'UTF-8'); }
function tl($v){ return number_format((float)$v, 2, ',', '.') . " TL"; }

?>

<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <title>Oto Ekspertiz Raporu - Sayfa 6 - <?= e($chassis) ?></title>
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
/* Genel tablo yapısı */
.table {
  border-collapse: collapse;
  width: 100%;
}
.table td, .table th {
  border: 1px solid #000;
  padding: 6px 8px;
  vertical-align: middle;
}

/* Başlık */
.title {
  text-align: center;
  font-weight: bold;
  font-size: 14px;
  margin: 6px 0 8px 0;
  text-transform: uppercase;
}

/* Bölüm başlıkları */
.section-title {
  background: #efefef;
  font-weight: bold;
  padding: 6px 8px;
  border: 1px solid #000;
  text-align: left;
}

/* Uzun metin kutusu */
.long-text {
  padding: 5px 8px;
  font-size: 12px;
  line-height: 1.4;
}

/* Son not */
.note {
  text-align: center;
  font-weight: bold;
  margin-top: 6px;
}

/* Checkbox benzeri görseller */
.checkbox-cell {
  width: 20px;
  text-align: center;
}

  /* Dikkat / QR kutusu */
  .notice {
    margin-top:18px;
    padding:12px;
    display:flex;
    gap:12px;
    justify-content: space-around;
    align-items:center;
    background:#fff;
  }
  .notice .left {  font-size:12px; line-height:1.45; color:#111; }
  .notice .right { width:210px; text-align:center; }
  .notice .right img.qr{ width:120px; height:120px; object-fit:contain; display:block; margin:0 auto 8px; }

  /* küçük dikkat başlığı */
  .notice strong { display:block; margin-bottom:6px; font-weight:700; }

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
     <div style="text-align:center; padding:5px 0 5px 0; font-size: 12px; background-color: #bbb; border-radius: 50px;"><?= e($bayiName) ?>
    </div>
    <div class="title">SORGU SONUÇLARI</div>
    <div style="text-align:center; font-weight:bold; margin-bottom:4px;">
      SBM talimatları gereğince tramer hasar detaylarının rapora yazdırılması yasaktır. Hasar detaylarını öğrenmek için aşağıdaki kare kodu okutmanız gerekmektedir. Telefonunuzun kamerası ile bu kare kodu okutarak çıkan bağlantıya bastıktan sonra sorgu sonucunu telefonunuzdan görebilirsiniz.
    </div>
    <!-- dikkat/qr kutusu -->
    <div class="notice">
      <div class="left">
        <div style="text-align: center;">
          <strong>Hasar - <?= e($qrKodu) ?></strong>
        </div>
        <?php if (file_exists($qrFile)): ?>
          <img class="qr" src="<?= e($qrFile) ?>" alt="QR Kod">
        <?php else: ?>
          <div style="width:120px;height:120px;border:1px dashed #ccc;display:flex;align-items:center;justify-content:center;color:#999;font-size:12px;">QR yok<br><?= e($qrFile) ?></div>
        <?php endif; ?>
      </div>
      <div class="left">
        <div style="text-align: center;">
          <strong>Kilometre - <?= e($qrKodu) ?></strong>
          </div>
        <?php if (file_exists($qrFile)): ?>
          <img class="qr" src="<?= e($qrFile) ?>" alt="QR Kod">
        <?php else: ?>
          <div style="width:120px;height:120px;border:1px dashed #ccc;display:flex;align-items:center;justify-content:center;color:#999;font-size:12px;">QR yok<br><?= e($qrFile) ?></div>
        <?php endif; ?>
      </div>
    </div>
    <div>
        *Tramer sorgusu yalnızca kaza listelemesini içermekte olup detay sorgulaması ekspertiz hizmeti kapsamında değildir
      </div>
  </div>
</body>
</html>
