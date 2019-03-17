<?php echo file_get_contents("html/header1.html"); ?>
<date>
<?php include("php/todaysDate.php") ?>
</date>
<?php echo file_get_contents("html/header2.html"); ?>

<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">



<!-- What we DO-->
	 <figure>
            <img src="images/7U0A6742.JPG" width="350" height="225" align= "right">
          </figure>

   <article class="two_quarter">
          <h2>Welcome to Bailey's Kitchen!</h2>
          <p>Bailey's Kitchen has built their reputation upon an uncompromising passion for culinary excellence, matched by an unprecedented dedication to service.
We compliment every occasion with unforgettable meals and unparalleled service, prepared from scratch by our eager students, and infinitely customizable to meet every palette, including those with special dietary needs and restrictions.
We will work directly with you or your event coordinator to ensure that every detail is accounted for so that you and your guests can enjoy your time together while our full-service catering staff handles the details.
Continue exploring the site to learn more about our menu, event catering services, and to see images of our dedicated students and their work, or fill out a Comment Card to arrange a consultation with one of our helpful associates. </p>
         
        </article>

    <!-- main content -->
    <div id="intro">
      <section class="clear">

        <!-- article 1 -->

<br><br>
        <article class="two_quarter">

          <h2>Catering Services</h2>
          <p>We provice food catering to any event in the Albuquerque Area. To view all upcoming events please use the following link <a href="./catering.php">Catering</a>.</p>


        </article>

        <!-- article 2 -->
        <article class="two_quarter lastbox">
          <figure>
            <ul class="clear">
              <li><a href="#"><img src="images/7U0A6649.JPG" width="130" height="130" alt=""></a></li>
              <li><a href="#"><img src="images/7U0A6952.JPG" width="130" height="130" alt=""></a></li>
              <li class="last"><a href="#"><img src="images/7U0A6674.JPG" width="130" height="130" alt=""></a></li>
            </ul>
            <figcaption><a href="./gallery.php">View Our Image Gallery Here &raquo;</a></figcaption>
          </figure>
        </article>

<br><br>
   <!-- Slider -->
    <section id="slider" class="clear">
    <br><br>
      <figure><img src="images/7U0A6641.JPG" alt="">
        <figcaption>
          <h2>Try our Recipe Calculator!</h2>
          <p>Our recipe calculator allow you to make perfectly sized proportions of any of our recipes we provide.</p>
          <footer class="more"><a href="./recipes.php">Try it out! &raquo;</a></footer>
        </figcaption>
      </figure>
    </section>
      </section>
    </div>

  </div>
</div>

<?php echo file_get_contents("html/footer.html"); ?>
