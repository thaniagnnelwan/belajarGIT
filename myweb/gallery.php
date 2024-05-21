<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Homepage | Gallery | Thania Nelwan - UNSRAT</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>

<body>

    <header>
        <h2>Thania</h2>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="dropdown" id="blog-dropdown">
                    <a class="dropbtn" onclick="toggleDropdown()">Blog &#9662;</a>
                    <div class="dropdown-content" id="blog-dropdown-content">
                        <a href="article1.php">Satu Yang Paling Sederhana?</a>
                        <a href="article2.php">Dualitas dan Keselarasan</a>
                        <a href="article3.php">Angka 3</a>
                    </div>
                </li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="gallery-section">
            <h2>Gallery</h2>
            <div class="gallery-container">
                <figure>
                    <img src="gbr1.jpg" alt="Gambar 1">
                    <figcaption>Gambar 1</figcaption>
                </figure>
                <figure>
                    <img src="gbr2.jpg" alt="Gambar 2">
                    <figcaption>Gambar 2</figcaption>
                </figure>
                <figure>
                    <img src="gbr3.jpg" alt="Gambar 3">
                    <figcaption>Gambar 3</figcaption>
                </figure>
            </div>
        </section>
    </main>

</body>

</html>