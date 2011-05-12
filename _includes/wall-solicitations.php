	<section id="wall-solicitations">
      <nav id="content-types">
        <h1>Share a:</h1>
        <a class="content-type review" href="#review">Review</a>
				<a class="content-type question" href="#question">Question</a>
				<a class="content-type photo" href="#photo">Photo</a>
				<a class="content-type video" href="#video">Video</a>
			</nav>
      <?php $edit = false; include_once("_includes/solicitation-review.php"); ?>
      <?php include_once("_includes/solicitation-question.php"); ?>
      <?php include_once("_includes/solicitation-photo.php"); ?>
			<?php include_once("_includes/solicitation-video.php"); ?>
    </section>