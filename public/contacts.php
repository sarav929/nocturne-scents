<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../assets/style/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
    crossorigin="anonymous">
</head>
<body>
    <?php include '../includes/nav.php'; 

    # Initialize errors array
    $errors = array(); 
    $name = $email = $message = ''; // Initialize variables
    $showBanner = false; // Initialize the banner display flag

    # Check form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['name'])) { 
            $errors['name'] = 'Enter your name.'; 
        } else { 
            $name = htmlspecialchars(trim($_POST['name'])); // Sanitize input
        }

        if (empty($_POST['email'])) { 
            $errors['email'] = 'Enter your email address.'; 
        } else { 
            $email = htmlspecialchars(trim($_POST['email'])); 
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Enter a valid email address.';
            }
        }

        if (empty($_POST['message'])) { 
            $errors['message'] = 'Enter your message.'; 
        } else { 
            $message = htmlspecialchars(trim($_POST['message'])); 
        }

        // If no errors, process the form (e.g., send an email)
        if (empty($errors)) {
            // Here, you can send the email or save the message to the database
            // Assuming the processing is successful, show the banner
            $showBanner = true;
            // Reset form values
            $name = $email = $message = '';
        }
    }
    ?>

    <div class="container mt-5">

        <h2 class="title1 heading text-center mb-4">Contact Us</h2>
        <p class="text-center">We’d Love to hear from you! Whether you need advice on a fragrance or assistance with an order, we're here to help.</p>
        <form method="POST" action="" novalidate>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" placeholder="Enter your name" required>
                <?php if (isset($errors['name'])): ?>
                    <small class="text-danger"><?php echo $errors['name']; ?></small>
                <?php endif; ?> 
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Enter your email" required>
                <?php if (isset($errors['email'])): ?>
                    <small class="text-danger"><?php echo $errors['email']; ?></small>
                <?php endif; ?> 
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your message" required><?php echo htmlspecialchars($message); ?></textarea>
                <?php if (isset($errors['message'])): ?>
                    <small class="text-danger"><?php echo $errors['message']; ?></small>
                <?php endif; ?> 
            </div>
            <button type="submit" class="btn btn-dark btn-block">Send Message</button>
        </form>
         <!-- Success Banner -->
         <?php if ($showBanner): ?>
            <div class="alert alert-success mt-2">
                <h4 class="alert-heading">Thank You!</h4>
                <p>Thank you for your message! We will get back to you shortly.</p>
            </div>
        <?php endif; ?>
    </div>

    <?php include '../includes/footer.php'; ?>
</body>
</html>
