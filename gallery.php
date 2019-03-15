<?php echo file_get_contents("html/header.html"); ?>
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

<h1>Main Dishes</h1>

<div class="gallery">

    <img src="images/7U0A6649.JPG" alt="Cinque Terre" width="600" height="400">
 
  <div class="desc">Goulash by Chef Bailey</div>
</div>

<div class="gallery">
  
    <img src="images/20190227_113947.jpg " alt="Forest" width="600" height="400">
  
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/20190212_120121.jpg" alt="Northern Lights" width="600" height="400">
  
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/20190220_104950.jpg" alt="Mountains" width="600" height="400">
  
  <div class="desc">Add a description of the image here</div>
</div>


</div>
</div>

<div class="wrapper row2">
	<div id="container" class="clear">

<h2>Baked Goods</h2>

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
  
  <div class="desc">Joconde Sponge Cake by Unkknown</div>
</div>

<div class="gallery">
    <img src="images/7U0A6915.JPG" alt="Mountains" width="600" height="400">
  
  <div class="desc">Joconde Sponge Cake by Lyenlle Something</div>
</div>
	

</div>
</div>

</body>
</html>

<?php echo file_get_contents("html/footer.html"); ?>
