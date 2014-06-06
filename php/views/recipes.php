<?php echo $header; ?>
<h1>Recipes</h1>

<form type="POST" action="recipes/add" role="form">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Enter Recipe Title" />
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" placeholder="Enter Recipe Description" />
  </div>
  <div class="form-group">
    <label for="ingredients">Ingredients</label>
    <textarea id="ingredients" rows="4" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="directions">Directions</label>
    <textarea id="directions" rows="4" class="form-controle"></textarea>
  </div>
  <div class="form-group">
    <label for="notes">Notes</label>
    <textarea id="notes" rows="2" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="owner">Original Recipe Author</label>
    <input type="text" class="form-control" id="owner" placeholder="Enter the original author of the recipe if known" />
  </div>
  <div class="form-group">
    <label for="submitter">Submitter</label>
    <input type="text" class="form-control" id="submitter" placeholder="Enter your name" />
  </div>
</form>

<?php echo $footer; ?>