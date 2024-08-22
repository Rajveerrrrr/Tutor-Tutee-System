
<?php
session_start(); // Start the session at the beginning
include 'connect.php';

// Check if the user is already logged in and redirect to index.php
if (isset($_SESSION['emp_code'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['submit'])) {
    $emp_code = $_POST['emp_code'];
    $emp_code = mysqli_real_escape_string($conn, $emp_code);

    // Check additional faculty tables using emp_code
    $faculty_tables = array(
        'faculty_me', 'faculty_cse', 'faculty_ee', 'faculty_civil', 
        'faculty_ece', 'faculty_human', 'faculty_tech', 
        'faculty_math', 'faculty_physics', 'faculty_chemistry', 'faculty_1year'
    );

    $authenticated = false;
    foreach ($faculty_tables as $table) {
        $query = "SELECT emp_name FROM $table WHERE emp_code ='$emp_code'";
        $result = $conn->query($query);
        if ($result && $result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $emp_name = $row['emp_name'];
            $_SESSION['emp_code'] = $emp_code; // Store emp_code in session
            $_SESSION['emp_name'] = $emp_name; // Store emp_name in session
            $authenticated = true;
            break;
        }
    }

    // If authenticated, redirect to index.php, otherwise show error
    if ($authenticated) {
        header("Location: index.php");
        exit(); 
    } else {
        header("Location: login.php?error=1");
        exit(); 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-img3-body">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Add your logo here or adjust the image source -->
                    <img src="img/Jodhpur_Institute_of_Engineering_and_Technology_logo.png" alt="JIET UNIVERSE Logo">
                </div>
                <div class="col-md-6 text-right">
                    <h1>JIET UNIVERSE</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <?php if(isset($_GET['error'])): ?>
            <p style="color: red;">Invalid Employee Code. Please try again.</p>
        <?php endif; ?>

        <form class="login-form" method="post">
            <div class="login-wrap">
                <p class="login-img"><i class="icon_lock_alt"></i></p>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="text" class="form-control" name="emp_code" placeholder="Employee Code" autofocus required>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>
            </div>
        </form>
        <div class="space"></div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Add your contact information here -->
                    <h4>JIET UNIVERSE</h4>
                    <p>Address: JIET Universe, NH-62, Pali Road, Mogra, Jodhpur - 342802</p>
                    <p>Email: info@jietjodhpur.ac.in</p>
                    <p>Phone: 0291-2868152, 0291-2868153 </p>
                    <p>Mobile: 9001895774, 9799999186</p>
                    <p>WhatsApp.: +91-9799999186</p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="credits"></div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
