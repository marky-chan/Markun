<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fishing Adventures</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #e3f2fd;
        }

        header {
            background: #0277bd;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background: #01579b;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .hero {
            background-image: url('https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd');
            background-size: cover;
            background-position: center;
            height: 350px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 5px #000;
            font-size: 2.5rem;
            font-weight: bold;
        }

        .container {
            padding: 40px;
            text-align: center;
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #01579b;
        }

        .fish-cards {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .card {
            background: white;
            padding: 20px;
            width: 250px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        footer {
            margin-top: 40px;
            background: #01579b;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>

<header>
    <h1>Fishing Adventures</h1>
    <p>Explore the beauty of the waters</p>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#">Fishing Tips</a>
    <a href="#">Gallery</a>
    <a href="#">Contact</a>
</nav>

<div class="hero">
    Experience the thrill of fishing!
</div>

<div class="container">
    <h2 class="section-title">Popular Fishing Spots</h2>

    <div class="fish-cards">
        <div class="card">
            <h3>Lake Serenity</h3>
            <p>Known for its calm waters and bass fishing.</p>
        </div>

        <div class="card">
            <h3>Blue River</h3>
            <p>Perfect for trout and peaceful scenery.</p>
        </div>

        <div class="card">
            <h3>Sunset Bay</h3>
            <p>A favorite spot for saltwater anglers.</p>
        </div>
    </div>
</div>

<footer>
    &copy; 2025 Fishing Adventures | All Rights Reserved
</footer>

</body>
</html>
