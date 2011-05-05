<section class="solicitation review collapsed">
        <span class="indicator"></span>
        <form action="#something" method="post" class="wall-interaction">
          <header>
            <h1>Hey Bryan Lence, review this product.</h1>
            <h2><a href="#expand" class="cta display-form">Complete a quick Survey or write a Review</a></h2>
          </header>
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
          <div class="step">
            <h3>Step 2: Text Review <span>(optional)</span></h3>
            <div class="faux-label"> <span>Overall Rating</span>
              <div class="faux-col ratings"><img src="#rating1"> <img src="#rating2"> <img src="#rating3"> <img src="#rating4"> <img src="#rating5"></div>
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