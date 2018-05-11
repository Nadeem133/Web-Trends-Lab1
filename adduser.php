<?php

//Version 2 - Project Phase 1 - This is the feature developed by Nadeem for Nithya's final project
//This feature is incorporated as final feature for adding users

require_once 'Database.php';
require_once 'userregistration.php';

if(isset($_POST['add'])){

    //get form values and assign to local variables
    $user_name = $_POST['user_name'];
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    $s = new UserRegistration();
    $db = Database::getDb();
    $count = $s->addUser($db, $fname, $lname, $user_name, $email, $password,$phone, $type);

    header("Location: listusers.php");
    //echo "inserted " . $count;
}
?>

<!--<form action="adduser.php"  method="post">
    User Name:<input type="text" name="user_name" /><br />
    User first name:<input type="text" name="fname" /><br />
    User last name:<input type="text" name="lname" /><br />
    Phone number:<input type="text" name="phone" /><br />
    Email:<input type="text" name="email" /><br />
    Password:<input type="password" name="password" /><br />
    Type:<input type="text" name="type"/><br/>
    <input type="submit" name="add" value="Add User">
</form>-->
<!DOCTYPE html>
<html>
<head>
    <title>UAT Bugs Fixing System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/homepage.css" >
</head>
<body>

<header> <?php include "header.php"; ?></header>
<main>
    <h1>Add User</h1>
    <div class="container d-flex justify-content-center" id="maindata">

        <form action="adduser.php" method="post">
            <div class="form-group row">
                <label for="uname" class="col-md-3 col-form-label mr-2">Username:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control"  name="user_name">
                </div>
            </div>
            <div class="form-group row">
                <label for="fname" class="col-md-3 col-form-label mr-2">User First Name:</label>
                <div class="col-md-9">
                    <textarea class="form-control" rows="3" name="fname"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-md-3 col-form-label mr-2">User Last Name:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="lname" name="lname">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-md-3 col-form-label mr-2">Phone Number:</label>
                <div class="col-md-9">
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-3 col-form-label mr-2">Email:</label>
                <div class="col-md-9">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-md-3 col-form-label mr-2">Password:</label>
                <div class="col-md-9">
                    <input type="password" class="form-control" id="phone" name="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="type" class="col-md-3 col-form-label mr-2">Type:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="type" name="type">
                </div>
            </div>

            <input type="submit" name="add" value="Add User">
            <a class="back" href="listusers.php">back</a>
        </form>
    </div>

</main>
<footer><?php include "footer.php"; ?></footer>
</body>
</html>