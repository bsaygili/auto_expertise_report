<?php
// ====== DİNAMİK VERİLER ======
$company = [
  "logoText" => "HANGAR", // Varsa logo görseli <img> koyabilirsin
  "name"     => "HANGAR MOTORLU ARAÇLAR",
  "address"  => "SEÇİM SOKAK NO:2 ALTINDAĞ - ANKARA",
  "tel"      => "467 601 4659",
  "mail"     => "hangarofuk@gmail.com",
];

$customer = [
  "name" => "HOMER",
  "tel"  => "(555) 555-5555",
];

$plate          = "06GA9346";
$orderNumber    = "322034";
$orderDate      = "23/04/2025";
$executedBy     = "Yusuf Şahin";
$paymentType    = "Açık Hesap";
$workNote       = "ÇIKANLAR OTEL RAF 16";

$VAT_RATE = 0.20;

// Lastikler (alt satırlar) – kontrol açıklaması dahil:
$tyres = [
  ["brand" => "PETLAS", "size" => "205/55R16", "model" => "MULTIACTION", "tread" => "2 mm", "note" => "Aşınmalar Var 2021"],
  ["brand" => "PETLAS", "size" => "205/55R16", "model" => "MULTIACTION", "tread" => "2 mm", "note" => "Aşınmalar Var 2021"],
  ["brand" => "PETLAS", "size" => "205/55R16", "model" => "MULTIACTION", "tread" => "2 mm", "note" => "Aşınmalar Var 2021"],
  ["brand" => "PETLAS", "size" => "205/55R16", "model" => "MULTIACTION", "tread" => "2 mm", "note" => "Aşınmalar Var 2021"],
];

// Fiyatlar (KDV hariç, lastik başına)
$otelUnitEx       = 200.00;
$sokmeTakmaUnitEx = 200.00;

// İndirim (KDV dahil, birim başı) – yoksa 0 bırak
$otelUnitDiscIncl       = 0.00;
$sokmeTakmaUnitDiscIncl = 0.00;

// ====== HESAPLAMALAR ======
$tyreCount = count($tyres);

// Lastik Otel satır hesapları
$otelUnitIncl = $otelUnitEx * (1 + $VAT_RATE);
$otelLineIncl = ($otelUnitIncl - $otelUnitDiscIncl) * $tyreCount;
$otelLineEx   = $otelUnitEx * $tyreCount;

// Sökme-Takma satır hesapları
$sokUnitIncl = $sokmeTakmaUnitEx * (1 + $VAT_RATE);
$sokLineIncl = ($sokUnitIncl - $sokmeTakmaUnitDiscIncl) * $tyreCount;
$sokLineEx   = $sokmeTakmaUnitEx * $tyreCount;

// Toplamlar
$subtotalEx        = $otelLineEx + $sokLineEx;              // Ara Toplam (KDV hariç)
$totalDiscountIncl = $otelUnitDiscIncl * $tyreCount + $sokmeTakmaUnitDiscIncl * $tyreCount;
$vatAmount         = $subtotalEx * $VAT_RATE;                // KDV (%)
$grandTotalIncl    = $subtotalEx + $vatAmount;               // Genel Toplam (KDV dahil)

