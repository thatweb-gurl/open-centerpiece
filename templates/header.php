<?php
$name=$_POST['name'];
$visitor_email= $_POST['email'];
$visitor_number= $_POST['number'];
$visitor_arrival=$_POST['date'];
$visitor_departure=$_POST['dates'];

$email_from = "yourname@yourwebsite.com";
$email_subject = "New Booking Submission";
$email_body = "You have recieved a new booking from a visitor $name.\n'.
'Here is the message:\n $visitor_number .<br/> $visitor_arrival .<br/> $visitor_departure.<br/>";

$to = "yourname@yourwebsite.com";
$headers = "From: $email_from\r\n";
$headers = "Reply-To: $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Centerpiece</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>
<body>
    <header>
        <img src="../images/WEB LOGO.png" alt="" class="logo">

        <div id="menu" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#price">price</a>
            <a href="#contact">contact us</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="content">
        <h1 class="headings">welcome</h1>
        <h3>
         <span class="input"></span>
        </h3>
        <a href="#gallery">explore!</a>
        </div>
        
    </section>

    <section class="about" id="about">
        <h3>|| about us</h3>

        <div class="content">
            <div class="image">
                <img src="../images/gallery9.jpg" alt="" width="100%" style="border-radius: 5px;">
            </div>

            <div class="text">
                <h2>we are more than just a club</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quia officiis quos vero quas nostrum, omnis consectetur voluptates neque amet fuga. A, labore. Rem nobis impedit, atque ipsam distinctio ab possimus harum ea aliquid magni quo reiciendis, 
                    blanditiis cupiditate perspiciatis hic esse vitae eligendi quae totam eveniet iusto! Laudantium, alias.
                    quia officiis quos vero quas nostrum, omnis consectetur voluptates neque amet fuga. A, labore. Rem nobis impedit, atque ipsam distinctio ab possimus harum ea aliquid magni quo reiciendis, 
                    blanditiis cupiditate perspiciatis hic esse vitae eligendi quae totam eveniet iusto! Laudantium, </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, iste! <span id="dots">...</span> <span id="contd">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam sunt repudiandae nostrum 
                    maiores placeat aliquid, eligendi tenetur magni neque consectetur nobis unde ipsa rerum sit
                     voluptas ullam, magnam accusamus quo tempore expedita. Laborum earum totam ex quod impedit vitae, 
                     maxime facilis nisi tempore temporibus provident amet. Quae necessitatibus officia fugit ipsa, 
                     veritatis sunt temporibus animi reprehenderit provident ullam facilis eum dicta, omnis minima placeat perspiciatis 
                     minus nobis consequatur. Natus repudiandae voluptatem saepe deleniti voluptates molestias maxime labore ullam omnis 
                     sapiente?

                </span></p>

                <button onclick="myFunction()" id="btn">read more!</button>
                    
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <h3>|| services</h3>
        <h2>our featured services</h2>

        <div class="content">

            <div class="box-content">
                <img src="../images/icon1.png" alt="">
                <div class="text">
                    <h4> food</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa suscipit ratione, 
                        recusandae sint quas dolore quo voluptatem accusantium corporis at dolores alias quasi atque cupiditate.</p>
                </div>
                <a href="#about" class="btn">learn more</a>
            </div>

            <div class="box-content">
                <img src="../images/icon2.png" alt="" class="img2" >
                <div class="text">
                    <h4>accommodation</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa suscipit ratione, 
                        recusandae sint quas dolore quo voluptatem accusantium corporis at dolores alias quasi atque cupiditate.</p>
                </div>
                <a href="#about" class="btn">learn more</a>
            </div>

            <div class="box-content">
                <img src="../images/icon3.png" alt="">
                <div class="text">
                    <h4>tournament</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa suscipit ratione, 
                        recusandae sint quas dolore quo voluptatem accusantium corporis at dolores alias quasi atque cupiditate.</p>
                </div>
                <a href="#about" class="btn">learn more</a>
            </div>

            <div class="box-content">
                <img src="../images/icon4.png" alt="">
                <div class="text">
                    <h4> drinks</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa suscipit ratione, 
                        recusandae sint quas dolore quo voluptatem accusantium corporis at dolores alias quasi atque cupiditate.</p>
                </div>
                <a href="#about" class="btn">learn more</a>
            </div>

            <div class="box-content">
                <img src="../images/icon5.png" alt="">
                <div class="text">
                    <h4>max. security</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa suscipit ratione, 
                        recusandae sint quas dolore quo voluptatem accusantium corporis at dolores alias quasi atque cupiditate.</p>
                </div>
                <a href="#about" class="btn">learn more</a>
            </div>

            <div class="box-content">
                <img src="../images/icon6.png" alt="">
                <div class="text">
                    <h4>after party</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa suscipit ratione, 
                        recusandae sint quas dolore quo voluptatem accusantium corporis at dolores alias quasi atque cupiditate.</p>
                </div>
                <a href="#about" class="btn">learn more</a>
            </div>

        </div>
    </section>

    <section class="gallery" id="gallery">
        <h3>|| gallery</h3>
        <h2>our gallery</h2>

        <div class="content">

        <div class="box-content">
            <img src="../images/gallery1.jpg" alt="">
        </div>

        <div class="box-content">
            <img src="../images/gallery2.jpg" alt="">
        </div>

        <div class="box-content">
            <img src="../images/gallery3.jpg" alt="">
        </div>

        <div class="box-content">
            <img src="../images/gallery4.jpg" alt="">
        </div>

        <div class="box-content">
            <img src="../images/gallery5.jpg" alt="">
        </div>

        <div class="box-content">
            <img src="../images/gallery6.jpg" alt="">
        </div>

        <div class="box-content">
            <img src="../images/gallery7.jpg" alt="">
        </div>

        <div class="box-content">
            <img src="../images/gallery8.jpg" alt="">
        </div>

        <div class="box-content">
            <img src="../images/gallery9.jpg" alt="">
        </div>

        </div>
    </section>

    <section class="price" id="price">
    <h3>|| price</h3>
    <h2>our price table</h2>

    <div class="content">
    <div class="box-content">
        <h2>basic plan</h2>
        <div class="text">
            <h1><span>n</span>10,000</h1>
            <ul>
                <li>food</li>
                <li>drinks</li>
                <li>accommodation</li>
                <li>security</li>
                <li class="light">tournament</li>
                <li class="light">after party</li>
                <li class="light">training</li>
            </ul>
        </div>
        <a href="#contact" class="btn">book now!</a>
    </div>

    <div class="box-content">
        <h2>vvip plan</h2>
        <div class="text">
            <h1><span>n</span>50,000</h1>
            <ul>
                <li>food</li>
                <li>drinks</li>
                <li>accommodation</li>
                <li>security</li>
                <li>tournament</li>
                <li>after party</li>
                <li>training</li>
            </ul>
        </div>
        <a href="#contact" class="btn">book now!</a>
    </div>

    <div class="box-content">
        <h2>vip plan</h2>
        <div class="text">
            <h1><span>n</span>30,000</h1>
            <ul>
                <li>food</li>
                <li>drinks</li>
                <li>accommodation</li>
                <li>security</li>
                <li>tournament</li>
                <li class="light">after party</li>
                <li class="light">training</li>
            </ul>
        </div>
        <a href="#contact" class="btn">book now!</a>
    </div>
    </div>
    </section>

    <!-- reviews -->

    <section class="review">
    <h3>|| reviews</h3>
        <h2>what our clients say</h2>
        <div class="content">

    <div class="box-content">
    <img src="../images/avatar5.jpg" alt="">
    <div class="text">
        <h4> lisa daysha</h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa suscipit ratione, 
            recusandae sint quas dolore quo voluptatem accusantium corporis at dolores alias quasi atque cupiditate.</p>
    </div>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
    </div>

    <div class="box-content">
    <img src="../images/avatar2.jpg" alt="">
    <div class="text">
        <h4> mika jones</h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa suscipit ratione, 
            recusandae sint quas dolore quo voluptatem accusantium corporis at dolores alias quasi atque cupiditate.</p>
    </div>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
    </div>

    <div class="box-content">
    <img src="../images/avatar4.jpg" alt="">
    <div class="text">
        <h4> minah abdul</h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa suscipit ratione, 
            recusandae sint quas dolore quo voluptatem accusantium corporis at dolores alias quasi atque cupiditate.</p>
    </div>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
    </div>
        
    </section>

    <!-- contact -->
    <section class="contact" id="contact">
    <h3>|| contact us</h3>
        <h2>book us now!</h2>
        <div class="contain">

        <form action="header.php" name="emailform" method="POST">
            <label for="">Name:</label>
            <input type="text" name="name" placeholder="enter your name" required>
            <label for="">Email:</label>
            <input type="email" name="email" id="" placeholder="enter your email" required>
            <label for="">Phone Number:</label>
            <input type="tel" name="number"  id="" placeholder="enter phone number" required>
            <label for="">Arrival Date:</label>
            <input type="date" name="date"  id="">
            <label for="">Departure Date:</label>
            <input type="date" name="dates"  id="">
            <button class="btn">Book Now!</button>
            
        </form>
        </div>
    </section>

    <footer>
        <div class="logo">
        <img src="../images/WEB LOGO.png" alt="" class="logo">
        <div class="links">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
        </div>
        </div>

        <div class="quick-links">
            <h1>quick links</h1>
            <div class="linked">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#price">price</a>
            <a href="#contact">contact us</a>
            </div>
        </div>

        <div class="box">
                    <h3>contact info</h3>
                    <div class="adr">
                    <p><i class="fas fa-map"></i> ajah, lagos, nigeria </p>
                    <p><i class="fas fa-phone"></i>+234-90-318-685-57</p>
                    <p><i class="fas fa-envelope"></i>opencenterpiece@gmail.com</p>
                    <p><i class="fas fa-clock"></i>9:00am - 6:00pm</p>
                </div>
            </div>

        
    </footer>
    
    <div class="copyright">
            <h1>Website Developed By &copy;Bluface || 2022.</h1>
        </div>
        
     










    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".input", {
            strings:["to open centerpiece", "to a place for couples to enjoy vollyball.", "to a place for couples to have fun and party while enjoying vollyball."],
            typeSpeed: 120,
            backSpeed: 110,
            loop:true,
            backDelay:400,
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>