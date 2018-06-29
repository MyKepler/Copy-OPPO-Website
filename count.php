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
             $rows=1;
			$count=0;
			foreach($data as $product):
				$count+=$product['num'];
			endforeach;


		}
		catch(PDOException $e){

		echo $e->getMessage();
	}

	




		?>



	
	
