<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <title>About Us</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container\header.php';
    ?>
    
    <!--About-->
    <section class="about" id="about">
        <div class="heading">
            <span>About Us</span>
            <h1>"The world is a book, and those who do not travel read only one page."</h1>
        </div>  
        <div class="about-container">
            <div class="about-img">
                <img src="images\about-img.png" alt="">
                <!-- <img src="/home/linuxkali/Documents/My-VSCode/Vehicle-Rental-System-2/images/pngwing.com.png" alt=""> -->
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>Welcome to Saadan, your trusted destination for convenient and reliable vehicle rentals. At Saadan, we strive to make your rental experience seamless, whether you're traveling for business or leisure, moving goods, or simply exploring new destinations.</p>

                <div class="hidden-about-text" id="hidden-about-text-id">
                    <span>Our Mission</span>
                    <p>Our mission at Saadan is to provide our customers with access to a diverse fleet of vehicles, exceptional customer service, and transparent pricing. We aim to exceed your expectations by offering flexible rental options, convenient booking processes, and a commitment to your satisfaction.</p>

                    <span>What Sets Us Apart</span><br>
                    <span class="aboutus-topics">Diverse Fleet: </span>
                    From compact cars to spacious SUVs, trucks, vans, and specialty vehicles, we offer a wide range of options to suit your needs and preferences. <br>

                    <span class="aboutus-topics">Convenient Booking: </span>
                    With our user-friendly online platform, you can easily browse available vehicles, compare prices, and make reservations from the comfort of your home or office. <br>

                    <span class="aboutus-topics">Transparent Pricing: </span>
                    We believe in transparency and strive to provide upfront pricing with no hidden fees, ensuring that you know exactly what to expect before confirming your reservation. <br>

                    <span class="aboutus-topics">Exceptional Service: </span>
                    Our dedicated team is here to assist you every step of the way, from helping you choose the right vehicle to providing support throughout your rental period. <br>

                    <span class="aboutus-topics">Flexibility: </span>
                    Whether you need a vehicle for a few hours, a day, a week, or longer, we offer flexible rental periods to accommodate your schedule. <br><br>

                    <span>Our Commitment to You</span>
                    <p>At Saadan, we are committed to delivering a superior rental experience built on reliability, integrity, and trust. Your satisfaction is our top priority, and we continually strive to enhance our services to meet your evolving needs.</p>

                    <p>Thank you for choosing Saadan for your rental needs. We look forward to serving you and helping you make the most of your next journey.</p>
                </div>
                
                <!-- <a href="#" class="btn">Learn More</a> -->
                <button class="btn" id="showButton">Learn More</button>
            </div>
        </div> 
    </section>

        <div class="heading">
            <h1>FAQs</h1>
        </div>  
        <div class="faq-container">
            <div class="faq-text">
                <h3>1. How do I make a reservation?</h3>
                <p>- Typically, you can make a reservation through the online platform by selecting the desired vehicle, specifying the rental dates, and providing necessary personal and payment information.</p>

                <h3>2. What types of vehicles are available for rent?</h3>
                <p>- Online vehicle renting systems often offer a variety of vehicle types, including cars, trucks, vans, SUVs, motorcycles, and sometimes specialty vehicles like RVs or luxury cars.</p>

                <h3>3. Can I choose a specific vehicle model or make a special request?</h3>
                <p>- Some online rental platforms allow you to select a specific make or model, while others offer categories (e.g., economy, compact, luxury) from which you can choose. Special requests may be accommodated depending on availability and the rental company's policies.</p>
                
                <h3>4. Do I need to return the vehicle with a full tank of gas?</h3>
                <p>- Most rental agreements require you to return the vehicle with the same level of fuel as when you received it. Failure to do so may result in additional charges.</p>

                <h3>5. What are the rental rates and payment options?</h3>
                <p>- FAQs typically address pricing structures, including daily or hourly rates, insurance coverage options, additional fees (e.g., for extra mileage or fuel), and accepted payment methods (e.g., credit/debit cards, cash, online payment).</p>

                <h3>6. What happens if the vehicle breaks down or I encounter an issue during the rental period?</h3>
                <p>- FAQs often address procedures for roadside assistance, reporting maintenance issues, and resolving disputes or concerns during the rental period.</p>

            </div>
        </div> 

        <script>
            const showButton = document.getElementById('showButton');
            const hiddenText = document.getElementById('hidden-about-text-id');

            showButton.addEventListener('click', function() {
                if (hiddenText.style.display === 'none') {
                    hiddenText.style.display = 'block';
                } else {
                    hiddenText.style.display = 'block';
                    showButton.style.display = 'none';
                }
            });
        </script>


    <?php
        include 'container\footer.php';
    ?>
</body>
</html>

