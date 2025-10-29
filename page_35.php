<?php
$isEmriNo = "AEÜ01170";
$plaka = "06CHJ966";
$sasiNo = "SJNFAAJ11U2934005";
$tseNo = "06-HYB-5885";
$sayfaNo = "29 / 31";
$paketTutari = "10000,00 TL";
$odeme = "9750,00 TL";
$tarih = date('d.m.Y H:i');

$uyarilar = [
    "Bu rapor ekspertiz merkezine getirildiği kilometre ve merkezden çıkış yaptığı kilometreler içerisinde geçerlidir.",
    "Ekspertiz, motor sıcakken yapılmıştır. Motor soğukken tespit edilebilecek arızalar garanti dışıdır.",
    "Dinamometre test cihazından ve diğer test cihazlarından dolayı oluşabilecek motor, şanzıman vs. arızalardan OTORAPOR sorumlu değildir.",
    "Aracınızın ekspertiz işlemi sonrası, Otorapor'un aracınızda: \"Sorunlu\", \"Hatalı\" ya da \"Bakım Yaptırılması Gereklidir\" olarak belirttiği tüm parça ve aksamlar sizin sorumluluğunuzdadır.",
    "Araçta tespit edilmiş sorunlu parçaların (orta yazılanlar dahil) gerekli bakım ve onarımları yapılmadan trafiğe çıkması kesinlikle uygun değildir; oto çekicisi ile yetkili serviste bakım yapılması gereklidir.",
    "Trafiğe bu şekilde çıkılması durumunda ortaya çıkabilecek durumlardan/arızalardan OTORAPOR sorumlu değildir.",
    "Bu rapor sadece aracı ekspertiz yaptıran kişi için geçerlidir. 3. kişilere devir edilemez.",
    "Aracın alıcı tarafından satış işlemi görmesi durumunda bu rapor geçerliliğini yitirir.",
    "Bu aracın oto ekspertiz raporu alındıktan sonra raporda orta dahi yazılsa bir an önce ilgili yetkili servise gidilerek tamir, bakım ve onarımlarının yapılması önemle arz olunur.",
    "https://www.otorapor.com/ems adresindeki ve telefonuma gelen \"OTORAPOR OTO EKSPERTİZ VE MUAYENE ŞARTLARI\"'nı kabul ettim.",
    "Araç hakkında yazılı ve sözlü olarak tüm bilgilendirmeler tarafıma yapılmıştır.",
    "Airbag kontrolleri ilgili paketlerde OBD yöntemiyle elektronik ve fiziki olarak sökülmeden yapılmaktadır. Airbag paketi satın alınması halinde muvaffakat alınarak sökülmektedir.",
    "Satıcı ve alıcı tarafından muvaffakname ve anket formu doldurulmamış ve imzalanmamış raporlar geçersizdir. Garanti kapsamında değildir.",
    "Expert Assist ve diğer garanti şartlarını kabul ediyorum.",
    "Otorapor Airbag Kontrol Paketi satın alınmayan araçlarda yetkili servis söküm ve kontrolü yaptırılması gerekmektedir."
];

function e($v)
{
    return htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Oto Ekspertiz Raporu - Sayfa 35 - <?= e($sasiNo) ?></title>
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
            margin-bottom: 6px;
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
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
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

        <div class="title">⚠️ ÖNEMLİ UYARILAR</div>

        <div class="section">
            <div class="section-title">UYARI MADDELERİ</div>
            <ul>
                <?php foreach ($uyarilar as $madde): ?>
                    <li><?= e($madde) ?></li>
                <?php endforeach; ?>
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