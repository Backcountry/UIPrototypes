            <ul class="upc-tools">
			  <?php if(!$reply && $loggedIn){ ?>
    	          <li class="edit"><a href="#edit">Tweak This</a></li>
	              <li class="delete"><a href="#delete">Delete This</a></li>
			  <?php } ?>
              <?php if($reply || !$loggedIn){ ?>
              	<li class="vote">Helpful <a href="#vote" class="helpful-vote">Yes</a></li>
             	<li class="flag"><a href="#flag">Flag</a></li>
              <?php } ?>
            </ul>