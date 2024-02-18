<?php
    include "conn.php";
    session_start();

    //this code is for registration
    if(isset($_POST['Register']));
        $cn = $_POST['cn'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        //validate email/user
        $validate_email = mysqli_query($conn, "SELECT * FROM users  WHERE email='$email'");

        $validate_num = mysqli_num_rows($validate_email);

        if($validate_num <=0){

        $insert = mysqli_query($conn, "INSERT INTO users 
        VALUES ('0', '$cn', '$email', '$pass')");

        if($insert == true){
            ?>
                <script>
                    alert("Registration Successfully Accepted!");
                    window.location.href="index.php"
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert("Error in Registration");
                    window.location.href="reg.php"
                </script>
            <?php
            }
        }else{
                ?>
                    <script>
                        alert("Account Already Registred!");
                        window.location.href="reg.php"
                    </script>
                <?php
        }

?>