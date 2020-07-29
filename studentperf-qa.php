<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.5.0.min.js"></script>
    <style>
        html {
            max-width: 90%;
            margin: auto;
        }

        .center_div {

            margin: auto;
            max-width: 90%;
            display: block;
            justify-content: center;
            align-items: center;

        }

        textarea {
            width: 100%;
            margin: auto;

        }

        input {
            width: 100%;
            margin: auto;
        }

        p {
            max-width: 500px;
            margin: auto;
        }


    </style>
    <title>Questions and Comments</title>

</head>

<body>
    <center><h6>You may leave your questions and comments here, or you may <a href="/studentperf.php">return to the performance page.</a></h6>
    
    </center>
    <div class="center_div">
        <form name="content" method="post" action="">
            <textarea name="content" rows="5" cols="30"></textarea>
            <br>
            <input type="submit" value="Submit!">
        </form>
        <br>
        <center><i>Comments will appear in the order they are received.</i></center>
    </div>
    <?php
    // The idea here is that a teacher can edit the HTML as needed to insert answers to the posted comments. Not pretty, but it kinda works.
$content = "";
    if (isset ($_POST["content"])){
$content = $_POST["content"];
$content = "<p class='content'>" . $content . "<br></p>";
//echo $content;
    }
    $log = file_put_contents('studentperf-qapage.html', $content.PHP_EOL , FILE_APPEND | LOCK_EX);
include 'audicio-qapage.html';
    
?>


</body>

</html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
