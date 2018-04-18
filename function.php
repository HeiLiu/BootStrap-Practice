<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>function</title>
</head>
<body>
	<?php 
		$a =[1,2,3,4,5];
		$num = count($a);
		echo $num."<br/>";
	 	for ($i=0; $i <$num ; $i++) { 
	 		echo $a[$i].",";# code...
	 	}
	 	function a(){
	 		echo "welcome to the hotel"."<br/>";
	 		return "welcome to the hotel"."<br/>";

	 	}
	 	echo a();
	 	function sum($a,$b){
	 		return $a+$b;//return,返回值，终止执行
	 	}
/*	 	echo sum(10,20);
*/	 	function sub($a,$b,$c)
	 	{
	 		switch ($c) {
	 			case "+":
	 				return $a+$b;
	 				break;
	 			case "-":
	 				return $a-$b;
	 				break;
	 			case "*":
	 				return $a*$b;
	 				break;
	 			case "/":
	 				return $a/$b;
	 				break;
	 			case "%":
	 				return $a%$b;
	 				break;				
	 		}
	 	}
	 	echo sub(1,2,"/")."<br/>";
	 	function cal($a,$b,$c)
	 	{
	 		if($c=="+")
				return $a+$b;
	 		if($c=="-")
	 			return $a-$b;
	 		if($c=="*")
	 			return $a*$b;
	 		if($c=="/")
	 			return $a/$b;
	 		if($c=="%")
	 			return $a%$b;
	 	}
	 	echo cal(10,5,"-");
	 ?>
</body>
</html>