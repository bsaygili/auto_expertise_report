<?php
$isEmriNo = "AEÜ01170";
$plaka = "06CHJ966";
$sasiNo = "SJNFAAJ11U2934005";
$tseNo = "06-HYB-5885";
$sayfaNo = "28 / 31";
$paketTutari = "10000,00 TL";
$odeme = "9750,00 TL";
$tarih = date('d.m.Y H:i');

function e($v)
{
    return htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Oto Ekspertiz Raporu - Sayfa 34 - <?= e($sasiNo) ?></title>
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

        .section {
            margin-bottom: 10px;
        }

        .section-title {
            background: #dcdcdc;
            font-weight: bold;
            padding: 6px;
            border-radius: 6px;
            margin-bottom: 4px;
        }

        .section ul {
            margin: 0;
            padding-left: 18px;
            font-size: 11.5px;
        }

        .section ul li {
            margin-bottom: 4px;
        }

        .footer-bottom {
            margin-top: 5px;
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            align-items: flex-start;

        }

        .qr {
            /* text-align:center; */
            margin-top: 10px;
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
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            text-align: right;
            font-weight: bold;
            font-size: 10px;
            margin-top: 10px;
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

        <div class="title">ÖZET USTA GÖRÜŞLERİ</div>

        <div class="section">
            <div class="section-title">Motor Ekspertiz ve Check-Up</div>
            <ul>
                <li>Conta Kaçak Testi Yapıldı mı? → Cihaz olmadığı için yapılmadı</li>
                <li>Alt / Ön / Mekanik Ekspertiz ve Check-Up → Yapıldı</li>
                <li>Taban Plastik Bakaliti Mevcut</li>
            </ul>
        </div>

        <div class="section">
            <div class="section-title">Kaporta - Boya Ekspertiz ve Check-Up</div>
            <ul>
                <li>Arka Tampon Plastik Parça → Çizik, çatlak, darbe izleri mevcut</li>
                <li>Kapı Fitil Lastikleri Var</li>
            </ul>
        </div>

        <div class="section">
            <div class="section-title">Genel Kondisyon / Dış Ekspertiz ve Check-Up</div>
            <ul>
                <li>Aracın Ekli-Görsel-Objektif Mevcut mu? → Mevcut</li>
                <li>Genel Dış Kondisyonu → Hafif çizikler var</li>
                <li>Dış Aksesuarlar Mevcut</li>
            </ul>
        </div>

        <div class="section">
            <div class="section-title">İç Ekspertiz ve Check-Up</div>
            <ul>
                <li>Genel İçerideki Kaplama → Hafif çizikler var</li>
                <li>İç Aksesuarlar Mevcut</li>
                <li>Araç İçi Elektrik Aksamları Mevcut</li>
            </ul>
        </div>

        <div class="section">
            <div class="section-title">Airbag (Hava Yastıkları) Kontrol Testi</div>
            <ul>
                <li>Sürücü Airbag Kontrolü Yapıldı</li>
                <li>Diğer Airbag Kontrolü Yapıldı</li>
            </ul>
        </div>

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