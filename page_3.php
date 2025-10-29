<?php
$workOrder     = "AE01J070";
$plate         = "06CHJ966";
$chassis       = "SJNFAAJ11U2934005";
$tseHyb        = "08-HYB-5885";
$companyName   = "HANGAR MOTORLU ARAÇLAR";
$companySub    = "SEÇİM SOKAK NO:2 ALTINDAĞ - ANKARA";
$supportPhone  = "0 (531) 270-85-93";
$vehicle = [
  'brand' => 'NISSAN',
  'year'  => '2020',
  'model' => 'QASHQAI 1.5 DCI 115 DCT',
  'variant' => 'MIDNIGHT EDITION',
  'fuel' => 'Dizel',
  'plate' => $plate,
  'motor_no' => 'K9KUB37D126202',
  'transmission' => 'Otomatik (DCT)',
  'chassis' => $chassis
];
$rapor = [
  "workOrder"    => $workOrder,
  "plate"        => $plate,
  "chassis"      => $chassis,
  "tseHyb"       => $tseHyb,
  "companyName"  => $companyName,
  "companySub"   => $companySub,
  "supportPhone" => $supportPhone,
  'rapor_no' => 'ALEX01720',
  'rapor_tarihi' => '15.06.2023 15:06:05',
  'bayide_kalacak' => true,
  'aciklama' => [
    $chassis . ' şasi nolu ' . $vehicle["model"] . $vehicle["variant"] . ' markalı aracın SBM kayıtlarında geçmiş hasarı bulunmamıştır.',
    'Kilometre Sorgusu',
    'Kilometre sorgu sonucu resim olarak çekilmiştir.',
    'SEÇİLİ EKSPERTİZ PAKETİ MOTOR MEKANİK GARANTİSİNİ KAPSAMAMAKTADIR. BU EKSPERTİZ RAPORU ARACIN İSTASYONUMUZA GİRİŞ ÇIKIŞ KİLOMETRELERİNDEKİ VERİLERİ YANSITMAKTADIR.'
  ],
  'sabit_maddeler' => [
    "Bu işyerinde belirtilen işlemlerin yapılması için OTORAPOR ekspertiz servisini yetkili kılıyorum.",
    "Her sayfanın arkasında bulunan sözleşmede yazılı tüm genel ekspertiz bakım ve muayene şartlarını okudum, kabul ediyorum.",
    "Bu rapor Ekspertiz merkezine getirildiği kilometre ve merkezden çıkış yaptığı kilometreler içerisinde geçerlidir.",
    "Ekspertiz, motor sıcakken yapılmıştır. Motor soğukken tespit edilebilecek arızalar garanti dışıdır.",
    "Gerektiğinde ekspertiz öncesi ve sonrası yol testi yapılmasını onaylıyorum.",
    "Dinamometre test cihazından ve diğer test cihazlarından dolayı oluşabilecek motor, şanzıman vs, arızalardan OTORAPOR sorumlu değildir.",
    "Aracınızın ekspertiz işlemi sonrası, Otorapor'un aracınızda 'Sorunlu', 'Hatalı' ya da 'Bakım Yaptırılması Gereklidir' olarak belirttiği tüm parça ve aksamlar sizin sorumluluğunuzdadır. ARAÇTA TESPİT EDİLMİŞ SORUNLU PARÇALARIN, GEREKLİ BAKIM VE ONARIMLARI YAPILMADAN TRAFİĞE ÇIKMASI KESİNLİKLE UYGUN DEĞİLDİR; OTO ÇEKİCİSİ İLE ALINIP YETKİLİ SERVİSTE BAKIM YAPILMASI GEREKLİDİR. TRAFIĞE BU ŞEKILDE ÇIKILMASI DURUMUNDA ORTAYA ÇIKABILECEK DURUMLARDAN OTORAPOR SORUMLU DEĞİLDİR.",
    "Bu rapor sadece ekspertiz yaptıran kişi için geçerlidir. Alıcı veya satıcı tarafından 3. kişilere devir edilemez.",
    "Aracın alıcı tarafından satış işlemi görmesi durumunda bu rapor geçerliliğini yitirir.",
    "İşbu iş emri neticesinde, oto ekspertiz raporu alınması istenen aracın oto ekspertiz raporu alındıktan sonra gerekli görüldüğü takdirde bir an önce ilgili servise gidilerek tamir, bakım ve onarımlarının yapılması önemle arz olunur.",
    "https://www.otorapor.com/ems adresindeki ve telefonuma gelen 'OTORAPOR OTO EKSPERTİZ VE MUAYENE ŞARTLARI'nı kabul ediyorum. Araç hakkında yazılı ve sözlü olarak tüm bilgilendirmeler tarafıma yapılmıştır.",
    "Airbag kontrolleri ilgili paketlerde OBD yöntemiyle elektronik ve fiziki olarak SÖKÜLMEDEN yapılmaktadır. Airbag paketi satın alınması halinde muvaffakat alınarak sökülmektedir.",
    "Expert Assist ve diğer garanti şartlarını kabul ediyorum.",
    "Özel nitelikli kişisel verilerimi de içeren kimlik kartı verileri ve sair kişisel verilerimin OTO RAPOR ARAÇ MUAYENE VE EKSPERTİZ HİZMETLERİ SANAYİ VE TİCARET ANONİM ŞİRKETİ tarafından sağlanan satım ve satış sonrası hizmetler çerçevesinde; ürün ve hizmetlere ilişkin yönlendirmede bulunulması, kampanyalara ilişkin bilgi verilebilmesi, satın alınan ürün ve diğer hizmetlere ilişkin olarak memnuniyetimin değerlendirilmesine yönelik analizler yapılması ve bu kapsamda tarafımla iletişime geçilmesi, anılan hizmetlere ve ürünlere yönelik tanıtım, pazarlama ve kampanya faaliyetlerinin sosyal medya, arama motorları, e-mail, kısa mesaj vb. kanallarla gerçekleştirilmesi amacıyla tarafımla
    iletişime geçilmesi ve aynı amaçlarla verilerimin yurt içi veya yurt dışı merkezli dijital pazarlama firmalarına aktarılması, özel günlerde tarafıma hediye gönderilebilmesi için ürün/hizmet sağlayan şirketlere aktarılması amacıyla yukarıda belirtilen bilgiler kapsamında işlenmesini kendi açık rızam ile onaylıyorum.",
    "Kilometre kontrolü içeren paketlerde kilometre sorguları Ptt Sisteminden ve Km Hunter kilometre sorgulama cihazının araca bağlanması ile yapılmaktadır. Ptt sistemlerinden ya da Km Hunter cihazından kaynaklı teknik aksaklık ve hatalar sebebiyle ortaya çıkacak hatalı sorgu sonucundan tarafımız sorumlu olmayıp sorumluluk ilgili sorgunun yapıldığı kurum ya da cihaz üreticilerine aittir.",
    "İşbu raporda yapılan tespit ve değerlendirmeler, aracın yetkili servis dışında bakım, tamir, onarım gibi en ufak bir yetkisiz müdahaleye maruz kalmış olması durumunda geçerliliğini yitirecektir.",
    "İşbu rapor aracın yanlış, kalitesiz akaryakıt almış olması durumunda bu sebeple oluşacak arızalar kapsamında geçerliliğini yitirecektir.",
    "İŞBU RAPOR KRİMİNAL BİR İNCELEME İÇERMEMEKTEDİR. ARACIN ŞASİ YA DA MOTOR NUMARASININ DEĞİŞTİRİLMİŞ OLUP OLMADIĞININ BELİRLENMESİ KONUSUNDA EKSPERTİZ ŞİRKETLERİNİN, YÖNETMELİK VEYA STANDARTLARLA BELİRLENMİŞ BİR GÖREVLERİ VE EGM BÜNYESİNDE BULUNAN VERİLERE ERİŞİM İZİNLERİ MEVCUT OLMAMASI SEBEBİYLE ARACIN CHANGE OLUP OLMADIĞINA İLİŞKİN BİR TESPİT YAPILMAMAKTADIR.",
    "SEBEPLE AĞIR HASAR KAYITLI, CHANGE VB ARAÇLAR EKSPERTİZ FİRMASI SORUMLULUĞUNDA DEĞİLDİR.",
    "İşbu Rapor Kriminal Bir İnceleme İçermemektedir. Aracın Şasi Ya Da Motor Numarasının Değiştirilmiş Olup Olmadığının Belirlenmesi Konusunda Ekspertiz Şirketlerinin, Yönetmelik veya Standartlarla Belirlenmiş Bir Görevleri Ve Egm
    Bünyesinde Bulunan Verilere Erişim İzinleri Mevcut Olmaması Sebebiyle Aracın Change Olup Olmadığına İlişkin Bir Tespit Yapılmamaktadır. Bu Raporun Amacı Trafik Güvenliğini Tehlikeye Atacak Fren, Süspansiyon, Motor Parçaları, Kaporta Parçaları Gibi Yönetmelikle Çerçevesi Belirlenmiş Sınırlı Parçaların İncelenmesidir.",
    "Bu rapor Otomotiv Laboratuvarlarında makine, otomotiv mühendisleri tarafından, aracın tamamen parçalanarak (30.000 parça) günlerce
    incelemeye tutulması gibi bir yöntemle oluşturulmamıştır. Kısıtlı bir zaman aralığında söküm ve kimyasal madde kullanım işlemi olmaksızın olağan    gözden geçirmeyle hazırlanan bu rapor sadece görüş bildirmektedir. Aynı zamanda
    ekspertiz işletmelerinin tramer, adalet bakanlığı verileri, emniyet, adli tıp kriminal bilgi havuzu, jandarma, içişleri bakanlığı, teknik     üniversite    gibi yerlerin bilgi havuzlarına erişimi bulunmamaktadır. Bu sebeplerle bir “bilirkişi
    raporu” hükmünde olmayan işbu ekspertiz raporunun “bilirkişi raporlarını” yazan bilirkişiler dahi yazdıkları rapordan sorumlu olmazken hukuken    Otorapor aleyhine tazmin sonucu doğurması beklenemez. Hukuken işbu raporun
    bağlayıcılığı yoktur. Otorapor ekspertiz ücretinin iadesi ya da her ne ad altında olursa olsun herhangi bir tazminat talebini kabul etmeyeceğini   işbu rapor ile müşteriye bildirmiş bulunmaktadır. Aracın ‘recall’ geri çağırma, üretim hatası gibi üretici firmanın garantisinde olan gizli kusurlardan Otorapor sorumlu değildir."

  ],
  'alici' => 'NECDET ÇAY',
  'satici' => 'OSMAN COŞKUN',
  'tutar' => '1000.00 TL',
  'tarih' => '15.06.2023',
  'saat' => '15:06:05'
];

