<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat Website dengan PHP | MyWebsite</title>
    <meta charset="UTF-8">
    <meta name="description" content="MyWebsite">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1 class="title">MyWebsite</h1>
        <h3 class="desc">Membuat Website dengan PHP dari Awal</h3>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php 
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'about':
                    include "about.php";
                    break;
                case 'contact':
                    include "contact.php";
                    break;
                default:
                    echo "<h2>Halaman tidak ditemukan.</h2>";
                    break;
            }
        } else {
            include "home.php";
        }
        ?>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> MyWebsite | Situs Web Terbaik</p>
    </footer>
</body>
</html>
