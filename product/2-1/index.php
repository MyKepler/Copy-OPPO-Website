<!DOCTYPE html>
<html lang="zh-CN">
 <?php include("../../count.php");?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
	<link href="css/index.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/globalheader.css">
	<link rel="stylesheet" type="text/css" href="css/bottom.css">
	<link href="lib/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
	<link href="lib/bootstrap.css" rel="stylesheet">
	<link href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="lib/jquery-3.2.1.js"></script>
	<script src="lib/bootstrap.js"></script>
	<script src="js/index.js"></script>
	<script type="text/javascript" src="js/globalheader.js"></script>
</head>
<body>
	 <div class="topbar">
	<a href="login.php" class="topbar-login">登录</a>
	<a href="registered.php" class="topbar-registered">注册</a>
	<div class="topbar-global">Global</div>
	</div>

        <div class="secondbar">
	<div class="secondbar-pic"> <img src="img/logo.png" alt=""></div>
 <a href="../../oppo-index.php" style='text-decoration:none;'>
      <div class="secondbar-firstpage"><span>首页</span></div> </a>
      <a href="../../oppo-product.php" style='text-decoration:none;'>
        <div class="secondbar-product">产品</div></a>
        <a href="../../oppo-mall.php" style='text-decoration:none;'>
          <div class="secondbar-mall">商城</div></a>
          <a href="../../oppo-map.php" style='text-decoration:none;'>
           <div class="secondbar-stores">体验店</div></a>
           <a href="../../oppo-service.php" style='text-decoration:none;'>
            <div class="secondbar-service">服务</div></a>
	<a href="../../shop_cart/index.php" style='text-decoration:none;'>
    <div class="secondbar-shopping">
    <i class="glyphicon glyphicon-shopping-cart"></i>
    <input class="count" value="<?php echo $count?>"></div>
    </div>
</a>

<div class="globaltext">
    <div class="globaltext-box-topline">Select your country or region</div>
	<div class="globaltext-box-line">
		<div class="globaltext-box"><a href="#">Algérie</a></div>
		<div class="globaltext-box"><a href="#">Australia</a></div>
		<div class="globaltext-box"><a href="#">Bangladesh</a></div>
		<div class="globaltext-box"><a href="#">Egypt</a></div>
		<div class="globaltext-box"><a href="#">Global</a></div>
		<div class="globaltext-box"><a href="#">India</a></div>
		<div class="globaltext-box"><a href="#">Indonesia</a></div>
		<div class="globaltext-box"><a href="#">Kenya</a></div> 
    </div>

	<div class="globaltext-box-line">
	 	<div class="globaltext-box"><a href="#">Malaysia</a></div>
	 	<div class="globaltext-box"><a href="#">Maroc</a></div>
	 	<div class="globaltext-box"><a href="#">Pakistan</a></div>
	 	<div class="globaltext-box"><a href="#">Philippines</a></div>
	 	<div class="globaltext-box"><a href="#">Singapore</a></div>
	 	<div class="globaltext-box"><a href="#">Sri Lanka</a></div>
	 	<div class="globaltext-box"><a href="#">台灣</a></div>
	 	<div class="globaltext-box"><a href="#">UAE</a></div> 
    </div>

    <div class="globaltext-box-line">
	 	<div class="globaltext-box"><a href="#">Việt Nam</a></div>
        <div class="globaltext-box"><a href="#">ประเทศไทย</a></div>
	 	<div class="globaltext-box"><a href="#">Myanmar</a></div>
	 	<div class="globaltext-box-china"><a href="#">中国</a></div>
	 	<div class="globaltext-box"></div>
        <div class="globaltext-box"></div>
	 	<div class="globaltext-box"></div>
	 	<div class="globaltext-box"></div>
    </div>
