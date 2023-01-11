<?php 
    // include('../config.php');

    $errors =array();
    if(isset($_POST['reg_user'])) {
        //register new admin user
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password_1 = trim($_POST['password_1']);
        $password_2 = trim($_POST['password_2']);
        //check if passwords match
        if($password_1 != $password_2) {
            array_push($errors, "User not created. The passwords do not match");
        }
        //ensure no user is registered twice
        $user_check_query = "SELECT * FROM users WHERE email='$email'";

        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            array_push($errors, "Email already exists");
        }

        if(count($errors)==0) {
            $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password_1')";
            mysqli_query($conn, $query);
            $_SESSION['success'] = "New Admin User Created";
        }
    }
    

    // LOGIN USER
    if (isset($_POST['login_user'])) {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($conn, $query);
        $uname = mysqli_fetch_assoc($results);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $uname['username'];
            // $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    } 

    //selecting data from database
    $sqli = "SELECT * FROM admin WHERE id=1";
    $resulti = mysqli_query($conn, $sqli);
    $admini = mysqli_fetch_assoc($resulti);

     //image formatting to send to database
     function imgFormat($vname, $iname) {
        global $conn, $admini;
        $vname = $_FILES[$iname]["name"];
        $tempname = $_FILES[$iname]["tmp_name"];
        $folder = "./image/" . $vname;
        // if (move_uploaded_file($tempname, $folder)) {
        //     error_log("image uploaded successfully");
        // } else {
        //     error_log("failed to upload image");
        // }
        if ($vname!="") {
            move_uploaded_file($tempname, $folder);
        } else {
            $vname = $admini[$iname];
        }
        return $vname;
    }

    if(isset($_POST['submit'])) {
        //assign variables
        $name = $_POST['name'];
        $description = $_POST['description'];
        $home = $_POST['home'];
        $car = $_POST['car'];
        $dry = $_POST['dry'];
        $image1 = imgFormat('$image1', 'image1');
        $image2 = imgFormat('$image2', 'image2');
        $image3 = imgFormat('$image3', 'image3');
        $image4 = imgFormat('$image4', 'image4');
        $image5 = imgFormat('$image5', 'image5');
        $image6 = imgFormat('$image6', 'image6');
        //sql
        // $query = "INSERT INTO admin (name, description, homePrice, carPrice, dryPrice, image1, image2, image3, image4, image5, image6, created_at, updated_at) VALUES ('$name', '$description', '$home', '$car', '$dry', '$image1', '$image2', '$image3', '$image4', '$image5', '$image6', now(), now())";

        $query = "UPDATE admin SET name='$name', description='$description', homePrice='$home', carPrice='$car', dryPrice='$dry', image1='$image1', image2='$image2', image3='$image3', image4='$image4', image5='$image5', image6='$image6', updated_at=now() WHERE id=1";
        mysqli_query($conn, $query);

        
    }

    //selecting data from database
    $sql = "SELECT * FROM admin WHERE id=1";
    $result = mysqli_query($conn, $sql);
    $admin = mysqli_fetch_assoc($result);
    $namev = $admin['name'];
    $descriptionv = $admin['description'];
    $homev = $admin['homePrice'];
    $carv = $admin['carPrice'];
    $dryv = $admin['dryPrice'];
    $image1v = $admin['image1'];
    $image2v = $admin['image2'];
    $image3v = $admin['image3'];
    $image4v = $admin['image4'];
    $image5v = $admin['image5'];
    $image6v = $admin['image6'];
?>
