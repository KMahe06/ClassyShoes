<!DOCTYPE html>
<html lang="en">
<?php include 'head.html'; ?>
<head>
    <title>Registration Form </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .linkindex{
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
            padding: 20px;
            width: 900px;
            height: 550px;
            margin: auto;
            background-color: rgba(240, 240, 240, 0.9);
            border-radius: 0px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .content h2{
            text-align: center;
        }
      
        table {
            width: 800px;
            height: 500px;
            border-collapse: collapse;
        }

        table th {
           margin-left: 100px;
           align-content: center;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        .registration-form button {
            padding: 10px 20px;
            background-color: #4BBEC5;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .registration-form button:hover {
            background-color: #4BACC5;
        }

   
    </style>
</head>
<body>
   <div class="linkindex">
    <div class="content">
        <h2>Submit Your Query</h2>
        <form class="registration-form" action="submit_query.php" method="POST">
            <table>
                <tr>
                    <th><label for="name">Name:</label></th>
                    <td><input type="text" id="name" name="name" required></td>
                </tr>
                <tr>
                    <th><label for="dob">Date of Birth:</label></th>
                    <td><input type="date" id="dob" name="dob" required></td>
                </tr>
                <tr>
                    <th><label for="mobile">Mobile Number:</label></th>
                    <td><input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" required></td>
                </tr>
                <tr>
                    <th><label for="email">Email ID:</label></th>
                    <td><input type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                    <th><label for="query">Your Query:</label></th>
                    <td><textarea id="query" name="query" rows="5" required></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><button type="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </div>
    </div>
    <?php include 'footer.html'; ?> 
</body>
</html>
