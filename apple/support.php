<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://unpkg.com/vue@next"></script>
    <script defer src="main.js"></script>
    <title>Apple</title>
    <style>
        .support-form {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            text-align: center;
        }

        .support-form h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .support-form label {
            display: block;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .support-form input,
        .support-form textarea {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .support-form textarea {
            height: 200px;
        }

        .support-form button[type="submit"] {
            background-color: #0070c9;
            color: #fff;
            font-size: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .support-form button[type="submit"]:hover {
            background-color: #005cbf;
        }
    </style>
</head>

<body>
    <div id="preloader"></div>
    <header>
        <ul>
            <li><img src="./svg/apple.svg" alt="apple" /></li>
            <li>Mac</li>
            <li>iPad</li>
            <li><a href="/index.php">iPhone</a></li>
            <li>Watch</li>
            <li>TV</li>
            <li>Music</li>
            <li><a href="/support.php">Support</a></li>
        </ul>
    </header>
    <section class="support-form">
        <h1>How can we help you?</h1>
        <form action="send-feedback.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send</button>
        </form>
    </section>
</body>

</html>