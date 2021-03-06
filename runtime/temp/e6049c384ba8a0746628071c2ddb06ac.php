<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:86:"D:\wwwroot\zhenqingxiang.com\public/../application/admin\view\shopro\config\index.html";i:1602492255;s:71:"D:\wwwroot\zhenqingxiang.com\application\admin\view\layout\default.html";i:1602492256;s:68:"D:\wwwroot\zhenqingxiang.com\application\admin\view\common\meta.html";i:1602492255;s:70:"D:\wwwroot\zhenqingxiang.com\application\admin\view\common\script.html";i:1602492255;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !\think\Config::get('fastadmin.multiplenav')): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <style type="text/css">
    .flex-row {
        display: flex;
        align-items: center;
    }

    .list-con {
        height: 338px;
        margin-bottom: 30px;
    }

    .list-con-header {
        background-color: #4dbe2e;
        height: 96px;
        padding: 24px;
        color: #fff;
        position: relative;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;

    }

    .list-con-header-xcx {
        background: #605ab0;
    }

    .list-con-header-h5 {
        background-color: #fb6b40;
    }

    .list-con-header-app {
        background-color: #51a4ff;
    }

    .list-con-header-info {
        background: linear-gradient(left, #33e3b9, #23c29c);
        background: -ms-linear-gradient(left, #33e3b9, #23c29c);
        background: -webkit-linear-gradient(left, #33e3b9, #23c29c);
        background: -moz-linear-gradient(left, #33e3b9, #23c29c);

    }
    .list-con-header-order,.list-con-header-order{
        background: linear-gradient(left, #5ea6ff,#2c79f4);
        background: -ms-linear-gradient(left, #5ea6ff,#2c79f4);
        background: -webkit-linear-gradient(left, #5ea6ff,#2c79f4);
        background: -moz-linear-gradient(left, #5ea6ff,#2c79f4);
    }
    .list-con-header-user{
        background: linear-gradient(left, #eecb88,#e9b461);
        background: -ms-linear-gradient(left, #eecb88,#e9b461);
        background: -webkit-linear-gradient(left, #eecb88,#e9b461);
        background: -moz-linear-gradient(left, #eecb88,#e9b461);
    }
    .list-con-header-share {
        background: linear-gradient(left, #E2B0FF,#9F44D3);
        background: -ms-linear-gradient(left, #E2B0FF,#9F44D3);
        background: -webkit-linear-gradient(left, #E2B0FF,#9F44D3);
        background: -moz-linear-gradient(left, #E2B0FF,#9F44D3);

    }
    .list-con-header-score{
        background: linear-gradient(left, #F7B754,#FF5F2D);
        background: -ms-linear-gradient(left, #F7B754,#FF5F2D);
        background: -webkit-linear-gradient(left, #F7B754,#FF5F2D);
        background: -moz-linear-gradient(left, #F7B754,#FF5F2D);
    } 
    .list-con-header-withdraw{
        background: linear-gradient(left, #FD778A,#FF4660);
        background: -ms-linear-gradient(left,  #FD778A,#FF4660);
        background: -webkit-linear-gradient(left,  #FD778A,#FF4660);
        background: -moz-linear-gradient(left,  #FD778A,#FF4660);
    }

    .title-img {
        position: absolute;
        bottom: -30px;
        right: -15px;
    }

    .list-con .title {
        font-size: 24px;
        line-height: 24px;
        margin-bottom: 14px;
        display: flex;
        justify-content: space-between;

    }

    .title-edit {
        font-size: 12px;
    }

    .list-con .title em {
        display: inline-block;
        height: 18px;
        line-height: 18px;
        padding: 0 6px;
        font-size: 12px;
        border-radius: 9px;
        font-style: italic;
        background-color: #41aa24;
        margin-left: 5px;
    }

    .list-con-header-xcx .title em {
        background: #433e8c
    }

    .list-con-header-h5 .title em {
        background-color: #ea6c48;
    }

    .list-con-header-app .title em {
        background-color: #117adc;
    }

    .list-con-body {
        padding: 28px 20px 24px;
        height: 250px;
        border: 1px solid #eee;
        text-align: center;
    }

    .list-con-bodyzf {
        height: 120px;
    }


    
    .body-con {
        height: 140px;
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        justify-content: center;
    }

    .body-btn {

        border-top: none;
        text-align: center;
        padding-bottom: 24px;
        height: 65px;
        display: flex;
        justify-content: center;
    }

    .body-btn-btn {
        width: 200px;
        height: 40px;
        font-size: 14px;
        color: #fff;
        line-height: 40px;
        border-radius: 10px;
    }

    .body-btn-btn:hover {
        color: #fff;
    }

    .body-btn-wx {

        background: #4dbe2e;
        ;
    }

    .body-btn-xcx {

        background: #605ab0;
    }

    .body-btn-h5 {

        background: #fb6b40;
    }

    .body-btn-app {
        background: #51a4ff;
    }

    .list-con-header-zfu,
    .body-btn-zfb {
        background: rgba(68, 180, 244, 1);
    }

    .list-con-header-ye,
    .body-btn-ye {
        background: rgba(252, 142, 79, 1);
    }

    .list-con-header-Apple,
    .body-btn-Apple {
        background: #837ce1;
    }
    .list-con-posi-center>div {
        display: flex;
        align-items: center;
    }

    .list-con-posi {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding: 20px 40px;
        box-sizing: border-box;
    }

    .list-con-posi-center-title {
        color: rgba(255, 255, 255, 1);
        font-size: 26px;
        text-align: left;
    }

    .list-con-posi-center-status {
        line-height: 34px;
        opacity: 0.8;
        color: #fff;
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 16px;
        font-size: 14px;
        text-align: center;
        margin-left: 24px;
        display: block;
        width: 78px;
        height: 34px;



    }

    .list-con-posi-center-msg {
        /* line-height: 30px; */
        color: rgba(255, 255, 255, 1);
        text-align: left;
    }

    .list-con-posi-right {
        color: rgba(255, 255, 255, 1);
        font-size: 18px;
        text-align: left;
        line-height: 30px;
    }

    .set-btn {
        color: #fff;
        font-size: 22px;
    }

    @media (max-width: 1400px) {
        .list-con-posi {

            padding: 20px;
        }

        .list-con-posi-center-title {
            font-size: 16px;
            line-height: 20px;
        }

        .list-con-posi-center-status {
            font-size: 10px;
            width: 57px;
            height: 20px;
            line-height: 20px;

        }

        .list-con-posi-center-msg {
            font-size: 12px;
            line-height: 18px;
        }

        .list-con-posi-right {
            font-size: 12px;
        }

        .set-btn {
            color: #fff;
            font-size: 12px;
        }

    }

    @media (max-width: 375px) {
        .edit-form tr td input {
            width: 100%;
        }

        .edit-form tr th:first-child,
        .edit-form tr td:first-child {
            width: 20%;
        }

        .edit-form tr th:nth-last-of-type(-n+2),
        .edit-form tr td:nth-last-of-type(-n+2) {
            display: none;
        }
    }
    .edit-form table>tbody>tr td a.btn-delcfg {
        visibility: hidden;
    }
    .edit-form table>tbody>tr:hover td a.btn-delcfg {
        visibility: visible;
    }
    .border-radius-tdleft {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        vertical-align: middle !important;


    }
    .border-radius-tdright {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        vertical-align: middle !important;

    }
    tr {
        border-radius: 10px;
    }

    a:focus {
        color: #fff;
    }
</style>
<div class="panel panel-default panel-intro">
    <div class="panel-heading">
        <?php echo build_heading(null, false); ?>
        <ul class="nav nav-tabs">
            <li class="active" data-toggle="tooltip" title="基础配置">
                <a href="#basics" data-toggle="tab">基础配置</a>
            </li>
            <li data-toggle="tooltip" title="平台配置">
                <a href="#channel" data-toggle="tab">平台配置</a>
            </li>
            <li data-toggle="tooltip" title="支付配置">
                <a href="#pays" data-toggle="tab">支付配置</a>
            </li>
            <li data-toggle="tooltip" title="<?php echo __('Add new config'); ?>">
                <a href="#addcfg" data-toggle="tab"><i class="fa fa-plus"></i></a>
            </li>
        </ul>
    </div>

    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="basics">
                <div class="row list-con col-xs-6 col-sm-6  col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="list-con-header list-con-header-info">
                            <div class="title">
                                <div><span>商城信息</span></div>
                            </div>
                            <div class="list-con-posi-center-msg">配置商城基本信息</div>
                            <img class="title-img" src="/assets/addons/shopro/img/info.png" alt="" srcset="">
                        </div>
                        <div class="list-con-body">
                            <div class="body-con">商城名称、H5域名、Logo...</div>
                            <div class="body-btn">
                                <a class="body-btn-btn list-con-header-info btn-dialog" title="商城信息"
                                    href="<?php echo url('shopro.config/platform?type=shopro'); ?>">设置</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row list-con col-xs-6 col-sm-6  col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="list-con-header list-con-header-user">
                            <div class="title">
                                <div><span>会员配置</span></div>
                            </div>
                            <div class="list-con-posi-center-msg">配置默认会员信息</div>
                            <img class="title-img" src="/assets/addons/shopro/img/user-img.png" alt="" srcset="">
                        </div>
                        <div class="list-con-body">
                            <div class="body-con">默认昵称、头像、分组、余额、积分</div>
                            <div class="body-btn">
                                <a class="body-btn-btn list-con-header-user btn-dialog" title="会员配置"
                                    href="<?php echo url('shopro.config/platform?type=user'); ?>">设置</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row list-con col-xs-6 col-sm-6  col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="list-con-header list-con-header-share">
                            <div class="title">
                                <div><span>分享设置</span></div>
                            </div>
                            <div class="list-con-posi-center-msg">配置默认分享信息</div>
                            <img class="title-img" src="/assets/addons/shopro/img/set.png" alt="" srcset="">
                        </div>
                        <div class="list-con-body">
                            <div class="body-con">分享标题、图片、海报背景...</div>
                            <div class="body-btn ">
                                <a class="body-btn-btn list-con-header-share btn-dialog" title="分享设置"
                                    href="<?php echo url('shopro.config/platform?type=share'); ?>">设置</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row list-con col-xs-6 col-sm-6  col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="list-con-header list-con-header-score">
                            <div class="title">
                                <div><span>积分配置</span></div>
                            </div>
                            <div class="list-con-posi-center-msg">配置积分规则</div>
                            <img class="title-img" src="/assets/addons/shopro/img/score.png" alt="" srcset="">
                        </div>
                        <div class="list-con-body">
                            <div class="body-con">签到积分、连续签到规则</div>
                            <div class="body-btn ">
                                <a class="body-btn-btn list-con-header-score btn-dialog" title="积分配置"
                                    href="<?php echo url('shopro.config/platform?type=score'); ?>">设置</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row list-con col-xs-6 col-sm-6  col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="list-con-header list-con-header-withdraw">
                            <div class="title">
                                <div><span>提现配置</span></div>
                            </div>
                            <div class="list-con-posi-center-msg">配置提现规则</div>
                            <img class="title-img" src="/assets/addons/shopro/img/withdraw.png" alt="" srcset="">
                        </div>
                        <div class="list-con-body">
                            <div class="body-con">手续费、最小最大金额</div>
                            <div class="body-btn ">
                                <a class="body-btn-btn list-con-header-withdraw btn-dialog" title="提现配置"
                                    href="<?php echo url('shopro.config/platform?type=withdraw'); ?>">设置</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row list-con col-xs-6 col-sm-6  col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="list-con-header list-con-header-order">
                            <div class="title">
                                <div><span>订单配置</span></div>
                            </div>
                            <div class="list-con-posi-center-msg">配置默认订单规则</div>
                            <img class="title-img" src="/assets/addons/shopro/img/order-img.png" alt="" srcset="">
                        </div>
                        <div class="list-con-body">
                            <div class="body-con">自动关闭、自动发货、自动评价</div>
                            <div class="body-btn">
                                <a class="body-btn-btn list-con-header-order btn-dialog" title="订单配置"
                                    href="<?php echo url('shopro.config/platform?type=order'); ?>">设置</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="tab-pane fade" id="channel">
                <div class="row list-con col-xs-6 col-sm-6  col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="list-con-header">
                            <div class="title">
                                <div><span>微信公众号</span></div>
                            </div>
                            <div class="list-con-posi-center-msg">配置公众号</div>
                            <img class="title-img" src="/assets/addons/shopro/img/wx_logo.png" alt="" srcset="">
                        </div>
                        <div class="list-con-body">
                            <div class="body-con">设置AppId、AppSecret、自动登录...</div>                          
                            <div class="body-btn">
                                <a class="body-btn-btn body-btn-wx btn-dialog" title="微信公众号"
                                    href="<?php echo url('shopro.config/platform?type=wxOfficialAccount'); ?>">公众号设置</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row list-con col-xs-6 col-sm-6  col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="list-con-header list-con-header-xcx">
                            <div class="title">
                                <div><span>小程序</span></div>
                            </div>
                            <div class="list-con-posi-center-msg">配置小程序</div>
                            <img class="title-img" src="/assets/addons/shopro/img/xcx_logo.png" alt="" srcset="">
                        </div>
                        <div class="list-con-body">
                            <div class="body-con">设置AppId、AppSecret、自动登录...</div>
                            <div class="body-btn ">
                                <a class="body-btn-btn body-btn-xcx btn-dialog" title="小程序"
                                    href="<?php echo url('shopro.config/platform?type=wxMiniProgram'); ?>">小程序设置</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row list-con col-xs-6 col-sm-6  col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <div class="list-con-header list-con-header-h5">
                            <div class="title">
                                <div><span>H5</span></div>
                            </div>
                            <div class="list-con-posi-center-msg">配置H5平台</div>
                            <img class="title-img" src="/assets/addons/shopro/img/h5_logo.png" alt="" srcset="">
                        </div>
                        <div class="list-con-body">
                            <div class="body-con">配置微信H5支付信息</div>
                            <div class="body-btn ">
                                <a class="body-btn-btn body-btn-h5 btn-dialog" title="H5"
                                    href="<?php echo url('shopro.config/platform?type=H5'); ?>">H5设置</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row list-con col-xs-6 col-sm-6  col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="list-con-header list-con-header-app">
                            <div class="title">
                                <div><span>App</span></div>
                            </div>
                            <div class="list-con-posi-center-msg">生成APP,实现多端同步使用</div>
                            <img class="title-img" src="/assets/addons/shopro/img/app_logo.png" alt="" srcset="">
                        </div>
                        <div class="list-con-body">
                            <div class="body-con">
                                立刻拥有自己的专属APP</div>
                            <div class="body-btn">
                                <a class="body-btn-btn body-btn-app btn-dialog" title="App"
                                    href="<?php echo url('shopro.config/platform?type=App'); ?>">APP设置</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pays">
                <div class="row list-con col-xs-6 col-sm-6  col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="list-con-header">
                            <div class="title">
                                <div><span>微信支付</span></div>
                            </div>
                            <img class="title-img" src="/assets/addons/shopro/img/wxzf_logo.png" alt="" srcset="">
                        </div>
                        <div class="list-con-body list-con-bodyzf">
                            <div class="body-btn">
                                <a class="body-btn-btn body-btn-wx btn-dialog" title="微信支付"
                                    href="<?php echo url('shopro.config/platform?type=wechat'); ?>">设置</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row list-con col-xs-6 col-sm-6  col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="list-con-header list-con-header-zfu">
                            <div class="title">
                                <div><span>支付宝支付</span></div>
                            </div>
                            <img class="title-img" src="/assets/addons/shopro/img/zfb_logo.png" alt="" srcset="">
                        </div>
                        <div class="list-con-body list-con-bodyzf">
                            <div class="body-btn ">
                                <a class="body-btn-btn body-btn-zfb btn-dialog" title="支付宝支付"
                                    href="<?php echo url('shopro.config/platform?type=alipay'); ?>">设置</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row list-con col-xs-6 col-sm-6  col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <div class="list-con-header list-con-header-ye">
                            <div class="title">
                                <div><span>余额</span></div>

                            </div>
                            <img class="title-img" src="/assets/addons/shopro/img/ye_logo.png" alt="" srcset="">
                        </div>
                        <div class="list-con-body list-con-bodyzf">
                            <div class="body-btn ">
                                <a class="body-btn-btn body-btn-ye btn-dialog" title="余额"
                                    href="<?php echo url('shopro.config/platform?type=wallet'); ?>">设置</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row list-con col-xs-6 col-sm-6  col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <div class="list-con-header list-con-header-Apple">
                            <div class="title">
                                <div><span>Apple Pay</span></div>
                            </div>
                            <img class="title-img" src="/assets/addons/shopro/img/applepay.png" alt="" srcset="">
                        </div>
                        <div class="list-con-body list-con-bodyzf">
                            <div class="body-btn">
                                <a class="body-btn-btn body-btn-Apple">暂未开放</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="addcfg">
                <form id="add-form" class="form-horizontal" role="form" data-toggle="validator" method="POST"
                    action="<?php echo url('shopro.config/add'); ?>">
                    <?php echo token(); ?>
                    <div class="form-group">
                        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Type'); ?>:</label>
                        <div class="col-xs-12 col-sm-4">
                            <select name="row[type]" class="form-control selectpicker">
                                <?php if(is_array($typeList) || $typeList instanceof \think\Collection || $typeList instanceof \think\Paginator): if( count($typeList)==0 ) : echo "" ;else: foreach($typeList as $key=>$vo): ?>
                                <option value="<?php echo $key; ?>" <?php if(in_array(($key), explode(',',"string"))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Group'); ?>团队:</label>
                        <div class="col-xs-12 col-sm-4">
                            <select name="row[group]" class="form-control selectpicker">
                                <?php if(is_array($groupList) || $groupList instanceof \think\Collection || $groupList instanceof \think\Paginator): if( count($groupList)==0 ) : echo "" ;else: foreach($groupList as $key=>$vo): ?>
                                <option value="<?php echo $key; ?>" <?php if(in_array(($key), explode(',',"basic"))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label col-xs-12 col-sm-2"><?php echo __('Name'); ?>:</label>
                        <div class="col-xs-12 col-sm-4">
                            <input type="text" class="form-control" id="name" name="row[name]" value=""
                                data-rule="required; length(3~30); remote(shopro/config/check)" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="control-label col-xs-12 col-sm-2"><?php echo __('Title'); ?>:</label>
                        <div class="col-xs-12 col-sm-4">
                            <input type="text" class="form-control" id="title" name="row[title]" value=""
                                data-rule="required" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="value" class="control-label col-xs-12 col-sm-2"><?php echo __('Value'); ?>:</label>
                        <div class="col-xs-12 col-sm-4">
                            <input type="text" class="form-control" id="value" name="row[value]" value=""
                                data-rule="" />
                        </div>
                    </div>
                    <div class="form-group hide" id="add-content-container">
                        <label for="content" class="control-label col-xs-12 col-sm-2"><?php echo __('Content'); ?>:</label>
                        <div class="col-xs-12 col-sm-4">
                            <textarea name="row[content]" id="content" cols="30" rows="5" class="form-control"
                                data-rule="required(content)">value1|title1
        value2|title2</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tip" class="control-label col-xs-12 col-sm-2"><?php echo __('Tip'); ?>:</label>
                        <div class="col-xs-12 col-sm-4">
                            <input type="text" class="form-control" id="tip" name="row[tip]" value="" data-rule="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rule" class="control-label col-xs-12 col-sm-2"><?php echo __('Rule'); ?>:</label>
                        <div class="col-xs-12 col-sm-4">
                            <div class="input-group pull-left">
                                <input type="text" class="form-control" id="rule" name="row[rule]" value=""
                                    data-tip="<?php echo __('Rule tips'); ?>" />
                                <span class="input-group-btn">
                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                        type="button"><?php echo __('Choose'); ?></button>
                                    <ul class="dropdown-menu pull-right rulelist">
                                        <?php if(is_array($ruleList) || $ruleList instanceof \think\Collection || $ruleList instanceof \think\Paginator): $i = 0; $__LIST__ = $ruleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                        <li><a href="javascript:;" data-value="<?php echo $key; ?>"><?php echo $item; ?><span
                                                    class="text-muted">(<?php echo $key; ?>)</span></a></li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </span>
                            </div>
                            <span class="msg-box n-right" for="rule"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="extend" class="control-label col-xs-12 col-sm-2"><?php echo __('Extend'); ?>:</label>
                        <div class="col-xs-12 col-sm-4">
                            <textarea name="row[extend]" id="extend" cols="30" rows="5" class="form-control"
                                data-tip="<?php echo __('Extend tips'); ?>" data-rule="required(extend)"
                                data-msg-extend="当类型为自定义时,扩展属性不能为空"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-12 col-sm-2"></label>
                        <div class="col-xs-12 col-sm-4">
                            <button type="submit" class="btn btn-success btn-embossed"><?php echo __('OK'); ?></button>
                            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>