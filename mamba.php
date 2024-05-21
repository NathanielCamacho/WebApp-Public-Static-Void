<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link rel="stylesheet" href="products.css">
    <script src="https://kit.fontawesome.com/43b9de10c9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almendra+SC&family=Bangers&family=Cinzel+Decorative:wght@400;700;900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Quintessential&family=Satisfy&family=Sedan:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>
    <form action="checkout.php" method="post">
    <div class="header">
        <div class="navbar">
            <a href="homepage.php">
                <img src="krooked product/white_logo.png" class="logo">
            </a>
            <div class="logo_name">The Krooked</div>
            <nav>   
                <ul>
                    <li><a href="loginpage.php" class="profile"><i class="fa-regular fa-user fa-xl"></i></a></li>
                    <li><a href="shopnow.php" class="cart"><i class="fa-solid fa-cart-shopping fa-xl"></i></a></li>
                    <li><a href="" class="about"><i class="fa-regular fa-address-card fa-xl"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="product">
        <img src="krooked product/mamba.png" alt="lebron">
        <div class="product_container">
            <div class="description">Mamba</div> 
            <input type="hidden" name="price" value="500">
            <div class="price">₱500.00</div>
            <hr>
            <div class="container">
               
                    <label>
                        <input type="radio" name="color" value="Black" checked="">
                        <span>Black</span>
                    </label>
                
            </div>    
            <br>
            Size
            <br>
            <div class="container">
              
                    <label>
                        <input type="radio" name="size" value="Small" checked="">
                        <span>Small</span>
                    </label>
                    <label>
                        <input type="radio" name="size" value="Medium">
                        <span>Medium</span>
                    </label>
                    <label>
                        <input type="radio" name="size" value="Large">
                        <span>Large</span>
                    </label>
                
            </div>
            
            <br>Quantity: <br>
            <div class="qty-input">
                <div class="number-left" data-content="-" onclick="decreaseQty()"></div>
                <div class="qty">
                    <input class="product-qty" type="number" name="qty" min="1" max="10" value="1">
                </div>
                <div class="number-right" data-content="+" onclick="increaseQty()"></div>
            </div>
            <br>
            <div class="submit">
                <button class="Btn">
                    <input type="hidden" name="product" value="Mamba">
                    
                    <span class="text">Add To Cart</span>
                        <span class="svgIcon">
                        <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </div>



    <hr>
    <div class="background">
        <div class="text3">You may Also Like: </div>

        <div class="products">
          <div class="wrapper">
            <div class="parent">
                <div class="child bg-7">
                    <a href="gamble.php">
                  <img src="krooked product/gamble.png" >
                </a>
              </div>
            </div>
          </div>
          <div class="description">Dali doll - ₱500.00</div>
        </div>

        <div class="products">
          <div class="wrapper">
            <div class="parent">
              <div class="child bg-6">
                <a href="cypunk.php">
                  <img src="krooked product/cypunk.png">
                </a>
              </div>
            </div>
          </div>
          <div class="description">Magatta - ₱500.00</div>
        </div>
      
        <div class="products">
            <div class="wrapper">
                <div class="parent">
                  <div class="child bg-5">
                    <a href="tommy.php">
                        <img src="krooked product/tommy.png" >
                    </a>
                </div>
            </div>
            <div class="description">Felix - ₱500.00</div>
        </div>
    </div>   

   



    <div class="footer">
        <div class="col-1">
            <h3>CONTACTS</h3>
            <div class="social-icons">
                <a href="https://www.facebook.com/thekrkdclothing" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.tiktok.com/@thekrooked/video/7276065830222318854" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                <a href="https://www.instagram.com/thekrkdclothing/" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
        </div>
        <div class="col-3">
            <h3>@Bart Ceria</h3>
        </div>
    </div>
    </form>
    <script src="script.js"></script>
</body>
</html>