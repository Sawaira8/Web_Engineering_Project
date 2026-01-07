<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Quran Store & Learning Portal</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- ================= HEADER ================= -->
<header class="header">

    <input type="checkbox" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo"><span>Online </span><span>Quran Store </span> <span>& Learning </span> <span>Portal <span></a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#features">Features</a>
        <a href="#products">Qurans</a>
        <a href="#review">Reviews</a>
        <a href="#contact">Contact</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user"></a>
    </div>

</header>

<!-- ================= HOME ================= -->
<section class="home" id="home">
    <div class="content">
        <h3>Holy Quran</h3>
        <span>Color-Coded • Tajweed • Translation</span>
        <p>Learn, read and order authentic Qurans with tajweed rules and translations.</p>
        <a href="#products" class="btn">Shop Now</a>
    </div>
</section>

<!-- ================= ICON FEATURES ================= -->
<section class="icons-container" id="features">

    <div class="icons">
        <i class="fas fa-truck"></i>
        <div class="info">
            <h3>Free Delivery</h3>
            <span>On all Quran orders</span>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-rotate-left"></i>
        <div class="info">
            <h3>Easy Returns</h3>
            <span>7 days guarantee</span>
        </div>
    </div>

    <div class="icons">
       <i class="fas fa-shield-halved"></i>
        <div class="info">
            <h3>Authentic Prints</h3>
            <span>Verified by scholars</span>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="info">
            <h3>Secure Payment</h3>
            <span>100% safe</span>
        </div>
    </div>

</section>

<!-- ================= PRODUCTS ================= -->
<section class="products" id="products">

    <h1 class="heading"> Our <span>Qurans</span> </h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="images/Quran 3.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Add to Cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Color Coded Quran</h3>
                <div class="price">Rs. 2500 <span>Rs. 3000</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="images/Quran 1.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Add to Cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Tajweed Quran</h3>
                <div class="price">Rs. 2200 <span>Rs. 2500</span></div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="images/Quran 2.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">Add to Cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Tranlational Quran</h3>
                <div class="price">Rs. 2200 <span>Rs. 2500</span></div>
            </div>
        </div>

    </div>

</section>

<!-- ================= REVIEWS ================= -->
<section class="review" id="review">

    <h1 class="heading"> Student <span>Reviews</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Very clear printing and helpful for learning tajweed.</p>
            <div class="user">
                <img src="images/pic-1.png" alt="">
                <div class="user-info">
                    <h3>Ayesha</h3>
                    <span>Quran Student</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

    </div>

</section>

<!-- ================= CONTACT ================= -->
<section class="contact" id="contact">

    <h1 class="heading"> <span>Contact</span> Us </h1>

    <div class="row">

        <form>
            <input type="text" placeholder="Your Name" class="box">
            <input type="email" placeholder="Your Email" class="box">
            <input type="number" placeholder="Phone Number" class="box">
            <textarea placeholder="Message" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

    </div>

</section>

<!-- ================= FOOTER ================= -->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="#home">Home</a>
            <a href="#products">Qurans</a>
            <a href="#review">Reviews</a>
            <a href="#contact">Contact</a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#">+92 300 1234567</a>
            <a href="#">quranstore@gmail.com</a>
            <a href="#">Pakistan</a>
            <img src="images/payment.png" alt="">
        </div>

    </div>
<a href="admin.html">Admin panel</a>
</section>
<script src="script.js"></script>
</body>
</html>