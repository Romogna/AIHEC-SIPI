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
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dictum imperdiet pulvinar. Suspendisse justo mauris, efficitur consectetur eleifend sed, hendrerit a odio. Aenean molestie eros dignissim, auctor turpis in, pretium nulla. Suspendisse nec nibh mollis felis pulvinar tempor. In eget odio a ante cursus vulputate vestibulum in neque. Vivamus feugiat nisl quis euismod ullamcorper. Suspendisse blandit, orci sed ultricies hendrerit, felis ex pretium sem, ac tincidunt ipsum libero a dolor. Vivamus dignissim tortor a nulla porttitor suscipit. In vestibulum interdum pretium. Suspendisse fermentum, ex tincidunt finibus efficitur, libero enim tempus risus, id consectetur velit sem in lacus. Aliquam imperdiet pellentesque nisi eu tristique. Curabitur risus mauris, rutrum a euismod eget, laoreet et lacus. Curabitur iaculis urna in nunc faucibus tincidunt. Nunc vitae risus et nisi vehicula consectet.</p>
         
        </article>
    <!-- Slider -->
    <section id="slider" class="clear">
     <h2>Our Services</h2> <br><br>
      <figure><img src="images/7U0A6641.JPG" alt="">
        <figcaption>
          <h2>Try our Recipe Calculator!</h2>
          <p>Our recipe calculator allow you to make perfectly sized proportions of any of our recipes we provide.</p>
          <footer class="more"><a href="./recepies.php">Try it out! &raquo;</a></footer>
        </figcaption>
      </figure>
    </section>

    <!-- main content -->
    <div id="intro">
      <section class="clear">

        <!-- article 1 -->
        <article class="two_quarter">
          <h2>Catering Services</h2>
          <p>We provice food catering to any event in the Albuquerque Area. To schedule an event please use the following link <a href="./catering.php">Catering</a>.</p>

          <p>Visit our forums for comments and further help with your cooking adventures. <a href="./fourm.php">Forum</a>.</p>
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
      </section>
    </div>

  </div>
</div>

<?php echo file_get_contents("html/footer.html"); ?>
