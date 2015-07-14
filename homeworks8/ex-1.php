<?php
function num(){
	for ($i=42; $i >=11; $i--) { 
		echo "$i, ";
	}
	echo "<br/>";
}
?>
<body>
	<h1>
		<?php num(); ?>
	</h1>
	<div>
		<?php num(); ?>
	</div>
	<p>
		<?php num(); ?>
	</p>

</body>
