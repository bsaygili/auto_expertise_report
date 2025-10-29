<?php
$isEmriNo = "AEÜ01170";
$plaka = "06CHJ966";
$sasiNo = "SJNFAAJ11U2934005";
$tseNo = "06-HYB-5885";
$sayfaNo = "19 / 31";
$paketTutari = "10000,00 TL";
$odeme = "9750,00 TL";
$tarih = date('d.m.Y');

$frenNoktalar = [
    "Sağ Ön Süspansiyon" => "İyi",
    "Sol Ön Süspansiyon" => "İyi",
    "Sağ Arka Süspansiyon" => "İyi",
    "Sol Arka Süspansiyon" => "İyi",
    "El Freni Verimliliği" => "İyi",
    "Servis Fren Verimliliği" => "İyi",
    "Ön Sağ–Sol Fren Değerleri" => "Uygun",
    "Arka Sağ–Sol Fren Değerleri" => "Uygun",
    "Araca Ait Anlık Fren/Süspansiyon Test Çıktısı" => "Fren / Süspansiyon Test Çıktısı Görseli"
];
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Oto Ekspertiz Raporu - Sayfa 25 - <?= htmlspecialchars($sasiNo) ?></title>
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
            border: 3px solid #111;
            box-sizing: border-box;
            padding: 10px 26px;
            color: #111;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .header {
            font-size: 12px;
            display: flex;
            justify-content: space-between;
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
            margin: 14px 0;
        }

        /* --- GÖRSEL ALAN --- */
        .test-graphics {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 10px 0 20px;
        }

        .fren-diagram {
            width: 48%;
            text-align: center;
        }

        .fren-diagram img {
            width: 90%;
            max-width: 300px;
        }

        .sup-diagram {
            width: 48%;
            text-align: center;
            position: relative;
        }

        .sup-diagram img {
            width: 95%;
            max-width: 320px;
        }

        /* --- TEST NOKTALARI --- */
        .test-points {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
            font-size: 11px;
            margin-bottom: 20px;
        }

        .point {
            background: #f4f4f4;
            border-radius: 10px;
            padding: 6px 10px;
            border: 1px solid #ccc;
        }

        .point strong {
            display: inline-block;
            width: 14px;
        }

        /* --- ÖZET --- */
        .summary {
            font-size: 11px;
            margin-top: 10px;
        }

        .summary h3 {
            font-size: 12px;
            font-weight: bold;
            color: #444;
        }

        /* --- FOOTER --- */
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            font-size: 10px;
            line-height: 1.3;
        }

        .footer-left {
            max-width: 45%;
        }

        .footer-left img {
            width: 60px;
            height: 60px;
            margin-top: 4px;
        }

        .footer-center {
            text-align: center;
        }

        .footer-center .arrow {
            font-size: 18px;
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

            <div class="title">SÜSPANSİYON TESTİ</div>

            <!-- GÖRSELLER -->
            <div class="test-graphics">
                <div class="fren-diagram">
                    <img src="images/fren_test.png" alt="Fren Test Görseli">
                </div>
                <div class="sup-diagram">
                    <img src="images/suspansiyon_test.png" alt="Süspansiyon Test Görseli">
                </div>
            </div>

            <!-- NOKTALAR -->
            <div class="test-points">
                <?php $i = 1;
                foreach ($frenNoktalar as $ad => $durum): ?>
                    <div class="point"><strong><?= $i++ ?></strong> <?= $ad ?><br><?= $durum ?></div>
                <?php endforeach; ?>
            </div>

            <!-- ÖZET -->
            <div class="summary">
                <h3>EKSERTİZ ÖZETİ VE GENEL DURUM NOTLARI
                    <span style="font-weight:normal;">(UZMAN TEKNİKER GÖRÜŞÜ)</span>
                </h3>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <div class="footer-left">
                <div><strong>Bu Raporu Telefonunuza İndirmek İçin,</strong><br>QR Kod’u Okutarak Raporu Görüntüleyebilirsiniz.</div>
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