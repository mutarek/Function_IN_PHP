<?php
function Hello($para1,$para2)
{
	echo "Para One Is:".$para1 ." And Para 2 Is ".$para2."<br>";
}

Hello('I Love PHP So Much','Php is Best');


function HelloFunction($para1="Hello",$para2="World")
{
	echo "Para One Is:".$para1 ." And Para 2 Is ".$para2;
}

HelloFunction();

?>