<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <script src>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contact-form');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const name = form.querySelector('#name').value;
                const email = form.querySelector('#email').value;
                const message = form.querySelector('#message').value;

                if (name && email && message) {
                    alert('Thank you for your message! We will get back to you soon.');
                    form.reset();
                } else {
                    alert('Please fill in all fields.');
                }
            });
        });
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            margin: 0;
            padding: 0;
            font-family: 'Pacifico', cursive;

        }

        header {
            background-color: #333;
            color: aqua;
            padding: 10px 0;
            font-family: 'Pacifico', cursive;

        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: aqua;
            text-decoration: none;
            font-size: 18px;
            font-family: 'Pacifico', cursive;

        }

        #contact-us {
            padding: 40px 20px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: aqua;
            font-family: 'Pacifico', cursive;

        }

        .contact-info {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .contact-item {
            width: 48%;
            background-color: aqua;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, rgba(0, 255, 255, 0.249));
            margin-bottom: 20px;
            font-family: 'Pacifico', cursive;

        }

        #map {
            height: 250px;
            border-radius: 8px;
            margin-top: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-family: 'Pacifico', cursive;

        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #dddddd2b;
            border-radius: 4px;
        }

        button {
            background-color: black;
            color: aqua;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: aqua;
            color: #333;
        }

        footer {
            background-color: aqua;
            color: black;
            font-family: 'Pacifico', cursive;

            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </nav>
    </header>

    <section id="contact-us">
        <div class="container">
            <h1>Contact Us</h1>
            <div class="contact-info">
                <div class="contact-item">
                    <h2>Our Address</h2>
                    <p>123 Event Lane<br>Event City, EV 12345</p>
                    <div id="map"></div>
                </div>
                <div class="contact-item">
                    <h2>Get In Touch</h2>
                    <form id="contact-form">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 [Your Company Name]. All rights reserved.</p>
    </footer>


    <script>
        function initMap() {
            var location = {
                lat: 40.7128,
                lng: -74.0060
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
</body>

</html>