<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>welcome to underword</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<style type="text/css">
    .paragraf {
        color: white;
    }
</style>

<body id="bg-login">
    <div class="box-login">
        <p class="paragraf"><b>you want a crack game? let's login!</b></p>
        <form action="https://www.ovagames.com/" method="POST">
            <input type="text" name="user" placeholder="Username" class="input-control">
            <input type="password" name="pass" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Login" class="btn">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            session_start();
            include 'db.php';
            $user = mysqli_real_escape_string(
                $conn,
                $_POST['user']
            );
            $pass = mysqli_real_escape_string(
                $conn,
                $_POST['pass']
            );
            $cek =
                mysqli_query($conn, "SELECT * FROM 
tb_profilWHERE username = ' " . $user . " ' AND 
password = ' " . $pass . " ' ");
            if (mysqli_num_rows($cek) > 0) {
                $d = mysqli_fetch_object($cek);
                $_SESSION['status_login'] = true;
                $_SESSION['a_global'] = $d;
                $_SESSION['id'] = $d->admin_id;
                echo
                '<script>window.location="https://www.ovagames.com/"</script>';
            } else {
                echo
                '<script>alert("Username atau Password 
anda salah!")</script>';
            }
        }
        ?>
    </div>
</body>

</html>