<html>
	<head>
		<title>Roast Jason!</title>
		<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
		<style type="text/css">
			* { font-family: 'Raleway', sans-serif; font-weight: light;}
			.container {
				width: 980px;
				padding-top: 60px;
				margin: 0 auto;
				color: #666;
				
			}
			h1, h2, h3 { font-weight: normal; }
			li { font-size: 48px; padding: 10px 0; }
			ul { list-style-type: none; margin: 0; padding: 0;}
			input[type=text] { width: 100%; height: 200px; font-size: 48px; padding: 20px; margin-top: 20px; }
			input[type=submit] { margin-top: 30px; text-align: center; font-size: 48px; padding: 15px 30px; background-color: white; border: 2px solid #1A9; border-radius: 4px; }
			input[type=submit]:hover { background-color: #11FaEa; }
		</style>
	</head>
	<body>
		<div class="container">
			<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?> 
				<h1>You got it dude! You sent that roast!</h1> 
			<?php 
			$content = $_POST['sickburn'] . "\n"; 
			$file = "results.html"; 
			$Saved_File = fopen($file, 'a+'); 
			fwrite($Saved_File, $content); 
			fclose($Saved_File); 
			} ?>
			<img src="/roasthead_resized2.jpg" style="display: block; margin: 10px auto;" />
			<ul>
				<li>Ten Words or Less</li>
				<li> Allowed characters: [a-zA-Z0-9\-' ].</li>
				<li>100 Characters.</li>
				<li>Make it good.</li>
			</ul>
			<form method="POST" action="">
				<input type="text" 
					name="sickburn" 
					placeholder="nice theres something about mary haircut" autofocus="true"
					 maxlength="100" pattern="([a-zA-Z]+ ?){1,10}" title="!0 words. Letters only."
				/>
				<input type="submit" value="Send That Roast!" />	
			</form>
		</div>
	</body>
</html>
