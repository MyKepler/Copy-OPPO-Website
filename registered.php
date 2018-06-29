<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>OPPO</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="css/registered.css" rel="stylesheet">
<link href="lib/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
<link href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="all">
    <div class="topbar">
      <div class="topbar-website">OPPO官网</div>
      <div class="topbar-community">OPPO社区</div>
      <div class="topbar-ColorOS">ColorOS</div>
    </div>

<div class="registeredarea">
    <div class="registeredarea-top">注册OPPO帐号</div>
    <div class="registeredarea-bottom">
      <input class="phonenum" id="username" placeholder="请输入手机号码"></input>
      <div class="nophonenum">请输入手机号码</div>
      <div id="v_container" class="v_container"></div>
      <div class="input_area">  <input type="text" id="code_input" class="code_input" value="" placeholder="请输入验证码"/><button id="my_button" class="my_button">验证</button></div>
      <div class="blank">验证码不能为空</div>
      <div class="right">验证成功</div>
      <div class="wrong">验证码错误</div>
      <div class="agreement">
        <input type="checkbox" name="checkboxID">
        <span> 已阅读并同意<a href="agreement.php">《OPPO帐号注册协议》</a></span>
      </div>
      <button class="registered">立即注册</button>
    </div>
</div>

<div class="footer_info">
     <p>© 2005 - 2017 东莞市永盛通信科技有限公司 版权所有 粤ICP备08130115号-1</p>
</div>
</body>
<script type="text/javascript" src="lib/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/registered.js" ></script>
</html>