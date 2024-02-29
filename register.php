<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit&family=Lobster&family=Oswald:wght@300&family=Poppins&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Seymour+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="loginform">
        <div class="h1">
            <h1>Registration Form</h1>
        </div>
        <form action="connect.php" method="post" id="form">
            <div class="elements">
                <label for="name">Name</label><br>
                <input class="input" type="text" name="name" id="name" placeholder="Enter your name"><br>
            </div>
            <div class="elements">
                <label for="email">Email Address</label><br>
                <input class="input" type="text" name="email" id="email" placeholder="Enter your email"><br>
            </div>
            <div class="elements">
                <label for="password">Password</label><br>
                <input class="input" type="password" name="password" id="password" placeholder="Enter password"><br>
            </div>
            <div class="elements">
                <label for="address">Address</label><br>
                <textarea class="input" type="text" name="address" id="address" cols="30" rows="3" placeholder="Enter your address"></textarea><br>
            </div>
            <div class="elements">
                <label for="num">Mobile Number</label><br>
                <input class="input" type="text" name="num" id="num" placeholder="Enter your number"><br>
            </div>
            <div class="elements">
                <label for="dob">Date of Birth</label><br>
                <input class="input" type="date" name="dob" id="dob"><br>
            </div>
            <div class="elements">
                <label for="gender">Gender</label><br>
                <label class="gender" for="male">
                    <input type="radio" name="gender" id="gender" value="male">Male</label>
                <label class="gender" for="female">
                    <input type="radio" name="gender" id="gender" value="female">Female</label>
                <label class="gender" for="gender">
                    <input type="radio" name="gender" id="gender" value="other">Others
                </label><br>
            </div>
            <button name="submit">Submit</button>
        </form>
    </div>
</body>

</html>