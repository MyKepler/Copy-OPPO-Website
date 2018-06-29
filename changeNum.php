<?php
session_start();
$productid=intval($_POST['productid']);
$num=intval($_POST['num']);
$userid=$_SESSION['memberid']=1;
$servername = "localhost";
$username = "root";
$password = "123456";
try{
    $pdo=new PDO("mysql:host=$servername;dbname=webproduct", $username, $password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	$pdo->query("set names utf8");
	$sql="update shop_cart set num=$num where productid=$productid";
	$stmt=$pdo->prepare($sql);
	$stmt->execute();
	$rows=1;


}catch(PDOException $e){

	echo $e->getMessage();
}

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