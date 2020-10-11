<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    error_reporting(0);
    $name = $_GET['name'];
    $check =$_GET['check-in'];
    $duration =$_GET['duration'];
    $type = $_GET['type'];
    $phone = $_GET['phone'];
    $service_count = count($_GET['add']);

    $checkout =  date('m/d/y', strtotime($check . ' + ' . $_POST['duration'] . 'days'));

    $totalPrice = $service_count * 20;
    ?>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="Home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Booking.php">Booking</a>
            </li>
        </ul>
    </nav>

    <div class="d-flex justify-content-center" style="margin-top:30px">
        <table class="table" style="width: 1000px;">
                <tr>
                    <th style="text-align: center;"">Booking Number</th>
                    <th style="text-align: center;"">Name</th>
                    <th style="text-align: center;">Check-in</th>
                    <th style="text-align: center;">Check-out</th>
                    <th style="text-align: center;">Room Type</th>
                    <th style="text-align: center;">Phone Number</th>
                    <th style="text-align: center;">Service</th>
                    <th style="text-align: center;">Total Price</th>
                </tr>
                <tr>
                    <th style="text-align: center;"">
                    <?php
                    echo(rand(10000,99999));
                    ?>
                    </th>
                    <td style="text-align: center;"><?php echo $name; ?></td>
                    <td style="text-align: center;"><?php echo date("m/d/y", strtotime($check)); ?></td>
                    <td style="text-align: center;"><?php echo $checkout; ?></td>
                    <td style="text-align: center;"><?php echo $type ?></td>
                    <td style="text-align: center;"><?php echo $phone ?></td>
                    <td style="text-align: center;">
                    <?php 
                        if (!empty($_GET['add'])) {
                            foreach($_GET['add'] as $selected) {
                                echo $selected . '<br>' ;
                            }
                        } 
                        else {
                            echo "no service";
                        }
                        
                    ?>
                    </td>
                    <td style="text-align: center;">$
                    <?php
                    if ($type == "Standard") {
                        echo (90 * $duration) + $totalPrice;
                    } 
                    else if ($type == "Superior") {
                        echo (150 * $duration) + $totalPrice;
                    } 
                    else if ($type == "Luxury") {
                        echo (200 * $duration) + $totalPrice;
                    }
                  ?>
                    </td>
                </tr>
    </div>
</body>
</html>