<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Log on to codeastro.com for more projects -->
<title>E-Bilet(<?php echo $cetak[0]['kd_order'];?>)</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
</style>
<style type="text/css">

    ::selection { background-color: #E13300; color: white; }
    ::-moz-selection { background-color: #E13300; color: white; }

    body {
        background-color: #fff;
        margin: 40px;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }

    a {
        color: #003399;
        background-color: transparent;
        font-weight: normal;
    }

    h1 {
        color: #444;
        background-color: transparent;
        border-bottom: 1px solid #D0D0D0;
        font-size: 19px;
        font-weight: normal;
        margin: 0 0 14px 0;
        padding: 14px 15px 10px 15px;
    }

    code {
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        font-size: 12px;
        background-color: #f9f9f9;
        border: 1px solid #D0D0D0;
        color: #002166;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
    }

    #body {
        margin: 0 15px 0 15px;
    }

    p.footer {
        text-align: right;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
    }

    #container {
        margin: 10px;
        border: 1px solid #D0D0D0;
        box-shadow: 0 0 8px #D0D0D0;
    }
    
    img{float:left;padding-right:10px;}
    </style>
</head>
<body onload="window.print()">
  <table width="100%">
    <tr>
        <td valign="top"><img src="<?php echo base_url($cetak[0]['qrcode_order']) ?>" alt="" width="200"/></td>
        <td align="right">
            <h1>E-Bilet</h1>
            <pre>
                <b><span style='font-size:15px'>Bilet Detayları </span></b>
                </br>
                Rezervasyon kodu : <?php echo $cetak[0]['kd_order'];?></br>
                Zamanlama Kodu: <?php echo $cetak[0]['kd_jadwal'];?></br>
                Tarih : <?php echo $cetak[0]['tgl_beli_order'];?></br>
                Müşteri : <?php echo $cetak[0]['nama_order'];?></br>
                Takvim : <?php echo hari_indo(date('N',strtotime($cetak[0]['tgl_berangkat_order']))).', '.tanggal_indo(date('Y-m-d',strtotime(''.$cetak[0]['tgl_berangkat_order'].'')));?><br>
                Kalkış Tarihi ve Saati : <?php echo date('H:i',strtotime($cetak[0]['jam_berangkat_jadwal'])).' To '.date('H:i',strtotime($cetak[0]['jam_tiba_jadwal'])) ?>
                Kalkış Yeri : <?php echo strtoupper($asal['kota_tujuan']);?></br>
                Varış Yeri : <?php echo strtoupper($cetak[0]['kota_tujuan']); ?>
            </pre>
        </td>
    </tr>
  </table>
  <br/>
  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>Bilet Numarası</th>
        <th>Yolcu</th>
        <th>Yaş </th>
        <th>Koltuk</th>
        <th>Fiyat</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($cetak as $row) { ?>
        <tr>
           <td scope="row"><?php echo $row['kd_tiket']; ?></td>
           <td align="left"><?php echo $row['nama_kursi_order']; ?></td>
           <td align="center"><?php echo $row['umur_kursi_order']; ?> Yıllar</td>
            <td align="center"><?php echo $row['no_kursi_order']; ?> </td>
           <td align="left"><?php echo '$'.number_format(($row['harga_jadwal'])); ?></td>
        <tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <td align="right">Toplam</td>
            <td align="right" class="gray"><?php $total = count($cetak) * $cetak[0]['harga_jadwal']; echo '$'.number_format(($total));?></td>
        </tr>
    </tfoot>
  </table>
  <div id="container">
    <h1>Şartlar ve Koşullar</h1>

    <div id="body">
        <ol type="1">
          <li>Umuttepe Turizm * Sadece otobüs bileti acenteleri. Otobüs hizmetini kendisi işletmez. Müşterilere kapsamlı bir otobüs operatörü, kalkış saati ve fiyat seçeneği sunmak için birçok otobüs operatörüyle bağlantı kurdu.
          Umuttepe Turizm'in müşterilerine tavsiyesi, tanıdıkları ve hizmetinden memnun oldukları otobüs işletmesini tercih etmeleridir.</li>
          <li>Bilette belirtilen kalkış saati yalnızca geçici bir zamandır. Ancak otobüs bilette belirtilen saatten önce kaynaktan ayrılmayacaktır. Yolcuların otobüse binerken aşağıdakileri sağlamaları gerekmektedir:
            (1) Biletin kopyası (Bileti yazdırın veya bilet e-postasını yazdırın).
            (2) Geçerli kimlik belgesi Bunu yapmadıkları takdirde otobüse binmelerine izin verilmeyebilir.</li>
           <li>Umuttepe Turizm'in sorumlulukları şunları içerir:
           (1) Otobüs işletmecisi ağı için geçerli bir bilet (otobüs işletmecisi tarafından kabul edilecek bilet) düzenlemek
           (2) İptal durumunda para iadesi ve destek sağlamak
           (3) Gecikme / güçlük durumunda müşteri desteği ve bilgi sağlayın
           Otobüs değiştirme: Otobüs işletmecisinin herhangi bir nedenle otobüs tipini değiştirmesi durumunda Umuttepe Turizm, seyahatten itibaren 24 saat içerisinde müşteri tarafından korkutulduktan sonra fark tutarını müşteriye iade edecektir.</li>
        <li>Umuttepe Turizm'in sorumluluğu aşağıdakileri İÇERMEZ:
        (1) Otobüs operatörü otobüsü zamanında kalkmıyor/ulaşmıyor
        (2) Otobüs operatörünün vb. koltuğu müşteriye uymuyor
        umut
        (3) Müşterinin bagajının kaybolması/çalınması/hasar görmesi
        (4) Otobüs işletmecisi biniş noktasını değiştirir ve/veya karşılamayı kullanır
        Birisinin banka hesabına geri yatırılması için para iadesine ihtiyacı varsa lütfen
        Nakit kupon bilgilerinizi support@umuttepeturizm.web adresine yazınız.</li>
        </ol>  
    </div>
</div>

</body>
</html>