<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

        body {
            font-family: Arial, sans-serif;
            background-color: aqua;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: aqua;
            font-family: 'Pacifico', cursive;
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
            font-family: 'Pacifico', cursive;
            text-decoration: none;
            font-size: 18px;
        }

        #gallery {
            padding: 40px 20px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #333;
            font-family: 'Pacifico', cursive;
            margin-bottom: 20px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
        }

        .gallery-item {
            overflow: hidden;
            position: relative;
            border-radius: 8px;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
            border-radius: 8px;
        }

        .gallery-item img:hover {
            transform: scale(1.1);
        }

        .lightbox {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 80%;
            margin: 5% auto;
            display: block;
            border-radius: 8px;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 25px;
            color: #fff;
            font-family: 'Pacifico', cursive;
            font-size: 36px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: #bbb;
        }

        footer {
            background-color: #333;
            color: aqua;
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
                <li><a href="index.pHP">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="gallery">
        <div class="container">
            <h1>Gallery</h1>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://cdn.leonardo.ai/users/7ebea4d0-7368-497d-8577-6f5b7416a874/generations/94436e8a-d518-4a13-870f-9fa11e239fa6/Default_A_vibrant_illustration_of_a_concert_venue_at_night_wit_2.jpg?w=512" alt="Image 1">
                </div>
                <div class="gallery-item">
                    <img src="https://th.bing.com/th/id/OIG2.sI4IgBz7bDMEKOXz5hbZ?w=1024&h=1024&rs=1&pid=ImgDetMain" alt="Image 2">
                </div>
                <div class="gallery-item">
                    <img src="https://th.bing.com/th/id/OIG2.yoZYrq3xTeQa0SF9LRjr?pid=ImgGn" alt="Image 3">
                </div>
                <div class="gallery-item">
                    <img src="https://th.bing.com/th/id/OIG3.I7bCDhAxHQc3gnqvxppH?pid=ImgGn" alt="Image 4">
                </div>
                <div class="gallery-item">
                    <img src="https://th.bing.com/th/id/OIG4.4.nZafNrmRLKiocF5wIf?pid=ImgGn" alt="Image 5">
                </div>
                <div class="gallery-item">
                    <img src="https://th.bing.com/th/id/OIG4.zVlFGsWxTYHh1L11v18w?w=1024&h=1024&rs=1&pid=ImgDetMain" alt="Image 6">
                </div>

            </div>
        </div>
    </section>


    <div id="lightbox" class="lightbox">
        <span class="close">&times;</span>
        <img class="lightbox-content" id="lightbox-img">
        <div id="caption"></div>
    </div>

    <footer>
        <p>&copy; 2024 Event360. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const galleryItems = document.querySelectorAll('.gallery-item img');
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const close = document.querySelector('.close');

            galleryItems.forEach(item => {
                item.addEventListener('click', function() {
                    lightbox.style.display = 'block';
                    lightboxImg.src = this.src;
                    lightboxImg.alt = this.alt;
                });
            });

            close.addEventListener('click', function() {
                lightbox.style.display = 'none';
            });

            window.addEventListener('click', function(event) {
                if (event.target === lightbox) {
                    lightbox.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>