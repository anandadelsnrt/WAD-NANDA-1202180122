<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Details Event</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #6a89cc;">
        <a class="navbar-brand text-white" href="#">EAD EVENTS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="nav-link active text-white" href="home.php">Home</a>
                <a href="buatevent.php" class="btn btn-outline-light my-2 my-sm-0 text-white">Buat Event</a>
            </form>
        </div>
    </nav>
    <br>

    <div class="container mt-3 mb-3">
        <form method="post" enctype="multipart/form-data" action="proses.php">
            <?php
            echo "<h2><marginleft><font color= #1B9CFC>Buat Event</font></center></h2>";
            ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-danger mb-3"></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama"><b>Name</b></label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="nama"><b>Deskripsi</b></label>
                                <textarea class="form-control" name="deskripsi" rows="4" required></textarea>
                            </div>
                            <label for="nama"><b>Upload Gambar</b></label>
                            <div class="custom-file mb-3">
                                <input type="file" name="file" class="custom-file-input" id="validatedCustomFile">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label required>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                            <div class="form-group">
                                <label for="inputkategori"><b>Kategori</b></label>
                                <br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="kategori1" name="kategori" value="Online">
                                    <label class="custom-control-label" for="kategori1">Online</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="kategori2" name="kategori" value="Offline">
                                    <label class="custom-control-label" for="kategori2">Offline</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-primary mb-3"></div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama"><b>Tanggal</b></label>
                                <input type="date" class="form-control" name="tanggal" required>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputDesc1">Jam Mulai</label>
                                        <input type="time" name="jammulai">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group ">
                                        <label for="exampleInputDesc1">Jam Berakhir</label>
                                        <input type="time" name="jamakhir">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama"><b>Tempat</b></label>
                                <input type="text" class="form-control" name="tempat" required>
                            </div>
                            <div class="form-group">
                                <label for="nama"><b>Harga</b></label>
                                <input type="text" class="form-control" name="harga" required>
                            </div>
                            <label for="nama"><b>Benefit</b></label>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="benefit[]" value="Snacks">
                                    <label class="form-check-label" for="inlineCheckbox1">Snacks</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="benefit[]" value="Sertifikat">
                                    <label class="form-check-label" for="inlineCheckbox2">Sertifikat</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="benefit[]" value="Souvenir">
                                    <label class="form-check-label" for="inlineCheckbox3">Souvenir</label>
                                </div>
                            </div>
                            <div class="col" style="text-align: right;">
                                <button type="submit" href="home.php" class="btn btn-primary " name="submit" value="Submit">Submit</button>
                                <button type="cancel" class="btn btn-danger " name="cancel">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Optional JavaScript; choose one of the two! -->

                <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

                <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>