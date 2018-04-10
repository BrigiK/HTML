<?php 
function PageName() {
  return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

$current_page = PageName();
?>

<ul class="menu">
  <li class="menu"><a <?php if($current_page=="index.php") echo 'class="active"'; ?> href="/index.php">Kezdőlap</a></li>
  
  
  <li class="dropdown menu">
    <a <?php if($current_page=="Colosseum.php") echo 'class="active"'; ?> class="dropbtn">Csodák</a>
    <div class="dropdown-content">
	      <a href="/Pages/Colosseum.php">Colosseum</a>
	      <a href="/Pages/ChichenItza.php">Chichén Itza</a>
	      <a href="/Pages/KinaiNagyFal.php">Kínai Nagy Fal</a>
	      <a href="/Pages/MachuPicchu.php">Machu Picchu</a>
	      <a href="/Pages/KrisztusSzobra.php">Megváltó Krisztus szobra</a>
	      <a href="/Pages/Petra.php">Petra</a>
	      <a href="/Pages/TajMahal.php">Taj Mahal</a>
    </div>
    
  </li>
  
 
 <!-- <li class="menu"><a  <?php if($current_page=="Colosseum.php") echo 'class="active"'; ?> href="/Pages/Colosseum.php">Colosseum</a></li>
  
   <li class="menu"><a  <?php if($current_page=="ChichenItza.php") echo 'class="active"'; ?> href="/Pages/ChichenItza.php">Chichén Itza</a></li>
   
   <li class="menu"><a  <?php if($current_page=="KinaiNagyFal.php") echo 'class="active"'; ?> href="/Pages/KinaiNagyFal.php">Kínai Nagy Fal</a></li>
   
   <li class="menu"><a  <?php if($current_page=="MachuPicchu.php") echo 'class="active"'; ?> href="/Pages/MachuPicchu.php">Machu Picchu</a></li>
   
   <li class="menu"><a   <?php if($current_page=="KrisztusSzobra.php") echo 'class="active"'; ?> href="/Pages/KrisztusSzobra.php">Megváltó Krisztus szobra</a></li>
   
   <li class="menu"><a  <?php if($current_page=="Petra.php") echo 'class="active"'; ?> href="/Pages/Petra.php">Petra</a></li>
   
   <li class="menu"><a  <?php if($current_page=="TajMahal.php") echo 'class="active"'; ?> href="/Pages/TajMahal.php">Taj Mahal</a></li> -->
   
   <li class="menu"><a  <?php if($current_page=="SiteMap.php") echo 'class="active"'; ?> href="/Pages/SiteMap.php">Honlaptérkép</a></li>
   
   <li class="menu"><a  <?php if($current_page=="Quiz.php") echo 'class="active"'; ?> href="/Pages/Quiz.php">Quiz</a></li>
   
   <li class="menu"><a  <?php if($current_page=="Contact.php") echo 'class="active"'; ?> href="/Pages/Contact.php">Kapcsolat</a></li>
   
   
   
   
</ul>
