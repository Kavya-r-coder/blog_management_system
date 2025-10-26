
        /* Left Section */
        .left-panel {
            flex: 1;
            background: #2c3e50;/*#2cc49c; /* Gradient Background */
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 50px;
        }

        .left-panel h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .left-panel p {
            font-size: 1rem;
            margin-bottom: 30px;
        }

       

        form {
            max-width: 400px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        form input {
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
        }

        form input:focus {
            outline: none;
            border: 1px solid #2cc49c;
            box-shadow: 0 0 5px rgba(44, 196, 156, 0.5);
        }

        form button {
            padding: 12px 20px;
            background: #2c3e50;/*#2cc49c;*/
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background: #249d86;
        }

        .error {
            color: red;
            text-align: center;
            margin: 10px 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                width: 90%;
                height:auto;
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
            <h1>New Here?</h1>
            <p>Create an account to join our community!</p>
            <button onclick="window.location.href='register.php'">Sign Up</button>
        </div>

        <!-- Right Section -->
        <div class="right-panel">
            <h2>Login</h2>
            <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
            <form method="post" action="login.php">
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>

