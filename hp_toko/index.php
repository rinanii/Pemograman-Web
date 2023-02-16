<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">
</head>
<body>
        <h1> SILAHKAN LOGIN </h1>
        <form action="login_proses.php" method="post">

            <div class="box-login">
                <i class="fa-solid fa-user"></i>    
                <input type="text" name="username" placeholder="username">
            </div>

            <div class="box-login">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="password">
            </div>
            
            <input type="submit" name="submit" value="Login">
        </form>
</body>
</html>