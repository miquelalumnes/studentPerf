<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<script src="../js/jquery-3.5.0.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
<style>
    h1 {
        text-align: center;
        color: firebrick;
    }

    h4 {
        color: darkslategrey;
    }

    .footer {
        position: absolute;
        text-align: right;
        color: black;
        bottom: 0;
        width: 100%;
        height: 60px;
        /* Set the fixed height of the footer here */
        line-height: 60px;
        /* Vertically center the text there */
    }

    #background {

        position: absolute;
        left: 0;
        top: 0;
        background-size: cover;
        min-height: 768px;
        width: 100vw;
        opacity: 0.5;
        /*Nice background photo goes here*/
        background-image: url("");
        z-index: -1;
    }

</style>

<div id="background"></div>

<body>
    <?php
    
    session_start();
    if (isset($_POST['name'])){
         $username = stripslashes($_POST['name']);
        echo '<script> localStorage.setItem("name","' . $username . '");
        window.location = "studentperf.php";
        </script>';
    }
    
    ?>

    <div class="form col-12" style="padding: 6em 3em 6em 4em;">
        <h4>Howdy! What's your name?</h4>
        <form action="" method="post" name="checkin">
            <input type="text" name="name" required />
            <input name="submit" type="submit" value="Come right in!" />
        </form>
    </div>

    <h1>Student Performances</h1>
</body>
<!--Insert photo credit if needed-->
<footer class="footer">Photo Credit</footer>

</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="">
