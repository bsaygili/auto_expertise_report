<?php
$isEmriNo = "AEC011720";
$plaka = "34ABC123";
$sasiNo = "SJNFAAJ11U2934005";
$tseNo = "065-0007";
$sayfaNo = "30 / 31";
$paketTutari = "10000,00 TL";
$odeme = "9750,00 TL";
$tarih = date('d.m.Y H:i');

$sertifikaMetni = <<<TEXT
Müşterinin garanti şartlarını kötü amaçla kullanmaya teşebbüs etmesi ve/veya bundan maddi çıkar sağlamaya çalışması hallerinde,GARANTİLİ ekspertiz paketinde sunulan garanti şartları geçersiz kalacaktır. Böyle bir teşebbüsün tespiti halinde GARANTİ SAĞLAYICISI tarafından savcılığa başvurularak, müşteri hakkında sigorta dolandırıcılığına teşebbüsten hukuki yollara başvurulacaktır.

HATALI EKSPERTİZ BAŞI MAKSİMUM 35.000 TL DEĞER KAYBI ÖDEMELİ KAPORTA-BOYA GARANTİSİDİR. HASAR ÖDEMESİNDE ARAÇ DEĞER KAYBI TABLOSU ESAS ALINIR.
1 sene 1000 km. geçerlidir. (hangisi önce dolarsa)
GARANTİ ŞARTLARI İÇİN: https://otorapor.com/2--el-otomobil-garantisi

İş bu sertifikayla aracınızın yapılan ekspertizinde, kaporta boya ile ilgili eksik hatalı bilgilendirmeden dolayı almış olduğunuz araçtaki oluşacak değer kaybı teminat altına alınmıştır. Değer kaybı tespiti KARAYOLLARI MOTORLU ARAÇLAR ZORUNLU MALİ SORUMLULUK (TRAFİK) sigortası genel şartlarında belirtilen esaslara göre yapılacaktır. GARANTİLİ ekspertiz paketinde yer alan Kaporta – Boya ekspertizi, sadece bu ekspertizden kaynaklanabilecek, ekspertiz raporunda eksik tespit edilen boya ve değişen parçadan dolayı oluşacak maddi değer kayıplarını karşılar. OTORAPOR GARANTİ tarafından sağlanan bu hizmet ile ekspertiz yapılan araç 1 sene veya 1000 km (hangisi önce dolarsa) garanti kapsamındadır. Kaporta boya ekspertiz garantisi, ekspertiz kapsamı dışında tutulan ve araç değerine etki etmeyecek mini onarım ve/veya pasta cila işlemi ile giderilebilecek vuruk ve çizikleri kapsamaz. Bu garanti bir trafik sigortası değildir. Kasko poliçesi değildir. Bu garanti aracın herhangi bir kazaya karışması durumunda geçersiz kalır. Pert-Ağır hasarlı araçlar GARANTİ kapsamına alınmaz. Buna ilaveten, ikinci el aracın model yılı, km ve genel durumu dikkate alınarak normal kullanım şartları dahilinde araçta oluşan, aracın görselliğini ve teknik işleyişini etkilemeyen aşınma ve yıpranmalar kaporta boya ekspertiz garantisi kapsamı dışında tutulmuştur. Araç el değiştirip, noter satışı gördükten sonra garanti geçersiz kalır. GARANTİLİ ekspertiz paketinde yer alan Kaporta-Boya Garantisi, imalatçı tarafından üretilen aracın daha sonradan üzerinde yapılan tadilatların aracın orijinaline uygun olmaması veya montajı yapılan yedek parçaların orijinal olmaması veya gerekli teknik bilgi ve yetkinliğe sahip yetkili servis tarafından montajının yapılmaması veya tamir şeklinin imalatçı veya yetkili servis tarafından kabul edilmiş teknik özelliklere uymaması gibi durumlar halinde geçerli olmayacaktır. GARANTİLİ ekspertiz paketine göre araç ekspertizi yapılan ikinci el araçlarda ekspertiz muayenesi sonrasında ortaya çıkan müşteri şikâyetlerinin giderilmesi linkte belirtilen metotlar izlenerek sağlanır: https://otorapor.com/2--el- otomobil-garantisi

Öneri ve şikayet durumunda:https://otorapor.com/arac/sikayet

Müşterinin garanti şartlarını kötü amaçla kullanmaya teşebbüs etmesi ve/veya bundan maddi çıkar sağlamaya çalışması hallerinde,GARANTİLİ ekspertiz paketinde sunulan garanti şartları geçersiz kalacaktır. Böyle bir teşebbüsün tespiti halinde GARANTİ SAĞLAYICISI tarafından savcılığa başvurularak, müşteri hakkında sigorta dolandırıcılığına teşebbüsten hukuki yollara başvurulacaktır. 

Aracın aynı gün noter satışının gerçekleşmiş olması şarttır.Ekspertiz yaptıran kişinin aracı noterden satın alması durumunda geçerlidir.
TEXT;

function e($v)
{
    return htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Oto Ekspertiz Raporu - Sayfa 36 - <?= e($sasiNo) ?></title>
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

        .certificate-box {
            font-size: 11.5px;
            line-height: 1.6;
            background: #f9f9f9;
            border: 1px solid #aaa;
            border-radius: 6px;
            padding: 10px;
            white-space: pre-line;
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

        <div class="title">KAPORTA-BOYA GARANTİ SERTİFİKASI (Expert Assist)</div>

        <div class="certificate-box"><?= e($sertifikaMetni) ?></div>

        <div class="footer-bottom">
            <div class="qr">
                <span>BU SERTİFİKAYI TELEFONUNUZA İNDİRMEK İÇİN, QR KODU OKUTARAK GÖRÜNTÜLEYEBİLİRSİNİZ.<br></span>
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=<?= urlencode($isEmriNo) ?>" alt="QR">
            </div>
            <div class="bottom">
                <div>EKSPERTİZ PAKET TUTARI: <?= $paketTutari ?></div>
                <div>YAPILAN ÖDEME: <?= $odeme ?></div>
                <div>SERTİFİKA TARİHİ: <?= $tarih ?></div>
            </div>
        </div>
    </div>
</body>

</html>