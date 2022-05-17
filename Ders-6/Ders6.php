<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
 
<body>
<form action="deneme.php" method="post">
	Adınız:<br>
	<input type="text" name="txtAd"><br>
   Soyadınız:<br>
	<input type="text" name="txtAd"><br>
    Telefon:<br>
	<input type="text" name="txtAd"><br>
    Cinsiyet:<br>
	<div class="col-3 m-9">
  <select class="form-select" aria-label="secme">
  <option selected>Cinsiyet</option>
  <option value="1">Erkek</option>
  <option value="2">Kız</option>
</select>
  </div>
	
   Ders:<br>
   <div class="col-3 m-9">
  <select class="form-select" aria-label="secme">
  <option selected>Dersler</option>
  <option value="1">Yazılım Mimarileri</option>
  <option value="2">Web Programlama</option>
  <option value="3">Sunucu İşletim Sistemleri</option>
</select>
  </div>
    Notunuz:<br>
	<input type="text" name="txtAd"><br>
	<input type="submit" name="btn" value="GÖNDER">
</form>

 
</body>
</html>
</body>
</html>