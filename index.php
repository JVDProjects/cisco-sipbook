<html>
<?php include "conf.php"; ?>
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

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script>
        $(function(){
            var message_status = $("#status");
            $("td[contenteditable=true]").blur(function(){
                var field_userid = $(this).attr("id") ;
                var value = $(this).text() ;
                $.post('update.php' , field_userid + "=" + value, function(data){
                    if(data != '')
                    {
                        message_status.show();
                        message_status.text(data);
                        setTimeout(function(){message_status.hide()},3000);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.del_btn').click(function(){
                var del_id = $(this).attr('rel');
                $.post('delete.php', {delete_id:del_id}, function(data) {
                    if(data == 'true') {
                        $('#'+del_id).remove();
                        location.reload(true);
                    } else {
                        alert('Could not delete!');
                    }
                });
            });
        });
    </script>
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
        <div>
            <table class="table table-hover">
                <?php
                // Get data from DB
                $query = "SELECT * FROM records ORDER BY 'name'";

                $result = mysql_query($query)
                or die(mysql_error());?>
                <thead>
                <tr>
                    <td width="260"><b>Name</b></td>
                    <td width="30"><b>Number</b></td>
                    <td width="30"></td>
                </tr>
                </thead>
                <?php while($row = mysql_fetch_array($result)) : ?>
                <tr>
                           <td id="name:<?php echo $row['records_id']; ?>" contenteditable="true"><?php echo $row['name']; ?></td>
                           <td id="number:<?php echo $row['records_id']; ?>" contenteditable="true"><?php echo $row['number']; ?></td>
                           <td><button class="del_btn" rel="<?php echo $row['records_id']; ?>">Remove</button></td>
                </tr>
                <?php endwhile; ?>
                </table>
            </table>
         </div>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>