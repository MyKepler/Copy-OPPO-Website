<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 2016/4/14
 * Time: 11:37
 */
//加入购物车操作
//1接受传递过来的参数
$productid=intval($_POST['productid']);
$num=intval($_POST['num']);
//2准备要添加的购物车数据
session_start();
$userid=$_SESSION['memberid']=1;

$servername = "localhost";
$username = "root";
$password = "123456";
try{
    $pdo=new PDO("mysql:host=$servername;dbname=webproduct", $username, $password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

    $pdo->query("set names utf8");
    $sql="select price from shop_product where id=?";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array($productid));
    $data=$stmt->fetch(PDO::FETCH_ASSOC);
    $price=$data['price'];
    $createtime=time();

//3完成购物车数据的添加操作（判断当前用户在购物车中是否已经加入该商品）
    $sql="select * from shop_cart where productid=$productid";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $data=$stmt->fetch(PDO::FETCH_ASSOC);
    
    if($data){
        $sql="update shop_cart set num=num+$num where productid=$productid";
        $stmt = $pdo->prepare($sql);

    // execute the query
        $stmt->execute();

    // echo a message to say the UPDATE succeeded
       
        $rows=1;
    }
    else{  
        $sql="insert into shop_cart(productid,num,price,createtime) values($productid,$num,$price,$createtime)";

        /*$stmt-$pdo->prepare($sql);
        $params=array($productid,$num,$price,$createtime);
       
        $stmt->execute(array($productid,$num,$price,$createtime));
        
        $rows=$stmt->rowCount();
        echo $row;*/
        /*}*/
        $pdo->exec($sql);  
        
        $rows=1;
      
    }

}catch (PDOException $e){
    echo $e->getMessage();

}

//4返回最后添加的结果
if($rows){
    $response=array(
        'errno'=>0,
        'errmsg'=>'success',
        'data'=>true,
    );}else{
    $response=array(
        'errno'=>-1,
        'errmsg'=>'faild',
        'data'=>false,
    );


}
echo json_encode($response);