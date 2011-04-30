      <section class="solicitation photo hidden">
        <span class="indicator"></span>
        <form action="#something" method="post" class="wall-interaction">
          <header>
			<h1>Got a picture of this gear in action?</h1>
          </header>        
          <?php include("solicitation-add-a-photo.php"); ?>
          <div class="faux-label"><span>Title</span>
            <div class="faux-col">
              <input type="text" name="photo-title" id="photo-title"/>
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