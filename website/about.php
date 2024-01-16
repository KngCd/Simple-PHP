<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muzon 2nd Citizens Information</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
            color: #333;
            text-align: center;
        }

        header {
            background: linear-gradient(to right, #3498db, #2ecc71);
            color: #ffffff;
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            font-size: 2em;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .pp {
            margin-top: 10px;
        }

        nav {
            background-color: #333;
            padding: 10px;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2em;
            transition: color 0.3s ease-in-out;
        }

        nav a:hover {
            color: #3498db;
        }

        button {
            background-color: #2ecc71;
            color: #ffffff;
            border: none;
            padding: 15px 30px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        /* Hover animation for button */
        button:hover {
            background-color: #27ae60;
        }

        section {
            padding: 40px;
            color: #333;
        }

        .section {
            padding-top: 10px;
            margin-bottom: 22px;
        }

        footer {
            background: #333;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }

    </style>
</head>
<body>
    <header>
        <h3>Muzon Segundo <br> Municipality of Alitagtag <br> Province of Batangas</h3>
        <p class = "pp">Muzon 2nd Citizen's Information</p>
    </header>

    <nav>
        <a href = "index.php">Home</a>
        <a href = "#">About Us</a>
        <a href = "#">Services</a>
        <a href = "#">Register</a>
        <a href = "#">Contact</a>
    </nav>

    <section class = "section">
        <h3>About Us</h3>
        <?php
         // Example PHP inclusion for dynamic content
            $currentYear = date("Y");
            $info = "Muzon Segundo is a barangay in the municipality of Alitagtag, in the province of Batangas. Its population as determined by the 2020 Census was 2,294. This represented 8.55% of the total population of Alitagtag. The population of Muzon Segundo grew from 1,323 in 1990 to 2,294 in 2020, an increase of 971 people over the course of 30 years. The latest census figures in 2020 denote a positive growth rate of 0.06%, or an increase of 6 people, from the previous population of 2,288 in 2015.";
            echo "<p>$info</p>";
           
        ?>
    </section>

    <footer>
        <p class = "ft">&copy; <?php echo $currentYear; ?> Muzon 2nd Citizens Information. All rights reserved.</p>
    </footer>
</body>
</html>
