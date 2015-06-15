
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Generate Invitational Letter for events">
    <meta name="author" content="Jose Hernandez">

    <title>LETTER INVITATIONAL AUTOGENERATE</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="http://getbootstrap.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <p><img src="assets/images/header.png" width="700"></p>
    </div>

    <div class="jumbotron">
        <h2>INVITATION LETTER AUTOGENERATE</h2>
        <p class="lead">In the following form you can generate your Letter of Invitation:</p>
            1. fill in all fields.<br/>
            2. Clic in Submit button.<br>
            3. Wait a few seconds, a PDF file is created for download.<br/>
    </div>

    <div class="row marketing">
        <form class="form-letter" action="generate.php" method="post">



                <!-- Select Basic -->
                <div class="controls">
                    <label class="control-label" for="title">Title</label>
                    <select id="title" name="title" class="form-control">
                        <option>Doctor</option>
                        <option>Professor</option>
                    </select>
                </div>

                <div class="controls">
                    <label class="control-label" for="applicant">Name of Applicant</label>
                    <input id="applicant" name="applicant" type="text" placeholder="Full name of Applicant" class="form-control" required="">
                </div>



                <div class="controls">
                    <label class="control-label" for="institution">Name of Institution</label>
                    <input id="institution" name="institution" type="text" placeholder="Institution/University" class="form-control" required="">
                </div>

            <!-- Button -->
            <div class="control-group">
                <label class="control-label" for="submit"></label>
                <div class="controls">
                    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>



    </div>
    </form>
    </div>

    <footer class="footer">
        <p>&copy; 2015. Powered by <a href="http://jose-hernandez.net" target="_blank">Jose Hernandez</a> </p>
    </footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
