<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue Flip-Flop Cards</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

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
            font-family: 'Pacifico', cursive;
        }

        .navbar-cart {
            display: flex;
            align-items: center;
        }

        .cart-icon {
            font-size: 24px;
            margin-right: 10px;
            font-family: 'Pacifico', cursive;
        }

        #cartTotal {
            font-size: 18px;
            font-family: 'Pacifico', cursive;
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
            font-family: 'Pacifico', cursive;
        }

        .flip-card-back {
            background-color: #f0f0f0;
            color: #000;
            font-family: 'Pacifico', cursive;
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
            font-family: 'Pacifico', cursive;
        }

        .flip-card p {
            margin: 0;
            font-size: 18px;
            font-family: 'Pacifico', cursive;
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
            font-family: 'Pacifico', cursive;
        }

        .add-to-cart-btn {
            background-color: #007BFF;
            color: white;
            font-family: 'Pacifico', cursive;
        }

        .payment-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            font-family: 'Pacifico', cursive;
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
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <h1>Venue Booking for conferences</h1>
        </div>
        <div class="navbar-cart">
            <span class="cart-icon">🛒</span>
            <span id="cartTotal">$0.00</span>
        </div>
    </nav>
    <div class="container">
        <h1>Explore Our Venues</h1>
        <div class="card-container">

            <div class="flip-card" data-price="3000">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://www.nationalconferencecentre.co.uk/wp-content/uploads/2022/01/conferences-50-scaled.jpeg" alt="Venue 1">
                        <div class="venue-info">
                            <h3>The Summit Hall</h3>
                            <p class="price">$3000</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h3>The Summit Hall</h3>
                        <p>Location: Nestled in the heart of the business district, The Summit Hall boasts state-of-the-art facilities. Its sleek, minimalist design features floor-to-ceiling windows, flooding the space with natural light. The main auditorium comfortably seats 500 attendees, while breakout rooms cater to smaller groups. High-speed Wi-Fi, ergonomic seating, and advanced AV equipment ensure a seamless conference experience.
                        </p>
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

            <div class="flip-card" data-price="800">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://thecollectionevents.com/wp-content/uploads/2018/07/Kings-Suite-2-Hilton-Site-900x630.jpg">
                        <div class="venue-info">
                            <h3>Tech Nexus Center:</h3>
                            <p class="price">$800</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h3>Tech Nexus Center:</h3>
                        <p>Location: Situated near major tech companies, the Tech Nexus Center caters to innovation-driven conferences. The futuristic architecture includes interactive touchscreens, holographic displays, and a robot concierge. Attendees can network in the open atrium or brainstorm in soundproof pods. The rooftop terrace offers panoramic views—a great spot for post-conference cocktails.
                        </p>
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


            <div class="flip-card" data-price="10000">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://th.bing.com/th/id/OIP.yDQ9uNNH961vOD5L8A6g0QHaFX?rs=1&pid=ImgDetMain">
                        <div class="venue-info">
                            <h3>The Enchanted Garden Pavilion:</h3>

                            <p class="price">$10000 </p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h3>Venue 2</h3>
                        <p>Nestled amidst lush greenery, The Enchanted Garden Pavilion is an outdoor venue that feels like stepping into a fairy tale. Imagine exchanging vows under a canopy of blooming flowers, with the soft rustle of leaves in the breeze. Lanterns hang from ancient trees, casting a warm glow as the sun sets. It’s perfect for romantic weddings and whimsical soirées.</p>
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
            <!---->
            <div class="flip-card" data-price="2000">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="https://supereventscroatia.com/wp-content/uploads/2016/12/Zagreb_Sheraton_0004_sheraton-zagreb-grand-balleroom-1600x900-1.jpg" alt="Venue 1">
                        <div class="venue-info">
                            <h3>Harborview Conference Suites:
                            </h3>
                            <p class="price">$100</p>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h3>Harborview Conference Suites:
                        </h3>
                        <p>Location: Overlooking the harbor, Harborview Conference Suites combine business with relaxation. The venue features modular meeting rooms that adapt to various layouts. Breaks can be enjoyed on the outdoor terrace, where attendees sip coffee while watching sailboats glide by. The nautical theme and maritime art create a unique ambiance.</p>
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

            <button class="like-btn" data-venue="Venue 1">
                <i class="fa-regular fa-heart"></i> Like
            </button>
            <button class="add-cart-btn" data-price="100">
                <i class="fa-solid fa-cart-plus"></i> Add to Cart
            </button>
        </div>
    </div>
    </div>





    <div class="cart-section">
        <h2>Your Cart</h2>
        <ul id="cartItems" class="cart-items"></ul>
        <p>Total: $<span id="cartTotal">0</span></p>
        <a href="pay.php" class="explore-button" aria-label="Explore More">Proceed to Pay</a>
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

            // Handle like button clicks
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