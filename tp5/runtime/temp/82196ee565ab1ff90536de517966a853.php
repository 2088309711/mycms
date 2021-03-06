<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\php-workspace\hz.njzh/tp5/application/red_pack\view\index\delete.html";i:1575011956;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <title>删除数据</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/statics/css/pintuer.css">
    <script src="/statics/js/jquery.js"></script>
    <script src="/statics/js/pintuer.js"></script>
</head>

<body>

<div class="layout">

    <h1 class="text-center bg-sub text-white padding-small">
        删除数据
    </h1>

    <div class="padding">

        <form method="post" action="/index.php/delete" onsubmit="return confirm('真的要删除吗？');">

            <input type="hidden" name="id" value="<?php echo $rp['Id']; ?>">

            <table class="table table-bordered">

                <tr>
                    <td>编号</td>
                    <td><?php echo $rp['Id']; ?></td>
                </tr>

                <tr>
                    <td>金额</td>
                    <td><?php echo $rp['num']; ?></td>
                </tr>

                <tr>
                    <td>开始日期</td>
                    <td><?php echo $rp['s_date']; ?></td>
                </tr>

                <tr>
                    <td>结束日期</td>
                    <td><?php echo $rp['e_date']; ?></td>
                </tr>

            </table>


            <div class="button-group border-dot button-group-big margin-top">
                <a href="/index.php/query" class="button">
                    返回
                </a>
                <button type="submit" class="button active">
                    确认删除
                </button>
            </div>
        </form>
    </div>
</div>


</body>
</html>
