<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1,
        h2 {
            color: #333;
        }

        .review-list {
            margin-bottom: 40px;
        }

        .review-item {
            background-color: #fff;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .review-item .rating {
            font-size: 18px;
            color: #f39c12;
        }

        .review-item .name {
            font-weight: bold;
        }

        .add-review {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .add-review form .form-group {
            margin-bottom: 15px;
        }

        .add-review form label {
            display: block;
            margin-bottom: 5px;
        }

        .add-review form input,
        .add-review form select,
        .add-review form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .add-review form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .add-review form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <section id="reviews">
        <div class="container">
            <h1>Customer Reviews</h1>


            <div id="review-list" class="review-list">

            </div>


            <div class="add-review">
                <h2>Share Your Experience</h2>
                <form id="review-form">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <select id="rating" name="rating" required>
                            <option value="" disabled selected>Select Rating</option>
                            <option value="1">1 Star</option>
                            <option value="2">2 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="5">5 Stars</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="review">Review:</label>
                        <textarea id="review" name="review" rows="4" required></textarea>
                    </div>
                    <button type="submit">Submit Review</button>
                </form>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const reviews = [{
                        name: 'Alice',
                        rating: 5,
                        review: 'Amazing experience! Highly recommend.'
                    },
                    {
                        name: 'Bob',
                        rating: 4,
                        review: 'Great service but could use a bit more attention to detail.'
                    },
                    {
                        name: 'Charlie',
                        rating: 3,
                        review: 'It was okay. Not the best but not terrible either.'
                    }
                ];

                const reviewList = document.getElementById('review-list');

                function renderReviews() {
                    reviewList.innerHTML = '';
                    reviews.forEach(review => {
                        const reviewItem = document.createElement('div');
                        reviewItem.className = 'review-item';
                        reviewItem.innerHTML = `
                    <div class="rating">${'★'.repeat(review.rating)}${'☆'.repeat(5 - review.rating)}</div>
                    <div class="name">${review.name}</div>
                    <p>${review.review}</p>
                `;
                        reviewList.appendChild(reviewItem);
                    });
                }

                function addReview(event) {
                    event.preventDefault();
                    const name = document.getElementById('name').value;
                    const rating = parseInt(document.getElementById('rating').value, 10);
                    const review = document.getElementById('review').value;

                    if (name && rating && review) {
                        reviews.push({
                            name,
                            rating,
                            review
                        });
                        renderReviews();
                        document.getElementById('review-form').reset();
                    }
                }

                document.getElementById('review-form').addEventListener('submit', addReview);

                renderReviews();
            });
        </script>
    </section>

</body>

</html>