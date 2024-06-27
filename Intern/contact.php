<!DOCTYPE html>
<html lang="en">
<?php include 'head.html'; ?>
<head>
    <title>Contact Me </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        
        .headlink{
            align-content: center;
            
            height: 500px;
            width: 100%;
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            background-image: url('https://media.gq.com/photos/63e2b84fc3e6ea31f7c7dd30/16:9/w_2560%2Cc_limit/best-shoe-brands-nike-asics-celine.jpg'); /* Replace 'your-image.jpg' with your actual image path */
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }
        .content {
            padding: 20px;
            height: 500px;
           width: 800px;
            margin: auto;
            color: black;
           background-color: rgba(240, 240, 240, 0.9);
            background-size: cover  ;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
            margin-bottom: 20px;
            text-align: center;
            color: black;
        }

        .contact-info h2 {
            margin-top: 0;
        }

        .contact-info p {
            margin: 5px 0;
        }

        .map {
            text-align: center;
            margin-top: 20px;
        }

        .map iframe {
            width: 100%;
            height: 250px;
            border: none;
            border-radius: 8px;
        }

       
    </style>
</head>
<body>
    <div class="headlink">
    <div class="content">
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p><strong>Name:</strong> Mahesh</p>
            <p><strong>Email:</strong> <a href="mailto:mahesh@example.com">mahesh@example.com</a></p>
            <p><strong>Phone:</strong> +91-1234567890</p>
        </div>

        <div class="map">
            <h2>My Location</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15527.587635257718!2d80.1413034!3d13.3566859!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4d807de229f987%3A0x11cc13e2927bfabc!2sR.M.K.%20Engineering%20College!5e0!3m2!1sen!2sin!4v1718751838944!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>
