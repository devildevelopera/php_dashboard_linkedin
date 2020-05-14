<?php
include('db.php');
// print_r(count($_POST['data']));

for ($x = 0; $x < count($_POST['data']); $x++) {

    $name = $_POST['data'][$x]['name'];
    $position = $_POST['data'][$x]['position'];
    $company = $_POST['data'][$x]['company'];
    $location = $_POST['data'][$x]['location'];
    $profile = 'https://www.linkedin.com/sales/people/'.$_POST['data'][$x]['profile'];

    $sameprofilesql = "SELECT * FROM `profile`
    WHERE `profile`=$profile;";
    $searchresult = $con->query($sameprofilesql);
    if($searchresult) {
        continue;
    }

    $phone = $_POST['data'][$x]['phone'];
    $email = $_POST['data'][$x]['email'];
    $url = $_POST['data'][$x]['url'];
    $social = $_POST['data'][$x]['social'];
    $sDate = date("Y-m-d H:i:s");

    $insertsql = "INSERT INTO `profile` (`name`, `position`, `company`, `location`, `profile`, `phone`, `email`, `url`, `social`, `created_on`)
                    VALUES ('$name', '$position', '$company', '$location', '$profile', '$phone', '$email', '$url', '$social', '$sDate')";

    mysqli_query($con,$insertsql);
  }

$con->close();
?>