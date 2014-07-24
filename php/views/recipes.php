<?php echo $header; ?>
<h1>Recipes</h1>
<br/>
<p>Help us build a family cookbook with recipes you love, that you share with your family and that have any special significance to you. If there is a significance to the recipe, please include any accompanying stories in the "notes" section below. After the wedding, we will be binding the recipes into a wedding cookbook for us to enjoy for the rest of our lives. Thank you so much for sharing with us!</p>
<br/>
<form name="recipes" method="post" action="recipes/add" role="form">
  <div class="form-group">
    <label for="title">Title</label>
    <input required type="text" class="form-control" name="title" id="title" placeholder="Enter Recipe Title" />
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" id="description" placeholder="Enter Recipe Description" />
  </div>
  <div class="form-group">
    <label for="ingredients">Ingredients</label>
    <textarea required name="ingredients" id="ingredients" rows="4" class="form-control" placeholder="Enter Ingredients"></textarea>
  </div>
  <div class="form-group">
    <label for="directions">Directions</label>
    <textarea required name="directions" id="directions" rows="4" class="form-control" placeholder="Enter Recipe Directions"></textarea>
  </div>
  <div class="form-group">
    <label for="notes">Notes</label>
    <textarea name="notes" id="notes" rows="2" class="form-control" placeholder="Enter any optional notes"></textarea>
  </div>
  <div class="form-group col-md-5">
    <label for="owner">Original Recipe Author</label>
    <input type="text" class="form-control" name="owner" id="owner" placeholder="Enter the original author of the recipe if known" />
  </div>
  <div class="form-group col-md-5 col-md-offset-2">
    <label for="submitter">Submitter</label>
    <input required type="text" class="form-control" name="submitter" id="submitter" placeholder="Enter your name" />
  </div>
  <div class="form-group col-md-4 col-md-offset-4">
    <input type="submit" name="submit" class="btn" value="Submit Recipe" />
  </div>
</form>

<?php echo $footer; ?>