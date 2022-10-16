<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:./login.php');
}
include "../cadre/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style.css4">
    <title>Html And CSS Video Playlist</title>
    <!-- S-Tech04 | www.youtube.com/STech04 -->
</head>
<body>
    <section>
        <h2 class="title"></h2>
        <div class="container">
            <div id="video_player">
                <iframe id="main-Video" allow="fullscreen" src=""></iframe>
            </div>
            <div class="playlistBx">
                <div class="header">
                    <div class="row">
                        <span class="AllLessons"></span>
                    </div>
                </div>
                <ul class="playlist" id="playlist">
                </ul>
            </div>
        </div>
    </section>
    <script src="../style/video_list.js"></script>
    <script src="../style/main2.js"></script>
</body>
</html>
<script>
    var hd=document.querySelector('head');
    hd.innerHTML+='<link rel="stylesheet" href="../style/style4.css">    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">';
</script>
<?php
include "../cadre/footer.php";
?>