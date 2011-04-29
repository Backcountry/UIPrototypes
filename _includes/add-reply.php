      <form class="add-upc-reply collapsed wall-interaction">
        <?php if($answer) { ?>      
        <h3>Have an answer for James?</h3>
        <?php } ?>        
        <div class="textarea-wrapper">
          <div class="inner">
            <textarea name="content" placeholder="Write a comment"></textarea>
          </div>
        </div>
        <?php if($answer) { ?>
        <div class="faux-label add-a-photo"> <span>Add a photo <em>(optional)</em> <a href="#tac">Terms and conditions</a></span>
          <div class="faux-col"><span>From your computer</span>
            <input type="file" id="upload-photo" name="upload-photo">
            <div class="clearb"></div>
            <span>From another website</span>
            <input type="text" placeholder="http://" id="hotlink-photo" name="hotlink-photo">
          </div>
		</div>
        <?php } ?>
        <a href="#submit-content" class="button primary submit-upc-reply">Post Your Comment</a>
      </form>