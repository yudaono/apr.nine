<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POS Website | Proto 1</title>
        
        <link rel="stylesheet" href="css/app.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    </head>
    <body>

        <!-- navbar -->
        <header>
            <a href="#" class="logo"><img src="/img/Logo_Upnormal.png" alt=""><i class=""></i></a>
            
            <nav class="navbar">
                <a href="#home" class="active">Home</a>
                <a href="#makanan">Makanan</a>
                <a href="/page/chart.html">Pesan</a>
            </nav>

            <div class="icons">
                <i class="fa-solid fa-bars" id="menu-bars"></i>
                <i class="fa-solid fa-magnifying-glass navicon" id="search-icon"></i>
                <a href="/page/chart.html" class="fa-solid fa-cart-shopping navicon"></a>
                <a href="#" class="fa-solid fa-user navicon"></a>
            </div>
        </header>

        <!-- search bar -->
        <form action="" id="search-form">
            <input type="search" placeholder="search here..." name="" id="search-box">
            <label for="search-box" class="fas fa-search"></label>
            <i class="fa-solid fa-xmark" id="search-close"></i>
        </form>

        <div>
            <div>
                <h3>Total Harga</h3>
                <p>Rp. 50.000</p>
            </div>
        </div>

        <!-- hero section -->
        <section class="home" id="home">

            <div class="swiper-container home-slider">

                <div class="swiper-wrapper wrapper">

                    <div class="swiper-slide slide">
                        <div class="content">
                            <span>our special dish</span>
                            <h3>spicy noodles</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                            <a href="/page/chart.html" class="btn">order now</a>
                        </div>
                        <div class="image">
                            <img src="img/home-img-1.png" alt="">
                        </div>
                    </div>
        
                </div>

            </div>
            
        </section>


        <!-- makanan section -->
        <section class="makanan" id="makanan">
            <div class="makanan-populer">
                <h3 class="sub-heading"> Pilihan Makanan </h3>
                <h1 class="heading"> popular dishes </h1>

                <div class="box-container">
                    <div class="box">
                        <img src="img/dish-1.png" alt="">
                        <h3>tasty food</h3>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span>Rp. 50.000</span>
                        <a href="/page/chart.html" class="btn">add to cart</a>
                    </div>
                    <div class="box">
                        <img src="img/dish-2.png" alt="">
                        <h3>tasty food</h3>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span>Rp. 50.000</span>
                        <a href="/page/chart.html" class="btn">add to cart</a>
                    </div>
                    <div class="box">
                        <img src="img/dish-3.png" alt="">
                        <h3>tasty food</h3>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <span>Rp. 50.000</span>
                        <a href="/page/chart.html" class="btn">add to cart</a>
                    </div>
                    <div class="box">
                        <img src="img/dish-4.png" alt="">
                        <h3>tasty food</h3>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <span>Rp. 50.000</span>
                        <a href="/page/chart.html" class="btn">add to cart</a>
                    </div>
                    <div class="box">
                        <img src="img/dish-5.png" alt="">
                        <h3>tasty food</h3>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <span>Rp. 50.000</span>
                        <a href="/page/chart.html" class="btn">add to cart</a>
                    </div>
                    <div class="box">
                        <img src="img/dish-6.png" alt="">
                        <h3>tasty food</h3>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <span>Rp. 50.000</span>
                        <a href="/page/chart.html" class="btn">add to cart</a>
                    </div>
                </div>
            </div>
            
            <div class="makanan-menu">
                <h1 class="sub-menu"> daftar menu </h1>

                <div class="box-container">
                    <div class="box">
                        <div class="image">
                            <img src="img/menu-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h3>delicious food</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                            <span class="price">Rp. 25.000</span>
                            <a href="/page/chart.html" class="btn">add to cart</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="img/menu-2.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h3>delicious food</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                            <span class="price">Rp. 25.000</span>
                            <a href="/page/chart.html" class="btn">add to cart</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="img/menu-3.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h3>delicious food</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                            <span class="price">Rp. 25.000</span>
                            <a href="/page/chart.html" class="btn">add to cart</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="img/menu-4.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h3>delicious food</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                            <span class="price">Rp. 25.000</span>
                            <a href="/page/chart.html" class="btn">add to cart</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="img/menu-5.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>delicious food</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                            <span class="price">Rp. 25.000</span>
                            <a href="/page/chart.html" class="btn">add to cart</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="img/menu-6.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>delicious food</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
                            <span class="price">Rp. 25.000</span>
                            <a href="/page/chart.html" class="btn">add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        <!-- <section class="order" id="order">

            <h3 class="sub-heading"> order now </h3>
            <h1 class="heading"> free and fast </h1>
        
            <form action="">
        
                <div class="inputBox">
                    <div class="input">
                        <span>your name</span>
                        <input type="text" placeholder="enter your name">
                    </div>
                    <div class="input">
                        <span>your number</span>
                        <input type="number" placeholder="enter your number">
                    </div>
                </div>
                <div class="inputBox">
                    <div class="input">
                        <span>your order</span>
                        <input type="text" placeholder="enter food name">
                    </div>
                    <div class="input">
                        <span>additional food</span>
                        <input type="test" placeholder="extra with food">
                    </div>
                </div>
                <div class="inputBox">
                    <div class="input">
                        <span>how musch</span>
                        <input type="number" placeholder="how many orders">
                    </div>
                    <div class="input">
                        <span>date and time</span>
                        <input type="datetime-local">
                    </div>
                </div>
                <div class="inputBox">
                    <div class="input">
                        <span>your address</span>
                        <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="input">
                        <span>your message</span>
                        <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
        
                <input type="submit" value="order now" class="btn">
        
            </form>
        
        </section> -->
        
        <script src="js/main.js"></script>
    </body>
</html>