<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>welcome to Event360</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;

    }



    .nav-item {
      width: max-content;

      position: relative;
      cursor: pointer;
      font-family: 'Pacifico', cursive;

    }

    .nav-item::after {
      content: "";
      position: absolute;
      bottom: -5px;
      height: 4px;
      width: 100%;
      left: 0;
      background-color: aqua;
      transition: 0.3s;
      transition-timing-function: ease-in-out;
      transform: scaleX(0);
    }

    .nav-item:hover::after {
      transform: scaleX(1);
    }

    .container-fluid {


      font-family: 'Pacifico', cursive;
    }


    .loader {
      display: flex;
      font-size: 48px;
      color: aqua;
      font-family: 'Pacifico', cursive;
    }

    .loader span {
      opacity: 0;
      animation: fadeInOut 2.5s ease-in-out infinite;
    }


    .loader span:nth-child(2) {
      animation-delay: 0.1s;
    }

    .loader span:nth-child(3) {
      animation-delay: 0.2s;
    }

    .loader span:nth-child(4) {
      animation-delay: 0.3s;
    }

    .loader span:nth-child(5) {
      animation-delay: 0.4s;
    }

    .loader span:nth-child(6) {
      animation-delay: 0.5s;
    }

    .loader span:nth-child(7) {
      animation-delay: 0.6s;
    }

    .loader span:nth-child(8) {
      animation-delay: 0.7s;
    }

    .loader span:nth-child(9) {
      animation-delay: 0.8s;
    }

    @keyframes fadeInOut {

      0%,
      100% {
        opacity: 0;
        transform: translateY(10px);
      }

      50% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .loaded {
      display: block !important;
    }

    .social_media {
      display: flex;
      justify-content: space-between;
      width: 150px;
      height: 40px;
      background-color: black;
    }

    .social_media a {
      display: inline-flex;
      justify-content: center;
      width: 40px;
      height: 40px;
      background: transparent;
      border: 2px solid transparent;
      text-decoration: none;
      transform: rotate(45deg);
      transition: 5s;
    }

    .social_media a:hover {
      background-color: aqua;
    }

    .social_media a i {
      font-size: 24px;
      color: aqua;
      transform: rotate(-45deg);
    }

    .nice {
      width: max-content;
      border: 2px solid transparent;
      position: relative;
      cursor: pointer;
      font-family: 'Pacifico', cursive;
      color: black;
      background-color: aqua;
      align-items: center;
    }

    body {
      background-image: url("https://th.bing.com/th/id/OIG4.BTP287hPGu2vYXNOnitp?pid=ImgGn");
      margin: 0;
      padding: 0;
      overflow: hidden;

    }

    .animated-background {
      background-image: url('https://th.bing.com/th/id/OIG4.BTP287hPGu2vYXNOnitp?pid=ImgGn');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      width: 100%;
      height: 100vh;
      animation: scrollBackground 20s linear infinite;
    }

    @keyframes scrollBackground {
      0% {
        background-position: center top;
      }

      100% {
        background-position: center bottom;
      }
    }




    .content {
      color: white;

      font-size: 16px;
      font-weight: bold;
      color: white;
      animation: text 3s ease-in-out;
    }

    .content h1 {


      font-size: 64px;
      color: white;
      margin: 0;

      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
      text-align: center;
      font-family: 'Pacifico', cursive;
    }


    @keyframes text {
      0% {
        opacity: 0;
        transform: scale(0.8);
      }

      100% {
        opacity: 1;
        transform: scale(1);
      }
    }

    .image-gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 20px;
      max-width: 1200px;
      margin: 0 auto;

    }

    .image-gallery img {
      width: 200px;
      height: 150px;
      object-fit: cover;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      animation: zoomIn 2s ease-in-out;

    }

    @keyframes zoomIn {
      0% {
        opacity: 0;
        transform: scale(0);
      }

      100% {
        opacity: 1;
        transform: scale(1);
      }
    }

    .explore-button {
      display: inline-block;
      padding: 15px 40px;
      font-size: 18px;
      color: aqua;
      background-color: red;
      border: none;
      border-radius: 30px;
      text-align: center;
      text-decoration: none;
      position: relative;
      overflow: hidden;
      transition: background-color 0.3s, box-shadow 0.3s;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .explore-button:hover {
      background-color: palevioletred;

      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }

    .explore-button:before {
      content: '-';
      position: absolute;
      top: 50%;
      right: 20px;
      transform: translateY(-50%);
      font-size: 24px;
      transition: right 0.3s;
    }

    .explore-button:hover:before {
      right: 10px;
    }

    .explore-button:active {
      transform: translateY(1px);
    }
  </style>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">




      <div class="container-fluid">
        <a class="navbar-brand" href="#"> </a>
        <div class="loader">
          <span>E</span>
          <span>v</span>
          <span>e</span>
          <span>n</span>
          <span>t</span>
          <span>3</span>
          <span>6</span>
          <span>0</span>
        </div>





        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>





        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php"> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php"> Services

              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php"> Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="review.php"> Review</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"> contact </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php"> profile </a>
            </li>
          </ul>
          <div class="social_media">

            <a href="#"><i class=" bx bxl-twitter"></i></a>
            <a href="www.instagram.login.com"><i class=" bx bxl-instagram-alt"></i></a>
            <a href="#"><i class=" bx bxl-facebook"></i></a>
            <a href="#"><i class=" bx bxl-google"></i></a>

          </div>

        </div>
      </div>
    </nav>

    <section id="home">

      <div class="animated-background">
        <div class="content">
          <h1> “Where Moments Become Memories”</h1>
          <p>
            This line suggests that Event360 creates experiences that linger in people’s hearts long after the event is over. It’s all about turning ordinary moments into extraordinary memories.</p>
        </div>






        <div class="image-gallery">
          <img src="https://th.bing.com/th/id/OIG4.EMx9bFlwcB9vS04p2PZK?w=1024&h=1024&rs=1&pid=ImgDetMain" alt="Image 1">
          <img src="https://th.bing.com/th/id/OIG1.Y_hM95Tzcsob4yzwRYin?pid=ImgGn" alt="Image 2">
          <img src="https://th.bing.com/th/id/OIG1.kv8zAR.WvEKlzVjSb9_v?pid=ImgGn" alt="Image 3">
          <img src="https://th.bing.com/th/id/OIG1.FJRpZfxfYH6NdLl0jRqv?pid=ImgGn" alt="Image 4">
        </div>




        <div class="image-gallery">
          <img src="https://th.bing.com/th/id/OIG1.OA6N2JZO1uZmWu2Q.ukO?w=1024&h=1024&rs=1&pid=ImgDetMain" alt="Image 1">
          <img src="https://th.bing.com/th/id/OIG1.oO8lNZP2c.I1NmOO6FL9?pid=ImgGn" alt="Image 2">
          <img src="https://th.bing.com/th/id/OIG1.yVAtz5DXVaKyomSTQpLd?pid=ImgGn" alt="Image 3">
          <img src="https://th.bing.com/th/id/OIG1.KTGuBJW6XRrUQJbnvIZU?w=1024&h=1024&rs=1&pid=ImgDetMain" alt="Image 4">
        </div>


        <a href="service.php" class=" explore-button" aria-label="Explore More"> Explore more</a>





      </div>





  </body>

</html>