<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Game-Go</title>
    <link rel="icon" href=
"images/image.png"
          type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet">
</head>
<body>
   
<header class="header">
    <a href="#" class="Logo"> 
    <img src="images/image.png" alt="Logo"><a class="title" >Game-Go</a>
</a>
        
<nav class="navbar">
    <input type="text" placeholder="Search" class="search-bar">
    <button class="search-btn">Search</button>
    <a class="nav-link" href="#grid-container2">Products</a>
    <a class="nav-link" href="#">Register</a>
    <a class="nav-link" href="#">Contact</a>
    <a class="nav-link" href="#">Your Balance: 0$ </a>
    <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup id="cartButton">0</sup></a>
    
</nav>

        
    </header>
    <nav class="navbar2">
    <a class="nav-link" href="#">Welcome Guest</a>
    <a class="nav-link" href="login.php">Login</a>
</nav>  

    
   
    <div class="Welcome">
        <div class="container">
            <a href="https://www.youtube.com/watch?v=QdBZY2fkU-0">
                <img src="images/gtavi.jpeg" class="main-image" alt="Main Image">
                <div class="play-button"></div>
            </a>
        </div>
        
        
        <a class="first" href="https://www.youtube.com/watch?v=QdBZY2fkU-0"> Click to watch the first trailer for GTA VI</a>
        <p class="second">Step into a realm where gaming reigns supreme and adventures await at every turn. 
            Whether you're seeking thrilling battles, captivating stories, or simply a place to connect with fellow gamers,
             you've come to the right place. Our doors are open wide, ready to welcome you into a community fueled by passion, 
             excitement, and boundless creativity. Get ready to embark on an epic journey through the world of gaming with GameVault 
             as your trusted companion. Let the games begin!</p>

              
    </div>

    <div class="grid-container">


<!-- First game -->
<div class="grid-item" id="game1">
    <img src="images/spider.avif" alt="1st game">
  
    <form>
        <input type="hidden" name="game" value="Spider-Man Miles Morales">
        <input type="hidden" name="price" value="49.99">
        
        <button type="submit" class="button1 addToCart">Add To Cart <i class="fa-solid fa-cart-shopping"></i></button>
    </form>
</div>

<!-- Second Game -->
<div class="grid-item" id="game2">
    <img src="images/cyber.avif" alt="2nd game">
  
        <input type="hidden" name="game" value="Rocket League">
        <input type="hidden" name="price" value="59.99">
        

        
        <button type="submit" class="button1 addToCart" id="cart">Add To Cart <i class="fa-solid fa-cart-shopping"></i></button>
    </form>
</div>

<!-- Third Game -->
<div class="grid-item" id="game3">
    <img src="images/gtav.avif" alt="3rd game">
  
        <input type="hidden" name="game" value="GTA V">
        <input type="hidden" name="price" value="39.99">
        

 
        
        <button type="submit" class="button1 addToCart" id="cart">Add To Cart <i class="fa-solid fa-cart-shopping"></i></button>
    </form>
</div>

<!-- Fourth game -->
<div class="grid-item" id="game4">
    <img src="images/gtavc.avif" alt="4th game">
  
        <input type="hidden" name="game" value="GTA Vice City">
        <input type="hidden" name="price" value="29.99">
        

   
        
        <button type="submit" class="button1 addToCart" id="cart">Add To Cart <i class="fa-solid fa-cart-shopping"></i></button>
    </form>
</div>

<!-- Fifth game -->
<div class="grid-item" id="game5">
    <img src="images/spider.avif" alt="5th game">
  
        <input type="hidden" name="game" value="Spider-Man Miles Morales">
        <input type="hidden" name="price" value="49.99">
        

        
        <button type="submit" class="button1 addToCart" id="cart">Add To Cart <i class="fa-solid fa-cart-shopping"></i></button>
    </form>
</div>

<!-- Sixth game -->
<div class="grid-item" id="game6">
    <img src="images/pubg.avif" alt="6th game">
  
        <input type="hidden" name="game" value="PUBG BATTLEGROUNDS">
        <input type="hidden" name="price" value="29.99">
        

        
        <button type="submit" class="button1 addToCart" id="cart">Add To Cart <i class="fa-solid fa-cart-shopping"></i></button>
    </form>
</div>

