      <section class="solicitation video hidden">
        <span class="indicator"></span>
        <form action="#something" method="post" class="wall-interaction">
          <header>
			<h1>Got a video of this gear in action?</h1>
          </header>        
          <div class="faux-label add-a-photo">
						<span>Add a video <a href="#tac">Terms and conditions</a></span>
							<div class="faux-col">
								<span>From YouTube or Vimeo</span>
								<input type="text" name="hotlink-photo" id="hotlink-photo" placeholder="http://" />
								<span>ex: http://www.youtube.com/watch?v=AFJN</span>
								<div class="clearb"></div>								
								<span>From your computer</span>
								<input type="file" name="upload-video" id="upload-video" />
							</div>
					</div>
          <div class="faux-label"><span>Title</span>
            <div class="faux-col">
              <input type="text" name="video-title" id="video-title"/>
            </div>
          </div>
          <div class="faux-label"><span>Description</span>
            <div class="faux-col">
              <?php include("solicitation-textarea.php"); ?>
            </div>
          </div>
          <?php include("solicitation-submit-upc.php"); ?>            
        </form>
      </section>