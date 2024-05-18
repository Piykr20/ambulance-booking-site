<?php

session_start();
$auth = $_SESSION["authenticate"];


$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "ambulance_reservation";

$conn = mysqli_connect($server_name, $username, $password, $database_name);

// Now check the connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}


$pincode = $_POST['pincode'];
$result = mysqli_query($conn, "SELECT * FROM driver_detail WHERE pin_code='$pincode'");

if (mysqli_num_rows($result) > 0) 
{
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) 
    {
        $stmt_name = $row["driver_name"];
        $stmt_num = $row["driver_num"];
        $stmt_hospital = $row["driver_hospital"];
        $stmt_car = $row["driver_car"];
        $stmt_pincode = $row["pin_code"];

        echo '
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Driver Name: ' . $stmt_name . ' </h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Driver Number: ' . $stmt_num . '</li>
                        <li class="list-group-item">Hospital: ' . $stmt_hospital . '</li>
                        <li class="list-group-item">Ambulance Number: ' . $stmt_car . '</li>
                        <li class="list-group-item">Current Area Pin Code: ' . $stmt_pincode . '</li>
                    </ul>
                    <button type="button" name="submit" value="submit" class="btn btn-dark bookbtn" onclick="bookbtn()">Submit</button> 
                </div>
            </div>
        </div>';
    }
} 
else 
{
    echo "0 results found";
}

//$authenticated = isset($_SESSION["authenticate"]) && $_SESSION["authenticate"] == "yes";

// Function to handle the button click
//function handleclick() {
// global $authenticated;
//if ($authenticated) {
// header('Location: dashboardmain.php');
// exit();
// } else {
// header('Location: login.html');
// exit();
//}
//}

//<a href="javascript:void(0);" onclick="handleclick();">
              //  <button type="button" name="submit" class="btn btn-dark">Submit</button>
           // </a>

?>

<script>
function bookbtn() {
    document.location.href = "./bookbtn.php";
}
</script>

