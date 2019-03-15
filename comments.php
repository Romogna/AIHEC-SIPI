<?php echo file_get_contents("html/header1.html"); ?>
<date>
<?php include("php/todaysDate.php") ?>
</date>
<?php echo file_get_contents("html/header2.html"); ?>

<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
   
<body> 
     <h1> Leave us a comment!</h1>
	<p>For further information about our services please leave us a comment with you're contact information.</p>

	<form action="info.php" method="post"/>
    	<label for="FirstName">First Name</label>

   	 <input type="text"name="FirstName" placeholder="Your name.."> <br><br>

   	 <label for="LastName">Last Name</label>

   	 <input type="text" name="LastName" placeholder="Your last name..">  <br><br>
    	<label for="Subject">Subject</label>
   
	<textarea name="Subject" placeholder="Write something.." style="height:200px"></textarea> <br><br>

   	<input type="submit" value="Submit">
	
	</form>
   </body>


</div> 
</div>

<?php echo file_get_contents("html/footer.html"); ?>
