<html>
<?php

include "conf.php";

if(!empty($_POST))
{
    $name = $_POST['name'];
    $number = $_POST['number'];

    $result = mysql_query("INSERT INTO records (name, number) VALUES ('$name', '$number')");
    if($result !== false) {
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
    }
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title . " - XML Generator" ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="add.php"><button type="button" class="btn btn-warning">Add New</button></a>
                </li>
                <li>
                    <a href="xml.php"><button type="button" class="btn btn-success">Generate XML</button></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input class="form-control" type="text" name="number" id="number">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>