<!DOCTYPE html>
<html>
<head>
    <title>Version 2 - UAT Bugs Fixing System - Final Project</title>
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
            <div class="col-sm-2 jumbotron" ><h3></h3> <p></p></div>
            <div class="col-sm-6 jumbotron"><h3>All Bugs</h3>
                <form action="/viewProject.php">
                    <div class="form-group">
                        <label for="name">UAT Bug 1</label>
                        <a class="btn btn-primary" href="bugClosure.php">Bug Updates</a>

                    </div>
                    <div class="form-group">
                        <label for="name">UAT Bug 2</label>
                        <a class="btn btn-primary" href="bugClosure.php">Bug Updates</a>
                    </div>
                    <div class="form-group">
                        <label for="name">UAT Bug 3</label>
                        <a class="btn btn-primary" href="bugClosure.php">Bug Updates</a>
                    </div>
                    <div class="form-group">
                        <label for="name">UAT Bug 4</label>
                        <a class="btn btn-primary" href="bugClosure.php">Bug Updates</a>
                    </div>
                    <a class="back" href="listProjectBugs.php">back</a>
                </form>
            </div>
            <div class="col-sm-2 jumbotron"><h3></h3></div>
        </div>
    </div>
</main>
<footer><?php include "footer.php"; ?></footer>
</body>
</html>