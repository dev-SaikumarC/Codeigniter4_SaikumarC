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

    <style>
        /* Hide the default file input */
        input[type="file"] {
            display: none;
        }
    </style>
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
                <h4 class="center" style="padding-top: 20px; padding-bottom: 15px;"><b>Create Your Profile</b></h4>
                <div class="card-panel">
                    <div class="card-content">
                        <form method="post" action="<?php echo base_url('newprofile'); ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="name" type="text" class="validate" name="name" required>
                                    <label class="active" for="name">Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="role" type="text" class="validate" name="role" required>
                                    <label class="active" for="role">Role</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="company" type="text" class="validate" name="company" required>
                                    <label class="active" for="company">Company</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="experience" type="number" class="validate" name="experience" required>
                                    <label class="active" for="experience">Experience</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="mobile" type="number" class="validate" name="mobile" required>
                                    <label class="active" for="mobile">Mobile Number</label>
                                </div>
                                <div class="input-field col s6">
                                    <select id="gender" name="gender" required>
                                        <option value="" disabled selected>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    <label>Gender</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="city" type="text" class="validate" name="city" required>
                                    <label class="active" for="city">City</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="state" type="text" class="validate" name="state" required>
                                    <label class="active" for="state">State</label>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 0px;">
                                <div class="col s6 input-field">
                                    <input id="dob" type="date" class="validate" name="dob" required>
                                    <label class="active" for="dob">Date Of Birth</label>
                                </div>
                                <div class="col s6">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="country" type="text" class="validate" name="country" required>
                                            <label class="active" for="country">Country</label>
                                        </div>
                                        <div class="col s6 input-field">
                                            <input id="zip" type="number" class="validate" name="zip" required>
                                            <label class="active" for="zip">Zip Code</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row" style="display: flex;align-items:center;">
                                <div class="col s6" style="justify-content: start; display:flex;">
                                    <label for="profile_image_update" class="waves-effect green btn">Upload Profile Image</label>
                                    <input type="file" name="profile_image_update" id="profile_image_update" required>
                                    <div class="file-name" id="file-name-update"></div>
                                    <script>
                                        document.getElementById('profile_image_update').addEventListener('change', function() {
                                            document.getElementById('file-name-update').textContent = this.files[0].name;
                                        });
                                    </script>
                                </div>

                                <div class="col s6 input-field">
                                    <button type="submit" class="waves-effect waves-green btn" style="width:100%;">Submit</button>
                                </div>
                            </div>

                            <div class="row" style="display: none;">
                                <!-- <h4>View Post</h4> -->
                                <!-- profile_image','name','role','company','city','state','country','zip','mobile','gender' -->
                                <div class="input-field col s6">
                                    <input id="id" type="text" class="validate" name="id" value="<?= $userData['userid'] ?>" hidden>
                                </div>
                            </div>
                        </form>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function() {
            $('select').formSelect();
        });
    </script>
</body>

</html>