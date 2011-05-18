<section class="<?php if(!$edit) { echo "solicitation collapsed"; } else { echo "edit"; }?> review">
	<?php if(!$edit) { ?>
	<span class="indicator"></span> 
	<?php } ?>	 
    <form action="#something" method="post" class="wall-interaction">
		<header>
			<?php if(!$edit) { ?>
			<h1>Hey Bryan Lence, review this product.</h1>			
			<h2><a href="#expand" class="cta display-form">Complete a quick Survey or write a Review</a></h2>
			<?php } ?>				
		</header>
			<?php if(!$edit) { ?>			
			<?php } else {
				include("vcard.php"); ?>
			<h3>Edit your review</h3>
			<?php } ?>				
            <div class="faux-label"> <span>Overall Rating</span>
				<div class="faux-col ratings">
	        <input type="radio" name="newrate" value="1" title="Very Bad" />
					<input type="radio" name="newrate" value="2" title="Bad" />
					<input type="radio" name="newrate" value="3" title="Average" />
					<input type="radio" name="newrate" value="4" title="Good" checked="checked" />
					<input type="radio" name="newrate" value="5" title="Very Good" />
				</div>
            </div>
            <div class="faux-label"><span>Review Title</span>
				<div class="faux-col">
					<input type="text" name="review-title" id="review-title" />
				</div>
            </div>
            <div class="faux-label"><span>Your Review</span>
				<div class="faux-col">
					<?php include("solicitation-textarea.php"); ?>
				</div>
            </div>
				<?php include("solicitation-add-a-photo.php"); ?>            
				<?php include("solicitation-submit-upc.php"); ?>
    </form>
</section>