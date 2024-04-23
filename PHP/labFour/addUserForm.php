<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="loginForm.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" >
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" >
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" >
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
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
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
</body>
</html> -->

<?php

if(isset($_GET["errors"])){
    $errors = json_decode($_GET["errors"], true);
}

if(isset($_GET['old_data'])){
    $old_data = json_decode($_GET["old_data"], true);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <form action="addUserValidation.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name"
            value="<?php echo $old_data['name']? $old_data['name']: ''; ?>"
            >
            <p style="color: red; font-weight: bold">
                <?php  echo  $errors['name']? $errors["name"]: ""; ?>
            </p>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email"
            value="<?php echo $old_data['email']? $old_data['email']: ''; ?>">
            <p style="color: red; font-weight: bold">
                <?php  echo  $errors['email']? $errors["email"]: ""; ?>
            </p>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" >
            <p style="color: red; font-weight: bold">
                <?php  echo  $errors['password']? $errors["password"]: ""; ?>
            </p>
        </div>

        <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" >
            <p style="color: red; font-weight: bold">
                <?php  echo  $errors['confirm_password']? $errors["confirm_password"]: ""; ?>
            </p>
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
            <p style="color: red; font-weight: bold">
                <?php  echo  $errors['image']? $errors["image"]: ""; ?>
            </p>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
