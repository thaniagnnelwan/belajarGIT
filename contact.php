<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Homepage | Contact | Thania Nelwan - UNSRAT</title>
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
        <section class="contact-section">
            <h2>Informasi Kontak</h2>
            <p>Thania G.N Nelwan (19021106030)</p>
            <address>
                Email: thanianelwan026@student.unsrat.ac.id<br>
                Telepon: 0815-4303-xxxx
            </address>
        </section>
    </main>

</body>

</html>