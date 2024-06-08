<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome icones CDN Link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login in to Hulk-bulk fitness</title>
    <!-- Linking css code file -->
    <link rel="stylesheet" href="./css/logindesign.css">
</head>

<body>
    <h1 class="project-title">Welcome to Hulk-Hulk fitness</h1>
    <div class="main-content">
        <div class="logo">
            <a href="./index.php"><img src="./img/logo.png" alt=""></a>
        </div>
        <div class="sign-in">
            <div class="container">
                <div>
                    <h1>Log in</h1>
                    <h5>Welcome to Hulk-Bulk</h5>
                    <form action="" method="post">
                        <div>
                            <p><label for="email">Email</label></p>
                            <input type="text" id="email" name="user_email" required>
                        </div>
                        <div>
                            <p><label for="password">Password</label></p>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <button type="submit" id="btn">Log in</button>
                        <!-- <p>Not a registered user? <a href="signup.php">Sign Up</a></p> -->
                    </form>

                    <!-- Social media icons -->
                    <div class="socialIcons">
                        <h6><strong>Or connect with us - </strong></h6>
                        <div class="icon"><i class="fab fa-instagram"></i></div>
                        <div class="icon"><i class="fab fa-facebook"></i></div>
                        <div class="icon"><i class="fab fa-twitter"></i></i></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
</body>

</html>

<?php

session_start();

include("connection.php");
include("functions.php");



if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_email = $_POST['user_email'];
    $password = $_POST['password'];
    $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';



    if (!preg_match($pattern, $user_email)) {

        


        echo "<script>

        
            Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: 'Please enter a valid email address!',
             })
            
            </script>";
    } else if (!empty($user_email) && !empty($password)) {


        //read from database
        $query = "select * from users where email = '$user_email' limit 1";
        $result = mysqli_query($con, $query);

        if ($result == TRUE) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    $_SESSION['successMessage'] = '';
                    header("Location: admin.php");
                } else {
                    echo "<script>
                Swal.fire({
                   icon: 'error',
                   title: 'Oops...',
                   text: 'You password is incorrect!!',
                 })
                
                </script>";
                }
            } else {
                echo "<script>
                Swal.fire({
                   icon: 'warning',
                   title: 'Oops...',
                   text: 'No users found for the given email address!!',
                 })
                
                </script>";
            }
        } else {
            echo "no records found";
        }
    }
}

?>

<?php
if (@$_GET['registered'] == 'true')
    echo "<script>
Swal.fire({
   icon: 'success',
   title: 'Thank You',
   text: 'You have registered successfully!!',
 })

</script>";
?>