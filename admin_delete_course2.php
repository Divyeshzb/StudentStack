<?php
session_start();
include ("admin_nav.php");
include ("database.php");
?>
<html>
    <head>
 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <meta charset="UTF-8">
        <title></title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
 
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
        <link rel="stylesheet" type="text/css" href="ss.css">
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 
    </head>
    <body background="images/background.jpg" height="100"  >
 
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
               
                            <?php
                            $subid = $_REQUEST['subid'];
                            //$setid = $_REQUEST['setid'];
                            //echo $setid;
							$deletesubject = "delete from subject where sub_id = $subid;";
							$deletetest = "delete from quizlevel where sub_id = $subid";
							$sql2 = $deletesubject.$deletetest;
                            $query = mysqli_multi_query($con,$sql2) or die (mysqli_error($con));
                            if($query)
                            {
                                echo "<script>";
                                echo "var x=window.confirm('Subject DELETED successfully');
                                        if (x)
                                        {
                                            window.location='admin_delete_course.php';
                                        }
                                        else
                                        {
                                            window.location='admin_delete_course.php';
                                        }
                                     ";
                                echo "</script>";
                            }                            
                            ?>                              
    </body>
</html>




