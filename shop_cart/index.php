<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
	<link href="css/index.css" rel="stylesheet">
	<link href="css/globalheader.css" rel="stylesheet">
	<link href="css/bottom.css" rel="stylesheet">
	<link href="lib/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
	<link href="lib/bootstrap.css" rel="stylesheet">
	<link href="lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="lib/jquery-3.2.1.js"></script>
	<script src="lib/bootstrap.js"></script>
	<script src="js/index.js"></script>
	<script src="js/globalheader.js"></script>
</head>
<body>
   <div class="topbar">
	<a href="login.html" class="topbar-login">登录</a>
	<a href="registered.html" class="topbar-registered">注册</a>
	<div class="topbar-global">Global</div>
	</div>

         <div class="secondbar">
	<div class="secondbar-pic"> <img src="img/logo.png" alt=""></div>
 <a href="../oppo-index.php" style='text-decoration:none;'>
      <div class="secondbar-firstpage"><span>首页</span></div> </a>
      <a href="../oppo-product.php" style='text-decoration:none;'>
        <div class="secondbar-product">产品</div></a>
        <a href="../oppo-mall.php" style='text-decoration:none;'>
          <div class="secondbar-mall">商城</div></a>
          <a href="../oppo-map.php" style='text-decoration:none;'>
           <div class="secondbar-stores">体验店</div></a>
           <a href="../oppo-service.php" style='text-decoration:none;'>
            <div class="secondbar-service">服务</div></a>
	<a href="../shop_cart/index.php" style='text-decoration:none;'>
    <div class="secondbar-shopping">
    <i class="glyphicon glyphicon-shopping-cart"></i>
    <input class="count" value="0"></div>
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
		<div class="body">
			<div class="row" id="hearder-after">
				<div class="col-md-1"></div>
				<span>首页</span>
				<span>/ 购物车</span>
			</div>

			<div class="row" id="buying-order-bar">
				<div class="col-md-1"></div>

				<div class="col-md-10" id="buying-order-bar-cont">
					<div class="shopping-cart">
						<span>购物车</span>
					</div>
					<div class="fill-form">
						<span>填写订单</span>
					</div>
					<div class="pay">
						<span >支付</span>
					</div>

				</div>
			</div>

			
			<div class="row" id="list-header">
				<div class="col-md-1"></div>  
				<div class="col-md-10" id="list-hearder-cont">


					<span class="all-choose">
						<input type="checkbox" name="all-check" id="all-checkbox" >全选
					</span>


					<span class="product-name">产品</span>
					<div class="col-md-3"></div>

					<span class="product-num">　数量</span>


					<span class="product-price">　　单价</span>


					<span class="operate">　操作</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10" id="blank-shopcart">
					<span class="blank-shopcart-span1">购物车空空的，去</span>
					<a href="../oppo-mall.php" style='text-decoration:none;'>
					<span class="blank-shopcart-span2">逛逛</span></a>
					<span class="blank-shopcart-span3">吧</span>
				</div>
			</div>
			<?php
			try{
				$pdo=new PDO("mysql:host=localhost;dbname=webproduct","root","123456",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
				$pdo->query("set names utf8");
				$sql="select p.id,p.cover,p.title,p.price,p.subtitle,c.num from shop_product as p right join shop_cart as c on p.id=c.productid";
				$stmt=$pdo->prepare($sql);
			/*session_start();
			$userid=$_SESSION["memberid"];*/
			$stmt->execute();
			$data=$stmt->fetchAll(PDO::FETCH_ASSOC);


		}
		catch(PDOException $e){

			echo $e->getMessage();
		}


		?>

		<?php
		$count=0;
		$total=0;
		foreach($data as $product):
			?>
		<div class="row" id="div-<?php echo $product['id']?>">
			<div class="col-md-1"></div>
			<div class="col-md-10" id="chose-product">
				<div class="chose-product">
					<div class="col-md-6" id="chose-product-left">	

						<input type="checkbox" name="check" id="checkbox1">
						<img src="../product/<?php echo $product['cover']?>" alt="" class="chose-product-img">
						<div class="chose-product-info-span">
							<span class="chose-product-info1">

								<?php echo $product['title']?>
							</span>

							<span class="chose-product-info2">
								<?php echo $product['subtitle']?>
							</span>
						</div>
					</div>
					<div class="product-buying-num">
						

						<span>X　</span><input type="text" value="<?php echo $product['num']?>" class="input-numofproduct" min="0"
						onblur="changeNum(<?php echo $product['id']?>,this.value)"
						id="product-<?php echo $product['id']?>"
						>

					</div>

					<script type="text/javascript">


					</script>
					<span class="chose-product-price"  >
						<i class="fa fa-jpy" aria-hidden="true"></i>


						<span id="p-<?php echo $product['id']?>">

							<?php echo $product['price']?> 
						</span>
					</span>

					<div class="chose-product-delete">
						<a href="javascript:delPro(<?php echo $product['id']?>);" style="color:black">删除</a>
					</div>
				</div>		
			</div>
		</div>

		<?php
		$total += $product['price']*$product['num'];
		$count+=$product['num'];
		endforeach;
		?>





		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10" id="result">
				<div class="row">
					<div class="col-md-9"></div>
					<div class="col-md-2"><span class="result-numofproduct">商品数量：</span></div>
					<span class="result-numofproduct2"><?php echo $count?></span>
				</div>
				<div class="row">
					<div class="col-md-9"></div>
					<div class="col-md-1" id="result-money"><span class="result-money">小计：</span></div>
					<span class="result-money2" id="total-<?php echo $product['id']?>"><i class="fa fa-jpy" aria-hidden="true"></i><?php echo $total?></span>
				</div>
				<div class="row">
					<span class="result-newpayway">
						<img src="img/花呗蓝色.png" alt="">
						订单满600可使用花呗分期3/6/12期</span>

					</div>
				</div>
			</div>
			<script type="text/javascript">
			       $(".count").val($(".result-numofproduct2").html());
                  if($(".result-numofproduct2").html()==0){
                         $("#blank-shopcart").show();

                  }
                  else{
                          $("#blank-shopcart").hide();

                  }
				function changeNum(productid,num){

                     
					var url="../changeNum.php";
					var data={"productid":productid,"num":parseInt(num)};
					var success=function(response){
						if(response.errno==0)
						{
                           setTimeout(function(){location.reload()});
                           
							var price=($("#product-"+productid).val())*($("#p-"+productid).html());
                            
							
						}


					}

					$.post(url,data,success,"json");


				}
				function delPro(productid){
					var url="../deleteProduct.php";
					var data={"productid":productid};
					var success=function(response){
						if(response.errno==0){
                        setTimeout(function(){location.reload()});
                        
						}


					}
					$.get(url,data,success,"json");
				}


			</script>


			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10" id="account">
					<a href="../oppo-mall.php" style='text-decoration:none;'><span class="continue-shop">继续购买>></span></a>
					<div class="account">
						结算
					</div>
				</div>

			</div>

		</div>
<div class="row" id="supplement">
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