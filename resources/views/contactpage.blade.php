<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Fishing Adventures</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; background-color: #e3f2fd; }
        header { background: #0277bd; color: white; padding: 20px; text-align: center; }
        nav { background: #01579b; padding: 10px; text-align: center; }
        nav a { color: white; text-decoration: none; margin: 0 15px; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        .container { padding: 40px; max-width: 600px; margin: auto; }
        h2 { text-align: center; color: #01579b; }
        form { background: white; padding: 20px; border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        label { font-weight: bold; }
        input, textarea {
            width: 100%; padding: 10px; margin-top: 5px; margin-bottom: 15px;
            border-radius: 5px; border: 1px solid #ccc;
        }
        button {
            background: #0277bd; color: white; padding: 10px 20px; border: none;
            border-radius: 5px; font-size: 1rem; cursor: pointer;
        }
        button:hover { background: #01579b; }
        footer { margin-top: 40px; background: #01579b; color: white; text-align: center; padding: 15px; }
    </style>
</head>
<body>

<header>
    <h1>Fishing Adventures</h1>
    <p>Get in touch with us</p>
</header>

<nav>
    <a href="index.html">Home</a>
    <a href="about.html">About</a>
    <a href="contact.html">Contact</a>
</nav>

<div class="container">
    <h2>Contact Form</h2>

    <form>
        <label>Name:</label>
        <input type="text" placeholder="Enter your name" required>

        <label>Email:</label>
        <input type="email" placeholder="Enter your email" required>

        <label>Message:</label>
        <textarea rows="5" placeholder="Type your message here..." required></textarea>

        <button type="submit">Send Message</button>
    </form>
</div>

<footer>
    &copy; 2025 Fishing Adventures | All Rights Reserved
</footer>

</body>
</html>
