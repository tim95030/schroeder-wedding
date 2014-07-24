<?php echo $header; ?>
<h1>Recipe</h1>
<br/>
<p>Help us build a family cookbook with recipes you love, that you share with your family and that have any special significance to you. If there is a significance to the recipe, please include any accompanying stories in the "notes" section below. After the wedding, we will be binding the recipes into a wedding cookbook for us to enjoy for the rest of our lives. Thank you so much for sharing with us!</p>
<br/>
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