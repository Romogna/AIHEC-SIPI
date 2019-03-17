<?php echo file_get_contents("html/header1.html"); ?>
<date>
<?php include("php/todaysDate.php") ?>
</date>
<?php echo file_get_contents("html/header2.html"); ?>

<!DOCTYPE html>
<html>
<head>


<style>

div.gallery {
  margin: 10px;
  
  float: left;
  width: 380px;
}



div.gallery img {
  width: 100%;
  height: 100%;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body>

<div class="wrapper row2">

<div id="container" class="clear">

 <article class="four_quarter">
     <h2>Welcome to Bailey's Gallery!</h2>
         <p>This gallery is dedictaed to the innovative students of Bailey's Kitchen who make every event possible. </p>
         
 </article>

<div class="wrapper row2">

<div id="container" class="clear">

<h2>Community</h2>

<div class="gallery">

    <img src="images/7U0A6728.JPG" width="600" height="400">
 
  <div class="desc">Students at work!</div>
</div>

<div class="gallery">
  
    <img src="images/7U0A6766.JPG" width="600" height="400">
  
  <div class="desc">Cake Decorating</div>
</div>

<div class="gallery">
    <img src="images/7U0A6674.JPG" width="600" height="400">
  
  <div class="desc">Stude, study, study</div>
</div>

<div class="gallery">
    <img src="images/7U0A6833.JPG " width="600" height="400">
  
  <div class="desc">Fun times in Bailey's Kitchen</div>
</div>


</div>
</div>


<h2>Main Dishes</h2>

<div class="gallery">

    <img src="images/20190212_120121.jpg" width="600" height="400">
 
  <div class="desc">Cashew Ribs by Baileys Kitchen and SIPI ITCS</div>
</div>

<div class="gallery">
  
    <img src="images/20190227_113947.jpg "width="600" height="400">
  
  <div class="desc">Wontons by Bailey's Kitchen and SIPI ITCS</div>
</div>

<div class="gallery">
    <img src="images/crablegs.jpg" width="600" height="400">
  
  <div class="desc">Crab Legs by ITCS</div>
</div>

<div class="gallery">
    <img src="images/7U0A6649.JPG" width="600" height="400">
  
  <div class="desc">Goulash by Chef Bailey</div>
</div>


</div>
</div>

<div class="wrapper row2">
	<div id="container" class="clear">

<h2>Joconde Sponge Cake</h2>

<div class="gallery">

    <img src="images/7U0A6952.JPG" alt="Cinque Terre" width="600" height="400">
 
  <div class="desc">Joconde Sponge Cake by Cynthia Stewart</div>
</div>



<div class="gallery">
  
    <img src="images/7U0A6948.JPG " alt="Forest" width="600" height="400">
  
  <div class="desc">Joconde Sponge Cake by Miranda Henio</div>
</div>

<div class="gallery">
    <img src="images/7U0A6943.JPG" alt="Northern Lights" width="600" height="400">
  
  <div class="desc">Joconde Sponge Cake by Culinary Student</div>
</div>

<div class="gallery">
    <img src="images/7U0A6915.JPG" alt="Mountains" width="600" height="400">
  
  <div class="desc">Joconde Sponge Cake by Lyenlle</div>
</div>

</div>
</div>




</body>
</html>

<?php echo file_get_contents("html/footer.html"); ?>
