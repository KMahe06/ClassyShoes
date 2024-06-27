<!DOCTYPE html>
<html lang="en">
<?php include 'head.html'; ?>
<head>
    <title>About Me</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
      
        .headlink {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100%;
            margin: 0;
            background-image: url('https://media.gq.com/photos/63e2b84fc3e6ea31f7c7dd30/16:9/w_2560%2Cc_limit/best-shoe-brands-nike-asics-celine.jpg'); /* Replace 'your-image.jpg' with your actual image path */
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }

        .content {
            padding: 40px;
            max-width: 800px;
            background-color: rgba(240, 240, 240, 0.9);
            color: black;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .content h2 {
            color: black;
            margin-top: 0;
        }
        
        .catch-up {
            margin-top: 30px;
            margin-bottom: 10px;
        }

        .catch-up a {
            font-style: oblique;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            background-color: #4BBEC5;
        }

        .catch-up a:hover {
            background-color: #4BACC5;
        }
    </style>
</head>
<body>
    <div class="headlink">
        <div class="content">
            <h2>About Me</h2>
            <p>Hi, I'm Mahesh, currently pursuing my engineering degree at RMK Engineering College, Chennai. I am passionate about technology, coding, and engineering solutions that can impact the world positively.</p>
            <p>At RMK Engineering College, I am involved in various projects that span different domains of engineering. My interests include software development, data science, and embedded systems. I enjoy learning new skills and applying them to real-world problems.</p>
            <p>If you would like to know more about my projects or discuss potential collaborations, feel free to reach out to me!</p>

            <div class="catch-up">
                <a href="contact.php">Catch Up With Me</a>
            </div>
            <p>If you have any queries please ping me up!</p>
            <div class="catch-up">
                <a href="register.php">Update</a>
            </div>
        </div>
    </div>

    <?php include 'footer.html'; ?>
</body>
</html>
