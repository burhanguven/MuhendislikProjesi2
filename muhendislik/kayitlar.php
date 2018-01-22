<?php 
  if(!isset($_GET["get"]) || $_GET["get"] != 1)
    header("Location:login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>

      <div class="container-fluid">
          <div class="row">
              <div class="col-md-8">
                  <form onsubmit="return kontrol(this)">
                      <div class="form-group">
                        <label class="col-form-label">Ad Soyad</label>
                        <input name="bilgilerim_adsoyad" required="" type="text" id="adSoyad" class="form-control" placeholder="Ad Soyad">

                     </div>
                       <div class="form-group"> 
                            <label class="col-form-label"  id="eMail"> e-Mail</label>
                            <input name="bilgilerim_mail" required=""type="email" class="form-control"  placeholder="e-Mail"> 
                      </div> 
                       <div class="form-group"> 
                            <label  class="col-form-label" id="dogumT">Sınıf</label>
                            <input name="bilgilerim_sinif" required="" type="text" class="form-control"  placeholder="Sınıf"> 
                      </div> 
                       <div class="form-group"> 
                            <label class="col-form-label" required="" id="telefon">Bölüm</label>
                            <input name="bilgilerim_bolum" required="" type="text" class="form-control"  placeholder="Bölüm"> 
                      </div>

                      <div class="form-group"> 
                            <label class="col-form-label" required="" id="telefon">Öğrenci No</label>
                            <input name="bilgilerim_no" required="" type="text" class="form-control"  placeholder="No"> 
                      </div>

                      <div class="form-group">
                            <button type="submit"  class="btn btn-primary" name="insertislemi" style="width: 170px">Kaydet</button>
                      </div>
                </form>

                <hr>
                
                <table class="table table-hover" id="kayitlar">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Ogrenci No</th>
                  <th scope="col">Ad-Soyad</th>
                  <th scope="col">e-Mail</th>
                  <th scope="col">Sinifi</th>
                  <th scope="col">Bölümü</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
            </div>
          </div>
      </div>



<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>