<!DOCTYPE html>
<html>
<head>
    <title>Version 2- UAT Bugs Fixing System</title>
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
    <div>
        <div class="row d-flex justify-content-around" id="maindata">

            <div class="col-sm-5 jumbotron"><h3>Bug Detail</h3>
                <form action="/viewProject.php">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <label for="namebug">UAT Bug 1</label>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <label for="desc">It is the online system where a manager adds the project
                            and assigns that project to a tester for finding the bug and programmer to solve that bug</label>
                    </div>
                    <div class="form-group">
                        <label for="tester">Tester:</label>
                        <label for="nameTester">Raj</label>
                    </div>
                    <div class="form-group">
                        <label for="namep">Project Name:</label>
                        <label for="namePro">UAT Bug Tracking System</label>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <label for="bugStatus">Solved</label>
                    </div>
                    <div class="form-group">
                        <label for="nameprog">Programmer:</label>
                        <label for="nameProgBug">Matthew</label>
                    </div>
                    <div class="form-group">
                        <label for="date">Date Created:</label>
                        <label for="datecreate">2018-04-10</label>
                    </div>
                    <div class="form-group">
                        <label for="due">Due Date:</label>
                        <label for="duedate">2018-04-30</label>
                    </div>
                    <div class="form-group">
                        <label for="openTime">Open Time:</label>
                        <label for="time">2018-04-30</label>
                    </div>
                    <div class="form-group">
                        <label for="closeTime">Close Time:</label>
                        <label for="timeclose">2018-04-30</label>
                    </div>


                </form>
            </div>
            <div class="col-sm-5 jumbotron"><h3></h3>
                <div class="form-group">
                    <label for="testmsg">Tester Message:</label>
                    <label for="msg">2018-04-30</label>
                </div>
                <div class="form-group">
                    <label for="progmsg">Programmer Message:</label>
                    <label for="message">2018-04-30</label>
                </div>
                <div class="form-group">
                    <label for="typemsg">Tester Message:</label>
                    <textarea class="form-control" rows="5" id="typemsg"></textarea>
                </div>
                <div class="form-group">
                    <label for="msgtype">Programmer Message:</label>
                    <textarea class="form-control" rows="5" id="msgtype"></textarea>
                </div>
                <a class="btn btn-primary" href="allBugsUpdate.php">Send Message</a>
                <a class="back" href="bugUpdateProject.php">back</a>

            </div>
        </div>
    </div>
</main>
<footer><?php include "footer.php"; ?></footer>
</body>
</html>