<?php 

function saveMe($count)
{
	echo "I am thanons <br>";
	if($count != 1){
		saveMe(--$count);		
	}
}

saveMe(3);

?>