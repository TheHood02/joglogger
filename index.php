<?php

$conn = new mysqli("localhost", "root", "", "jog_logger");


if (isset($_POST['submit'])) {
    // echo "<script>alert('submitted')</script>";
    $date = $_POST['date'];
    $dist_covered = $_POST['dist_covered'];
    $time_taken = $_POST['time_taken'];

    $query = mysqli_query($conn, "INSERT INTO `logs` (`date`, `dist_covered`, `time_taken`) VALUES ('$date', '$dist_covered', '$time_taken') ");
    $_POST['submit'] = 0;

    if ($query) {
        echo "Data Entered";
    } else {
        echo $conn->error;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JogLogger</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">

        <div class="heading">
            <p>JogLogger</p>
        </div>

        <div>
            <form action="" method="POST" class="form">
                
                <div>
                    <label for="" class="text">Date:</label> <br>
                    <input name="date" class="input-field" type="date" placeholder="YYYY-MM-DD" required/>
                </div>
                
                <div>
                    <label for="" class="text">Distance Covered:</label> <br>
                    <input name="dist_covered" class="input-field" type="text" placeholder="0.0km" required/>
                </div>
                
                <div>
                    <label for="" class="text">Time Taken:</label> <br>
                    <input name="time_taken" class="input-field" type="text" placeholder="HH:MM:SS" required/>
                </div>

                <button name="submit" type="submit" class="btn">Add</button>
            </form>
        </div>

        <!-- <table class="logs">
            <tr>
                <td class="head" colspan="5" style="text-align: center;">Logs:</td>
            </tr>
            <tr class="titles">
                <th class="text">Date:</th>
                <th class="text">Distance Covered:</th>
                <th class="text">Time Taken:</th>
                <td></td>
                <td></td>
            </tr>
            <tr class="log">
                <td class="text">10/01/2022</td>
                <td class="text">2.3km</td>
                <td class="text">14 minutes</td>
                <td><img src="assets/icons8-edit.svg" alt=""></td>
                <td><img src="assets/icons8-delete.svg" alt=""></td>
            </tr>
            <tr class="log">
                <td class="text">08/01/2022</td>
                <td class="text">4.4km</td>
                <td class="text">30 minutes</td>
                <td><img src="assets/icons8-edit.svg" alt=""></td>
                <td><img src="assets/icons8-delete.svg" alt=""></td>
            </tr>
        </table> -->

        <table class="logs">
            <tr>
                <td class="head" colspan="5" style="text-align: center;">Logs:</td>
            </tr>
            <tr class="titles">
                <th class="text">Date:</th>
                <th class="text">Distance Covered:</th>
                <th class="text">Time Taken:</th>
                <td></td>
                <td></td>
            </tr>
            <?php 
                
                $sql = "SELECT date, dist_covered, time_taken FROM logs";
                $result = $conn->query($sql);
                // $result is an object
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    // $row is an array
                    echo "<tr class='log'><td class='text'>" . $row["date"]. "</td><td class='text'>" . $row["dist_covered"]. "</td><td class='text'>" . $row["time_taken"]. "</td><td><img src='assets/icons8-edit.svg' alt=''></td><td><img src='assets/icons8-delete.svg' alt=''></td></tr>";
                }
                } else {
                echo "0 results";
                }
            ?>
        </table>

    </div>
</body>
</html>