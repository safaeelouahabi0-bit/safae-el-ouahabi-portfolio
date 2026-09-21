<?php

// ===== INFORMATIONS DE SAFAE =====

$nom = "Safae";

$formation = "Étudiante en Développement Digital";

$description = "Je suis une étudiante passionnée par le développement web,
la création de sites et les nouvelles technologies.
Je développe progressivement mes compétences en HTML, CSS, JavaScript et PHP.";

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio - <?php echo $nom; ?></title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #fff8fb;
            color: #333;
        }

        header {
            width: 100%;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 25px;
            font-weight: bold;
            color: #d88ba8;
        }

        .logo img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #f1b6ca;
        }

        nav a {
            text-decoration: none;
            color: #444;
            margin-left: 30px;
            font-size: 16px;
            transition: 0.3s;
        }

        nav a:hover {
            color: #d88ba8;
        }

        .home {
            min-height: 90vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 60px 10%;
        }

        .home-text {
            width: 55%;
        }

        .welcome {
            color: #d88ba8;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .home-text h1 {
            font-size: 55px;
            color: #333;
            margin-bottom: 15px;
        }

        .home-text h1 span {
            color: #d88ba8;
        }

        .home-text h2 {
            font-size: 25px;
            font-weight: normal;
            color: #666;
            margin-bottom: 20px;
        }

        .description {
            font-size: 17px;
            line-height: 1.7;
            color: #666;
            max-width: 550px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 13px 25px;
            background-color: #d88ba8;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            margin-right: 10px;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #c56f91;
            transform: translateY(-3px);
        }

        .btn2 {
            background-color: transparent;
            color: #d88ba8;
            border: 2px solid #d88ba8;
        }

        .btn2:hover {
            background-color: #d88ba8;
            color: white;
        }

        .home-image {
            width: 35%;
            display: flex;
            justify-content: center;
        }

        .circle {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background-color: #f6dce7;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 100px;
            box-shadow: 0 10px 30px rgba(216,139,168,0.2);
        }

        @media (max-width: 768px) {

            header {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 8px;
            }

            .home {
                flex-direction: column;
                text-align: center;
                gap: 50px;
            }

            .home-text {
                width: 100%;
            }

            .home-text h1 {
                font-size: 40px;
            }

            .home-image {
                width: 100%;
            }

            .circle {
                width: 220px;
                height: 220px;
                font-size: 70px;
            }
        }

    </style>

</head>

<body>

<header>

    <div class="logo">

        <img src="/images/safae.jpg" alt="Photo de Safae">

        <span>
            <?php echo $nom; ?>
        </span>

    </div>

    <nav>

        <a href="/">Accueil</a>

        <a href="/">À propos</a>

        <a href="/doc.php">Projets</a>

        <a href="/contact.php">Contact</a>

    </nav>

</header>


<section class="home">

    <div class="home-text">

        <p class="welcome">
            Bienvenue sur mon portfolio ✨
        </p>

        <h1>
            Bonjour, je suis
            <span><?php echo $nom; ?></span>
        </h1>

        <h2>
            <?php echo $formation; ?>
        </h2>

        <p class="description">
            <?php echo $description; ?>
        </p>

        <a href="/doc/IMG_9539.JPG" class="btn">
            Voir mes projets
        </a>

        <a href="/contact.php" class="btn btn2">
            Me contacter
        </a>

    </div>

    <div class="home-image">

        <div class="circle">
            💻
        </div>

    </div>

</section>

</body>

</html>