<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background: #f4f4f9;
        }

        /* Split-Screen Container */
        .container {
            display: flex;
            width: 80%;
            max-width: 900px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            overflow: hidden;
        }

        /* Left Section */
        .left-panel {
            flex: 1;
            background: #2c3e50;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px;
        transition: all 0.3s ease;
            font-size: 1rem;
            font-weight: bold;
        }

        .tab.active {
            background: #2c3e50;
            color: white;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 8px;
        }

        .form-group input {
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
        }

        .form-group input:focus {
            outline: none;
            border: 1px solid #2cc49c;
            box-shadow: 0 0 5px rgba(44, 196, 156, 0.5);
        }

        .right-panel button {
            width: 100%;
            padding: 12px 20px;
            background: #2c3e50;
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .right-panel button:hover {
            background: #249d86;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                width: 90%;
            }

            .left-panel, .right-panel {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Left Section -->
        <div class="left-panel">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us please login with your personal info.</p>
            <button onclick="window.location.href='login.php'">Sign In</button>
        </div>

        <!-- Right Section -->
        <div class="right-panel">
            <h2>Create Account</h2>

            <!-- Tabs for Role Selection -->
            <div class="tabs">
                <div class="tab active" id="user-tab" onclick="selectRole('user')">User</div>
                <div class="tab" id="author-tab" onclick="selectRole('author')">Author</div>
                
            </div>

            <form method="post" action="register.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your Password" required>
                </div>
                <input type="hidden" name="role" id="role-input" value="user">
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <script>
        function selectRole(role) {
            // Update the hidden input value
            document.getElementById('role-input').value = role;

            // Update the active tab
            document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
            document.getElementById(`${role}-tab`).classList.add('active');
        }

        // Show an alert if "success" parameter exists in the URL
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('success')) {
            alert('You have registered successfully! Please login.');
            // Optional: Clear the URL parameter after showing the alert
            history.replaceState(null, '', 'register.php');
        }
    </script>

</body>
</html>

