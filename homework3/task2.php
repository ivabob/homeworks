<!DOCTYPE html>
<html>
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title> Registration form </title>
   </head>
<body>
	<?php
		if (!empty($_POST)) {
			$user = $_POST['username'];
			$pass1 = $_POST['pass1'];
			$pass2 = $_POST['pass2'];
			$email = $_POST['email'];
			$interes = $_POST['interes'];
			
			if ($pass1 == $pass2) {
				
				    if(!empty($interes)){
				    	$N = count($interes);
					    if($N == 1){
					    	echo " $user, ти избра " . $N . ' интерес! Ето го и него: <br />';
						}
						else{
							echo " $user, ти избра " . $N . ' интереси! Ето ги и тях: <br />';
						}
					    for($i=0; $i < $N; $i++){
					    	switch ($interes[$i]) {
					    		case 'music':
				    				echo 'Музика';
				    			break;
					    		
					    		case 'futbol':
				    				echo 'Футбол';
				    			break;
				    			case 'computers':
				    				echo 'Компютри';
				    			break;
				    			case 'books':
				    				echo 'Книги';
				    			break;
				    			case 'photography':
				    				echo 'Фотография';
				    			break;
					    		default:
					    		break;
					    	}
					    }
					}
					else{
					    echo("Не сте въвели никакви интереси. Въведете поне един");
					}
				} 
			    else{
				        echo 'Паролите не съвпадат. Моля, опитайте отново!';
			         }

                }
	?>	
	<form method="post" action="">

		Потребителско име: <input type="text" name="username" value="" /><br />

		Парола: <input type="password" name="pass1" value="" /><br />

		Повтори паролата: <input type="password" name="pass2" value="" /><br />

		E-mail: <input type="text" name="email" value="" /><br />

		Музика > <input type="checkbox" name="interes[]" value="music" />

		Футбол > <input type="checkbox" name="interes[]" value="futbol" />

		Компютри > <input type="checkbox" name="interes[]" value="computers" />

		Книги > <input type="checkbox" name="interes[]" value="books" />

		Фотография > <input type="checkbox" name="interes[]" value="photography" /><br />

		<input type="submit" name="submit" value="Регистрация" /> <br/>

	</form>
</body>
</html>
