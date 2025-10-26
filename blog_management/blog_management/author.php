
<?php


$conn = new mysqli('localhost', 'root', '', 'blog');
$author_id = $_SESSION['user_id'];
$blogs = $conn->query("SELECT * FROM blogs WHERE author_id = $author_id ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Author Dashboard</title>
    <link rel="stylesheet" href="style1.css">
    <style>
       /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background: #f5f7fa;
    color: #333;
    line-height: 1.6;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* Navigation Bar */

footer {
            background: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 20px;
            opacity: 1; /* For animation */
            transform: translateY(50px); /* Initial position for animation */
            transition: all 1s ease-in-out;
        }
        .footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 0 auto;
}

.footer-section {
  flex: 1;
  margin: 0 20px;
}

.footer-section h4 {
  font-size: 18px;
  margin-bottom: 15px;
}

.footer-section p {
  font-size: 14px;
  line-height: 1.6;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.footer-section ul li {
  font-size: 14px;
  margin-bottom: 10px;
}

.footer-section ul li i {
  margin-right: 10px;
}

.footer-bottom {
  text-align: center;
  margin-top: 20px;
  font-size: 14px;
}

.footer-section ul li:hover {
  color: #1abc9c;
  cursor: pointer;
}

.footer-bottom p {
  margin: 0;
  font-size: 14px;
}

.footer-section ul li i {
  color: #ecf0f1;
}


/* Responsive Design */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
    }

    .navbar a {
        margin: 10px 0;
    }

    main h1 {
        font-size: 2rem;
    }

    .blog-item h2 {
        font-size: 1.3rem;
    }
}
</style>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="author.php">Home</a>
            <a href="#about">About Us</a>
            <a href="logout.php">Logout</a>
            <a href="my_blogs.php">My Blogs</a>
        </nav>
    </header>
    <main>
        <h1>Welcome, Author</h1>
        
            
    <?php include 'fetch.php'; ?>
    </main>
    <footer id="footer">
        <div class="footer-container">
            
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 Blog Management System. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

