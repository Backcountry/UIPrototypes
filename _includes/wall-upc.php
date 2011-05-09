<section class="<?php "upc-" . echo $single . " " . $isHreview; ?>" id="<?php $reviewSummary ?>">
    <?php include("vcard.php") ?>
	
    <section class="upc-content">
	
		<?php if($hReview){?>
			<abbr class="rating" title="<?php echo $reviewRating; ?>"><img src="#image-with-five-stars" alt="5" /></abbr>
		<?php } else if($question) { ?>
			<h5 class="upc-status unanswered"><em>unanswered question</em></h5>
		<?php } ?>
		<div>
			<h1><a href="#url-to-ucp" class="summary" rel="self bookmark">Great Rope</a> <abbr title="2004-04-10T09:58-06:00" class="dtreviewed">Apr 10, 2004</abbr></h1>
			<?php if(!$hReview){?>
			<!-- meta data for spiders -->
			<span class="hidden">
				<span class="type">product</span>
				<a href="http://backcountry.com/product-url" class="item fn url"><img class="photo" src="http://backcountry.com/product-photo-url" alt="photo of $productName">Edelweiss Sharp ARC Climbing Rope</a>
			</span>
			<!-- end of meta data for spiders -->
			<?php } ?>
			<blockquote class="description">
				<?php if($photo){ ?>
				<img src="#fpo" class="cpi" height="440" width="440" alt="customer provided image" /> 
				<?php } ?>
				<p>Content of my generic upc.</p>
				<?php } if($hasPhoto || !$photo){ ?>
				<img src="#fpo" class="cpi" height="440" width="440" alt="customer provided image" /> 
				<?php } ?>
			</blockquote>
		</div>
		
        <?php include("upc-tools.php"); ?>
		
    </section>
	
	<?php if($lastReply){ include("add-reply.php");  }  ?>      
	
</section>