<?php
require_once './base.php';
require_once './connect_pdo.php';
require_once './utils.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    // $password = $_POST['password']; // Add password field
    $room_no = $_POST['room_no']; // Add room_no field
    $image = $_POST['image']; // Add image field

    try {
        // Connect to the database
        $pdo = connect_to_db_pdo();

        // Prepare SQL statement to update user
        $stmt = $pdo->prepare("UPDATE users SET name = :name, email = :email, room_no = :room_no, image = :image WHERE id = :id");

        // Bind parameters
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        // $stmt->bindParam(':password', $password, PDO::PARAM_STR); // Bind password parameter
        $stmt->bindParam(':room_no', $room_no, PDO::PARAM_INT); // Bind room_no parameter
        $stmt->bindParam(':image', $image, PDO::PARAM_STR); // Bind image parameter
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the statement
        $stmt->execute();
        // echo "<h1> Inserted {$pdo->lastup}</h1>";
        display_data();

        // // Redirect to a confirmation pgrade or updated user profile
        // header("Location: insert_stmt.php");
        // exit();
    } catch(PDOException $e) {
        // Handle database errors
        echo "Error: " . $e->getMessgrade();
    }
} else {
    // Redirect back to the form if accessed directly without form submission
    header("Location: update_form.php");
    exit();
}
?>