</div>
	<div class="row" id="header-after">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<div class="header-after-spancont">
				<span>首页</span>
				<span>/</span>
				<span>商品列表</span>
				<span>/</span>
				<span>R9s Plus 玫瑰金 6G+64GB</span>
			</div>
		</div>

	</div>
	<div class="product-body">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-5">

				<div class="product-img-cont"> 
					<img src="img/1.png" alt="" width="588" height="588" class="product-bigimg">
					<div class="product-simg-cont">
						<img class="img-circle" width="77" height="77" src="img/1.png" id="product-smallimg1">
						<img class="img-circle" width="77" height="77" src="img/2.png" id="product-smallimg2">
						<img class="img-circle" width="77" height="77" src="img/3.png" id="product-smallimg3">
						<img class="img-circle" width="77" height="77" src="img/4.png" id="product-smallimg4">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="product-info-cont" id="product-info-cont">
					<span class="product-title">R9s Plus 玫瑰金 6G+64GB</span>
					<span class="product-name-extra">
						6英寸超清大屏，6GB运存+64GB内存，正面指纹识别，4000mAh大电池，充电5分钟通话2小时
					</span>
					<span class="product-price">￥3499.00</span>
					<div class="product-color">
						<span>颜色</span>
						<div class="product-colorcont">
							<span class="product-color1">玫瑰金</span>
							<a href="../2-2/index.php" style="text-decoration: none;"><span class="product-color2">金色</span></a>
							<a href="../2-3/index.php" style="text-decoration: none;"><span class="product-color3">黑色</span></a>
						</div>
					</div>
					<div class="product-network">
						<span>网络</span>
						<span class="product-network1">全网通</span>
					</div>
					<div class="product-capacity">
						<span>容量</span>
						<span class="product-capacity1">64G</span>
					</div>
					<div class="product-gift">
						<span class="product-gift-title">赠品</span>
						<div class="product-giftcont">
							<div class="product-gift1">
								<img src="img/oppo自拍杆.png" alt="" width="38" height="38">
								<span class="product-gift1-name">oppo自拍杆</span>
								<span class="product-gift1-color">晴空蓝</span>
							</div>
							<div class="product-gift2">
								<img src="img/蓝牙音箱Q9.jpg" alt="" width="38" height="38">
								<span class="product-gift2-name">蓝牙音箱Q9</span>
								<span class="product-gift2-color">深蓝</span>
							</div>
							<div class="product-gift3">
								<img src="img/收纳包.jpg" alt="" width="38" height="38">
								<span class="product-gift3-name">收纳包</span>
								<span class="product-gift3-color">薄荷绿</span>
							</div>
						</div>
					</div>
					<div class="product-server">

						<span class="product-server-name">服务</span>
						<div class="product-server-cont">
							<div class="product-servercont1">
								<span class="product-server1">屏碎保一年 ￥129</span>
							</div>
							<div class="product-servercont2">
								<span class="product-server2">延保半年 ￥79</span>
								<span class="product-server3">延保一年 ￥129</span>
							</div>
							<span>购买保险服务表示您已同意《OPPO保障服务条款》</span>
							<span>了解详情>></span>
						</div>
					</div>
					<div class="product-payment">
						<span class="product-payment-span1">分期</span>
						
						<span class="product-payment-span2"><img src="img/花呗.png" alt="">下单支付 花呗分期3、6期免息</span>
						<span class="product-payment-span3">了解详情>></span>
					</div>
				</div>
				<div class="product-buying">
					<div class="product-buying-num">
						<span class="product-minus">-</span>
						<input type="text" value="1" class="input-numofproduct">
						<span class="product-add">+</span>

					</div>
					<?php $id=4?>
					<div class="add-to-cart" onclick="addCart(<?php echo $id?>);">
						加入购物车
					</div>
					<script type="text/javascript">
						function addCart(productid){
                            
							
							var url="../../addCart.php";
				var data={"productid":productid,"num":parseInt($(".input-numofproduct").val())};
							var success= function (response) {
								if(response.errno==0){
									 setTimeout(function(){location.reload()});
									alert("加入购物车成功");
								}else{
									alert("加入购物车失败");
								}
							}
							$.post(url,data,success,"json");
							

						}
						


					</script>
					<div class="buy-now">
						立即购买
					</div>
				</div>
				<div class="buy-after">
					<img src="img/邮.png" alt="">
					<span class="buy-after-span1">顺丰包邮</span>
					<img src="img/换.png" alt="">
					<span class="buy-after-span2">7天包退30天包换</span>
					<img src="img/电子发票.png" alt="">
					<span class="buy-after-span3">电子发票</span>
					<img src="img/购物返积分.png" alt="">
					<span class="buy-after-span4" >购物返积分</span>
					<div id="poduct-bar-before"></div>
				</div>

			</div>

		</div>
	</div>

	<div class="row" id="product-bar">

		<div class="product-bar">
			<div class="col-md-1"></div>
			<span class="product-bar-span1">商品详情</span>
			<span class="product-bar-span2">规格参数</span>
			<span class="product-bar-span3">用户评价(3)</span>
			<span class="product-bar-span4"> 购买</span>
			<div class="col-md-1"></div>
		</div>
	</div>
	
	
	<div class="product-details" id="product-details">
		<div class="row">  
		<img src="img/商品详情1.jpg" alt="" class="product-details1"> 
			<img src="img/商品详情2.jpg" alt="" class="product-details2"> 
			<img src="img/商品详情3.jpg" alt="" class="product-details3"> 
			<img src="img/商品详情4.jpg" alt="" class="product-details4"> 
			<img src="img/商品详情5.jpg" alt="" class="product-details5"> 
			<img src="img/商品详情6.jpg" alt="" class="product-details6"> 
			<img src="img/商品详情7.jpg" alt="" class="product-details7"> 
			<img src="img/商品详情8.jpg" alt="" class="product-details8"> 
			<img src="img/商品详情9.jpg" alt="" class="product-details9"> 
			<img src="img/商品详情10.jpg" alt="" class="product-details10"> </div>

		</div>
		<div class="product-standard" id="product-standard">
			<div class="row">  
				<img src="img/规格参数1.jpg" alt=""> 
				<img src="img/规格参数2.jpg" alt=""> 
				<img src="img/规格参数3.jpg" alt=""> 
				<img src="img/规格参数4.jpg" alt=""> 
				<img src="img/规格参数5.jpg" alt=""> 
				<img src="img/规格参数6.jpg" alt="">
				<img src="img/规格参数7.jpg" alt=""> 
				<img src="img/规格参数8.jpg" alt="">
				<img src="img/规格参数9.jpg" alt="">
				<img src="img/规格参数10.jpg" alt=""> 
				<img src="img/规格参数11.jpg" alt=""> 
				<img src="img/规格参数12.jpg" alt=""> 
				<img src="img/规格参数13.jpg" alt="">
				<img src="img/规格参数14.jpg" alt=""> 
				<img src="img/规格参数15.jpg" alt=""> </div>

			</div> 


			<div class="product-usr-evaluate" id="product-usr-evaluate">
				<div class="row">
					<div class="product-usr-evaluate-radio">
						<div class="col-md-1"></div>
						<div class="product-usr-evaluate-radio1">
							<input   name="radio" type="radio" checked="checked" id="radio1">
							<span class="radio1-span">全部评价</span>
						</div>
						<div class="product-usr-evaluate-radio2">
							<input   name="radio" type="radio" id="radio2">
							<span class="radio2-span">晒图</span> 
						</div>
						<div class="product-usr-evaluate-radio3">
							<input   name="radio" type="radio" id="radio3"> 
							<span class="radio3-span">追评</span>
						</div>

						<div class="product-usr-evaluate-btn">
							我要评论
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<div class="row"> 
					<div class="col-md-1"></div>
					<div class="evaluate-radio1-cont">

						<div class="col-md-10">
							<img src="img/头像.gif" alt="" class="img-circle" id="head-img">
							<div class="evaluate-cont">
								<div class="evaluate-span-cont">
									<span class="evaluate-span1">2017-05-21 18:01:40</span>
									<span class="evaluate-span2">手机收到，发货速度快，手机好用！</span>

								</div>
								<span class="evaluate-span3">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>

								</span>
							</div>
						</div>
					</div>
				</div> 
				<div class="row">
					<div class="evaluate-radio1-cont">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<img src="img/头像.gif" alt="" class="img-circle" id="head-img">
							<div class="evaluate-cont">
								<div class="evaluate-span-cont">
									<span class="evaluate-span1">2017-05-21 10:16:34</span>
									<span class="evaluate-span2">很满意</span>

								</div>
								<span class="evaluate-span3">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>

								</span>
							</div>
						</div>
					</div>

				</div>	
				<div class="row">
					<div class="evaluate-radio1-cont">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<img src="img/头像.gif" alt="" class="img-circle" id="head-img">
							<div class="evaluate-cont">
								<div class="evaluate-span-cont">
									<span class="evaluate-span1">2017-05-20 22:57:48</span>
									<span class="evaluate-span2">发货速度快，手机得用用才知道</span>

								</div>
								<span class="evaluate-span3">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>

								</span>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="col-md-12" id="supplement">
  <div class="col-md-9">
    <div class="supplement_left">
      <table>
        <tr>
          <th>推荐机型</th>
          <th>在线购买</th>
          <th>服务</th>
          <th>关于我们</th>
        </th>
        <tr>
          <td>R9s</td>
          <td>官方商城</td>
          <td>服务网店查询</td>
          <td>关于OPPO</td>
        </tr>
        <tr>
          <td>R9s Plus</td>
          <td>购物指南</td>
          <td>零配件价格查询</td>
          <td>加入我们</td>
        </tr>
        <tr>
          <td>A57</td>
          <td>官方授权网店</td>
          <td>云服务</td>
          <td>采购相关</td>
        </tr>
        <tr>
          <td>A59s</td>
          <td></td>
          <td></td>
          <td>发布会回顾</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="col-md-3">
    <div class="supplement_right">
      <div class="weixin">
        <i class="fa fa-commenting fa-2x" aria-hidden="true"></i>
        在线客服
      </div>
      <div class="telephone">4001-666-888</div>
      <div class="addition">（24小时全国服务热线）</div>
    </div>
  </div>
</div>
<div class="col-md-12" id="copyright">
  <div class="col-md-6">
    <div class="copyright_left">
      © 2005 - 2017 OPPO 版权所有 粤ICP备08130115号-1 联系方式：4001-666-888
    </div>
    
  </div>
  <div class="col-md-6">
    <div class="copyright_right">
      关注我们：
      <i class="fa fa-weibo fa-2x" aria-hidden="true"></i>
      <i class="fa fa-weixin fa-2x" aria-hidden="true"></i>
      <i class="fa fa-qq fa-2x" aria-hidden="true"></i>
    </div>
    
  </div>
</div>


		</body>
		</html>