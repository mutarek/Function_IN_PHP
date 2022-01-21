<?php
function Message($msg)
{
	if ($msg<= 5) {
		echo $msg."<br>";
		Message($msg +1);
	}
	else{
		
	}
}


Message(1);

?>