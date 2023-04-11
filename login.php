<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href=
    "style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6">
            <h2>Login here </h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" required>
                    </div>
            <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-secondary">Login </button>
            </form>    
        </div>
        <div class="col-md-6">
            <h2>Register here </h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                        <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-secondary">Register </button>
                </form>
            </div>    
        </div>

    </div>
</div> 
</body>
</html>