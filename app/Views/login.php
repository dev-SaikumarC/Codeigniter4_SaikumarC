<!-- app/Views/login_form.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
</head>

<body>
    <div class="container" style="margin-top: 25px;">
        <div class="row">
            <div class="col s12 m3"></div>
            <div class="col s12 m6">
                <div class="card-panel">
                    <div class="card-content">
                        <h5 class="center-align"><b>Login</b></h5>
                        <div class="row">
                            <form class="col s12" action="/login/processLogin" method="post">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" name="email" class="validate" required>
                                        <label for="email">Enter Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" name="password" class="validate" required>
                                        <label for="password">Enter Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="center">
                                            <!-- <button type="submit" class="modal-close waves-effect waves-green btn">Create Post</button> -->
                                            <button type="submit" class="waves-effect waves-green btn" style="width:250px;">Login</button>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                // Display error message, if any
                                if (session()->has('error')) {
                                    echo '<p style="color: red;">' . session('error') . '</p>';
                                }
                                ?>
                                <h6 style="padding-top: 20px;">New User? <a style="color:#26a69a;" href="<?= base_url('registration') ?>">here to Sing-up!</a></h6>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m3"></div>
        </div>
    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>