<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parko</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/auth.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Heebo" rel="stylesheet">
</head>

<body>
    <main class="container">
        <div class="card text-center custom-card">
            <div class="card-header custom-card-header">Welcome</div>
            <div class="card-body custom-card-body">
                <!-- Login Form -->
                <p>
                    <button class="btn btn-primary collapsed btn-base-auth" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseLogin" aria-expanded="false" aria-controls="collapseLogin">
                        Already have an account
                    </button>
                </p>
                <div class="collapse" id="collapseLogin">
                    <form name="login" id="login-form" class="form-signin" action="/post_login" method="post">
                        <div class="form-floating">
                            <input name="l_email" type="email" class="form-control" id="l_email" required>
                            <label for="l.email">Email</label>
                        </div>
                        <div class="form-floating">
                            <input name="l_password" type="password" class="form-control" id="l_password" required>
                            <label for="l.password">Password</label>
                        </div>
                        <button class="btn btn-bd-primary btn-auth w-100 py-2" type="submit"
                            onclick="check_user('Add')">Login</button>
                    </form>
                </div>
                <!--  {% if message %}
<p style="color: red;">{{ message }}</p>
{% endif %} -->

                <!-- Signup Form -->
                <p>
                    <button class="btn btn-primary btn-base-auth" id="signup-collapse" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseSignup" aria-expanded="false"
                        aria-controls="collapseSignup">
                        Didn't have an account? Sign Up
                    </button>
                </p>
                <div class="collapse" id="collapseSignup">
                    <form name="signup" id="signup-form" class="form-signup">
                        <div class="form-floating">
                            <input name="name" type="text" class="form-control" id="name" required>
                            <label for="s.user.name">User Name</label>
                        </div>
                        <div class="form-floating">
                            <input name="email" type="email" class="form-control" id="email" required>
                            <label for="s.email">Email</label>
                        </div>
                        <div class="form-floating">
                            <input name="phone" type="text" class="form-control" id="phone" required>
                            <label for="s.phone">Phone Number</label>
                        </div>
                        <div class="form-floating">
                            <input name="password" type="password" class="form-control" id="password" required>
                            <label for="user.password">Password</label>
                        </div>
                        <div class="form-floating">
                            <input name="user.retype.password" type="password" class="form-control"
                                id="user.retype.password" required>
                            <label for="user.retype.password">Confirm Password</label>
                        </div>
                        <button class="btn btn-bd-primary btn-auth w-100 py-2" type="submit"
                            onclick="add_user('Add')">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="navbar navbar-expand-md custom-common-footer">
        <div class="container custom-footer">
            <div class="navbar-brand">
                <a class="nav-link" style="font-size:15px">© 2023 TODO-INC</a>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="calender.php">Upgrades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Team</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom JS -->
    <script src="/frontend/adminpanel/js/auth.js"></script>
</body>

</html>