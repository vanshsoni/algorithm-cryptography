<?php
	$s=array();
	$sa=array();
	$ascii_char=array();
	$ascii_mod=array();
	$ascii1=array();
	$ascii2=array();
	//$asciir=array();
	$ascii2=array();
	$myfile = fopen("webdictionary.txt", "r");
	//echo fread($myfile,filesize("webdictionary.txt"));
	if($myfile){
		$arr=explode("\n",fread($myfile,filesize("webdictionary.txt")));
	}
	//print_r(ord($arr[1][27]));
		$count_line=count(file("webdictionary.txt"));
		for($k=0;$k<$count_line;$k++){
			$count_char[$k]=strlen($arr[$k]);
		}
		//print_r($count_char);
		//echo $count_line;
		$l=0;
		$m=0;
		for($i=0;$i<$count_line;$i++){
			for($j=0;$j<$count_char[$l];$j++){	
				//echo $d++;
				$ascii_char[$m]=ord($arr[$i][$j]);
				//echo $ascii_char[$m]."\n";
				$m++;
			}
			$l++;
		}
		print_r($ascii_char);
		$random_number=rand(1,9);
		//echo $random_number;
		for($i=0;$i<sizeof($ascii_char);$i++){
				$ascii_char[$i]*=$random_number;
		}
		print_r($ascii_char);
		$random_number1=rand(900,1000);
		//echo $random_number1;
		for($i=0;$i<sizeof($ascii_char);$i++){
				$ascii_char[$i]+=$random_number1;
		}
		print_r($ascii_char);
		$arm=array("153","370","371","407","1634");
		
		$rarm=$arm[array_rand($arm)];
		//echo $rarm;
		for($i=0;$i<sizeof($ascii_char);$i++){
				$ascii_char[$i]+=$rarm;
		}
		print_r($ascii_char);
		for($a=0;$a<sizeof($ascii_char);$a++){
			//echo "forloop";
							$ascii=(string)$ascii_char[$a];
				$ascii1[$a]=$ascii[0]."".$ascii[1];
				$ascii2[$a]=$ascii[2]."".$ascii[3];
				//echo $ascii2;
				//echo $ascii1;
			
			
		}
		//print_r($ascii2);
		//print_r($ascii1);
		$randommatrix=array(array("8","2","4"),
						array("3","0","7"),
						array("6","5","9"));
		//print_r($randommatrix);
		$s1=0;
		$s2=0;
		
		
		
		
		for($b=0;$b<sizeof($ascii1);$b++){
			$asciir=(string)$ascii1[$b];
			//echo $asciir;
			$v1=$asciir[0];
			$v2=$asciir[1];
			//echo $v1."\n";
			//echo $v2;

		
//}
$v3=0;
$v4=0;
$v5=0;
$v6=0;

			if($v1==$v2){$v2=0;}
			if($v1==1){$v1=0;}
			if($v2==1){$v2=0;}
	
	for($i=0;$i<3;$i++){
				for($j=0;$j<3;$j++)
				{
					//echo $randommatrix[$i][$j];
						if($randommatrix[$i][$j]==$v1){
							$v3=$i;
							$v4=$j;
							break;
						}
				}
					


	}
	for($m=0;$m<3;$m++){
				for($n=0;$n<3;$n++)
				{
						if($randommatrix[$m][$n]==$v2){
							$v5=$m;
							$v6=$n;
							break;
						}
				}
	}
	if($v3==$v5){
				$v4+=1;
				$v6+=1;
					if($v4>2){
					$v4=0;
					}
					if($v6>2){
					$v6=0;
					}
				$s[$b]=$randommatrix[$v3][$v4];
				$sa[$b]=$randommatrix[$v5][$v6];
	
			}
			elseif($v4==$v6){
				$v3+=1;
				$v5+=1;
					if($v3>2){
					$v3=0;
					}
					if($v5>2){
					$v5=0;
					}
				$s[$b]=$randommatrix[$v3][$v4];
				$sa[$b]=$randommatrix[$v5][$v6];
			}
			else{
				$s[$b]=$randommatrix[$v3][$v6];
				$sa[$b]=$randommatrix[$v5][$v4];
				//echo strlen($s2);
				}


//echo $s2;
}
$ascii3=implode($ascii2);
$s1=implode($s);
$s2=implode($sa);
echo $s1."<br>";
echo $s2;
$conn = mysqli_connect("localhost","root","","boom");
// Check connection
if ($conn) {
$sql="insert into `encrypt_record`(`random_number1`,`random_number`, `rarm`, `ascii2`, `s1`, `s2`) VALUES ('$random_number1','$random_number','$rarm','$ascii3','$s1','$s2')";
mysqli_query($conn,$sql);
}
else{die("Connection failed: " . mysqli_connect_error());}
?>