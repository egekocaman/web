<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-3</title>
</head>
<body>
    
</body>

<?php

 /* Uygulama ödevi
 Kuyruk ve Yığın Veri yapılarının php üzerinde dizileri örneklendirmesini gerçekleştiriniz.
 */

/* Uygulama: Rastgele üretilen sayının
50
2den büyükse
Geçtiniz-Notunuz: xx
50'den küçükse
Kaldınız-Notunuz: xx
uygulamasını gerçekleştiriniz
*/

$not = rand(10,100);
if ($not >=50) {
    echo "Geçtiniz-Notunuz:$not";
}
else {
    echo "Kaldınız-Notunuz:$not";
}

echo "<h3>Sık Kullanılan String Fonksiyonlar</h3>";

$yazi = "Aydın Adnan Menderes Üniversitesi";
echo "<br> Değişken İçeriği: $yazi (" . gettype($yazi) . ")";

//İçeriğin Büyük harfe Dönüştürülmesi

echo "<br> \$yazi İçeriğinin Büyük Harfle Yazılması: " . $buyuk_yazi = strtoupper($yazi);
echo "<br> \$yazi İçeriğinin Büyük Harfle Yazılması: " . $buyuk_yazi = mb_strtoupper($yazi);

//İçeriğin Küçük harfe Dönüştürülmesi
echo "<br> \$yazi İçeriğinin Küçük Harfle Yazılması: " . $kucuk_yazi = strtolower($buyuk_yazi);
echo "<br> \$yazi İçeriğinin Küçük Harfle Yazılması: " . $kucuk_yazi = mb_strtolower($buyuk_yazi);


//İçeriğin İlk harfinin, Büyük Harfe Dönüştürülmesi
echo "<br> \$yazi İlk Harfinin, Büyük Harfle Yazılması: " . $ilk_yazi = ucfirst($kucuk_yazi);

//İçeriğinin Tüm Kelimelerinin İlk Harfinin, Büyük harfe Dönüştürülmesi
echo "<br> \$yazi Tüm Kelimelerinin İlk Harfinin, Büyük harfle Yazılamsı: " . $kelime = ucwords($kucuk_yazi);

//İçeriğin Harf Sayısı:
echo "<br> \$yazi İçerisindeki Harf Sayısı:" . strlen($yazi);

//Ascii Char Karşılığı
echo "<br>Karakter Karşılığı: " . chr(109);
echo "<br>Karakter Karşılığı: " . chr(64);

// Uygulama 1-255 char karşılıkları:
for ($i = 1; $i <= 255; $i++) {
    echo chr($i) . "-";
}

//Metnin parçalanarak diziye dönüştürülmesi
$dizi=explode(" ", $yazi);
echo "<br>";
print_r($dizi);

//Uygulama paragraftaki kelime ce cümle sayılarının alt alta yazdırınız.
$metin= "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum." ;

$kelimelerDizisi = explode(" ", $metin);
$cumlelerDizisi = explode(".", $metin);

echo"<br>kelime Sayısı: " . count($kelimelerDizisi);
echo"<br>Cümle Sayısı: " . count($cumlelerDizisi);

/* Uygulama
Veri tabanından gelen 2021-12-25 değerini 25-12-2021 şeklinde ekrana yazdırınız.
*/
echo "<br>";
$tarih = "2021-12-25";
$yenitarih = explode("-", $tarih);
echo $yenitarih[2] . "-" . $yenitarih[1] . "-" . $yenitarih[0];

//Dizinin metne Dönüştürülmesi (implode)
echo "<br>";
$aylar= ["Ocak", "Şubat", "Mart","Nisan","Mayıs"];
print_r($aylar);
$aylarString= implode(" ",$aylar);
echo "<br>String: $aylarString";

/*
str_split();
Verilen bir metnin belirten sayı kadar ayrılarak bir dizi içeriğine aktarılması. Eğer sayı belirtilmezse metni harf harf böler.
 */
echo "<br>";
 $iban = "TR0010002000300040005000";
 $ibanYeni =str_split($iban, 4);
 print_r($ibanYeni);

foreach ($ibanYeni as $parca) {
    echo "$parca ";
}
 /* Trim Substr str_replace- md5 -sha1*/






?>




</html>