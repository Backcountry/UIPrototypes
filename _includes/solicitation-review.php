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
		<div class="step">
			<h3>Step 1: Survey</h3>
			<ul class="survey-options">
				<li>
					<dt>How does this item fit?</dt>
					<dd>Small</dd>
					<dd>True to size</dd>
					<dd>Large</dd>
				</li>
				<li>
					<dt>How durable is this item</dt>
					<dd>Not very</dd>
					<dd>Average</dd>
					<dd>Very</dd>
				</li>
				<li>
					<dt>Would you recommend this to a friend?</dt>
					<dd>Yes</dd>
					<dd>No</dd>
				</li>
            </ul>
			<h5><a class="btn btn-submit-survey">Just submit this survey &gt;</a></h5>
          </div>
		  <?php } ?>						  
          <div class="step">
			<?php if(!$edit) { ?>			
            <h3>Step 2: Text Review <span>(optional)</span></h3>
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
          </div>
    </form>
</section>