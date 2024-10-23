<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UTS Atthalaric Nero. M 2341720215</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
            <a class="navbar-brand" style="font-weight: bold; font-size: 3;">Laundry XYZ</a>
            </div>
        </nav>
        <div class="container" style="width: 500px; height: 300px; align-content: center; border: 1px solid blue; margin: 40px auto; padding: 10px 10px 10px 10px">
            <h5 align="center">Mohon login terlebih dahulu</h5>
            <form id="formLogin" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="" class="form-control">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="" class="form-control">
            <input type="submit" value="Login" class="btn btn-primary" style="margin-left: 400px; margin-top: 20px;">
            </form>
            <div id="hasil" style="margin-top: 20px;"></div>
        </div>

        <script>
          $("#formLogin").submit(function(e) {
            e.preventDefault(); 

            var username = $("#username").val();
            var password = $("#password").val();
            var valid = true;

            $("#hasil").html("");

            
            if (password == "" || username == "") {
                $("#hasil").html("Harus diisi!");
                valid = false;
            } else if (password.length > 6) {
                $("#hasil").html("Password maksimal 6 karakter");
                valid = false;
            } else if (!/[A-Z]/.test(password) || !/[a-z]/.test(password)) {
                $("#hasil").html("Password harus terdiri dari huruf besar dan kecil");
                valid = false;
            }

            if (!valid) {
                return;
            }

            var formData = $("#formLogin").serialize();

            $.ajax({
                url: "proses_login.php",
                type: "POST",
                data: formData,
                success: function(response) {
                    window.location.href = "home.php";
                }
            });
        });
        </script>
    </body>
</html>
