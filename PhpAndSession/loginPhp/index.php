<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <div class="navbar">
    <header>
        <h1 class="logobm">
        <span class="bm" style="color:#4285F4;">B</span>
        <span class="bm" style="color:#EA4335">i</span>
        <span class="bm" style="color:#FBBC05">l</span>
        <span class="bm" style="color:#4285F4">l</span>
        <span class="bm" style="color:#34A853">y</span>
        <span class="bm" style="color:#EA4335; margin-left: 3px;">M</span>
        <span class="bm" style="color:#4285F4">i</span>
        <span class="bm" style="color:#EA4335">l</span>
        <span class="bm" style="color:#FBBC05">l</span>
        <span class="bm" style="color:#34A853">o</span>
    </h1>
    <h2>(KUMPULAN TUGAS PHP)</h2>
    <h3>[Muhammad Brilliant Hijriadhily Adl| 12309841 | PPLG X-3]</h3>
    </header>    
</div>
    <div class = "box">
        <div class="cardbox">
    <form action="" method="POST">
        <div class = "login">
        <h1 style="margin: 50px;">Login Your Account</h1>
        <div class="input email">
            <input type="text" name="login" placehorder="Your Nickname"></div>
        <div class="input password">
            <input type="password" name="password" placehorder="Your Password"></div>
        <br>
        <button class="input" type="submit" value="submit" name="submit">Submit</button required>
        </div>
        <?php
        session_start();
        $login_name = 'Billy';
        $password_input = 'Rahasia123';
        $percobaan = 3;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $password = $_POST['password'];
            $login = $_POST['login'];
        
        if($login === $login_name && $password === $password_input){
            $_SESSION['login'] = $login;
            header('Location: http://localhost/loginPhp/tugas.php');
            exit;
        } else{
            echo "<h3 style= 'color: red; text-align: center;'>YOUR USERNAME OR PASSWORD ARE WRONG!!</h3>";
        }
        }
        ?>
    </form>
    </div>
    </div>
</body>
</html>