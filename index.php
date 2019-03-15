<?php echo file_get_contents("html/header1.html"); ?>
<date>
<?php include("php/todaysDate.php") ?>
</date>
<?php echo file_get_contents("html/header2.html"); ?>

<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">

    <!-- Slider -->
    <section id="slider" class="clear">
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
              <li><a href="#"><img src="images/demo/130x130.gif" width="130" height="130" alt=""></a></li>
              <li><a href="#"><img src="images/demo/130x130.gif" width="130" height="130" alt=""></a></li>
              <li class="last"><a href="#"><img src="images/demo/130x130.gif" width="130" height="130" alt=""></a></li>
            </ul>
            <figcaption><a href="./gallery.php">View Our Image Gallery Here &raquo;</a></figcaption>
          </figure>
        </article>
      </section>
    </div>

  </div>
</div>

<?php echo file_get_contents("html/footer.html"); ?>
