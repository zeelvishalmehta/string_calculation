<?php
declare(strict_types = 1);
class StringCalculator
{
	public function Add(string $number): int
	{
		//if sring is empty
		if(strlen($number)<=0)
			{
					return 0;
			}
		else
			{
					//explode string from special characters
					$explode_string = preg_split("/[?&@#*@,;$!~%^`]/", $number);				
					foreach($explode_string as $str)
						{
							//get numbers from explode string
							$int = filter_var($str, FILTER_SANITIZE_NUMBER_INT);
							try 
							  {	
									//if number less than 1000
									if(($int < 1000))
										{
											if($int > 0)
											{
												$sum = $int + $sum;	
											}
										}	
									//if number is negative then throw an exception
									if($int < 0)
									   {
											throw new Exception("Negatives not allowed ".$int); 
									   }
							 } 	
							//call exception function when negative number found		
							catch (Exception $e) 
							{
								echo 'Exception Message: ' .$e->getMessage()."<br>"; 
								continue;
							}
					
						}	
				//return final sum of numbers from string
				return $sum;			
								
			}
	}	
	
}
?>
<html>
	<title>String Calculation Parogram</title>	
<body>
<form method="post">	
	<div style="margin-top:30px;">
		Input String: <input type="text" name="name" placeholder="Enter String" value="<?=$_POST['name'];?>" id="myInput"><br><br>
		<input type="submit" name="submit" value="Calculate"><br>
		
	</div>	
</form>	
</body>	
</html>
<?php
if(($_POST['submit']=='Calculate'))
{
	$str = $_POST['name'];
	$cal = new StringCalculator();
	echo 'String Calculation: '.$cal->Add($str).'<br>';	
	
}
?>
