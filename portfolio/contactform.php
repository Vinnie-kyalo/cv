<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="style4.css">
    
    
 
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="about.html">ABOUT ME</a></li>
                <li><a href="skills.html">SKILLS</a></li>
                <li><a href="resume.html">RESUME</a></li>
                <li><a href="contactform.php">CONTACT</a></li>
                
            </ul>
        </nav>
    </header>
<form action="contact.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required><br><br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea><br>
            <button type="submit">Submit</button>
            <br>
            <br>
</form>
</body>
 
</html>
