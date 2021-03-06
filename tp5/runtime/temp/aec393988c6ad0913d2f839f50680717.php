<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"D:\php-workspace\MyCms/tp5/application/admin\view\login\index.html";i:1577171914;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理员登录</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--<link rel="stylesheet" href="/statics/pintuer/css/pintuer.css">-->
    <link rel="stylesheet" href="/statics/layui/css/layui.css">
</head>
<body class="layui-bg-gray">


<div class="layui-card" style="width: 450px; margin: 100px auto;">
    <div class="layui-card-header">
        <strong>
            <i class="layui-icon layui-icon-password"></i>
            管理员登录
        </strong>
    </div>
    <div class="layui-card-body">

        <form class="layui-form layui-form-pane" method="post"><?php echo token(); ?>
            <div class="layui-form-item">
                <label class="layui-form-label">用户名</label>
                <div class="layui-input-block">
                    <input type="text" name="username" required lay-verify="required" placeholder="请输入用户名"
                           class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">密码</label>
                <div class="layui-input-block">
                    <input type="password" name="password" required lay-verify="required" placeholder="请输入密码"
                           class="layui-input">
                </div>

            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">提问</label>
                <div class="layui-input-block">
                    <select name="equestion" lay-verify="required">
                        <option value=""></option>
                        <option value="0">北京</option>
                        <option value="1">上海</option>
                        <option value="2">广州</option>
                        <option value="3">深圳</option>
                        <option value="4">杭州</option>
                    </select>
                </div>
            </div>


            <div class="layui-form-item">
                <label class="layui-form-label">答案</label>
                <div class="layui-input-block">
                    <input type="text" name="eanswer" required lay-verify="required" placeholder="请输入答案"
                           class="layui-input">
                </div>
            </div>


            <div class="layui-form-item" style="margin-bottom: 5px;">


                <div class="layui-inline" style="width: 100%">
                    <label class="layui-form-label">全屏</label>
                    <div class="layui-input-inline" style="width: auto">
                        <input type="checkbox" name="adminwindow" lay-skin="switch" lay-text="开启|关闭">
                    </div>

                    <div class="layui-input-inline" style="width:auto;float: right; margin-right: 0;">


                        <div class="layui-btn-group" style=" ">
                            <button class="layui-btn layui-btn-normal" lay-submit lay-filter="formDemo">登录
                            </button>
                            <button type="button" class="layui-btn layui-btn-primary">网站首页</button>
                        </div>

                    </div>
                </div>


            </div>


            <strong style="color: #01AAED;">
                <i class="layui-icon layui-icon-auz"></i>
                令牌正在为您的登录安全保驾护航
            </strong>

        </form>


    </div>
</div>


<script src="/statics/layui/layui.js"></script>

<script>
    //Demo
    layui.use('form', function () {
        var form = layui.form;

        //监听提交
        form.on('submit(formDemo)', function (data) {
            layer.msg(JSON.stringify(data.field));
            // return false;
        });
    });
</script>

</body>
</html>