{__NOLAYOUT__}<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <title>系统提示</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/statics/layui/css/layui.css">
</head>

<body class="layui-bg-gray">


<div class="layui-card" style="width: 450px; margin: 100px auto;">
    <div class="layui-card-header">
        <strong>
            <i class="layui-icon layui-icon-speaker"></i>
            系统提示
        </strong>
    </div>
    <div class="layui-card-body">


        <div style="text-align: center;padding: 20px 0 10px 0;">


            <?php switch ($code) {?>
            <?php case 1:?>
            <i class="layui-icon layui-icon-face-smile" style="font-size: 40px; color: #1E9FFF;"></i>
            <?php break;?>
            <?php case 0:?>
            <i class="layui-icon layui-icon-face-cry" style="font-size: 40px; color: #FF5722;"></i>
            <?php break;?>
            <?php } ?>

            <h2 style="margin-top: 15px;"><?php echo(strip_tags($msg));?></h2>

            <p style="margin-top: 10px;">
                页面自动 <a id="href" href="<?php echo($url);?>" style="color: #ff0300">跳转</a> 等待时间：
                <strong id="wait"><?php echo($wait);?></strong> 秒
            </p>
        </div>

    </div>
</div>

<script type="text/javascript">
    (function () {
        var wait = document.getElementById('wait'),
            href = document.getElementById('href').href,
            interval = setInterval(function () {
                var time = --wait.innerHTML;
                if (time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                }
            }, 1000);
    })();
</script>
</body>
</html>