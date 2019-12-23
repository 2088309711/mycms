<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\php-workspace\hz.njzh/tp5/application/index\view\index\video_play.html";i:1575443535;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $videoInfo['title']; ?></title>
    <link rel="stylesheet" type="text/css" href="/statics/video_play/css/normalize.css"/><!--CSS RESET-->
    <link rel="stylesheet" href="/statics/video_play/dist/css/ckin.css">
    <link rel="stylesheet" href="/statics/video_play/css/demo.css">
</head>
<body>
<div class="htmleaf-container">

    <section class="demo-section demo-section--light" id="demo">
        <div class="container">
            <video poster="/statics/video_play/images/<?php echo $videoInfo['images']; ?>"
                   src="/statics/video_play/video/<?php echo $videoInfo['video']; ?>" data-ckin="default" data-overlay="1"></video>
        </div>
    </section>

</div>

<script src="/statics/video_play/dist/js/ckin.js"></script>
</body>
</html>