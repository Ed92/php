<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<?php

$a = 2;  // define variable with global scope

// define function

function Sum()

{

 $a = 1;       // Define variable with same name,

               // but with local function scope.

 echo "a inside function =";

 echo "$a \n"; // $a will be interpreted and

               // rendered as "1",

               // when you use double quotes in string.

}

Sum();         // call the function

echo "a outside the function =";                                   

echo $a;       // renders "2"    

?>

	<?php
		$my_array = [10, 20, 30, 40, 50];
		echo $my_array[17];
	?>

<br>
<?php

date_default_timezone_set('UTC');
echo date('h:i:s:u a, l F jS Y e');

?>
<br>


<?php

if(5 == 10){
	echo '5 = 10';
} else {
	echo '5!=10';
}

?>

<br>

<?php

$randNum = 5;

$numOfBananas = 36;
$numOfOranges = 4;

if (($numOfOranges > 25) && ($numOfBananas > 30)){

	echo '25% Discount';
} else if (($numOfOranges > 30)|| ($numOfBananas > 35)){

	echo '15% Discount';
} else if (!(($numOfOranges < 5)) || ($numOfBananas < 5)){

	echo '5% Discount';
}


?>

<br>
//




<?php

$bestFriends = array('Joy', 'Willow', 'Ivy');

$bestFriends[4] = 'Steve';


foreach($bestFriends as $friend){

	echo $friend . ',';
}

?>


<?php

$customers = array(array('Derek', '123 Main', '15212'),
					array( 'Sally', '124 Main', '15212'),
					array( 'Bob', '125 main', '15212'));
		for($row = 0; $row < 3; $row++){

			for($col = 0; $col < 3; $col++){
			echo $customers[$row][$col] .',';
		}
		echo '</br>';
	}

?>

	
	
</body>
</html>

