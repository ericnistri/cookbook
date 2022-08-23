<?php
include "classes/recipes.php";
include "classes/render.php";
include "classes/recipecollection.php";
include "inc/recipes.php";

$cookbook = new RecipeCollection("Treehouse Recipes");
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($belgian_waffles);
$cookbook->addRecipe($pepper_casserole);
$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dried_mushroom_ragout);
$cookbook->addRecipe($rabbit_catalan);
$cookbook->addRecipe($grilled_salmon_with_fennel);
$cookbook->addRecipe($pistachio_duck);
$cookbook->addRecipe($chili_pork);
$cookbook->addRecipe($granola);
$cookbook->addRecipe($spicy_omelette);
$cookbook->addRecipe($scones);

$breakfast = new RecipeCollection("favorite breakfast");
foreach ($cookbook->filterByTag("breakfast") as $recipe) {
    $breakfast->addRecipe($recipe);
}

$week1 = new RecipeCollection("Meal Plan: Week 1");
$week1->addRecipe($cookbook->filterById(1));
$week1->addRecipe($cookbook->filterById(2));
$week1->addRecipe($cookbook->filterById(3));
$week1->addRecipe($cookbook->filterById(4));

//echo Render::listRecipes($week1->getRecipeTitles());
echo "\n\nSHOPPING LIST\n\n";
echo Render::listShopping($week1->getCombinedIngerdients());
//var_dump($cookbook);
//echo Render::displayRecipe($cookbook->filterById(1));


    


/*
$recipe1 = new Recipe("my first recipe");
$recipe1->setSource = "Grandma Hollagan";
$recipe1->addIngredient("egg", 1, "oz");
$recipe1->addIngredient("flour", 2, "cup");

$recipe2 = new Recipe("my second recipe");
$recipe2->setSource = "Betty Crocker";

$recipe1->addInstruction("This is my first Instruction");
$recipe1->addInstruction("This is my second Instruction");

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

$recipe1->setYield("6 Servings");

echo $recipe1;

echo new Render();
*/
//echo Render::displayRecipe($belgian_waffles);
//echo Render::displayRecipe($recipe1);