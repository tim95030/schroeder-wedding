<?php echo $header; ?>
<h1>Recipe</h1>
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <span><?php echo $recipe['title']; ?></span>
  </div>
</div>
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <h3>Ingredients</h3>
    <p><?php echo $recipe['ingredients']; ?></p>
  </div>
</div>
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <h3>Directions</h3>
    <p><?php echo $recipe['directions']; ?></p>
  </div>
</div>
<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <h3>Notes</h3>
    <p><?php echo $recipe['notes']; ?></p>
  </div>
</div>
<div class="row">
  <div class="col-md-5 col-md-offset-1">
    <span>Original Author: <?php echo $recipe['owner']; ?></span>
  </div>
  <div class="col-md-5 col-md-offset-1">
    <span>Submitter: <?php echo $recipe['submitter']; ?></span>
  </div>
</div>

<?php echo $footer; ?>