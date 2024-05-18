<?php

session_start();

$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "ambulance_reservation";

$conn = mysqli_connect($server_name, $username, $password, $database_name);

//now check the connection
if (!$conn) {
    die("Connection Failed:" . mysqli_connect_error());

}

if (isset($_POST['submit'])) {

    $user_num = mysqli_real_escape_string($conn, $_POST['pnum']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);



    $sql = "SELECT * FROM user_detail WHERE user_num='$user_num' and user_pwd='$password'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $active = $row['active'];
    // if($row > 0){
    //     $_SESSION['authenticate'] = 'yes';
    // }
    // else{
    //     $_SESSION['authenticate'] = 'no';
    // }
    if ($_SESSION['authenticate']=='yes') {
        header('Location: dashboardmain.php');
    } else {
        header('Location: index.html');
    }
    // $count = mysqli_num_rows($result);
    if ($row) {
        // Output the fetched data
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_num'] = $row['user_num'];
        $_SESSION['user_pwd'] = $row['user_pwd'];
       $_SESSION['authenticate'] = 'yes';
        if ($_SESSION['user_pwd'] == $password && $_SESSION['user_num'] == $user_num) {
            $sql = "UPDATE user_detail SET authenticate = :value1 WHERE user_num = :id";
            $stmt = $pdo->prepare($sql);

            // Bind parameters
            $stmt->bindParam(':value1', $value1);
        
            $stmt->bindParam(':id', $id);

            // Set the values for the parameters
            $value1 = true;
           // $value2 = "new_value_2";
            $id = $user_num; // ID of the row to update

            // Execute the query
            $stmt->execute();

            header('Location: dashboardmain.php');
        } else {
            header('Location: index.html');
        }

    } else {
        echo "User not found or password incorrect.";
    }

    // If result matched $myusername and $mypassword, table row must be 1 row

    // if($count > 0) 
    // {
    //     $_SESSION['user_name'] = $row['user_name'];
    //     $_SESSION['id'] = $user_name;
    //     $_SESSION['login'] = 'yes';
    //    // header('Location: dashboardmain.php');
    //     exit();
    // }
    // else 
    // {
    //     //$error = "Your Login Name or Password is invalid";
    //     header('Location: index.html');
    // }

    mysqli_close($conn);
}
?>