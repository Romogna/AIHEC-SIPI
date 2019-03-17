<?php echo file_get_contents("html/header1.html"); ?>
<date>
<?php include("php/todaysDate.php") ?>
</date>
<?php echo file_get_contents("html/header2.html"); ?>

<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">


    <!-- main content -->
    <div id="intro">
      <section class="clear">

        <!-- article 1 -->
        <article class="two_quarter">
          <h2>Recipe Calculator</h2>
          <p>We provide a basic recipe calculator to determin the proportions of your meal to create a perfect yield for your every event. Simply choose a recipe and specify your number of guests.  </p>
         
        </article>


	 <figure>
           
              <img src="images/comingsoon.png" width="652" height="225" align= "center" alt="">
            
          </figure>



        <!-- article 2 -->
        <article class="two_quarter">
         
 <p>Visit our comment card for further help with your cooking adventures. <a href="./forum.php">Comment Card</a>.</p>
        </article>
      </section>




    </div>

  </div>
</div>


<?php echo file_get_contents("html/footer.html"); ?>
