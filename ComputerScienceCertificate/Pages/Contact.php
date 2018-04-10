<!DOCTYPE html>
<html>
	
<head>
	<meta charset="utf-8">
	<title>Kapcsolat</title>
	<link rel="stylesheet" type="text/css" href="../css/default.css">
	<link rel="icon" href="..\Images\colosseum.ico">
</head>

<body>
	<?php include("../menu.php");?>
	
	<h1>Kapcsolat</h1>
	
	<p>
		Ha szeretne rajtalenni a levelező listámon a weboldal frissítéseivel kapcsolatban, vagy tanácsot, akár kritikát
		szeretne velem megosztani, akkor kérem szépen töltse ki az alábbi mezőket. Az e-mail címe és adatai nem lesznek
		közzé téve, vagy akár más célra felhasználva.
	</p>
	<div class="contactContainer">
		<form action="/index.php" method="post">
			<section>		
			    <div style="float:left;margin-right:20px;">
			        <label class="contact" for="name">Név</label>
			        <input class="contact" id="name" type="text" value="" name="name">

			        <label class="contact" for="email">E-mail cím</label>
			        <input class="contact" id="email" type="text" value="" name="email">
			    </div>
			
			    <br style="clear:both;" />
			
			    </section>
			
			    <section>
			
			    <label class="contact" for="subject">Tárgy</label>
			    <input class="contact" id="subject" type="text" value="" name="subject">
			    <label class="contact" for="message">Üzenet</label>
			    <textarea class="contact" id="message" name="message" cols="50" rows="4"></textarea>
			    
			    <input class="link_button contact" type="submit" value="Elküld"/>
		    </section>
		</form>
	</div>

<p>
	Más elérhetőségem: hétcsoda@freemail.hu
</p>
	
	
	
	
	
	
	
	
</body>
</html>