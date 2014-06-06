<?php

require_once 'utils.php';

Flight::route('/recipes', function() {
  render_page("recipes", "Tim and Genni's Wedding Recipe Book");
});

Flight::route('POST /recipes/add', function() {
  $db = Flight::db();

  //insert into database with a prepared statement
  $stmt = $db->prepare('INSERT INTO recipes (title,description,ingredients,directions,notes,image,owner, submitter) VALUES (:title, :description, :ingredients, :directions, :notes, :image, :owner, :submitter)');
  $stmt->execute(array(
    ':title' => Flight::request()->data->title,
    ':description' => Flight::request()->data->description,
    ':ingredients' => Flight::request()->data->ingredients,
    ':directions' => Flight::request()->data->directions,
    ':notes' => Flight::request()->data->notes, 
    ':image' => Flight::request()->data->image,
    ':owner' => Flight::request()->data->owner,
    ':submitter' => Flight::request()->data->submitter
  ));
  $id = $db->lastInsertId('recipeID');
  render_page("thankyou", "Thank You for Submitting your Recipe!");

});

// Flight::route('/recipe/@id', function($id) {
//   $db = Flight::db();
//   $stmt = $db->prepare('SELECT * FROM recipes where recipeID = :id');
//   $stmt->execute(array(':id' => $id));
//   if ($stmt->rowCount() < 1) {
//     Flight::notFound();
//   }
//   $recipe = $stmt->fetch();
//   render_page("recipe", "Tim and Genni's Wedding Recipe Book - Recipe " . $id, array('recipe' => $recipe));
// });


?>