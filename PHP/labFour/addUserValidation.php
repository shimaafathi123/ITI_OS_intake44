<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php 
$errors = [];
$old_data = [];
include './base.php';
require_once './connect_credits.php';
require './connect_pdo.php';
require './utils.php';


if (empty($_POST["name"])) {
   $errors["name"] = "Name is required";
}

if (empty($_POST["email"])) {
   $errors["email"] = "Email is required";
} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
   $errors["email"] = "Invalid email format";
}

if (empty($_POST["password"])) {
   $errors["password"] = "Password is required";
} elseif (strlen($_POST["password"]) < 8) {
   $errors["password"] = "Password must be at least 8 characters long";
} elseif (preg_match('/[^a-z_]/', $_POST["password"])) {
   $errors["password"] = "Password must not contain special characters, only underscore allowed";
} elseif (preg_match('/[A-Z]/', $_POST["password"])) {
   $errors["password"] = "Password must not contain capital characters";
}

if (empty($_POST["confirm_password"])) {
    $errors["confirm_password"] = "Confirm Password is required";
} elseif ($_POST["password"] !== $_POST["confirm_password"]) {
    $errors["confirm_password"] = "Passwords do not match";
}

$old_data["name"] = $_POST["name"];
$old_data["email"] = $_POST["email"];

if (count($errors)) {
    $errors = json_encode($errors);
    $old_data = json_encode($old_data);
    if (!empty($old_data)) {
        $url = "errors={$errors}&old_data={$old_data}";
    } else {
        $url = "errors={$errors}";
    }
    header("Location: addUserForm.php?{$url}");
} else {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $room_no = $_POST['room_no'];

    if(isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $image_name = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_size = $_FILES['image']['size'];
        $image_type = $_FILES['image']['type'];
    
        move_uploaded_file($image_tmp_name, "images/" . $image_name);
    }
    $image = $image_name;


    try {
        $pdo = connect_to_db_pdo();

        create_users_table($pdo);
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password, image,room_no) VALUES (:name, :email, :password,:image ,:room_no)");

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt->bindParam(':room_no', $room_no, PDO::PARAM_INT);

        $stmt->execute();
            display_data();
        
    
    
    }catch (PDOException $e){
        echo $e->getMessage();
    }
    
} 

}
?>


</body>
</html>