function e($v)
{
  return htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <title>Oto Ekspertiz Raporu - Sayfa 3 - <?= e($chassis) ?></title>
  <!-- Google font (opsiyonel, internete bağlı isen daha yakın görünür) -->
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
      padding: 18px;
      display: flex;
      justify-content: center;
      font-family: "Roboto", Arial, sans-serif;
      -webkit-print-color-adjust: exact;
    }

    /* A4 sayfa kutusu (kopya sayfa içinde merkezi) */
    .page {
      width: 210mm;
      height: 297mm;
      background: #fff;
      box-sizing: border-box;
      border: 3px solid #111;
      /* siyah çerçeve */
      padding: 18px 26px;
      color: #111;
    }

    /* print optimizasyon */
    @media print {
      body {
        padding: 0;
        background: #fff;
      }

      .page {
        box-shadow: none;
        border: 6px solid #000;
      }
    }

    /* bazı responsive küçük düzeltmeler */
    @media (max-width:900px) {
      .page {
        width: 100%;
        height: auto;
        border-width: 3px;
      }
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

    /* Araç Bilgileri başlığı */
    .section-title {
      text-align: center;
      border-bottom: 2px solid #333;
      margin: 12px 0 6px;
      font-weight: 700;
      padding-bottom: 6px;
      font-size: 12px;
    }

    /* Araç bilgileri kutuları (iki sütun) */
    .vehicle-box {
      display: flex;
      gap: 14px;
      margin-bottom: 10px;
    }

    .v-left,
    .v-right {
      flex: 1;
      border: 1px solid #bbb;
      padding: 10px;
      background: #fff;
      font-size: 12px;
      box-sizing: border-box;
    }

    .v-left .row,
    .v-right .row {
      display: flex;
      justify-content: space-between;
      margin: 6px 0;
    }

    .v-left .label,
    .v-right .label {
      color: #666;
      font-size: 11px;
      width: 48%;
    }

    .v-left .value,
    .v-right .value {
      font-weight: 700;
      text-align: right;
      width: 48%;
    }

    .center-text {
      text-align: center;
      padding: 5px 0 5px 0;
      font-size: 12px;
      background-color: #bbb;
      border-radius: 50px;
    }

    /* imza alanları */
    .signs {
      display: flex;
      gap: 10px;
      margin-top: 12px;
    }

    .sign {
      flex: 1;
      text-align: center;
      border-top: 1px solid #222;
      padding-top: 8px;
      font-size: 11px;
    }

    .long-text {
      text-align: start;
      font-size: 8px;
      padding: 4px 0;
    }
  </style>
</head>

<body>
  <div class="page">
    <div class="top">
      <div class="top-left">
        <div><strong>İş Emri No :</strong> <?= e(v: $workOrder) ?></div>
        <div><strong>Plaka :</strong> <?= e(v: $plate) ?></div>
        <div><strong>Şasi No :</strong> <?= e(v: $chassis) ?></div>
        <div><strong>TSE-HYB No :</strong> <?= e(v: $tseHyb) ?></div>
      </div>
      <div class="top-right">
        <div style="font-weight:700;"><?= e($companyName) ?></div>
        <div class="small"><?= e($companySub) ?></div>
        <div class="small">İletişim: <?= e($supportPhone) ?></div>
      </div>

    </div>
    <div class="center-text">Bayide Kalacak</div>
    <div class="section-title">ARAÇ BİLGİLERİ</div>
    <div class="vehicle-box">
      <div class="v-left">
        <div class="row">
          <div class="label">MARKA :</div>
          <div class="value"><?= e($vehicle['brand']) ?></div>
        </div>
        <div class="row">
          <div class="label">ÜRETİM YILI (TARİH) :</div>
          <div class="value"><?= e($vehicle['year']) ?></div>
        </div>
        <div class="row">
          <div class="label">ŞASİ NO :</div>
          <div class="value"><?= e($vehicle['chassis']) ?></div>
        </div>
        <div class="row">
          <div class="label">ARAÇ YAKIT CİNSİ :</div>
          <div class="value"><?= e($vehicle['fuel']) ?></div>
        </div>
      </div>
      <div class="v-right">
        <div class="row">
          <div class="label">MODEL (CİNSİ) :</div>
          <div class="value"><?= e($vehicle['model']) ?></div>
        </div>
        <div class="row">
          <div class="label">PLAKA :</div>
          <div class="value"><?= e($vehicle['plate']) ?></div>
        </div>
        <div class="row">
          <div class="label">MOTOR NO :</div>
          <div class="value"><?= e($vehicle['motor_no']) ?></div>
        </div>
        <div class="row">
          <div class="label">VİTES :</div>
          <div class="value"><?= e($vehicle['transmission']) ?></div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="section-title">EKSPERTİZ ÖNCESİ TESPİT EDİLEN DURUMLAR</div>
      <?php foreach ($rapor['aciklama'] as $aciklama): ?>
        <div class="long-text"><strong><?= htmlspecialchars($aciklama) ?></strong></div>
      <?php endforeach; ?>
    </div>
    <div class="section-title"></div>
    <?php foreach ($rapor["sabit_maddeler"] as $madde): ?>
      <div class="long-text"><strong><?= htmlspecialchars($madde) ?></strong></div>
    <?php endforeach; ?>
    <div class="signs">
      <div class="sign">Müşteri / Alıcı İmza<br><span style="font-size:10px;color:#666">Adı Soyadı: <?= $rapor['alici'] ?></span></div>
      <div class="sign">Satıcı / Ruhsat Sahibi İmza<br><span style="font-size:10px;color:#666">Adı Soyadı: <?= $rapor['satici'] ?></span></div>
    </div>
  </div>
</body>

</html>