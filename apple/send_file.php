<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://unpkg.com/vue@next"></script>
    <script defer src="upload.js"></script>
    <title>Apple</title>
</head>

<body>
    <div id="preloader"></div>
    <header>
        <ul>
            <li><img src="./svg/apple.svg" alt="apple" /></li>
            <li>Mac</li>
            <li>iPad</li>
            <li>iPhone</li>
            <li>Watch</li>
            <li>TV</li>
            <li>Music</li>
            <li><a href="support.php">Support</a></li>
            <li><a href="send_file.php">File upload</a></li>
            <li><img src="./svg/search.svg" alt="search" /></li>
            <li><img src="./svg/shopping-bag.svg" alt="shopping bag" /></li>
        </ul>
    </header>
    <div class="information">
        <a href="">Get $200–$600 in credit toward iPhone 14 or iPhone 14 Pro when you trade in iPhone 11 or higher
            <img src="./svg/right-arrow.svg" alt="" />
        </a>
    </div>
    <div class="information information-2">
        <a href="">Shop online </a> and fet free, no-contact delivery, Specialist
        help, and more.
    </div>
    <form id="file-form">
        <label for="file-input">Select a file or drag and drop it here:</label>
        <input type="file" id="file-input" name="file">
        <button type="submit">Upload</button>
    </form>

    <div id="download-link-container">
    </div>
</body>
</html>