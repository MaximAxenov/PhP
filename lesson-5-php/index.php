<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="public_html/css/style.css">
</head>

<body>

    <div class="container">

        <header>
            <div class="logo">WatchShop</div>

            <div class="clearfix"></div>
        </header>

        <main>

            <div class="gallery">
                <?php
                include_once("config.php");

                $sql = "SELECT * FROM gallery ORDER BY Count DESC";
                $table = mysqli_query($connect, $sql);

                while ($data = mysqli_fetch_assoc($table)) : ?>
                    <a href='image.php?id=<?= $data['id'] ?>' class='product'>
                        <img class="product_img" src='<?= $data['Address_small'] ?>' alt='img"<?= $data['Name'] ?>'>
                    </a>
                <?php endwhile; ?>
            </div>
        </main>

        <footer class="page-footer">
            <p class="page-footer__text">© 2021 Brand All Rights Reserved.</p>
        </footer>

    </div>

</body>

</html>