<!-- Seventh game -->
<div class="grid-item" id="game7">
    <img src="images/fc.avif" alt="7th game">
  
        <input type="hidden" name="game" value="FC 2024">
        <input type="hidden" name="price" value="49.99">
        

     
        
        <button type="submit" class="button1 addToCart" id="cart">Add To Cart <i class="fa-solid fa-cart-shopping"></i></button>
    </form>
</div>

<!-- Eighth game -->
<div class="grid-item" id="game8">
    <img src="images/rdr.avif" alt="8th game">
  
        <input type="hidden" name="game" value="Read Dead Redemption 2">
        <input type="hidden" name="price" value="59.99">
        

        
        <button type="submit" class="button1 addToCart" id="cart">Add To Cart <i class="fa-solid fa-cart-shopping"></i></button>

</div>

<!-- Ninth game -->
<div class="grid-item" id="game9">
    <img src="images/last.avif" alt="9th game">

        <input type="hidden" name="game" value="Last Remains">
        <input type="hidden" name="price" value="39.99">
        

        
        <button type="submit" class="button1 addToCart" id="cart">Add To Cart <i class="fa-solid fa-cart-shopping"></i></button>

</div>

<!-- Tenth game -->
<div class="grid-item" id="game10">
    <img src="images/drift.avif" alt="10th game">
  
        <input type="hidden" name="game" value="Torque Drift 2">
        <input type="hidden" name="price" value="19.99">
        

 
        
        <button type="submit" class="button1 addToCart" id="cart">Add To Cart <i class="fa-solid fa-cart-shopping"></i></button>
    </form>
</div>

<!-- Eleventh game -->
<div class="grid-item" id="game11">
    <img src="images/lastofus.avif" alt="11th game">
  
        <input type="hidden" name="game" value="THE LAST OF US PART 1">
        <input type="hidden" name="price" value="39.99">
        

        
        <button type="submit" class="button1 addToCart" id="cart">Add To Cart <i class="fa-solid fa-cart-shopping"></i></button>
    </form>
</div>

<!-- Twelfth game -->
<div class="grid-item" id="game12">
    <img src="images/sims4.avif" alt="12th game">
  
        <input type="hidden" name="game" value="The SIMS 4">
        <input type="hidden" name="price" value="49.99">
        

        
        
        <button type="submit" class="button1 addToCart" id="cart">Add To Cart <i class="fa-solid fa-cart-shopping"></i></button>
    </form>
</div>


<!-- Twelfth game -->
<div class="grid-item" id="game12">
    <img src="images/sims4.avif" alt="12th game">
  
        <input type="hidden" name="game" value="The SIMS 4">
        <input type="hidden" name="price" value="49.99">
        

        
        
        <button type="submit" class="button1 addToCart" id="cart">Add To Cart <i class="fa-solid fa-cart-shopping"></i></button>
    </form>
</div>
</div>




</div>
<div class="top-games" >
    <p>Some of the most anticipated and most selling games of 2024</p>
</div>
<div class="grid-container2">

<div class="grid-item2"><img src="images/wolverine.jpg" alt="14nd game"></div>
<div class="grid-item2"><img src="images/mw.jpg" alt="15nd game"></div>
<div class="grid-item2"><img src="images/cs2.jpeg" alt="17nd game"></div>
<div class="grid-item2"><img src="images/apex.jpeg" alt="18nd game"></div>
<div class="grid-item2"><img src="images/war.avif" alt="19nd game"></div>
<div class="grid-item2"><img src="images/dead.jpg" alt="20nd game"></div>


</div>





    <footer class="footer">
    <p>© 2024 Min Prasad Timalsina. All rights reserved.
         Unauthorized use or duplication of this material without express and written permission from the copyright holder is strictly prohibited. 
         Excerpts and links may be used, provided that full and clear credit is given to 
         Min Prasad Timalsina with appropriate and specific direction to the original content.
    </p>
<div class="final-div">
    <div class="social-icons">
        <a href="https://www.linkedin.com/in/min-prasad-timalsina-2846612b9/"> <i class="fab fa-linkedin"></i></a>
        <a href="https://github.com/NabinTim"> <i class="fab fa-github"></i></a>
        <a href="https://www.facebook.com/nabin.timalsina.min/"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/min_timals87277"> <i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/nabintimals1na/"> <i class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCiU7VyhyyUyu_yuEf5CHzow"> <i class="fab fa-youtube"></i></a>
        
        
    </div>
</div>    
</footer>
<script src="index.js"></script>
</body>
</html>
