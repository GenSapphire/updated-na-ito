<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyusi Esports</title>
    <link rel="stylesheet" href="css/QCEmembership.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- Header Section -->
        <?php
        include "navbar.php";
        ?>

        <!-- Main Body Section sa MEMBERSHIP -->
        <main>
            <div class="content">
                <p class="h1title">Welcome New Challengers of QCU!</p>
                <br>
                <p class="h2content">We're beyond thrilled to get to know you and can't wait 
                                    for you to join our awesome community! Whether you're a fresh-faced first-year, 
                                    a seasoned senior, a casual gamer, a competitive beast, or just here for the fun, 
                                    the Kyusi Esports Community is the perfect place for you.
                                    <br><br>
                                    Ready to dive into the action? To be part of our ever-growing family, just fill out the form below. 
                                    Let’s game, die, and respawn together in the world of esports!</p>
        
            </div>
                
                <!-- ETO YUNG MAY SIGN UP -->
                <div class="box">
                    <p class="jointheteam"><span class="jtth1">JOIN THE TEAM</span>
                                       <span class="jtth2">Join us now and level up your gaming experience!</span></p>
            
                <div class="inputsignup">
                <input class="inputtype" type="text" placeholder="Enter your email address">
                <button class="signup">SIGN UP</button>
                    
            </div>
        
            </div>
        </main>

        <!-- Footer Section -->
        <?php
            require "footer.php";
        ?>

    <!-- External JavaScript -->
    <script src="javascript/QCEmembership.js"></script>
</body>

</html>
