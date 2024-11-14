<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recipe Haven</title>
    <link rel="stylesheet" href="../assets/recipefeed.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="../assets/images/fav2.png" alt="Recipe Haven Icon">
</head>
<body>
  <section class="hero">
    <nav class="menu">
      <h1 id="logo">Recipe Haven</h1>
      <ul>
        <li><a href="recipefeed.php">Feed</a></li>
      </ul>
      <div>
        <ul id="nav-right-side">
          <li><a href="logIn.php">Log In / Sign Out</a></li>
          <li><a href="recipes.php">Recipes</a></li>
          <li><a href="logIn.html">Account</a></li>
        </ul>
        <!-- Menu Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-baseline-density-small">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 3h16" /><path d="M4 9h16" /><path d="M4 15h16" />
        </svg>
        
      </div>
    </nav>


    <!--Search-->
    <div class="search">
      <input type="text" placeholder="Search...">            
    </div>
    <!--Add new Recipes-->    
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
    </svg>
    

    <!--Recipe Feed Page-->
    <div class="recipe-feed-layout">
      <!--Breakfast Section-->
      <div id="breakfast" class="food-type">
          <h1 class="fname">Breakfast Recipes</h1>
          <div class="scroll-wrapper">            
            <div id="breakfast-scroll" class="scroll-container">
              <div class="Img">
                <img src="../assets/images/Breakfast/Avocado-Toast.jpg" class="images">
                <div class="image-info">Avocado Toast</div>
                <div class="recipe-description">Creamy avocado spread on toasted bread, topped with fresh herbs and a sprinkle of chili flakes.</div>
                <div class="star-rating">Rating: ★★★★☆</div>
            </div>
            <div class="Img">
                <img src="../assets/images/Breakfast/Banana-Oat-Waffles.jpeg" class="images">
                <div class="image-info">Banana Oat Waffles</div>
                <div class="recipe-description">Fluffy waffles made with ripe bananas and oats, perfect for a healthy breakfast.</div>
                <div class="star-rating">Rating: ★★★★★</div>
            </div>
            <div class="Img">
                <img src="../assets/images/Breakfast/Blueberry Pancakes.jpg" class="images">
                <div class="image-info">Blueberry Pancakes</div>
                <div class="recipe-description">Light and fluffy pancakes bursting with fresh blueberries, served with maple syrup.</div>
                <div class="star-rating">Rating: ★★★☆☆</div>
            </div>
            <div class="Img">
                <img src="../assets/images/Breakfast/French Toast with Cranberries and Pecans.jpg" class="images">
                <div class="image-info">French Toast with Cranberries and Pecans</div>
                <div class="recipe-description">Deliciously sweet French toast topped with tart cranberries and crunchy pecans.</div>
                <div class="star-rating">Rating: ★★★★☆</div>
            </div>
            <div class="Img">
                <img src="../assets/images/Breakfast/Healthy_Breakfast_Bowl.jpg" class="images">
                <div class="image-info">Healthy Breakfast Bowl</div>
                <div class="recipe-description">A nourishing bowl filled with yogurt, fresh fruits, granola, and a drizzle of honey.</div>
                <div class="star-rating">Rating: ★★★★★</div>
            </div>
            <div class="Img">
                <img src="../assets/images/Breakfast/Irish_Weekend_Fry-Up.jpeg" class="images">
                <div class="image-info">Irish Weekend Fry-Up</div>
                <div class="recipe-description">A hearty breakfast platter featuring eggs, sausages, bacon, beans, and toast.</div>
                <div class="star-rating">Rating: ★★★★☆</div>
            </div>
            <div class="Img">
                <img src="../assets/images/Breakfast/Omelette.jpeg" class="images">
                <div class="image-info">Omelette</div>
                <div class="recipe-description">A fluffy omelette filled with your choice of cheese, vegetables, and herbs.</div>
                <div class="star-rating">Rating: ★★★★★</div>
            </div>
            <div class="Img">
                <img src="../assets/images/Breakfast/Stuffed-Ham-and-Cheese Croissant Casserole.jpg" class="images">
                <div class="image-info">Stuffed Ham and Cheese Croissant Casserole</div>
                <div class="recipe-description">A savory casserole made with buttery croissants, ham, and melted cheese, baked to perfection.</div>
                <div class="star-rating">Rating: ★★★★☆</div>
            </div>
            
            </div>          
          </div>
      </div>

      <!--Snack Section-->
      <div id="snack" class="food-type">
          <h1 class="fname">Snack Recipes</h1>
          <div class="scroll-wrapper">            
            <div id="snack-scroll" class="scroll-container">
              <div class="Img">
                <img src="../assets/images/Snacks/lamb-kabobs.jpg" class="images">
                <div class="image-info">Lamb Kabobs</div>
                <div class="recipe-description">Grilled lamb skewers with spices and herbs.</div>
                <div class="star-rating">Rating: ★★★★★</div>
              </div>
              <div class="Img">
                <img src="../assets/images/Snacks/pastry.jpg.webp" class="images">
                <div class="image-info">Pastry</div>
                <div class="recipe-description">Flaky pastries filled with sweet or savory fillings.</div>
                <div class="star-rating">Rating: ★★★☆☆</div>
              </div>
              <div class="Img">
                <img src="../assets/images/Snacks/sandwich.jpg" class="images">
                <div class="image-info">Sandwich</div>
                <div class="recipe-description">A hearty sandwich made with fresh ingredients.</div>
                <div class="star-rating">Rating: ★★★★☆</div>
              </div>
              <div class="Img">
                <img src="../assets/images/Snacks/smashed-chickpea-caesar-wrap.jpg" class="images">
                <div class="image-info">Smashed Chickpea Caesar Wrap</div>
                <div class="recipe-description">A vegetarian wrap with smashed chickpeas and Caesar dressing.</div>
                <div class="star-rating">Rating: ★★★★☆</div>
              </div>
              <div class="Img">
                <img src="../assets/images/Snacks/ChickenSamosa.webp" class="images">
                <div class="image-info">Chicken Samosa</div>
                <div class="recipe-description">Crispy samosas filled with spiced chicken.</div>
                <div class="star-rating">Rating: ★★★★★</div>
              </div>
              <div class="Img">
                <img src="../assets/images/Snacks/chocolate_tahini_ice_cream_Pops.webp" class="images">
                <div class="image-info">Chocolate Tahini Pops</div>
                <div class="recipe-description">Frozen treats made with chocolate and tahini.</div>
                <div class="star-rating">Rating: ★★★★☆</div>
              </div>
              <div class="Img">
                <img src="../assets/images/Snacks/Peanut-Butter-Honey-Oatmeal-Cookies.jpg" class="images">
                <div class="image-info">PB and Honey Cookies</div>
                <div class="recipe-description">Soft cookies made with peanut butter and honey.</div>
                <div class="star-rating">Rating: ★★★★☆</div>
              </div>
              <div class="Img">
                <img src="../assets/images/Snacks/Sausage-Balls.jpg" class="images">
                <div class="image-info">Sausage Balls</div>
                <div class="recipe-description">Savory sausage balls that are perfect for snacking.</div>
                <div class="star-rating">Rating: ★★★☆☆</div>
              </div>
            </div>
          </div>
      </div>

      <!--Lunch Section-->
      <div id="lunch" class="food-type">
          <h1 class="fname">Lunch Recipes</h1>
          <div class="scroll-wrapper">
            <div id="lunch-scroll" class="scroll-container">
              <div class="Img">
              <img src="../assets/images/Lunch/Burger.jpeg" class="images">
              <div class="image-info">Burger</div>
              <div class="recipe-description">Juicy beef patty topped with fresh lettuce, tomato, and cheese, served in a toasted bun.</div>
              <div class="star-rating">Rating: ★★★★☆</div>
          </div>
          <div class="Img">
              <img src="../assets/images/Lunch/Noodles.jpg" class="images">
              <div class="image-info">Noodles</div>
              <div class="recipe-description">A savory stir-fry of noodles with vegetables and your choice of protein.</div>
              <div class="star-rating">Rating: ★★★★☆</div>
          </div>
          <div class="Img">
              <img src="../assets/images/Lunch/Pasta-sausage-basil-and-mustard.jpg" class="images">
              <div class="image-info">Pasta with Sausage and Mustard</div>
              <div class="recipe-description">Pasta tossed with spicy sausage, fresh basil, and a hint of mustard for a zesty flavor.</div>
              <div class="star-rating">Rating: ★★★★★</div>
          </div>
          <div class="Img">
              <img src="../assets/images/Lunch/vegetarian-bean-and-rice-burrito.jpeg" class="images">
              <div class="image-info">Vegetarian Bean and Rice Burrito</div>
              <div class="recipe-description">A hearty burrito filled with black beans, rice, and fresh vegetables wrapped in a warm tortilla.</div>
              <div class="star-rating">Rating: ★★★★☆</div>
          </div>
          <div class="Img">
              <img src="../assets/images/Lunch/Ghanaian Chicken Jollof Rice.jpg" class="images">
              <div class="image-info">Chicken Jollof Rice (Ghana)</div>
              <div class="recipe-description">Spicy Ghanaian jollof rice cooked with chicken, tomatoes, and a blend of spices.</div>
              <div class="star-rating">Rating: ★★★★★</div>
          </div>
          <div class="Img">
              <img src="../assets/images/Lunch/Green Mac and Cheese.jpeg" class="images">
              <div class="image-info">Mac and Cheese</div>
              <div class="recipe-description">Creamy mac and cheese with a green twist of spinach and herbs.</div>
              <div class="star-rating">Rating: ★★★★☆</div>
          </div>
          <div class="Img">
              <img src="../assets/images/Lunch/harissa-chicken-and-farro-salad.jpeg" class="images">
              <div class="image-info">Chicken Salad</div>
              <div class="recipe-description">Grilled chicken served on a bed of farro and mixed greens, drizzled with harissa dressing.</div>
              <div class="star-rating">Rating: ★★★★★</div>
          </div>
          <div class="Img">
              <img src="../assets/images/Lunch/one-skillet-cheesy-ground-chicken-pasta.jpg" class="images">
              <div class="image-info">Chicken Pasta</div>
              <div class="recipe-description">A one-skillet dish of cheesy ground chicken pasta with a rich tomato sauce.</div>
              <div class="star-rating">Rating: ★★★★☆</div>
          </div>
            </div>            
          </div>
      </div>

      <!--Dinner Section-->
      <div id="dinner" class="food-type">
          <h1 class="fname">Dinner Recipes</h1>
          <div class="scroll-wrapper">
            <div id="dinner-scroll" class="scroll-container">
              <div class="Img">
                <img src="../assets/images/Dinner/chicken-and-green-beans.jpg" class="images">
                <div class="image-info">Chicken and Green Beans</div>
                <div class="recipe-description">A delicious combination of tender chicken and fresh green beans.</div>
                <div class="star-rating">Rating: ★★★★☆</div>
              </div>
              <div class="Img">
                <img src="../assets/images/Dinner/ratatouille.jpg" class="images">
                <div class="image-info">Ratatouille</div>
                <div class="recipe-description">A classic French dish made with a mix of vegetables.</div>
                <div class="star-rating">Rating: ★★★★★</div>
              </div>
              <div class="Img">
                <img src="../assets/images/Dinner/Rosemary-Paprika Chicken & Fries.jpg" class="images">
                <div class="image-info">Chicken and Fries</div>
                <div class="recipe-description">Crispy fries paired with rosemary and paprika chicken.</div>
                <div class="star-rating">Rating: ★★★☆☆</div>
              </div>
              <div class="Img">
                <img src="../assets/images/Dinner/Pizza.jpg" class="images">
                <div class="image-info">Tomato and Bacon Pizza</div>
                <div class="recipe-description">A savory pizza topped with tomatoes and crispy bacon.</div>
                <div class="star-rating">Rating: ★★★★☆</div>
              </div>
              <div class="Img">
                <img src="../assets/images/Dinner/Cheesy-Skillet-Chicken-Parm-Meatballs.jpeg" class="images">
                <div class="image-info">Chicken Parm Meatballs</div>
                <div class="recipe-description">Tender meatballs covered in marinara sauce and melted cheese.</div>
                <div class="star-rating">Rating: ★★★★★</div>
              </div>
              <div class="Img">
                <img src="../assets/images/Dinner/soppressata-pizza-with-calabrian-chile-hot-honey.jpg" class="images">
                <div class="image-info">Chile Hot Honey Pizza</div>
                <div class="recipe-description">A spicy twist on pizza with hot honey and soppressata.</div>
                <div class="star-rating">Rating: ★★★★☆</div>
              </div>
              <div class="Img">
                <img src="../assets/images/Dinner/baked-chicken-wings.jpg" class="images">
                <div class="image-info">Baked Chicken Wings</div>
                <div class="recipe-description">Crispy baked wings with your choice of sauce.</div>
                <div class="star-rating">Rating: ★★★★★</div>
              </div>
              <div class="Img">
                <img src="../assets/images/Dinner/Chicken-pasta-salad.jpeg" class="images">
                <div class="image-info">Chicken Pasta Salad</div>
                <div class="recipe-description">A refreshing salad with chicken, pasta, and vegetables.</div>
                <div class="star-rating">Rating: ★★★★☆</div>
              </div>
            </div>            
          </div>
      </div>
    </div>
  </section>


</body>
</html>