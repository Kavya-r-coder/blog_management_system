
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <style>
        
/* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
}



/* Main Content */
main {
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

h1 {
    color: #333;
    font-size: 28px;
    margin-bottom: 20px;
    text-align: center;
}

h2 {
    color: #333;
    font-size: 24px;
    margin-top: 40px;
    margin-bottom: 20px;
    border-bottom: 2px solid #1abc9c;
    padding-bottom: 10px;
}

/* Blog Cards */
.blogs{
    display: flex;
    flex-wrap: wrap;
    width:1600px;
    gap: 20px;
}
 .users {
    display: flex;
    flex-wrap: wrap;
    
    gap: 20px;
}

.blog, .users p {
    background: #ffffff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    width: calc(48% - 10px); /* For two-column layout */
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

        </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <h1>Blog Management system</h1>
            <a href="admin.php">Home</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <h1> Welcome Admin </h1>
        <h2>Manage Blogs</h2>
        <div class="blogs">
           
            </div>
            <div class="footer-section contact">
                <h4>CONTACT US</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Presidency University, Bangalore</li>
                    <li><i class="fas fa-envelope"></i> presidencyuniversity.in</li>
                    <li><i class="fas fa-phone"></i> +91 8082314566</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 Blog Management System. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
