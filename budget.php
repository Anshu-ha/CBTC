<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Tracking</title>
    <link rel="stylesheet" href="budget.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #333;
            color: black;
            font-family: 'Pacifico', cursive;

        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: aqua;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.904);
        }

        #budget-tracking {
            padding: 40px 0;
            text-align: center;
        }

        #budget-tracking h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
            font-family: 'Pacifico', cursive;

        }

        .feature {
            margin-bottom: 20px;
            text-align: left;
        }

        .feature h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: black;
            font-family: 'Pacifico', cursive;

        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 1.1em;
            margin-bottom: 8px;
            color: #333;
            font-family: 'Pacifico', cursive;

        }

        .form-group input,
        .form-group select,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            color: aqua;
            background-color: #333;
            border: none;
            cursor: pointer;
            font-family: 'Pacifico', cursive;

        }

        button:hover {
            background-color: #333;
            color: aqua;
            font-family: 'Pacifico', cursive;


        }

        #expense-list {
            list-style-type: none;
            padding: 0;
        }

        #expense-list li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        #report {
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
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
    <section id="budget-tracking">
        <div class="container">
            <h2>Budget Tracking</h2>
            <div class="feature">
                <h3>Comprehensive Budgeting Tools</h3>
                <form id="budget-form">
                    <div class="form-group">
                        <label for="expense-name">Expense Name:</label>
                        <input type="text" id="expense-name" name="expense-name" placeholder="Enter expense name">
                    </div>
                    <div class="form-group">
                        <label for="expense-amount">Amount:</label>
                        <input type="number" id="expense-amount" name="expense-amount" placeholder="Enter amount">
                    </div>
                    <div class="form-group">
                        <label for="expense-category">Category:</label>
                        <select id="expense-category" name="expense-category">
                            <option value="venue">Venue</option>
                            <option value="catering">Catering</option>
                            <option value="decor">Decor</option>
                            <option value="entertainment">Entertainment</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <button type="button" onclick="addExpense()">Add Expense</button>
                </form>
            </div>
            <div class="feature">
                <h3>Expense Categorization</h3>
                <ul id="expense-list">

                </ul>
            </div>
            <div class="feature">
                <h3>Financial Reports</h3>
                <button onclick="generateReport()">Generate Report</button>
                <div id="report">

                </div>
            </div>
        </div>
    </section>

    <script>
        let expenses = [];

        function addExpense() {
            const expenseName = document.getElementById('expense-name').value;
            const expenseAmount = document.getElementById('expense-amount').value;
            const expenseCategory = document.getElementById('expense-category').value;

            if (expenseName && expenseAmount && expenseCategory) {
                const expense = {
                    name: expenseName,
                    amount: parseFloat(expenseAmount),
                    category: expenseCategory
                };

                expenses.push(expense);
                displayExpenses();
                clearForm();
            } else {
                alert("Please fill in all fields.");
            }
        }

        function displayExpenses() {
            const expenseList = document.getElementById('expense-list');
            expenseList.innerHTML = '';

            expenses.forEach(expense => {
                const listItem = document.createElement('li');
                listItem.textContent = `${expense.name}: $${expense.amount} (${expense.category})`;
                expenseList.appendChild(listItem);
            });
        }

        function clearForm() {
            document.getElementById('budget-form').reset();
        }

        function generateReport() {
            const report = document.getElementById('report');
            report.innerHTML = '';

            let totalAmount = 0;
            const categoryTotals = {};

            expenses.forEach(expense => {
                totalAmount += expense.amount;
                if (categoryTotals[expense.category]) {
                    categoryTotals[expense.category] += expense.amount;
                } else {
                    categoryTotals[expense.category] = expense.amount;
                }
            });

            const totalAmountElement = document.createElement('p');
            totalAmountElement.textContent = `Total Expenses: $${totalAmount.toFixed(2)}`;
            report.appendChild(totalAmountElement);

            for (const category in categoryTotals) {
                const categoryElement = document.createElement('p');
                categoryElement.textContent = `${category}: $${categoryTotals[category].toFixed(2)}`;
                report.appendChild(categoryElement);
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            displayExpenses();
        });
    </script>
    <a href="pay.php" class="explore-button" aria-label="Explore More">proced to pay</a>

</body>

</html>