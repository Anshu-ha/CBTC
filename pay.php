<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .payment-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-width: 90%;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        .payment-method {
            margin-bottom: 20px;
        }

        .payment-method h2 {
            margin-bottom: 10px;
            color: #444;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .payment-logo {
            margin: 20px 0;
        }

        .payment-logo img {
            width: 200px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        #netBankingOptions,
        #creditCardOptions {
            margin-bottom: 20px;
        }

        .hidden {
            display: none;
        }

        .amount {
            margin-bottom: 20px;
        }

        .amount label {
            display: block;
            margin-bottom: 5px;
            font-size: 16px;
        }

        input[type="number"],
        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .pay-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .pay-btn:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            padding: 20px;
            border-radius: 5px;
            background-color: #e7f9e7;
            color: #3d3d3d;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .explore-button {
            display: inline-block;
            padding: 15px 40px;
            font-size: 18px;
            color: aqua;
            background-color: #111;
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
            background-color: white;

            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .explore-button:before {
            content: '→';
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
</head>

<body>
    <div class="payment-container">
        <h1>Payment Page</h1>
        <form id="paymentForm">
            <div class="payment-method">
                <h2>Select Payment Method</h2>
                <label>
                    <input type="radio" name="payment" value="netbanking" checked>
                    Net Banking
                </label>
                <label>
                    <input type="radio" name="payment" value="qr">
                    QR Code
                </label>
                <label>
                    <input type="radio" name="payment" value="creditcard">
                    Credit/Debit Card
                </label>
                <label>
                    <input type="radio" name="payment" value="upi">
                    UPI
                </label>
            </div>

            <div id="paymentLogo" class="payment-logo"><img src="https://www.graphicmore.com/wp-content/uploads/2018/12/Payment-Method-Vector-Logo-Design-Free-Download.jpg" alt=""></div>

            <div id="netBankingOptions" class="hidden">
                <label for="bankSelect">Select Bank:</label>
                <select id="bankSelect" name="bankSelect">
                    <option value="sbi">State Bank of India (SBI)</option>
                    <option value="hdfc">HDFC Bank</option>
                    <option value="icici">ICICI Bank</option>
                    <option value="axis">Axis Bank</option>
                    <option value="kotak">Kotak Mahindra Bank</option>
                </select>
            </div>


            <div id="creditCardOptions" class="hidden">
                <label for="cardNumber">Card Number:</label>
                <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456">

                <label for="expiryDate">Expiry Date:</label>
                <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY">

                <label for="cvv">CVV:</label>
                <input type="password" id="cvv" name="cvv" placeholder="123">
            </div>

            <div class="amount">
                <label for="amount">Enter Amount:</label>
                <input type="number" id="amount" name="amount" min="1" required>
            </div>

            <button type="submit" class="pay-btn">Pay Now</button>
        </form>

        <div id="result" class="result hidden">
            <h2>Payment Successful!</h2>
            <p id="paymentDetails"></p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const paymentForm = document.getElementById('paymentForm');
            const resultDiv = document.getElementById('result');
            const paymentDetails = document.getElementById('paymentDetails');
            const payButton = document.querySelector('.pay-btn');

            const paymentLogoDiv = document.getElementById('paymentLogo');
            const netBankingOptionsDiv = document.getElementById('netBankingOptions');
            const creditCardOptionsDiv = document.getElementById('creditCardOptions');

            const paymentLogos = {
                netbanking: 'https://financebazaaronline.in/wp-content/uploads/2022/06/Everything-About-SBI-Netbanking.png',
                qr: 'https://static.vecteezy.com/system/resources/previews/009/326/729/original/qr-code-icon-on-white-background-flat-style-qr-code-icon-for-your-web-site-design-logo-app-ui-digital-code-easy-pay-symbol-digital-data-sign-for-scanners-vector.jpg',
                creditcard: 'https://logos-download.com/wp-content/uploads/2016/03/Mastercard_Logo_1990-2048x1223.png',
                upi: 'https://logodix.com/logo/1645140.png'
            };


            const paymentOptions = document.querySelectorAll('input[name="payment"]');
            paymentOptions.forEach(option => {
                option.addEventListener('change', (e) => {
                    const selectedPayment = e.target.value;


                    paymentLogoDiv.innerHTML = `<img src="${paymentLogos[selectedPayment]}" alt="${selectedPayment} logo">`;

                    if (selectedPayment === 'netbanking') {
                        netBankingOptionsDiv.classList.remove('hidden');
                        creditCardOptionsDiv.classList.add('hidden');
                    } else if (selectedPayment === 'creditcard') {
                        creditCardOptionsDiv.classList.remove('hidden');
                        netBankingOptionsDiv.classList.add('hidden');
                    } else {
                        netBankingOptionsDiv.classList.add('hidden');
                        creditCardOptionsDiv.classList.add('hidden');
                    }
                });
            });

            paymentForm.addEventListener('submit', (e) => {
                e.preventDefault();

                const selectedPaymentMethod = document.querySelector('input[name="payment"]:checked').value;
                const amount = document.getElementById('amount').value;

                if (amount < 1) {
                    alert('Please enter a valid amount.');
                    return;
                }


                payButton.disabled = true;
                payButton.textContent = 'Processing...';

                setTimeout(() => {
                    let additionalInfo = '';

                    if (selectedPaymentMethod === 'netbanking') {
                        const selectedBank = document.getElementById('bankSelect').value;
                        additionalInfo = `<strong>Bank:</strong> ${capitalize(selectedBank)}<br>`;
                    } else if (selectedPaymentMethod === 'creditcard') {
                        const cardNumber = document.getElementById('cardNumber').value;
                        additionalInfo = `<strong>Card Number:</strong> **** **** **** ${cardNumber.slice(-4)}<br>`;
                    }

                    paymentDetails.innerHTML = `
                        <strong>Payment Method:</strong> ${capitalize(selectedPaymentMethod)}<br>
                        ${additionalInfo}
                        <strong>Amount Paid:</strong> $${amount}
                    `;
                    resultDiv.classList.remove('hidden');
                    payButton.disabled = false;
                    payButton.textContent = 'Pay Now';
                }, 1000);
            });

            function capitalize(word) {
                return word.charAt(0).toUpperCase() + word.slice(1);
            }
        });
    </script>

    <a href="index.php" explore-button class="explore-button" aria-label="Explore More">Go to Home</a>
</body>

</html>