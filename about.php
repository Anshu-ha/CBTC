<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

        body {

            font-family: 'Pacifico', cursive;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
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
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }

        #about-us {
            padding: 40px 20px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        h1,
        h2 {
            color: #333;
            text-align: center;
        }

        .team {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .team-member {
            width: 45%;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            text-align: center;
        }

        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .mission {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-family: 'Pacifico', cursive;
        }

        footer {
            background-color: #333;
            color: #fff;
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
                <li><a href="#">About Us</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="about-us">
        <div class="container">
            <h1>About Us</h1>
            <p>Welcome to, where we specialize Event360 in planning unforgettable events. From weddings to concerts, conferences, and everything in between, our team is dedicated to making every event a success.</p>

            <div class="team">
                <h2>Meet Our Team</h2>
                <div class="team-member">
                    <img src="https://th.bing.com/th/id/OIG2.s8DaFAz..KGnbqD_r9Q5?pid=ImgGn" alt="Team Member 1">
                    <h3>Elias Hawthorne”</h3>
                    <p> Elias Hawthorne” is the lead event planner with over 10 years of experience in creating spectacular events. Her attention to detail and passion for perfection make her an invaluable part of our team.</p>
                </div>
                <div class="team-member">
                    <img src="https://th.bing.com/th/id/OIG2.mmwrcEs6pD.gP5NVhkvK?pid=ImgGn" alt="Team Member 2">
                    <h3>John Smith</h3>
                    <p>John is our logistics expert, ensuring that everything runs smoothly behind the scenes. His organizational skills and problem-solving abilities are key to our success.</p>
                </div>
             
            </div>

            <div class="mission">
                <h2>Our Mission</h2>
                <p>Our mission is to deliver exceptional event planning services that exceed our clients' expectations. We strive to create memorable experiences through meticulous planning and seamless execution.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Event360. All rights reserved.</p>
    </footer>

</body>

</html>