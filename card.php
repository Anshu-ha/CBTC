<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue Flip-Flop Cards</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navbar-brand h1 {
            margin: 0;
            font-size: 24px;
        }

        .navbar-cart {
            display: flex;
            align-items: center;
        }

        .cart-icon {
            font-size: 24px;
            margin-right: 10px;
        }

        #cartTotal {
            font-size: 18px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 20px;
        }

        .flip-card {
            width: 300px;
            height: 400px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .flip-card-front {
            background-color: #fff;
            color: #000;
        }

        .flip-card-back {
            background-color: #f0f0f0;
            color: #000;
            transform: rotateY(180deg);
        }

        .flip-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }

        .flip-card h3 {
            margin: 10px 0;
        }

        .flip-card p {
            margin: 0;
            font-size: 18px;
        }

        .ticket-options {
            display: flex;
            justify-content: space-around;
            width: 100%;
            margin-top: 10px;
        }

        .ticket-option {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #e0e0e0;
            border-radius: 5px;
            padding: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .ticket-option:hover {
            background-color: #d0d0d0;
        }

        .ticket-option img {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }

        .like-btn,
        .add-to-cart-btn {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .like-btn {
            background-color: red;
            color: white;
        }

        .add-to-cart-btn {
            background-color: #007BFF;
            color: white;
        }

        .payment-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .hidden {
            display: none;
        }

        .pay-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .pay-btn:hover {
            background-color: #45a049;
        }

        .navbar {
            width: 100%;
            background-color: #333;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            box-sizing: border-box;
        }

        .circle-button {
            display: inline-block;
            width: 80px;
            height: 80px;
            line-height: 80px;
            background-color: #FF5722;
            color: white;
            text-align: center;
            font-size: 24px;
            border-radius: 50%;
            cursor: pointer;
            transition: transform 0.3s ease;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .circle-button i {
            transition: transform 0.3s ease;
        }

        .circle-button:hover i {
            transform: rotate(360deg);
        }

        .circle-button:hover {
            background-color: #F4511E;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <h1>Venue Booking</h1>
        </div>
        <div class="navbar-cart">
            <span class="cart-icon">🛒</span>
            <span id="cartTotal">$0.00</span>
        </div>
    </nav>
    <div class="container">
        <h1>Explore Our Venues</h1>
        <div class="card-container">

            <div class="flip-card" data-price="100">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://th.bing.com/th/id/OIP.zLUqkTuBHTK0cwWNQQhCXwHaEo?rs=1&pid=ImgDetMain" alt="Venue 1">
                        <div class="venue-info">
                            <h3>TechCon Nexus</h3>
                            <p class="price">Price: $250 per person.</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h3>TechCon Nexus</h3>
                        <p>A cutting-edge technology conference where industry leaders converge. Keynote speakers, workshops, and networking opportunities abound. Geeks and innovators unite!</p>
                        <div class="ticket-options">
                            <div class="ticket-option" data-price="100">
                                <img src="https://graphicsfamily.com/wp-content/uploads/2020/06/DJ-Party-Event-ticket-design-scaled.jpg" alt="Ticket Icon"> Standard - $100
                            </div>
                            <div class="ticket-option" data-price="150">
                                <img src="https://graphicsfamily.com/wp-content/uploads/2020/06/DJ-Party-Event-ticket-design-scaled.jpg" alt="Ticket Icon"> Premium - $150
                            </div>
                        </div>
                        <button class="like-btn" data-venue="Venue 1">
                            <i class="fa-regular fa-heart"></i> Like
                        </button>
                        <button class="add-cart-btn" data-price="100">
                            <i class="fa-solid fa-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>


            <div class="flip-card" data-price="100">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://c1.wallpaperflare.com/preview/739/69/152/people-concert-festival-music.jpg">
                        <div class="venue-info">
                            <h3>Gala Royale
                            </h3>
                            <p class="price">Price: $250 per person.</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h3>Gala Royale
                        </h3>
                        <p>An elegant black-tie affair held in a grand ballroom. Guests enjoy gourmet cuisine, live music, and a silent auction. Perfect for charity fundraisers or corporate celebrations.</p>
                        <div class="ticket-options">
                            <div class="ticket-option" data-price="100">
                                <img src="https://graphicsfamily.com/wp-content/uploads/2020/06/DJ-Party-Event-ticket-design-scaled.jpg" alt="Ticket Icon"> Standard - $100
                            </div>
                            <div class="ticket-option" data-price="150">
                                <img src="https://graphicsfamily.com/wp-content/uploads/2020/06/DJ-Party-Event-ticket-design-scaled.jpg" alt="Ticket Icon"> Premium - $150
                            </div>
                        </div>
                        <button class="like-btn" data-venue="Venue 1">
                            <i class="fa-regular fa-heart"></i> Like
                        </button>
                        <button class="add-cart-btn" data-price="100">
                            <i class="fa-solid fa-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>


            <div class="flip-card" data-price="100">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img,w_870,h_580/https://beginnersfashion.com/wp-content/uploads/2022/01/best-hollywood-singers.jpg" alt="Venue 1">
                        <div class="venue-info">
                            <h3>Bollywood Beats Night</h3>
                            <p class="price">$500</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h3>Bollywood Beats Night</h3>
                        <p>A vibrant celebration of Indian cinema and dance. Colorful decor, Bollywood hits, and energetic dance-offs. Don’t forget your sequins and jhatkas!</p>
                        <div class="ticket-options">
                            <div class="ticket-option" data-price="100">
                                <img src="https://graphicsfamily.com/wp-content/uploads/2020/06/DJ-Party-Event-ticket-design-scaled.jpg" alt="Ticket Icon"> Standard - $100
                            </div>
                            <div class="ticket-option" data-price="150">
                                <img src="https://graphicsfamily.com/wp-content/uploads/2020/06/DJ-Party-Event-ticket-design-scaled.jpg" alt="Ticket Icon"> Premium - $150
                            </div>
                        </div>
                        <button class="like-btn" data-venue="Venue 1">
                            <i class="fa-regular fa-heart"></i> Like
                        </button>
                        <button class="add-cart-btn" data-price="100">
                            <i class="fa-solid fa-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="flip-card" data-price="100">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://i2-prod.belfastlive.co.uk/whats-on/music-nightlife-news/article17537889.ece/ALTERNATES/s615/0_Live-music-1.jpg" alt="Venue 1">
                        <div class="venue-info">
                            <h3>Wine & Cheese Soirée
                            </h3>
                            <p class="price">$100</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h3>Wine & Cheese Soirée
                        </h3>
                        <p>: A refined evening for oenophiles and foodies. Sample exquisite wines, artisanal cheeses, and charcuterie. Live jazz music sets the mood.</p>
                        <div class="ticket-options">
                            <div class="ticket-option" data-price="100">
                                <img src="https://graphicsfamily.com/wp-content/uploads/2020/06/DJ-Party-Event-ticket-design-scaled.jpg" alt="Ticket Icon"> Standard - $100
                            </div>
                            <div class="ticket-option" data-price="150">
                                <img src="https://graphicsfamily.com/wp-content/uploads/2020/06/DJ-Party-Event-ticket-design-scaled.jpg" alt="Ticket Icon"> Premium - $150
                            </div>
                        </div>
                        <button class="like-btn" data-venue="Venue 1">
                            <i class="fa-regular fa-heart"></i> Like
                        </button>
                        <button class="add-cart-btn" data-price="100">
                            <i class="fa-solid fa-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="flip-card" data-price="100">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://alttickets-9a2.kxcdn.com/static_alt_tickets/images/blog/400x400/58210704503285e4d09a507ff9680933341-5821070450.jpg" alt="Venue 1">
                        <div class="venue-info">
                            <h3>Escape Quest: Mystery Mansion</h3>
                            <p class="price">$100</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h3>Escape Quest: Mystery Mansion</h3>
                        <p> An interactive escape room event set in a spooky Victorian mansion. Solve puzzles, uncover secrets, and race against the clock. Perfect for thrill-seekers.</p>
                        <div class="ticket-options">
                            <div class="ticket-option" data-price="100">
                                <img src="https://graphicsfamily.com/wp-content/uploads/2020/06/DJ-Party-Event-ticket-design-scaled.jpg" alt="Ticket Icon"> Standard - $100
                            </div>
                            <div class="ticket-option" data-price="150">
                                <img src="https://graphicsfamily.com/wp-content/uploads/2020/06/DJ-Party-Event-ticket-design-scaled.jpg" alt="Ticket Icon"> Premium - $150
                            </div>
                        </div>
                        <button class="like-btn" data-venue="Venue 1">
                            <i class="fa-regular fa-heart"></i> Like
                        </button>
                        <button class="add-cart-btn" data-price="100">
                            <i class="fa-solid fa-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="flip-card" data-price="100">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://giggoer.com/wp-content/uploads/2017/03/White-Lies-Troxy-2.jpg" alt="Venue 1">
                        <div class="venue-info">
                            <h3>Fitness Fiesta</h3>
                            <p class="price">$100</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h3>Fitness Fiesta</h3>
                        <p>Enjoy a beautiful evening at this venue, perfect for all occasions.</p>
                        <div class="ticket-options">
                            <div class="ticket-option" data-price="100">
                                <img src="https://graphicsfamily.com/wp-content/uploads/2020/06/DJ-Party-Event-ticket-design-scaled.jpg" alt="Ticket Icon"> Standard - $100
                            </div>
                            <div class="ticket-option" data-price="150">
                                <img src="https://graphicsfamily.com/wp-content/uploads/2020/06/DJ-Party-Event-ticket-design-scaled.jpg" alt="Ticket Icon"> Premium - $150
                            </div>
                        </div>
                        <button class="like-btn" data-venue="Venue 1">
                            <i class="fa-regular fa-heart"></i> Like
                        </button>
                        <button class="add-cart-btn" data-price="100">
                            <i class="fa-solid fa-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="flip-card" data-price="100">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="venue-info">
                            <h3>Venue 1</h3>
                            <p class="price">$100</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h3>Venue 1</h3>
                        <p>Enjoy a beautiful evening at this venue, perfect for all occasions.</p>
                        <div class="ticket-options">
                            <div class="ticket-option" data-price="100">
                                <img src="https://graphicsfamily.com/wp-content/uploads/2020/06/DJ-Party-Event-ticket-design-scaled.jpg" alt="Ticket Icon"> Standard - $100
                            </div>
                            <div class="ticket-option" data-price="150">
                                <img src="https://graphicsfamily.com/wp-content/uploads/2020/06/DJ-Party-Event-ticket-design-scaled.jpg" alt="Ticket Icon"> Premium - $150
                            </div>
                        </div>
                        <button class="like-btn" data-venue="Venue 1">
                            <i class="fa-regular fa-heart"></i> Like
                        </button>
                        <button class="add-cart-btn" data-price="100">
                            <i class="fa-solid fa-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart-section">
            <h2>Your Cart</h2>
            <ul id="cartItems" class="cart-items"></ul>
            <p>Total: $<span id="cartTotal">0</span></p>
            <a href="pay.php" class="circle-button" aria-label="Explore More">Proceed to Pay</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const likeButtons = document.querySelectorAll('.like-btn');
            const addToCartButtons = document.querySelectorAll('.add-cart-btn');
            const ticketOptions = document.querySelectorAll('.ticket-option');
            const cartTotalDisplay = document.getElementById('cartTotal');
            const cartItemsList = document.getElementById('cartItems');
            let totalAmount = 0;

            function updateCartTotal() {
                cartTotalDisplay.textContent = `$${totalAmount.toFixed(2)}`;
            }

            function updateCartDisplay() {

                let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                cartItemsList.innerHTML = '';
                totalAmount = 0;

                cartItems.forEach(item => {
                    const listItem = document.createElement('li');
                    listItem.textContent = `${item.name} - $${item.price}`;
                    cartItemsList.appendChild(listItem);
                    totalAmount += parseFloat(item.price);
                });

                updateCartTotal();
            }


            updateCartDisplay();


            likeButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.target.classList.toggle('liked');
                    if (e.target.classList.contains('liked')) {
                        e.target.textContent = 'Liked';
                    } else {
                        e.target.textContent = 'Like';
                    }
                });
            });

            ticketOptions.forEach(option => {
                option.addEventListener('click', (e) => {
                    const price = e.target.getAttribute('data-price');
                    const flipCard = e.target.closest('.flip-card');
                    flipCard.querySelector('.add-cart-btn').setAttribute('data-price', price);
                });
            });


            addToCartButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    const flipCard = e.target.closest('.flip-card');
                    const basePrice = parseFloat(flipCard.getAttribute('data-price'));
                    const ticketPrice = parseFloat(e.target.getAttribute('data-price'));
                    const finalPrice = basePrice + ticketPrice;
                    const name = flipCard.querySelector('.venue-info h3').textContent;

                    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                    cartItems.push({
                        name,
                        price: finalPrice
                    });
                    localStorage.setItem('cartItems', JSON.stringify(cartItems));


                    updateCartDisplay();
                });
            });


            document.getElementById('checkoutBtn')?.addEventListener('click', () => {
                alert('Proceeding to checkout.');

            });
        });
    </script>
</body>

</html>