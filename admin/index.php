<?php 

//To Do: Login Needed
    require_once('scripts/config.php');
    confirm_logged_in();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to your admin panel</title>
</head>
<body>

    <h1>Admin Dashboard</h1>
    <h3>Welcome <?php echo $_SESSION['user_name'];?></h3>
    <p>This is the admin dashboard</p>

    <nav>
        <ul>
            <li><a href="#">Create User</a></li>
            <li><a href="#">Edit User</a></li>
            <li><a href="#">Delete User</a></li>
            <li><a href="scripts/caller.php?caller_id=logout">Sign Out</a></li>
        </ul>
    </nav>




<!-- displays time last logged in  -->
<?php
date_default_timezone_set('EST');

if(isset($_COOKIE['Visit']))

{
$visitedLast = $_COOKIE['Visit']; 
}
$year = 31536000 + time() ;
//this adds one year to the current time, for the cookie expiration
setcookie(Visit, time (), $year) ;
if (isset ($visitedLast))
{
echo "You last logged in on ". date("l, F j, Y g:ia", $visitedLast) ;
}
?> 

<br>
<br>

<?php
// $hour = date('H');
// $dayTerm = ($hour > 17) ? "Evening" : ($hour > 12) ? "Afternoon" : "Morning";
// echo "Good " . $dayTerm;
?> 

<?php
    //using 24 hour clock, hour variable is set
    $hour = date("H");
    if ($hour < "12") {
        echo "Good Morning!";
    } else if ($hour >= "12" && $hour < "17") {
        echo "Good Afternoon!";
    } else {
        echo "Good Night!";
    }
    ?>






</body>
</html>