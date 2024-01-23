<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <script src="js\details.js"></script>
    <title>Details</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container\header.php';
    ?>

    <!--Details-->
    <section class="detail" id="detail">
        <div class="heading">
            <span>Details</span>
            <h1>2017 Honda Civic</h1>
        </div>  
        <div class="detail-container">
            <div class="detail-imgs">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <!-- <div class="numbertext">1 / 3</div> -->
                        <img src="images\about.png" style="width:100%">
                        <!-- <div class="text">London, Ebgland</div> -->
                    </div>
                    <div class="mySlides fade">
                        <!-- <div class="numbertext">2 / 3</div> -->
                        <img src="images\image-2.jpg" style="width:100%">
                        <!-- <div class="text">Sunset in Romania</div> -->
                    </div>
                    <div class="mySlides fade">
                        <!-- <div class="numbertext">3 / 3</div> -->
                        <img src="images\image-3.jpg" style="width:100%">
                        <!-- <div class="text">New York, USA</div> -->
                    </div>
                    <a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-caret-left"></i></a>
                    <a class="next" onclick="plusSlides(1)"><i class="fa-solid fa-caret-right"></i></a>
                </div>
                    <!-- <br> -->
                    <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    </div>`
            </div>

            <script>
                var slideIndex = 1;
                showSlides(slideIndex);
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }
                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }
                function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    if(n > slides.length) {
                    slideIndex = 1
                    }
                    if(n < 1) {
                    slideIndex = slides.length
                    }
                    for(i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                    }
                    for(i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                }
            </script>

            <div class="detail-text">
                <p>2017 Honda Civic</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consequatur totam, aperiam, quibusdam dicta iusto, consectetur beatae officiis molestias magnam eos. Quibusdam minima dicta possimus, tempore molestias sequi animi voluptate corporis consectetur, amet, veritatis aliquid praesentium laboriosam harum. Qui, numquam.</p>
                <p>2017 Honda Civic</p>
                <p>2017 Honda Civic</p>
                <p>2017 Honda Civic</p>
                <p>2017 Honda Civic</p>
                <p>2017 Honda Civic</p>
                <p>2017 Honda Civic</p>
                <p>2017 Honda Civic</p>
                <p>2017 Honda Civic</p>
                <p>2017 Honda Civic</p>
                <p>2017 Honda Civic</p>
                <a href="#" class="btn">Rent Now</a>
            </div>
        </div> 
    </section>

    <?php
        include 'container\footer.php';
    ?>
</body>
</html>