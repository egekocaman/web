<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ders-1</title>
</head>
<body>
    <!-- Html yorum satırı -->

<?php
/*açıklama satırı bloğu
 (çoklu satır kullanılabilir) kısayolu shift+alt+a
*/

// Tek satır açıklama için kullanılır.

/*Kullanılan Komut:
echo: Ekrana yazdırma işlemi yapar.
Komut içerisinde html etiketleri kullanılabilir
çift veya tek tırnak kullanılabilir.
çift tırnak ile kullanıldığında içerisindeki değişkenlerin
içeriğini ekrana yazar.
Nokta operatörü ile birleştirme işlemi yapılabilir.
Ters slash(\) kaçış karakteridir.özel ifadelerden önce kullanılır.

*/
echo "<h3>Adnan Menderes Üniversitesi</h3>";
echo "<h4>Aydın Meslek Yüksekokulu</h4>";
echo "Bilgisayar Mühendisliği " . " Aymes";
echo "<br>Bilgisayar Mühendisliği " . " Aymes";

echo "<hr> <h4> Değişken Tanımlama </h4>";

echo "<ol>
<li>Değişken isimleri # ile başlar.</li>
<li>Değişken isimleri sayısal ifadelerle başlayamaz. </li>
<li>Değişken isimlerinde boşluk kullanılmaz. İki kelime birinci_sinif
birinciSinif birinci-sinif örnekleri kullanılıbilir. \$sayi != \$Sayi </li>
<li>Değişken ismi, değişkenin taşıdığı içeriği ifade etmeli.</li>
<li>Değişken içerisinde metinsel ifade varsa çift tırnak (\") veya tek tırnak (') kullanılabilir.</li>
<li>Değişken içeriğinde sayısal bir ifade varsa tırnak kullanmak gerekli değildir.</li>
<li>Değişken içerikleri ekrana echo komutu ile yazdırılabilir.</li>
</ol>";

echo "<hr> <h4> Değişken tanımlama örnekleri</h4>";

$isim    ="Ahmet";
$soyisim ="Erimez";
$gsm     ="123123123";

echo $isim."<br>";
echo "$isim $soyisim $gsm";

/*Uygulama:
Üniversite-myo-ad-soyad-numara değişkenlerini tanımlayınız.
Bu değişkenlerin içeriklerini tablo veya form içeriğinde ekrana yazdırnız.
*/
$uni="Adü";
$myo="Aymes";
$ad="Ege";
$soyad="Kocaman";
$numara="216029052";


?>

<form action="">
    <label for="universite">Üni: </label>
    <input type="text" name=" " value="<?php echo $uni; ?>" id="universite" disabled><br>

    <label for="myo">Myo:</label>
    <input type="text" name=" " value="<?php echo $myo;?> "id="myo" disabled><br>

    <label for="myo">Öğrenci Adı:</label>
    <input type="text" name=" " value="<?php echo $ad;?> "id="ad" disabled><br>


    <label for="myo">Öğrenci Soyadı:</label>
    <input type="text" name=" " value="<?php echo $soyad;?> "id="soyad" disabled><br>

    <label for="myo">Öğrenci No:</label>
    <input type="text" name=" " value="<?php echo $numara;?> "id="numara" disabled><br>
</form>






<br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>