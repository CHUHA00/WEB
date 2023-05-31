<!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="main.css">
        <title>HASH TECHIE OFFICIAL</title>
    </head>

    <body>

    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropdown-item">Categories</button>
                        <div class="dropdown-content">
                            <select name="" id="">
                                <option value=""><a href="#">Easy</a></option>
                                <option value=""><a href="#">Normal</a></option>
                                <option value=""><a href="#">Difficult</a></option>
                            </select>
                        </div>
                    </div>
                </li>
                <li><a href="#">About Us</a></li>
                <li><a href="login_signin.php" target="--">Logo In</a></li>
                <li><a href="login_signup.php" target="--">Register</a></li>
            </ul>
        </nav>
    </header>

        <section>

        
            <div class="form-box">
                <div class="form-value">
                    <form action="">
                        <h2>Sign In</h2>
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="email" required>
                            <label for="">Email</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" required>
                            <label for="">Password</label>
                        </div>
                        <div class="forget">
                            <label for=""><input type="checkbox">Remember Me <a href="#">Forget Password</a></label>

                        </div>
                        <button>Log in</button>
                        <div class="register">
                            <p>Don't have a account <a href="#">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

    </html>

</body>

</html>