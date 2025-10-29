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

$aciklama = [
  $chassis . " şasi nolu " . $model . " markalı aracın SBM kayıtlarında geçmiş hasarı bulunmamıştır.",
  "Kilometre Sorgusu",
  "Kilometre sorgu sonucu resim olarak çekilmiştir. SEÇİLİ EKSPERTİZ PAKETİ MOTOR MEKANİK GARANTİSİNİ KAPSAMAMAKTADIR. BU EKSPERTİZ RAPORU ARACIN İSTASYONUMUZA GİRİŞ ÇIKIŞ KİLOMETRELERİNDEKİ VERİLERİ YANSITMAKTADIR.",
  "https://hgs.epttavm.com/arac-km-sorgula adresinden kilometre sorgulaması yapabilirsiniz."
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
  <title>Oto Ekspertiz Raporu - Sayfa 5 - <?= e($chassis) ?></title>
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

    /* Genel tablo yapısı */
    .table {
      border-collapse: collapse;
      width: 100%;
    }

    .table td,
    .table th {
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
    <div class="title">İŞ EMRİ / ARAÇ KABUL / TESLİM / BİLGİ FORMU</div>
    <div style="text-align:center; font-weight:bold; margin-bottom:4px;">TARAFSIZ, BAĞIMSIZ, YETKİLİ</div>
    <!-- SORU TABLOSU -->
    <table class="table">
      <tr>
        <td style="width:70%"><strong>İKİNCİ EL OTO GARANTİ TEKLİFİ İSTİYOR MUSUNUZ?</strong></td>
        <td class="checkbox-cell">☐</td>
        <td style="width:40px;">EVET</td>
        <td class="checkbox-cell">☐</td>
        <td>HAYIR</td>
      </tr>
      <tr>
        <td><strong>KASKO VE TRAFİK SİGORTASI TEKLİFİ İSTİYOR MUSUNUZ?</strong></td>
        <td class="checkbox-cell">☐</td>
        <td>EVET</td>
        <td class="checkbox-cell">☐</td>
        <td>HAYIR</td>
      </tr>
      <tr>
        <td><strong>YEDEK ANAHTAR?</strong></td>
        <td class="checkbox-cell">☐</td>
        <td>VAR</td>
        <td class="checkbox-cell">☑</td>
        <td>YOK</td>
        <td class="checkbox-cell">☐</td>
        <td>BİLMİYORUM</td>
      </tr>
      <tr>
        <td><strong>RUHSATIN ASLI GÖRÜLDÜ MÜ?</strong></td>
        <td class="checkbox-cell">☑</td>
        <td>EVET</td>
        <td class="checkbox-cell">☐</td>
        <td>HAYIR</td>
      </tr>
    </table>
    <!-- EKSPERTİZ ÖNCESİ TESPİT EDİLEN DURUMLAR -->
    <div class="section-title">EKSPERTİZ ÖNCESİ TESPİT EDİLEN DURUMLAR</div>
    <table class="table">
      <tr>
        <td>
          <?php foreach ($aciklama as $metin): ?>
            <div class="long-text"><?= htmlspecialchars($metin) ?></div>
          <?php endforeach; ?>
        </td>
      </tr>
    </table>
    <div class="note">(İŞBU BİLGİLER MÜŞTERİ BEYANINA DAYALIDIR)</div>
  </div>
</body>

</html>