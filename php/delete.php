<?php
session_start();
if (isset($_SESSION["unique_id"])) {
    include_once "config.php";
if(isset($_GET["del_id_confirmed"])){

    $delete_id = mysqli_real_escape_string($conn, $_GET["del_id_confirmed"]);
    if (isset($delete_id) && $_SESSION['unique_id'] == $delete_id) {
        $sql = mysqli_query(
            $conn,
            "DELETE FROM users WHERE unique_id={$_GET["del_id_confirmed"]}"
        );
        if ($sql) {
            session_unset();
            session_destroy();
            header("location: ../index.php?del=true");
        }
    } else {
        header("location: ../users.php");
    }
} else {
}

}else{
header("location: ../login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatMe Delete | Your Account</title>
</head>
<body>

<script>
let confirm_result = confirm('Are you sure you want to delete your account?')
if(confirm_result){
    location.replace("./delete.php?del_id_confirmed=<?php echo $_GET['del_id']?>")
}else{
    location.replace("/users.php")

}
</script>
</html>
</body>
