<?php
session_start();
#koneksi db
$host = "localhost"; # host database
$dbname = ""; # ganti nama database
$dbusername = ""; # username mysql
$dbpassword = ""; # password mysql
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

#ini gk terlalu penting
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT id, username, AES_DECRYPT(pass,'aswqlkiopekdjliosuiopwesamiewqsq') as pass, nama FROM user WHERE username = '$username'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0){
        $row = $result->fetch_assoc();

        if ($password == $row['pass']) {
            $_SESSION["nama"] = $row["nama"];
            header("Location: dashboard.php");
        } else {
            echo '
            <script>
                alert("Password Salah!")
                window.location.href="login_page.html"
            </script>
            ';
        }
    } else {
        echo '
        <script>
            alert("Password atau Username Salah!")
            window.location.href="login_page.html"
        </script>
        ';
    }
}
$conn->close();
?>
