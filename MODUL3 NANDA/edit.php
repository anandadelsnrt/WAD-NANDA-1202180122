<?php
include("config.php");

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    
    return $rows;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query = "SELECT * FROM modul3_crud WHERE id = $id";
    $data = query($query);
    $data = $data[0];
} 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Modul 3</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  
  <ul class="navbar-nav mr-auto">
  <li class="nav-item p-1">
      <p class="nav-link text-white" >EAD EVENT</p>
    </li>
  </ul>
    <ul class="nav-item p-1">
      <a class="nav-link text-white" href="index.php">Home</a>
    </ul>
    <ul>
    <form method="get" action="#">
    <button type="submit"class="btn btn-outline-light" >Buat Event</button>
</form>

    </ul>
  </form>
</div>
</nav>

<br>
<br>
    <div class="container">
      <div class="row">
        <div class="col-sm bg-white kiri">
        
        <div class="card border-dark mb-3" >
  <div class="card-header bg-danger "></div>
  <div class="card-body text-dark">

  <form method="POST" action="update_event.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input name="nama" class="form-control" type="text" value="Open Mind ESD Laboratory" readonly>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Deskripsi</label>
              <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $data['deskripsi'] ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Upload Gambar</label>
            <div class="custom-file">
              <input name="upload" type="file" class="custom-file-input" id="customFile">
              <!-- <input type="file" name="upload"> -->
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Kategori</label>
            <br>
            <div class="custom-control custom-radio custom-control-inline">
              <input 
                type="radio" 
                id="customRadioInline1" 
                name="kategori" 
                value="Event Online" 
                class="custom-control-input"
                <?php if ($data['kategori'] == "Event Online") echo "checked" ?>>
              <label class="custom-control-label" for="customRadioInline1">Online</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input 
                type="radio" 
                id="customRadioInline2" 
                name="kategori"  
                value="Event Offline" 
                class="custom-control-input"
                <?php if ($data['kategori'] == "Event Offline") echo "checked" ?>>
              <label class="custom-control-label" for="customRadioInline2">Offline</label>
            </div>
            </div>


        </div>
  </div>
</div>

        <div class="col-sm bg-white kanan">  
        <div class="card border-dark mb-3" >
        <div class="card-header bg-primary "></div>
        <div class="card-body text-dark">

        <div class="form-group">
              <label for="exampleInputEmail1">Tanggal</label><br>
              <input type="date" name="tanggal" value="<?= $data['tanggal'] ?>" style="width: 100%">
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Jam Mulai</label>
            <select class="form-control" id="exampleFormControlSelect1" name="mulai">
                <option><?= $data['mulai'] ?></option>
                <option>01:00</option>
                <option>02:00</option>
                <option>03:00</option>
                <option>04:00</option>
                <option>05:00</option>
                <option>06:00</option>
                <option>07:00</option>
                <option>08:00</option>
                <option>09:00</option>
                <option>10:00</option>
                <option>11:00</option>
                <option>12:00</option>
                <option>13:00</option>
                <option>14:00</option>
                <option>15:00</option>
                <option>16:00</option>
                <option>17:00</option>
                <option>18:00</option>
                <option>19:00</option>
                <option>20:00</option>
                <option>21:00</option>
                <option>22:00</option>
                <option>23:00</option>
                <option>24:00</option>
            </select>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Jam Berakhir</label>
            <select class="form-control" id="exampleFormControlSelect1"  name="berakhir">
                <option selected><?= $data['berakhir'] ?></option>
                <option>01:00</option>
                <option>02:00</option>
                <option>03:00</option>
                <option>04:00</option>
                <option>05:00</option>
                <option>06:00</option>
                <option>07:00</option>
                <option>08:00</option>
                <option>09:00</option>
                <option>10:00</option>
                <option>11:00</option>
                <option>12:00</option>
                <option>13:00</option>
                <option>14:00</option>
                <option>15:00</option>
                <option>16:00</option>
                <option>17:00</option>
                <option>18:00</option>  
                <option>19:00</option>
                <option>20:00</option>
                <option>21:00</option>
                <option>22:00</option>
                <option>23:00</option>
                <option>24:00</option>
            </select>
            </div>
          </div> 
          <div class="form-group">
              <label for="exampleInputEmail1">Tempat</label>
              <input name="tempat" class="form-control" type="text" value="Zoom Meeting" readonly>
            </div>   
          <div class="form-group">
              <label for="exampleInputEmail1">Harga</label>
              <input type="phone" name="harga" value="<?= $data['harga'] ?>" class="form-control">
          </div>

          <div class="form-group">
              <label for="exampleInputEmail1">Benefit</label>
              <br>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="benefit[]" value="Snacks">
            <label class="form-check-label" for="inlineCheckbox1">Snacks</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="benefit[]" value="Sertifikat">
            <label class="form-check-label" for="inlineCheckbox2">Sertifikat</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="benefit[]"  value="Souvenir">
            <label class="form-check-label" for="inlineCheckbox2">Souvenir</label>
          </div>

          </div>
              <div class="box" style="float: right;">
              <input type="hidden" name="id" value="<?= $data['id'] ?>">
              <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
              <button type="button" class="btn btn-danger">Cancel</button>
          </div>
          
        </div>
      </div>
    </div>
</form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>