// Türkçe para formatı
function tl($n)
{
  return number_format($n, 2, ',', '.') . "TL";
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8" />
  <title>İş Emri</title>
  <style>
    :root {
      --ink: #222;
      --muted: #666;
      --line: #b7b7b7;
    }

    * {
      box-sizing: border-box
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      color: var(--ink);
      margin: 28px
    }

    .top {
      display: flex;
      justify-content: space-between;
      gap: 24px;
      border-bottom: 2px solid #000;
      padding-bottom: 10px
    }

    .logo {
      font-weight: 800;
      font-size: 22px;
      letter-spacing: .5px
    }

    .company small {
      color: var(--muted)
    }

    .right {
      text-align: right;
      font-size: 13px
    }

    .plate {
      text-align: center;
      font-size: 26px;
      font-weight: 800;
      margin: 18px 0 8px 0;
      letter-spacing: 1px
    }

    .by {
      text-align: right;
      font-size: 12px;
      color: var(--muted);
      margin-bottom: 4px
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 13px
    }

    th,
    td {
      padding: 8px 10px;
      vertical-align: top
    }

    thead th {
      font-weight: 700;
      color: #000
    }

    .grid-head {
      border-bottom: 1px solid var(--line);
    }

    .group-row {
      border-bottom: 1px solid var(--line);
      font-weight: 700
    }

    .group-row td {
      background: #fafafa
    }

    .detail-row td {
      border-bottom: 1px solid #e9e9e9;
      color: var(--muted)
    }

    .col-desc {
      width: 48%
    }

    .col-unit {
      width: 10%;
      text-align: center
    }

    .col-price {
      width: 12%;
      text-align: right
    }

    .col-price small {
      display: block;
      color: var(--muted);
      font-weight: 400;
      margin-top: 2px
    }

    .col-total {
      width: 14%;
      text-align: right;
      font-weight: 700
    }

    .section {
      margin-top: 18px
    }

    .totals-box {
      width: 330px;
      margin-left: auto;
      border-top: 1px solid var(--line);
    }

    .totals-box .row {
      display: flex;
      justify-content: space-between;
      padding: 6px 0;
      border-bottom: 1px solid var(--line);
    }

    .totals-box .label {
      color: #000
    }

    .totals-box .value {
      font-weight: 600
    }

    .grand {
      font-size: 15px;
      font-weight: 800;
      padding-top: 10px;
      border: none
    }

    .payment {
      margin-top: 14px;
      font-weight: 700
    }

    .note {
      margin-top: 10px;
      font-size: 12px;
      color: var(--muted)
    }

    .conditions {
      margin-top: 24px;
      font-size: 12px;
      line-height: 1.55;
      color: #333
    }

    .signs {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      margin-top: 28px
    }

    .sign {
      width: 48%
    }

    .sign .line {
      border-top: 1px solid #000;
      padding-top: 8px;
      text-align: center;
      font-size: 12px
    }

    .hand {
      margin-top: 32px;
      font-weight: 800;
      font-size: 18px
    }
  </style>
</head>

<body>

  <!-- ÜST BİLGİ -->
  <div class="top">
    <div class="company">
      <div class="logo"><?= htmlspecialchars($company["logoText"]) ?></div>
      <div><?= htmlspecialchars($company["name"]) ?></div>
      <small><?= htmlspecialchars($company["address"]) ?></small><br>
      <small>Tel: <?= htmlspecialchars($company["tel"]) ?> • E-posta: <?= htmlspecialchars($company["mail"]) ?></small>
    </div>
    <div class="right">
      <div><strong><?= htmlspecialchars($customer["name"]) ?></strong> — Tel: <?= htmlspecialchars($customer["tel"]) ?></div>
      <div>İş Emri No: <strong>#<?= htmlspecialchars($orderNumber) ?></strong></div>
      <div>İşlem Zamanı: <strong><?= htmlspecialchars($orderDate) ?></strong></div>
    </div>
  </div>

  <div class="plate"><?= htmlspecialchars($plate) ?></div>
  <div class="by">İşlem Gerçekleştiren: <strong><?= htmlspecialchars($executedBy) ?></strong></div>

  <!-- TABLO BAŞLIKLARI -->
  <table>
    <thead>
      <tr class="grid-head">
        <th class="col-desc">HİZMET / ÜRÜN ADI</th>
        <th class="col-unit">BİRİM</th>
        <th class="col-price">BİRİM FİYAT<br><small>(KDV hariç)</small></th>
        <th class="col-price">BİRİM FİYAT<br><small>(KDV dahil)</small></th>
        <th class="col-price">BİRİM İNDİRİM<br><small>(KDV dahil)</small></th>
        <th class="col-total">TOPLAM<br><small>(KDV dahil)</small></th>
      </tr>
    </thead>
    <tbody>
      <!-- LASTİK OTEL ANA SATIR -->
      <tr class="group-row">
        <td class="col-desc">LASTİK OTEL</td>
        <td class="col-unit"><?= $tyreCount ?> Adet</td>
        <td class="col-price"><?= tl($otelUnitEx) ?></td>
        <td class="col-price"><?= tl($otelUnitIncl) ?></td>
        <td class="col-price"><?= tl($otelUnitDiscIncl) ?></td>
        <td class="col-total"><?= tl($otelLineIncl) ?></td>
      </tr>

      <!-- LASTİK OTEL ALT DETAYLAR -->
      <?php foreach ($tyres as $ix => $t): ?>
        <tr class="detail-row">
          <td class="col-desc" colspan="6">
            <?= ($ix + 1) ?>) <?= htmlspecialchars($t["brand"]) ?> - <?= htmlspecialchars($t["size"]) ?>
            - <?= htmlspecialchars($t["model"]) ?> — <?= htmlspecialchars($t["tread"]) ?>
            — <?= htmlspecialchars($t["note"]) ?>
          </td>
        </tr>
      <?php endforeach; ?>

      <!-- SÖKME TAKMA ANA SATIR -->
      <tr class="group-row">
        <td class="col-desc">SÖKME TAKMA</td>
        <td class="col-unit"><?= $tyreCount ?> Adet</td>
        <td class="col-price"><?= tl($sokmeTakmaUnitEx) ?></td>
        <td class="col-price"><?= tl($sokUnitIncl) ?></td>
        <td class="col-price"><?= tl($sokmeTakmaUnitDiscIncl) ?></td>
        <td class="col-total"><?= tl($sokLineIncl) ?></td>
      </tr>
    </tbody>
  </table>

  <!-- SOL: ÖDEME TÜRÜ — SAĞ: TOPLAM KUTUSU -->
  <div class="section">
    <div class="payment">Ödeme Türü: <?= htmlspecialchars($paymentType) ?></div>

    <div class="totals-box">
      <div class="row">
        <div class="label">ARA TOPLAM</div>
        <div class="value"><?= tl($subtotalEx) ?></div>
      </div>
      <div class="row">
        <div class="label">TOPLAM İNDİRİM</div>
        <div class="value"><?= tl($totalDiscountIncl) ?></div>
      </div>
      <div class="row">
        <div class="label">KDV (<?= (int)($VAT_RATE * 100) ?>%)</div>
        <div class="value"><?= tl($vatAmount) ?></div>
      </div>
      <div class="row">
        <div class="label">KDV TOPLAM</div>
        <div class="value"><?= tl($vatAmount) ?></div>
      </div>
      <div class="row grand">
        <div class="label">GENEL TOPLAM</div>
        <div class="value"><?= tl($grandTotalIncl) ?></div>
      </div>
    </div>
  </div>

  <div class="note">İş Emri Notu: <?= htmlspecialchars($workNote) ?></div>

  <!-- KOŞULLAR -->
  <div class="conditions">
    <strong>Koşullar:</strong><br>
    • Satış fişinin ve sözleşmenin ibrazıyla değişim/iade mümkündür (30 gün).<br>
    • KDV iadesi için ödeme belgesi ibraz edilmelidir.<br>
    • İade edilen ürünler kullanılmamış/eksiksiz olmalıdır; hizmetler için iade yapılamaz.<br>
    • Depolama ve montaj hizmetlerinde randevu/işçilik koşulları mağaza tarafından belirlenir.
  </div>

  <!-- İMZA ALANLARI -->
  <div class="signs">
    <div class="sign">
      <div class="line">
        Müşteri: <?= htmlspecialchars($customer["name"]) ?> — Tarih: <?= date("d/m/Y") ?><br>İmza
      </div>
    </div>
    <div class="sign">
      <div class="line">
        Şirket: <?= htmlspecialchars($company["name"]) ?> — Tarih: <?= date("d/m/Y") ?><br>İmza
      </div>
    </div>
  </div>

  <div class="hand">
    LASTİKLERİ ELDEN TESLİM ALDIM<br />HASAN ARI
  </div>
</body>

</html>