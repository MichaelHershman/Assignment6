<?php include "inc/html-top.php"; ?>







		<!-- Center content -->

      <main class="fullscreen bg-primary text-white">

        <div class="text-center vertical">

        <h1>Robotics</h1>

        <h3>The age of machines</h3>

        </div>


      </main>





<!-- Information towards bottom of page -->

      <footer class="#">

        <div class="#">

        <section>

          <!-- Weak Visual Area -->

            <div class="container">

              <h2 class="col-12 text-center que">What is Robotics</h2>

            </div>




            <div class="container">
              <ul class="row">

                <li class="col-sm part text-center bg-success text-white">Computer Science</li>

                <li class="col-sm part text-center bg-warning text-white">Engineering</li>

                <li class="col-sm part text-center bg-info text-white">Artificial Intelligence</li>

              </ul>
            </div>




        </section>

          <!-- Insert Contact Us Information -->

					<!-- link to Next Page -->
        <hr>
				<section class="strong">

					<a href="index.php#contact_form">Sign up below to join our club </a>

				</section>
        <hr>

          <!-- What we update for Assignment 5 -->

          <!-- Change below for inp-page change-->

					<div id="after_submit"></div>
          <div class="container">
            <form class="text-center" id="contact_form" action="#" method="POST" enctype="multipart/form-data">
            <div class="row">
              <label class="required" for="name">Your name:</label><br />
              <input id="name" class="form-control" name="name" type="text" value="" size="30" /><br />
              <span id="name_validation" class="error_message"></span>
            </div>
            <div class="row">
              <label class="required" for="email">Your email:</label><br />
              <input id="email" class="form-control" name="email" type="text" value="" size="30" /><br />
              <span id="email_validation" class="error_message"></span>
            </div>
            <div class="row">
              <label class="required" for="message">Your message:</label><br />
              <textarea id="message" class="form-control" name="message" rows="7" cols="30"></textarea><br />
              <span id="message_validation" class="error_message"></span>
            </div>

              <input class="btn btn-primary" id="submit_button" type="submit" value="Send email" />
          </form>
          </div>


            <!-- <button type="submit" formmethod="post">Submit using POST</button> -->



      </<footer>

    </body>



</html>
