<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- <style>
        /* Hide the default file input */
        input[type="file"] {
            display: none;
        }
    </style> -->
</head>

<body>
    <?php
    // Retrieve user data from session
    $session = session();
    $userData = $session->get('user_data');
    ?>
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <h4 class="center" style="padding-top: 20px; padding-bottom: 15px;"><b>Your Profile</b></h4>
                <div class="card-panel">
                    <div class="card-content">
                        <?php foreach ($users_profile as $profile) : ?>
                            <?php if ($profile['id'] === $userData['userid']) : ?>
                                <div class="row" style="display:flex;align-items:center;">
                                    <div class="col m6">
                                        <div class="row">
                                            <div class="col m12" style="justify-content: center; display:flex;">
                                                <img src="../images/<?php echo $profile['profile_image'] ?>" style="height:250px">
                                            </div>
                                            <div class="col m12" style="justify-content: center; display:flex;">
                                                <h3 style="padding-bottom: 10px;"><?php echo $profile['name'] ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col m6">
                                        <div class="row">
                                            <div class="col m4">
                                                <h6 style="padding-bottom: 10px;">Role</h6>
                                                <h6 style="padding-bottom: 10px;">Company</h6>
                                                <h6 style="padding-bottom: 10px;">Gender</h6>
                                                <h6 style="padding-bottom: 10px;">Mobile Number</h6>
                                                <h6 style="padding-bottom: 10px;">Experience</h6>
                                                <h6 style="padding-bottom: 10px;">DOB</h6>
                                                <h6 style="padding-bottom: 10px;">Address</h6>
                                            </div>
                                            <div class="col m8">
                                                <h6 class="right-align" style="padding-bottom: 10px;"><b><?php echo $profile['role'] ?></b></h6>
                                                <h6 class="right-align" style="padding-bottom: 10px;"><b><?php echo $profile['company'] ?></b></h6>
                                                <h6 class="right-align" style="padding-bottom: 10px;"><b><?php echo $profile['gender'] ?></b></h6>
                                                <h6 class="right-align" style="padding-bottom: 10px;"><b><?php echo $profile['mobile'] ?></b></h6>
                                                <h6 class="right-align" style="padding-bottom: 10px;"><b><?php echo $profile['experience'] ?> Years</b></h6>
                                                <h6 class="right-align" style="padding-bottom: 10px;"><b><?php echo $profile['dob'] ?></b></h6>
                                                <h6 class="right-align" style="padding-bottom: 10px;"><b><?php echo $profile['city'] ?>, <?php echo $profile['state'] ?>, <?php echo $profile['country'] ?> - <?php echo $profile['zip'] ?></b></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col m4">
                                                <h6 style="padding-bottom: 10px;">Total CLients</h6>
                                                <h6 style="padding-bottom: 10px;">Total BLogs</h6>
                                            </div>
                                            <div class="col m8">
                                                <h6 class="right-align" style="padding-bottom: 10px;color:#26a69a;"><b><?php echo $profile['total_clients'] ?></b></h6>
                                                <h6 class="right-align" style="padding-bottom: 10px;color:#F44336;"><b><?php echo $profile['total_blogs'] ?></b></h6>
                                            </div>
                                        </div>
                                        <div class="row" style="display:flex;align-items:center;">
                                            <!-- <div class="col m8">
                                            <h6>Address:</h6>
                                            <h6><b><?php echo $profile['city'] ?>, <?php echo $profile['state'] ?>, <?php echo $profile['country'] ?> - <?php echo $profile['zip'] ?></b></h6>
                                        </div> -->
                                            <div class="col m12">
                                                <a class="right waves-effect waves-light btn-small" style="width:200px" href="<?php echo base_url('updateProfile'); ?>">Edit Profile</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- <script>
        $(document).ready(function() {
            $('.modal').modal();
        });
    </script> -->
</body>

</html>