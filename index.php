<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyusi Esports</title>
    <link rel="stylesheet" href="css/QCE.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    
        <!-- Header Section ito-->
        <?php
        include "navbar.php";
        ?>

        <!-- Main Section ito-->
        <main class="main-content">
        <section class="container">
                <div class="slider-wrapper">
                    <div class="slider">
                        <img id="slide1" src="qceimages/qct1.jpg" alt="Image #1">
                        <img id="slide2" src="qceimages/qct2.jpg" alt="Image #2">
                        <img id="slide3" src="qceimages/qct3.jpg" alt="Image #3">
                    </div>
                    <div class="slider-nav">
                        <a href="#slide1"></a>
                        <a href="#slide2"></a>
                        <a href="#slide3"></a>
                    </div>
                </div>
            </section>

            <h2 class="sponsors-title">S<span class="red-letter">P</span>ONS<span class="red-letter">O</span>RS</h2>
            <div class="image-gallery">
                <img src="qceimages/qcesponsors.jpg" alt="Image 1" class="sponsor1">
                <img src="qceimages/qcesponsors2.jpg" alt="Image 2" class="sponsor2">
            </div>
        </main>

    <!-- Footer Section ito-->
    <?php
        include "footer.php";
    ?>

    <script src="javascript/QCE.js"></script>
</body>
</html>
