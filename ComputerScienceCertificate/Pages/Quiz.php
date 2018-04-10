<!DOCTYPE html>
<html>
	
<head>
	<meta charset="utf-8">
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="../css/default.css">
	<link rel="icon" href="..\Images\colosseum.ico">
</head>

<body>
	
	<?php include("../menu.php");?>
	
	<form action="Quiz.php" method="post" id="quiz">
	   	<?php include '../mysql.php';?>
	   	<?php
	   		session_start();
			
			$nincsTobbKerdes = false;
			
			if(isset($_REQUEST["inditas"]))
			{
				$_SESSION["idKerdes"] = 1;
				$_SESSION["nHelyes"] = 0;
			}
			
			if(isset($_SESSION["idKerdes"]) && isset($_REQUEST["next"]))
			{
				if(isset($_REQUEST["radio"]))
				{
					$idKerdes = $_SESSION["idKerdes"];
					
					//megnezzuk h jo-e a valasz
					$dbQueries = new DbQueries();
					$idHelyesValasz = $dbQueries->getHelyesValasz($idKerdes);
					$idAdottValasz = $_REQUEST["radio"];
					if($idAdottValasz == $idHelyesValasz)
					{
						if(!isset($_SESSION["nHelyes"]))
							$_SESSION["nHelyes"] = 0;
						$_SESSION["nHelyes"]++;
					}
					
					if($dbQueries->getKerdes($idKerdes+1) != null)
					{
						$_SESSION["idKerdes"]++;
					}
					else 
					{
						$nincsTobbKerdes = true;
					}
				}
			}
			
			if(isset($_REQUEST["reset"]))
			{
				session_unset();
			}

			
	   		$ujInditas = !isset($_SESSION["idKerdes"]);
			
			if(!$ujInditas)
			{
		   		$idKerdes = $_SESSION["idKerdes"];
		   		$dbQueries = new DbQueries();
				$kerdes = $dbQueries->getKerdes($idKerdes);
				$valaszok = $dbQueries->getValaszokForKerdes($idKerdes);
			}
		?>
		
		<div class="kerdesContainer">
		<?php if($ujInditas): ?>
			<h2 class="kerdes">Tesztelje le, hogy minden apró részletet megjegyzett-e a csodákkal kapcsolatban!</h2>
			<div class="x">
				<input class="link_button" type="submit" name="inditas" value="Induljon a mandula!" />
			</div>
		<?php elseif($nincsTobbKerdes): ?>
			<h2 class="kerdes">A quiz véget ért!</h2>
			<p class="nomargin">Helyes válaszaid száma: <span class="nomargin green"><?php echo $_SESSION["nHelyes"]?></span> a <?php echo $_SESSION["idKerdes"]?>-ból!</p>
			<?php if($_SESSION["nHelyes"]<($_SESSION["idKerdes"]/3)): ?>
				<p>Még kellene böngésznie a honlapon!</p>
			<?php elseif($_SESSION["nHelyes"]<($_SESSION["idKerdes"]*2/3)): ?>
				<p>Látszik, hogy odafigyelt a részletekre, de még van mit tanulnia!</p>
			<?php elseif($_SESSION["nHelyes"]<($_SESSION["idKerdes"])): ?>
				<p>Majdnem tökéletes, még egy kevés törekvést!</p>
			<?php elseif($_SESSION["nHelyes"]==($_SESSION["idKerdes"])): ?>
				<p>Gratulálok! Sikerült tökéletesen válaszolnia minden kérdésre!</p>
			<?php endif; ?>
			<div class="x">
				<input class="link_button red" type="submit" name="reset" value="<< Újrakezdés" />
			</div>
		<?php else: ?>
			<h2 class="kerdes"><?php echo $kerdes;?></h2>
			<div class="floatCont">
				<div class="xyz floatRight">
				
				</div>
				
				<div class="xyz">
					<input type="radio" name="radio" id="radio1" class="radio" value="<?php echo $valaszok[0];?>"/>
					<label class="box" for="radio1"><?php echo $valaszok[1];?></label>
				</div>
				
				<div class="xyz">
					<input type="radio" name="radio" id="radio2" class="radio" value="<?php echo $valaszok[2];?>"/>
					<label class="box" for="radio2"><?php echo $valaszok[3];?></label>
				</div>
				
				<div class="xyz">	
					<input type="radio" name="radio" id="radio3" class="radio" value="<?php echo $valaszok[4];?>" />
					<label class="box" for="radio3"><?php echo $valaszok[5];?></label>
				</div>
				
				<div class="xyz">	
					<input type="radio" name="radio" id="radio4" class="radio" value="<?php echo $valaszok[6];?>" />
					<label class="box" for="radio4"><?php echo $valaszok[7];?></label>
				</div>
				
					
				<div class="xyz">
					<input class="link_button red" type="submit" name="reset" value="<< Újrakezdés" />
					<input class="link_button floatRight" type="submit" name="next" value="Következő kérdés >" />					
				</div>
			</div>
		<?php endif; ?>
		</div>
	</form>
	
	<?php
		if($nincsTobbKerdes)
		{
			session_unset();
		}
	?>



</body>
</html>