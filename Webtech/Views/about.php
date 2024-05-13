<?php

include '../Models/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


   <link rel="stylesheet" href="../css/style.css">

</head>
<body>
   
<?php include '../Models/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="../images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>GameStop has been founded on 1 May 2024. From then to now, GameStop has won the heart of many people and now is a country-wide renowned brand. That has been possible due to the hard work GameStop has done to satisfy its customers. Having the aim to satisfy customers, providing customers with their required products, and being true to their motto, “Customers Come First,” has brought GameStop to the top choice for E-Commerce Sites in Bangladesh and is recognized as one of the best Computer and Tech retailer. GameStop has over 100 employees and is growing more and more, working diligently to fulfill the Main Criteria of GameStop’s Motto or Vision. GameStop is located in 2 Central territories in Dhaka. GameStop has a total of 3 Physical outlets all over the country; selling genuine Tech products. Among them, 2 outlets are in Dhaka as it’s the capital city.GameStop also has one branch in Mymensingh.Apart from the Physical Branches, We also have our successful E-Commerce website.

</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="../images/1.jpg" alt="">
         <p>I've shopped at many online stores, but this site really stands out. The product selection is top-notch, and everything I've ordered has been exactly as described. Shipping was faster than expected, too. Definitely will be coming back!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sowad</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="../images/2.jpg" alt="">
         <p>Great experience overall with this website. The user interface is clean and easy to navigate, making shopping a breeze. I took off one star because the customer service response was a bit slower than I would have liked, but they were helpful once they replied.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kabir</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="../images/3.jpg" alt="">
         <p>Absolutely impressed by the quality of customer service here! I had an issue with my order and it was resolved quicker than I've experienced anywhere else. This site has won my trust and my future business.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Dipta</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="../images/4.jpg" alt="">
         <p>I love the eco-friendly products available on this website. It's so important to support businesses that prioritize sustainability. Everything from the packaging to the products themselves is carefully chosen to minimize environmental impact.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jisun</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="../images/5.jpg" alt="">
         <p>This website is a game-changer for me. The detailed product descriptions and clear images make it easy to shop with confidence. I've made several purchases and each item was just as good, if not better than expected!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Fahad</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="../images/6.jpg" alt="">
         <p>The selection and prices are good, but the website could really use some work on the search functionality. It was hard to find what I was looking for. That said, once I found it, the checkout process was smooth and the product quality great!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tonmoy</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<?php include '../Models/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="../js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>