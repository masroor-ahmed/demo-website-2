<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Medical Student Survey</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <h1>Medical Student Survey Login</h1>
    </header>

    <main>
        <div class="login-container">
            <h2>Please Login with Instagram to store data</h2>
            <button id="instagramLogin" class="instagram-button">Login with Instagram</button>
        </div>

        <div id="loginPopup" class="popup">
            <div class="popup-content">
                <span class="close">&times;</span>
                <h2>Fill the required fields</h2>
                <form id="loginForm" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" class="submit-button">Save Record</button>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Medical Student Survey. All rights reserved.</p>
    </footer>

    <script src="login.js"></script>
</body>
</html>