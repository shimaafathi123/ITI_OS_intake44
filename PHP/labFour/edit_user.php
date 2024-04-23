<?php
require_once './base.php';
require_once  './connect_pdo.php';
require_once './utils.php';

// var_dump($_GET);

$std_id = $_GET['id'];
// var_dump($std_id);

try{
    $pdo = connect_to_db_pdo();
    // var_dump($pdo);
    $obj = "select * from users where id=$std_id";
    $stmt = $pdo->prepare($obj);
    $stmt->execute();
    $obj = $stmt->fetch(PDO::FETCH_ASSOC);
    // var_dump($obj);
}catch(PDOException $e){
    echo $e->getMessage();

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-5 mb-4">Update User</h2>
        <form action="update_user.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $obj['id']; ?>">
            
<!--             
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $obj['name']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $obj['email']; ?>">
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="grade" name="grade" value="<?php echo $obj['grade']; ?>">
            </div> -->
            <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name"
            value="<?php echo $obj['name']; ?>"
            >
           
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email"
            value="<?php echo $obj['email']; ?>">
          
        </div>


        <div class="form-group">
            <label for="room_no">Room NO.:</label>
            <select class="form-control" id="room_no" name="room_no" >
                <option value="">Select Room NO.</option>
                <option value="101">101</option>
                <option value="102">102</option>
                <option value="103">103</option>
            </select>
        </div>
        <div class="form-group">
            <label for="image">Upload Image:</label>
            <input type="file" class="form-control-file" id="image" name="image" >
        
        </div>



            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>