<?php

include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Shopping Maza</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f8f8f8;
            color: #333;
        }

    

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.8s ease-in-out;
        }

    

        .faq-item {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            overflow: hidden;
            transition: border-color 0.3s ease-in-out;
        }

        .question {
            cursor: pointer;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
            transition: color 0.3s ease-in-out;
        }

        .answer {
            display: none;
            color: #555;
            animation: fadeInAnswer 0.5s ease-in-out;
        }

        .faq-item:hover {
            border-color: #3498db;
        }

        .faq-item:hover .question {
            color: #3498db;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInAnswer {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media screen and (max-width: 600px) {
            main {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
   

    <main>
        <h2 style="  color: hsl(19.83, 95.28%, 49.8%);">FAQ</h2>

        <div class="faq-item">
            <div class="question" onclick="toggleAnswer(this)">1. How do I place an order?</div>
            <div class="answer">To place an order, simply browse our website, select the items you want, and proceed to checkout. Follow the on-screen instructions to complete your purchase.</div>
        </div>

        <div class="faq-item">
            <div class="question" onclick="toggleAnswer(this)">2. Can I modify or cancel my order?</div>
            <div class="answer">Once an order is placed, modifications or cancellations may not be possible. Please review your order carefully before completing the purchase.</div>
        </div>

        <div class="faq-item">
            <div class="question" onclick="toggleAnswer(this)">3. How can I track my order?</div>
            <div class="answer">You can track your order just visit my orders page.</div>
        </div>

        <div class="faq-item">
            <div class="question" onclick="toggleAnswer(this)">4. What payment methods do you accept?</div>
            <div class="answer">We currently accept Cash on Delivery (COD) as the primary payment method. Simply pay for your order in cash when it is delivered to your doorstep.</div>
        </div>

        <div class="faq-item">
            <div class="question" onclick="toggleAnswer(this)">5. Is my personal information secure?</div>
            <div class="answer">Yes, we take the security of your personal information seriously. Our website uses encryption technology to ensure that your data is safe and secure. For more details, please review our privacy policy.</div>
        </div>

        <!-- Add more FAQ items as needed -->

    </main>

    <script>
        function toggleAnswer(question) {
            const answer = question.nextElementSibling;
            answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>
<?php

include 'footer.php';

?>
