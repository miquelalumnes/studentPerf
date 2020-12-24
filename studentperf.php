<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery-3.5.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Asap&family=Dancing+Script&display=swap" rel="stylesheet">
    <title>Audició 2020</title>
</head>

<style>
    body {
        /*      You may add your own background image here.
        background-image: url('');
*/
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        opacity: 1
    }

    h1 {
        color: lightcoral;
    }

    h5 {
        padding-left: 2em;
        padding-right: 2em;
        padding-top: 1em;
        padding-bottom: 1em;

    }

    p {
        padding-left: 2em;
        padding-right: 2em;
    }

    @media only screen and (min-width: 768px) {

        video {
            max-width: 80%;
            height: auto;
        }
    }

    @media only screen and (min-width: 920px) {

        video {
            max-width: 60%;
            height: auto;
        }
    }

    @media only screen and (min-width: 660px) {

        video {
            max-width: 70%;
            height: auto;
        }
    }

    @media only screen and (max-width: 600px) {

        video {
            max-width: 80%;
            height: auto;
        }
    }

    .schoolName {
        font-family: 'Asap', sans-serif;

    }
</style>

<body>
    <h1>Welcome!</h1>

    <p>Please click on your school's name. To leave, click <a onclick="clearUser()" href="">here</a>, and to leave a comment, click <a href="audicio-qa.php">here.</a></p>

    <script>
        function clearUser() {
            localStorage.clear();
            name = "";
        }
    </script>
    <!--This script toggles each school name div-->
    <script>
        $(document).ready(function() {
            $("#school1button").click(function() {
                $("#school1").toggle(500);
            });
            $("#school2button").click(function() {
                $("#school2").toggle(500);
            });
            $("#school3button").click(function() {
                $("#school3").toggle(500);
            });
        });
    </script>

    <a href="#" id="school1button">
        <h3 class="schoolName">School 1</h3>
    </a>
    <div id="school1" style="display:none;">
        <a href="#student1">Student 1 </a>
        <a href="#studen2">Student 2 </a>
        <a href="#student3">Student 3 </a>
    </div>

    <a href="#" id="school2button">
        <h3 class="schoolName">School 2</h3>
    </a>
    <div id="school2" style="display:none;">
        <a href="#student4">Student 4 </a>
        <a href="#student5">Student 5 </a>
        <a href="#student6">Student 6 </a>
    </div>
    <a href="#" id="school3button">
        <h3 class="schoolName">School 3</h3>
    </a>
    <div id="school3" style="display:none;">
        <a href="#student7">Student 7 </a>
        <a href="#student8">Student 8 </a>
        <a href="#student9">Student 9 </a>
    </div>

    <hr>
    <script>
        // read and display "seen by" line on each video div
        $(document).ready(function() {

            var userSeen = localStorage.getItem("name");
            console.log(userSeen);
            if (userSeen == null) {
                console.log('no username set');
                window.location = 'studentperf-frontpage.php';
            }
            $.ajax({

                url: 'studentPerf.json',
                dataType: 'json',
                type: 'get',
                cache: false,
                success: function(data) {
                    $(data[0]["seenBy"]).each(function(index, value) {
                        $("#vid0").append(value);
                        $("#vid0").append(' | ', );
                    });
                    $(data[1]["seenBy"]).each(function(index, value) {
                        $("#vid1").append(value);
                        $("#vid1").append(' | ', );
                    });
                    $(data[2]["seenBy"]).each(function(index, value) {
                        $("#vid2").append(value);
                        $("#vid2").append(' | ', );
                    });
                    $(data[3]["seenBy"]).each(function(index, value) {
                        $("#vid3").append(value);
                        $("#vid3").append(' | ', );
                    });
                    $(data[4]["seenBy"]).each(function(index, value) {
                        $("#vid4").append(value);
                        $("#vid4").append(' | ', );
                    });
                    $(data[5]["seenBy"]).each(function(index, value) {
                        $("#vid5").append(value);
                        $("#vid5").append(' | ', );
                    });
                    $(data[6]["seenBy"]).each(function(index, value) {
                        $("#vid6").append(value);
                        $("#vid6").append(' | ', );
                    });
                    $(data[7]["seenBy"]).each(function(index, value) {
                        $("#vid7").append(value);
                        $("#vid7").append(' | ', );
                    });
                    $(data[8]["seenBy"]).each(function(index, value) {
                        $("#vid8").append(value);
                        $("#vid8").append(' | ', );
                    });
                    $(data[9]["seenBy"]).each(function(index, value) {
                        $("#vid9").append(value);
                        $("#vid9").append(' | ', );
                    });

                }
            })
        });
    </script>

    <div id="student1">
        <P>Student 1 bio</P>
        <video controls src="vid0.mp4" onEnded="vid0Post()"></video>
        <script>
            // add current username to json file and then add the username to the "seen by" div
            function vid0Post() {
                var userSeen = localStorage.getItem("name");
                $.ajax({

                    url: 'vidProcess.php',
                    type: 'POST',
                    data: {
                        vidId: 0,
                        seenBy: userSeen
                    },
                    success: function(result) {
                        $("#vid0").append(result);
                        $("#vid0").append(' | ', );
                    },
                    error: function() {
                        console.log('error');
                    }

                });
            }
        </script>
    </div>
    <div id="vid0">
        Seen by>:
    </div>
    <hr>

    <div id="student2">
        <p>Student 2 bio</p>
        <video controls src="vid1.mp4" onEnded="vid1Post()"></video>
        <script>
            function vid1Post() {
                var userSeen = localStorage.getItem("name");
                $.ajax({

                    url: 'vidProcess.php',
                    type: 'POST',
                    data: {
                        vidId: 1,
                        seenBy: userSeen
                    },
                    success: function(result) {
                        $("#vid1").append(result);
                        $("#vid1").append(' | ', );
                    },
                    error: function() {
                        console.log('error');
                    }

                });
            }
        </script>
    </div>
    <div id="vid1">
        Seen by:
    </div>
    <hr>
    <div id="student3">
        <p>Student 3 bio</p>
        <video controls src="vid2.mp4" onEnded="vid2Post()"></video>
        <script>
            function vid2Post() {
                var userSeen = localStorage.getItem("name");
                $.ajax({

                    url: 'vidProcess.php',
                    type: 'POST',
                    data: {
                        vidId: 2,
                        seenBy: userSeen
                    },
                    success: function(result) {
                        $("#vid2").append(result);
                        $("#vid2").append(' | ', );
                    },
                    error: function() {
                        console.log('error');
                    }

                });
            }
        </script>
    </div>
    <div id="vid2">
        Seen by:
    </div>
    <hr>
    <div id="student4">
        <p>Student 4 bio</p>
        <video controls src="vid3.mp4" onEnded="vid3Post()"></video>
        <script>
            function vid3Post() {
                var userSeen = localStorage.getItem("name");
                $.ajax({

                    url: 'vidProcess.php',
                    type: 'POST',
                    data: {
                        vidId: 3,
                        seenBy: userSeen
                    },
                    success: function(result) {
                        $("#vid3").append(result);
                        $("#vid3").append(' | ', );
                    },
                    error: function() {
                        console.log('error');
                    }

                });
            }
        </script>
    </div>
    <div id="vid3">
        Seen by:
    </div>
    <hr>
    <div id="student5">
        <p>Student 5 bio</p>
        <video controls src="vid4.mp4" onEnded="vid4Post()"></video>
        <script>
            function vid4Post() {
                var userSeen = localStorage.getItem("name");
                $.ajax({

                    url: 'vidProcess.php',
                    type: 'POST',
                    data: {
                        vidId: 4,
                        seenBy: userSeen
                    },
                    success: function(result) {
                        $("#vid4").append(result);
                        $("#vid4").append(' | ', );
                    },
                    error: function() {
                        console.log('error');
                    }

                });
            }
        </script>
    </div>
    <div id="vid4">
        Seen by:
    </div>
    <hr>
    <div id="student6">
        <p>Student 6 bio</p>
        <video controls src="vid5.mp4" onEnded="vid5Post()"></video>
        <script>
            function vid5Post() {
                var userSeen = localStorage.getItem("name");
                $.ajax({

                    url: 'vidProcess.php',
                    type: 'POST',
                    data: {
                        vidId: 5,
                        seenBy: userSeen
                    },
                    success: function(result) {
                        $("#vid5").append(result);
                        $("#vid5").append(' | ', );
                    },
                    error: function() {
                        console.log('error');
                    }

                });
            }
        </script>
    </div>
    <div id="vid5">
        Seen by:
    </div>
    <hr>
    <div id="student7">
        <p>Student 7 bio</p>
        <video controls src="vid6.mp4" onEnded="vid6Post()"></video>
        <script>
            function vid6Post() {
                var userSeen = localStorage.getItem("name");
                $.ajax({

                    url: 'vidProcess.php',
                    type: 'POST',
                    data: {
                        vidId: 6,
                        seenBy: userSeen
                    },
                    success: function(result) {
                        $("#vid6").append(result);
                        $("#vid6").append(' | ', );
                    },
                    error: function() {
                        console.log('error');
                    }

                });
            }
        </script>
    </div>
    <div id="vid6">
        Seen by:
    </div>
    <hr>
    <div id="student8">
        <p>Student 8 bio</p>
        <video controls src="vid7.mp4" onEnded="vid7Post()"></video>
        <script>
            function vid7Post() {
                var userSeen = localStorage.getItem("name");
                $.ajax({

                    url: 'vidProcess.php',
                    type: 'POST',
                    data: {
                        vidId: 7,
                        seenBy: userSeen
                    },
                    success: function(result) {
                        $("#vid7").append(result);
                        $("#vid7").append(' | ', );
                    },
                    error: function() {
                        console.log('error');
                    }

                });
            }
        </script>
    </div>
    <div id="vid7">
        Ho ha vist:
    </div>
    <hr>
    <div id="student9">
        <p>Student 9 bio</p>
        <video controls src="vid8.mp4" onEnded="vid8Post()"></video>
        <script>
            function vid8Post() {
                var userSeen = localStorage.getItem("name");
                $.ajax({

                    url: 'vidProcess.php',
                    type: 'POST',
                    data: {
                        vidId: 8,
                        seenBy: userSeen
                    },
                    success: function(result) {
                        $("#vid8").append(result);
                        $("#vid8").append(' | ', );
                    },
                    error: function() {
                        console.log('error');
                    }

                });
            }
        </script>
    </div>
    <div id="vid8">
        Seen by:
    </div>
    <hr>

</body>

</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
