<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\php-workspace\hz.njzh/tp5/application/red_pack\view\index\add.html";i:1574952904;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <title>新增数据</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/statics/css/pintuer.css">
    <script src="/statics/js/jquery.js"></script>
    <script src="/statics/js/pintuer.js"></script>
</head>

<body>

<div class="layout">

    <h1 class="text-center bg-sub text-white padding-small">
        新增数据
    </h1>

    <div class="padding">

        <form method="post" action="/index.php/add">

            <div class="form-group">
                <div class="label">
                    <label for="phone">
                        手机号</label>
                </div>
                <div class="field">
                    <input id="phone" name="phone" type="tel" data-validate="required:必填,mobile:请正确输入手机号"
                           class="input input-big"
                           placeholder="手机号"/>
                </div>
            </div>


            <div class="form-group">
                <div class="label">
                    <label for="num">
                        金额</label>
                </div>
                <div class="field">
                    <input id="num" name="num" type="number" data-validate="required:必填,number:请正确输入金额"
                           class="input input-big"
                           placeholder="金额"/>
                </div>
            </div>

            <div class="button-group border-blue button-group-big">
                <button type="reset" class="button">
                    清空
                </button>
                <button type="submit" class="button active">
                    添加
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
