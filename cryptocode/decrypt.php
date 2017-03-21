<?php

$s=array();
$sa=array();
	$conn = mysqli_connect("localhost","root","","boom");
	if ($conn) {
			$data="select * from encrypt_record";
			$res=mysqli_query($conn,$data);
		while($row=mysqli_fetch_array($res)){
			//echo $row['s1'];
			
			$str1=str_split($row['s1']);
			$str2=str_split($row['s2']);
			$ascii_str=str_split($row['ascii2']);
			$arm=$row['rarm'];
			$randarm1=$row['random_number1'];
			$randarm=$row['random_number'];
		}
		//echo $randarm;
		//print_r($str1);
		//print_r($str2);
		$randommatrix=array(array("8","2","4"),
						array("3","0","7"),
						array("6","5","9"));
		//print_r($randommatrix);
		//for($i=0;$i<strlen($str1);$i++){
		//$ascii_char[$i]=$str1[$i]."".$str2[$i]
		
		
		//for($b=0;$b<sizeof($ascii_char);$b++){
			//$asciir=(string)$ascii1[$b];
			//echo $asciir;
			//$v1=$asciir[0];
			//$v2=$asciir[1];
			//echo $v1."\n";
			//echo $v2;

		
//}
$v3=0;
$v4=0;
$v5=0;
$v6=0;
//for($b=0;$b<sizeof($str1);$b++){
	$v1=$str1[0];
	$v2=$str2[0];
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
				$v4-=1;
				$v6-=1;
					if($v4>2){
					$v4=0;
					}
					if($v6>2){
					$v6=0;
					}
				$s[0]=$randommatrix[$v3][$v4];
				$sa[0]=$randommatrix[$v5][$v6];
	
			}
			elseif($v4==$v6){
				$v3-=1;
				$v5-=1;
					if($v3>2){
					$v3=0;
					}
					if($v5>2){
					$v5=0;
					}
				$s[0]=$randommatrix[$v3][$v4];
				$sa[0]=$randommatrix[$v5][$v6];
			}
			else{
				$s[0]=$randommatrix[$v3][$v6];
				$sa[0]=$randommatrix[$v5][$v4];
				//echo strlen($s2);
				}

//echo $s[0];
//echo $sa[0];
echo $v1;
echo $v2;
//echo $s2;
}


		
?>