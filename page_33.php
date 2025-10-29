<?php
$isEmriNo = "AE.001070";
$plaka = "06CBA82";
$sasiNo = "VF1JRSRJR543943405";
$tseNo = "09-HYB-5685";
$sayfaNo = "27 / 31";
$paketTutari = "10000,00 TL";
$odeme = "9750,00 TL";
$tarih = date('d.m.Y H:i');
$testSonucu = "Sorunsuz";
$uyariNotu = "Ölçümler cihazların ölçümüdür. Firmamızın sorumluluğu yoktur. Harici LPG yakıt sistemi takılmış araçlarda test sonucunun doğruluğu yoktur. Yetkili servis kontrolü önerilir. Antifriz seviyesi çok düşük ise conta kaçak testinin yeniden yapılması gerekmektedir.";

function e($v)
{
    return htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Oto Ekspertiz Raporu - Sayfa 33 - <?= e($sasiNo) ?></title>
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

        .result-box {
            font-size: 13px;
            font-weight: bold;
            text-align: center;
            padding: 10px;
            background: #dcdcdc;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .warning {
            font-size: 10px;
            margin-top: 10px;
            padding: 8px;
            border: 1px solid #999;
            border-radius: 6px;
            background: #f9f9f9;
        }

        .images {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }

        .images img {
            max-width: 45%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .footer-bottom {
            margin-top: 15px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .qr {
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
            text-align: right;
            font-weight: bold;
            font-size: 10px;
            border: solid 1px #000;
            border-radius: 5px;
            padding: 5px;
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
        <div class="images">
            <img src="images/conta-kaca-testi.png" alt="Test Renk Skalası">
        </div>
        <div class="title">1 - CONTA KAÇAK TESTİ</div>
        <div class="result-box">Sonuç: <?= $testSonucu ?></div>

        <div class="images">
            <img src="images/motor-kacak-testi.png" alt="Motor Üzerinde Test Görseli">
        </div>

        <div class="warning"><?= e($uyariNotu) ?></div>

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