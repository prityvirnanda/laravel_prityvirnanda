<!DOCTYPE hmtl>
<html  lang="en">
    <head>
<title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
        }

        .container .form-group {
            margin-bottom: 15px;
        }

        .container .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .container .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .container .form-group button {
            width: 100%;
            padding: 8px;
            background-color: #4caf50;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
        }

        .container .form-group button:hover {
            background-color: #45a049;
        }

        .container .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="remember">Remember:</label>
                <input type="checkbox" id="remember" name="remember" required>
            </div>

            <div class="form-group">
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>




