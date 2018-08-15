<?php

$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nobis perspiciatis facilis similique fuga consequatur corporis, pariatur dolor voluptas? Corporis tempora earum placeat et reprehenderit minima voluptatem rerum nesciunt amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nobis perspiciatis facilis similique fuga consequatur corporis, pariatur dolor voluptas? Corporis tempora earum placeat et reprehenderit minima voluptatem rerum nesciunt amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nobis perspiciatis facilis similique fuga consequatur corporis, pariatur dolor voluptas? Corporis tempora earum placeat et reprehenderit minima voluptatem rerum nesciunt amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur nobis perspiciatis facilis similique fuga consequatur corporis, pariatur dolor voluptas? Corporis tempora earum placeat et reprehenderit minima voluptatem rerum nesciunt amet.";

if(!empty($_GET['search'])){
	$str = preg_split("/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" . "[\s,]*'([^']+)'[\s,]*|" . "[\s,]+/", $_GET['search'], 0, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
	$str_red = [];
	foreach($str as $i => $s){
		$str_red[] = "<font color='red'>".$s."</font>";
		$str[$i] = "/".$s."/";
	}
	$text = preg_replace($str, $str_red, $text);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task 4</title>
</head>
<body style="width: 600px">
	<form action="test.php" method="GET">
		<label for="search">Ключевая строка:</label>
		<input type="text" name="search" required value='<?php echo $_GET['search']; ?>'><br>
		<input type="submit" name="" value="Поиск">
	</form>
	<hr>
	<p>
<?php
	print $text;
?>
	</p>
</body>
</html>