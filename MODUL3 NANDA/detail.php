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

$id = $_GET['id'];

$query = "SELECT * FROM modul3_crud WHERE id = $id";
$data = query($query);
$data = $data[0];
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item p-1">
          <p class="nav-link text-white" >EAD EVENT</p>
        </li>
      </ul>
        <ul class="nav-item p-1">
          <a class="nav-link text-white" href="#">Home</a>
        </ul>
        <ul>
        <a href="event.php" class="btn btn-outline-light">Buat Event</a>

        </ul>
      </form>
    </div>
  </nav>


    <h3 style="color: blue;text-align: center;">Detail Event</h3>
    <center>
      <div class="card" style="width: 50%;">
        <img src="image/<?= $data['gambar'] ?>" class="card-img-top" style="height: 350px; background-size: cover;">
        <div class="card-body">
          <p class="card-text text-left"><?= $data['name'] ?></p>
          <h5 class="card-text text-left">Deskripsi</h5>
          <p class="card-text text-left"><?= $data['deskripsi'] ?></p>
          <div class="row">
            <div class="col-lg-6">
              <h5 class="text-left">Informasi Event</h5>
              <p class="text-left"><?= $data['tanggal'] ?></p>
              <p class="text-left"><?= $data['tempat'] ?></p>
              <p class="text-left"><?= $data['mulai'] ?> - <?= $data['berakhir'] ?></p>
            </div>
            <div class="col-lg-6">
              <h5 class="text-left">Benefit</h5>
              <p class="text-left"><?= $data['benefit'] ?></p>
            </div>
        </div>
        <p class="card-text text-left">Kategori : <?= $data['kategori'] ?></p>
        <p class="card-text text-left">HTM Rp. <?= $data['harga'] ?></p>

        <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-primary" id="openBtn">Edit</a>
        <a href="delete.php?id=<?= $data['id'] ?>" class="btn btn-danger">Delete</a>

      </div>
    </center>
    <script>
		$('#openBtn').click(function () {
			$('#myModal2').modal({
					show: true
			});
		})
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>