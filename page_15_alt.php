<?php
// ---------- Rapor Verileri (örnek) ----------
$rapor = [
  'is_emri'   => 'AEÜ01170',
  'plaka'     => '06BCU9686',
  'sasi'      => 'SJNF...334005',
  'tse_hyb'   => '06-HYB-5885',
  'sayfa'     => '9 / 31',
  'baslik'    => 'KAPORTA - BOYA EKSPERTİZ VE CHECK-UP DETAYLI SOL',
  // Yüklediğiniz görselin yolunu BURAYA verin (aynı klasördeyse sadece dosya adı yeter)
  'gorsel'    => 'rapor_sayfa9.png',
  'paket_tutar' => '10.000,00 TL',
  'yapilan_gider' => '675,00 TL',
  'rapor_tarihi'  => '05.09.2025'
];
?>
<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <title>Rapor Yazdır</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    /* A4 yazdırma ayarları */
    @page {
      size: A4;
      margin: 12mm;
    }

    :root {
      --text: #222;
      --muted: #6b7280;
      --line: #e5e7eb;
    }

    html,
    body {
      height: 100%;
      background: #f5f5f5;
      color: var(--text);
      font: 12pt/1.35 "Inter", "Segoe UI", Roboto, Arial, sans-serif;
      -webkit-print-color-adjust: exact !important;
      print-color-adjust: exact !important;
    }

    .sheet {
      width: 210mm;
      min-height: 297mm;
      margin: 0 auto;
      background: white;
      box-shadow: 0 0 0.8mm rgba(0, 0, 0, .12);
      padding: 0;
      /* kenar boşluklarını @page yönetiyor */
      position: relative;
    }

    /* Ekranda gezinti */
    .toolbar {
      position: sticky;
      top: 0;
      background: white;
      padding: 10px 12px;
      border-bottom: 1px solid var(--line);
      display: flex;
      gap: 8px;
      z-index: 10;
    }

    .btn {
      border: 1px solid var(--line);
      padding: 8px 12px;
      border-radius: 10px;
      background: #fff;
      cursor: pointer;
      font-size: 12pt;
    }

    .btn:active {
      transform: translateY(1px);
    }

    /* Sayfa iç yerleşim */
    .page {
      padding: 12mm;
      /* @page margin ile toplamı = gerçek kenar */
    }

    header {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 6mm;
      align-items: start;
      margin-bottom: 6mm;
    }

    .meta {
      display: grid;
      grid-template-columns: max-content 1fr;
      column-gap: 6mm;
      row-gap: 2mm;
      font-size: 10pt;
    }

    .meta b {
      font-weight: 600;
      color: #111;
    }

    .page-no {
      color: var(--muted);
      font-size: 10pt;
    }

    h1 {
      font-size: 14pt;
      text-align: center;
      margin: 2mm 0 6mm;
      letter-spacing: .2px;
    }

    .figure {
      border: 1px solid var(--line);
      border-radius: 8px;
      padding: 8mm;
      min-height: 180mm;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .figure img {
      max-width: 100%;
      max-height: 245mm;
      /* başlık ve altlık taşmasın */
      display: block;
    }

    footer {
      position: absolute;
      left: 12mm;
      right: 12mm;
      bottom: 10mm;
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      font-size: 10pt;
      color: #111;
      border-top: 1px solid var(--line);
      padding-top: 4mm;
    }

    .totals {
      text-align: right;
      line-height: 1.25;
    }

    .muted {
      color: var(--muted);
    }

    /* Yazdırmada yalnızca sayfa kalsın */
    @media print {
      body {
        background: white;
      }

      .toolbar {
        display: none !important;
      }

      .sheet {
        box-shadow: none;
      }
    }
  </style>
</head>

<body>

  <div class="toolbar">
    <button class="btn" onclick="window.print()">Yazdır</button>
  </div>

  <div class="sheet">
    <div class="page">
      <header>
        <div class="meta">
          <b>İş Emri No</b><span><?= htmlspecialchars($rapor['is_emri']) ?></span>
          <b>Plaka</b><span><?= htmlspecialchars($rapor['plaka']) ?></span>
          <b>Şasi No</b><span><?= htmlspecialchars($rapor['sasi']) ?></span>
          <b>TSE-HYB No</b><span><?= htmlspecialchars($rapor['tse_hyb']) ?></span>
        </div>
        <div class="page-no">
          <div><b>Sayfa</b> <?= htmlspecialchars($rapor['sayfa']) ?></div>
        </div>
      </header>

      <h1><?= htmlspecialchars($rapor['baslik']) ?></h1>

      <div class="figure">
        <!-- Görsel dosyanızı proje köküne koyup $rapor['gorsel'] değerini güncelleyin -->
        <img src="<?= htmlspecialchars($rapor['gorsel']) ?>" alt="Rapor Görseli">
      </div>

      <footer>
        <div>
          <div class="muted">Bu rapor dijital ortamda üretilmiştir.</div>
          <div class="muted">Tarih: <?= htmlspecialchars($rapor['rapor_tarihi']) ?></div>
        </div>
        <div class="totals">
          <div><b>Ekspertiz Paket Tutarı:</b> <?= htmlspecialchars($rapor['paket_tutar']) ?></div>
          <div><b>Yapılan Gider:</b> <?= htmlspecialchars($rapor['yapilan_gider']) ?></div>
        </div>
      </footer>
    </div>
  </div>

</body>

</html>