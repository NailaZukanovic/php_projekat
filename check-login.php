<?php
    include("inc/header.php");
    // login_check_pages();




if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['nalog'])) {

    function test_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $nalog = test_input($_POST['nalog']);

    if(empty($email)) { 
        header("Location: login.php?error=Polje E-mail ne može biti prazno");
    }else if(empty($password)) {
        header("Location: login.php?error=Polje lozinka ne može biti prazno");
    }else { 
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = query($sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password']) && $row['nalog'] == $nalog) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['nalog'] = $row['nalog'];
                $_SESSION['username'] = $row['username'];

                header("Location: index.php");
            } else {
                header("Location: login.php?error=Vaša e-mail adresa ili lozinka su netačni");
            }
        } else {
            header("Location: login.php?error=Vaša e-mail adresa ili lozinka su netačni");
        }
    }

    

} else {
    header("Location: ../index.php");
}