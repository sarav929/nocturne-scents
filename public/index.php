<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nocturne Scents</title>
    <link rel="stylesheet" href="../assets/style/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
    crossorigin="anonymous">

</head>
<body>


    <?php include '../includes/nav.php' ?>
    <div class="d-flex justify-content-center text-center mb-5"> 
        <div class="ard bg-dark text-white" style="position: relative; height: 50vh; width: 100vw;">
            <img class="card-img" src="../assets/img/header.jpg" style="object-fit: cover; height: 100%; width: 100%; opacity: 70%;" alt="Card image">
            <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
                <h1 class="logo card-title display-4 mb-3">Nocturne Scents</h1>
                <h5 class="card-subtitle mb-5 font-italic font-weight-light">Unveil the Darker Side of Fragrance</h5>
                <a href="../public/session_cart.php" class="btn btn-light btn-lg">Explore</a>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column justify-content-center text-center m-auto w-75">
        <h3 class="heading title1 mb-3">About us</h1>
        <p>Welcome to Nocturne Scents, where we invite you to explore the alluring world of niche perfumes with a dark twist.</p>
        
        <p>Born from a passion for the mysterious and the enchanting, our brand celebrates the beauty found in the shadows.
            At Nocturne Scents, we believe that fragrance is more than just a scent; it’s an experience that evokes emotions, memories, and fantasies.
            Our carefully curated collection features unique, handcrafted fragrances that capture the essence of twilight, blending rich, deep notes with ethereal elements. 
        Each scent tells a story, transporting you to a realm where the night unfolds its secrets.</p>


        <p>Our commitment to quality is unwavering. We source the finest ingredients from around the globe, ensuring that every perfume embodies our dedication to artistry and craftsmanship.
        Whether you’re drawn to dark florals, smoky woods, or seductive spices, our fragrances are designed to enchant and empower.</p>
        <p class="mb-5">Join us on this journey into the unknown, and let Nocturne Scents awaken your senses to the beauty of the night.</p>
    </div>

    <?php include '../includes/footer.php' ?>
    
</body>
</html>