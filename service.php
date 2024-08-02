<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));


    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all required fields.";
        exit;
    }


    $to = "youremail@example.com";
    $subject = "New Event Planning Inquiry from $name";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your inquiry! We will get back to you soon.";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All-in-One Event Planner Services</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }

        h1,
        h2,
        h3,
        h4 {
            color: black;
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
        }


        .hero-section {
            background: url('https://th.bing.com/th/id/OIG4.GlM33aizfr84G_CeGWXu?w=1024&h=1024&rs=1&pid=ImgDetMain') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 100px 20px;
            position: relative;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .hero-section .container {
            position: relative;
            z-index: 1;
        }

        .hero-section h1 {
            font-size: 48px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }

        .hero-section p {
            font-size: 18px;
            margin-bottom: 40px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);
        }

        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #007bff;
            color: #fff;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }

       
        .services-section {
            background-color: #fff;
            padding: 60px 20px;
            text-align: center;
        }

        .services-section h2 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .service-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .service-card {
            background-color: #f4f4f9;
            border-radius: 8px;
            padding: 30px 20px;
            flex: 1;
            min-width: 250px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-card .icon {
            font-size: 48px;
            color: #007bff;
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .service-card p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .learn-more {
            font-weight: bold;
            color: #333;
            transition: color 0.3s ease;
        }

        .learn-more:hover {
            color: #007bff;
        }


        .features-section {
            background-color: #f4f4f9;
            padding: 60px 20px;
        }

        .features-section h2 {
            font-size: 36px;
            margin-bottom: 40px;
            text-align: center;
        }

        .feature-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .feature-item {
            background-color: #fff;
            border-radius: 8px;
            padding: 30px 20px;
            flex: 1;
            min-width: 250px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
        }

        .feature-item .icon {
            font-size: 48px;
            color: #ff5722;
            margin-bottom: 20px;
        }

        .feature-item h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .feature-item p {
            font-size: 16px;
            margin-bottom: 20px;
        }

      
        .testimonials-section {
            background-color: #fff;
            padding: 60px 20px;
            text-align: center;
        }

        .testimonials-section h2 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .testimonial-slider {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
            position: relative;
        }

        .testimonial-item {
            background-color: #f4f4f9;
            border-radius: 8px;
            padding: 30px 20px;
            flex: 1;
            min-width: 250px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .testimonial-item blockquote {
            font-size: 18px;
            font-style: italic;
            margin-bottom: 15px;
        }

        .client-name {
            font-weight: bold;
            font-size: 16px;
        }

        .contact-section {
            background-color: #f4f4f9;
            padding: 60px 20px;
            text-align: center;
        }

        .contact-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .contact-section p {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .contact-form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .contact-form button.submit-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button.submit-button:hover {
            background-color: #0056b3;
        }


        .footer-section {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .footer-section .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-section .social-media a {
            color: #fff;
            font-size: 20px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .footer-section .social-media a:hover {
            color: #007bff;
        }


        @media screen and (max-width: 768px) {

            .service-cards,
            .feature-items,
            .testimonial-slider {
                flex-direction: column;
                gap: 30px;
            }

            .footer-section .footer-content {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

    <header class="hero-section">
        <div class="container">
            <h1>Your Event, Our Expertise</h1>
            <p>Experience seamless event planning for concerts, weddings, and conferences with unparalleled coordination.</p>
            <a href="#contact" class="cta-button">Get in Touch</a>
        </div>
    </header>


    <section id="services" class="services-section">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-cards">

                <div class="service-card">
                    <div class="icon"><i class="fas fa-music"></i></div>
                    <h3>Concerts</h3>
                    <p>Planning memorable concerts with top-notch artist management and sound engineering.</p>
                    <a href="card.php" class="learn-more">Learn More</a>
                </div>

                <div class="service-card">
                    <div class="icon"><i class="fas fa-heart"></i></div>
                    <h3>Weddings</h3>
                    <p>Designing dream weddings with exquisite venues and personalized themes.</p>
                    <a href="wedding.php" class="learn-more">Learn More</a>
                </div>
              
                <div class="service-card">
                    <div class="icon"><i class="fas fa-briefcase"></i></div>
                    <h3>Conferences</h3>
                    <p>Organizing impactful conferences with seamless logistics and attendee management.</p>
                    <a href="conference.php" class="learn-more">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features-section">
        <div class="container">
            <h2>Why Choose Us?</h2>
            <div class="feature-items">
                <div class="feature-item">
                    <div class="icon"><i class="fas fa-users"></i></div>
                    <h3>Vendor Coordination</h3>
                    <p>We ensure flawless coordination with vendors for a hassle-free experience.</p>
                </div>
                <div class="feature-item">
                    <div class="icon"><i class="fas fa-calendar-check"></i></div>
                    <h3>Attendee Management</h3>
                    <p>Comprehensive solutions for managing attendees efficiently.</p>
                </div>
                <div class="feature-item">
                    <div class="icon"><i class="fas fa-cogs"></i></div>
                    <h3>Customizable Solutions</h3>
                    <p>Tailored solutions to meet unique requirements for each event.</p>
                </div>
                <div class="feature-item">
                    <div class="icon"><i class="fas fa-award"></i></div>
                    <h3>Professional Expertise</h3>
                    <p>Our team consists of experienced professionals dedicated to delivering excellence.</p>
                </div>
            </div>
        </div>
    </section>

   
    <section id="testimonials" class="testimonials-section">
        <div class="container">
            <h2>What Our Clients Say</h2>
            <div class="testimonial-slider">
                <div class="testimonial-item">
                    <blockquote>
                        "The event was a massive success, thanks to the meticulous planning and execution by the team!"
                    </blockquote>
                    <p class="client-name">- John Doe, Music Festival Organizer</p>
                </div>
                <div class="testimonial-item">
                    <blockquote>
                        "Our wedding was just perfect. Every detail was taken care of beautifully. Highly recommended!"
                    </blockquote>
                    <p class="client-name">- Jane Smith, Bride</p>
                </div>
                <div class="testimonial-item">
                    <blockquote>
                        "Efficient and professional service! Our conference went smoothly, and attendees were impressed."
                    </blockquote>
                    <p class="client-name">- Michael Brown, Conference Coordinator</p>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="contact-section">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Ready to plan your next event? Reach out to us today!</p>
            <form action="formm.php" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-button">Send Message</button>
            </form>
        </div>
    </section>

   
    <footer class="footer-section">
        <div class="container">
            <div class="footer-content">
                <p>&copy; 2024 All-in-One Event Planner. All Rights Reserved.</p>
                <div class="social-media">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentIndex = 0;
            const testimonials = document.querySelectorAll('.testimonial-item');
            const totalTestimonials = testimonials.length;

            function showTestimonial(index) {
                testimonials.forEach((item, i) => {
                    item.style.display = i === index ? 'block' : 'none';
                });
            }

            function nextTestimonial() {
                currentIndex = (currentIndex + 1) % totalTestimonials;
                showTestimonial(currentIndex);
            }

            setInterval(nextTestimonial, 5000);
            showTestimonial(currentIndex);
        });
    </script>
</body>

</html>