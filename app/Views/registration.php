<!-- app/Views/register_form.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="container" style="margin-top: 25px;">
        <div class="row">
            <div class="col s12 m3"></div>
            <div class="col s12 m6">
                <div class="card-panel">
                    <div class="card-content">
                        <h5 class="center-align"><b>Register</b></h5>
                        <div class="row">
                            <form class="col s12" action="/register/processRegistration" method="post">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Name" id="name" name="name" type="text" class="validate" required>
                                        <label for="name">Enter Your Name</label>
                                    </div>
                                </div>
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
                                            <button type="submit" class="waves-effect waves-green btn" style="width:250px">Register</button>
                                        </div>
                                    </div>
                                </div>
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