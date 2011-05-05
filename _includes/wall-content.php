<?php
	$reply = false;
	$loggedIn = true;
	$answer = false;
?>

<section id="wall-content">
<?php include("wall-navigation.php"); ?>
	<div id="hreview-aggregate" class="hidden">
		 <span class="item">
				<span class="fn">Edelweiss Sharp ARC Climbing Rope</span>
				<img src="http://backcountry.com/product-photo-url" class="photo" />
		 </span>
		 <span class="rating">
				<span class="average">4</span> out of
				<span class="best">5</span>
		 </span> based on <span class="votes">2</span> ratings. <span class="count">2</span> user reviews.
	</div>   
  <article id="hreview-Great-Rope" class="upc hreview">
    <section class="upc-single">
       <?php include("vcard.php") ?>
       <section class="upc-content"> <abbr class="rating" title="5"><img src="#image-with-five-stars" alt="5" /></abbr>
        <h1><a href="#url-to-ucp" class="summary" rel="self bookmark">Great Rope</a> <abbr title="2004-04-10T09:58-06:00" class="dtreviewed">Apr 10, 2004</abbr></h1>
        <!-- meta data for spiders -->
        <span class="hidden"> <span class="type">product</span> <img class="photo" src="http://backcountry.com/product-photo-url" alt="photo of $productName"> <a href="http://backcountry.com/product-url" class="item fn url">Edelweiss Sharp ARC Climbing Rope</a> </span>
        <!-- end of meta data for spiders -->
        <blockquote class="description">
            <p>Review number one.</p>
        </blockquote>
        <?php include("upc-tools.php"); ?>
      </section>
    </section>
    <section class="upc-replies">
      <article>
       <?php include("vcard.php") ?>
        <div>
          <h1><abbr title="2004-04-10T09:58-06:00" class="dtreviewed">Apr 10, 2004</abbr></h1>
          <blockquote class="description">
            <p>First reply. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum felis libero, posuere sit amet volutpat commodo,
              dapibus vel leo. Ut eget mauris ligula, id varius tortor. Vestibulum facilisis, est eu venenatis pharetra, eros dolor volutpat lorem, eu aliquam quam.
              Phasellus placerat aliquet eros nec blandit. Nam ultrices malesuada odio lobortis accumsan.</p>
          </blockquote>
        </div>
        <?php $reply = true; include("upc-tools.php"); ?>
      </article>
      <article>
       <?php include("vcard.php") ?>
        <div class="clearfix">
          <h1><abbr title="2004-04-10T09:58-06:00" class="dtreviewed">Apr 10, 2004</abbr></h1>
          <blockquote class="description">
            <p>Second reply.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum felis libero, posuere sit amet volutpat commodo,
              dapibus vel leo. Ut eget mauris ligula, id varius tortor. Vestibulum facilisis, est eu venenatis pharetra, eros dolor volutpat lorem, eu aliquam quam.
              Phasellus placerat aliquet eros nec blandit. Nam ultrices malesuada odio lobortis accumsan.</p>
          </blockquote>
        </div>
        <?php $reply = true; include("upc-tools.php"); ?>
      </article>
      <?php $answer = false; include("add-reply.php"); ?>      
    </section>
  </article>
  <article id="hreview-An-okay-Rope" class="upc hreview">
    <section class="upc-single">
       <?php include("vcard.php") ?>
        <section class="upc-content"> <abbr class="rating" title="3"><img src="#image-with-three-stars" alt="3" /></abbr>
        <h1><a href="#url-to-ucp" class="summary" rel="self bookmark">An okay rope</a> <abbr title="2004-04-10T09:58-06:00" class="dtreviewed">7 Days ago</abbr></h1>
        <!-- meta data for spiders -->
        <span class="hidden"> <span class="type">product</span> <img class="photo" src="http://backcountry.com/product-photo-url" alt="photo of $productName"> <a href="http://backcountry.com/product-url" class="item fn url">Edelweiss Sharp ARC Climbing Rope</a> </span>
        <!-- end of meta data for spiders -->
        <blockquote class="description">
          <p>Review number two.</p>
          <img src="#fpo" class="cpi" height="440" width="440" alt="customer provided image" /> </blockquote>
        <?php $reply = false; include("upc-tools.php"); ?>
      </section>
    </section>
    <section class="upc-replies">
       <article>
       <?php include("vcard.php") ?>
        <div>
          <h1><abbr title="2004-04-10T09:58-06:00" class="dtreviewed">2 Days ago</abbr></h1>
          <blockquote class="description">
            <p>Vestibulum facilisis, est eu venenatis pharetra, eros dolor volutpat lorem, eu aliquam quam.
              Phasellus placerat aliquet eros nec blandit. Nam ultrices malesuada odio lobortis accumsan.</p>
          </blockquote>
        </div>
        <?php $reply = true; include("upc-tools.php"); ?>
      </article>
      <?php $answer = false; include("add-reply.php"); ?>      
    </section>
  </article>
  <article class="upc question">
    <section class="upc-single">
       <?php include("vcard.php") ?>
      <section class="upc-content">
        <h5 class="upc-status unanswered"><em>unanswered question</em></h5>
        <h1><a href="#url-to-ucp" class="summary" rel="self bookmark">Good Rope fo the price</a> <abbr title="2004-04-10T09:58-06:00" class="dtreviewed">4 days ago</abbr></h1>
        <!-- meta data for spiders -->
        <span class="hidden"> <span class="type">product</span> <img class="photo" src="http://backcountry.com/product-photo-url" alt="photo of $productName"> <a href="http://backcountry.com/product-url" class="item fn url">Edelweiss Sharp ARC Climbing Rope</a> </span>
        <!-- end of meta data for spiders -->
        <blockquote class="description">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum felis libero, posuere sit amet volutpat commodo, dapibus vel leo. Ut eget mauris ligula, id varius tortor. Vestibulum facilisis, est eu venenatis pharetra, eros dolor volutpat lorem, eu aliquam quam lacus sed mi. Phasellus egestas sapien et elit semper pellentesque. Nulla consectetur erat turpis. Pellentesque tincidunt libero velit, ac viverra arcu. Phasellus placerat aliquet eros nec blandit. Nam ultrices malesuada odio lobortis accumsan.</p>
        </blockquote>
        <?php $reply = false; include("upc-tools.php"); ?>
      </section>
    </section>
    <section class="upc-replies">
      <article>
       <?php include("vcard.php") ?>
        <div>
          <h5 class="upc-status"><em>answer</em> <abbr title="2004-04-10T09:58-06:00" class="dtreviewed">2 days ago</abbr></h5>
          <blockquote class="description">
            <p>Question. iorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum felis libero, posuere sit amet volutpat commodo,
              dapibus vel leo. Ut eget mauris ligula, id varius tortor. Vestibulum facilisis, est eu venenatis pharetra, eros dolor volutpat lorem, eu aliquam quam.
              Phasellus placerat aliquet eros nec blandit. Nam ultrices malesuada odio lobortis accumsan.</p>
          </blockquote>
        </div>
        <?php $reply = true; include("upc-tools.php"); ?>
      </article>
      <article>
       <?php include("vcard.php") ?>
         <div>
          <h5 class="upc-status best-answer"><em>best answer</em> <abbr title="2004-04-10T09:58-06:00" class="dtreviewed">1 day ago</abbr></h5>
          <blockquote class="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum felis libero, posuere sit amet volutpat commodo,
              dapibus vel leo. Ut eget mauris ligula, id varius tortor. Vestibulum facilisis, est eu venenatis pharetra, eros dolor volutpat lorem, eu aliquam quam.
              Phasellus placerat aliquet eros nec blandit. Nam ultrices malesuada odio lobortis accumsan.</p>
          </blockquote>
        </div>
        <?php $reply = true; include("upc-tools.php"); ?>
      </article>
      <?php $answer = true; include("add-reply.php"); ?>      
    </section>
  </article>
  <article class="upc photo">
    <section class="upc-single">
       <?php include("vcard.php") ?>
      <section class="upc-content">
        <h1><a href="#url-to-ucp" class="summary" rel="self bookmark">This is a photo</a> <abbr title="2004-04-10T09:58-06:00" class="dtreviewed">4 days ago</abbr></h1>
        <!-- meta data for spiders -->
        <span class="hidden"> <span class="type">product</span> <img class="photo" src="http://backcountry.com/product-photo-url" alt="photo of $productName"> <a href="http://backcountry.com/product-url" class="item fn url">Edelweiss Sharp ARC Climbing Rope</a> </span>
        <!-- end of meta data for spiders -->
        <img src="#fpo" class="cpi" height="440" width="440" alt="customer provided image" />
        <blockquote class="description">
          <p>Pellentesque tincidunt libero velit, ac viverra arcu.
            Phasellus placerat aliquet eros nec blandit. Nam ultrices malesuada odio lobortis accumsan.</p>
        </blockquote>
        <?php $reply = false; include("upc-tools.php"); ?>
      </section>
    </section>
    <section class="upc-replies">
      <article>
       <?php include("vcard.php") ?>
        <div> <abbr title="2004-04-10T09:58-06:00" class="dtreviewed">2 days ago</abbr>
          <blockquote class="description clearfix">
            <p>This is a comment in a photo. Ut eget mauris ligula, id varius tortor. Vestibulum facilisis, est eu venenatis
              pharetra, eros dolor volutpat lorem, eu aliquam quam. Phasellus placerat aliquet eros nec blandit. Nam ultrices malesuada odio lobortis
              accumsan.</p>
          </blockquote>
        </div>
        <?php $reply = true; include("upc-tools.php"); ?>
      </article>
       <?php $answer = false; include("add-reply.php"); ?>      
    </section>
  </article>
</section>
