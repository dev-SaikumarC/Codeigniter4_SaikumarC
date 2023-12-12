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
    <div class="container-fluid" style="margin-top: 25px;">
        <div class="row">
            <div class="col s12 m12">
                <?php echo session('user'); ?>
                <h4 class="center" style="padding-top: 20px; padding-bottom: 15px;"><b>Dashboard</b></h4>
                <div class="card-panel">
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><span style="font-size: 23px; font-weight:500;">Blogs</span><a class="right waves-effect waves-light btn-small modal-trigger" href="#modal1">Create Blog</a>
                            <div id="modal1" class="modal">
                                <div class="modal-content">
                                    <div class="row">
                                        <form class="col s12" action="<?php echo base_url('blogStore') ?>" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <h4>Create Post</h4>
                                                <div class="input-field col s12">
                                                    <input id="first_name2" type="text" class="validate" name="title">
                                                    <label class="active" for="first_name2">Titile</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea id="textarea2" class="materialize-textarea" data-length="120" name="description"></textarea>
                                                    <label for="textarea2">Textarea</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col s6">
                                                    <!-- Your custom button -->
                                                    <label for="profile_image" class="waves-effect green btn">Choose Source Image</label>
                                                    <!-- The actual file input (hidden) -->
                                                    <input type="file" name="profile_image" id="profile_image" required>
                                                    <!-- Display the selected file name (optional) -->
                                                    <div class="file-name" id="file-name"></div>
                                                    <!-- JavaScript to display the selected file name -->
                                                    <script>
                                                        document.getElementById('profile_image').addEventListener('change', function() {
                                                            // Display the selected file name
                                                            document.getElementById('file-name').textContent = this.files[0].name;
                                                        });
                                                    </script>
                                                </div>
                                                <div class="col s6">
                                                    <div class="right">
                                                        <button type="submit" class="modal-close waves-effect waves-green btn">Create Post</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </span>



                        <table style="margin-top: 20px;">
                            <th>#</th>
                            <th>Titile</th>
                            <th>Description</th>
                            <th>Source Image</th>
                            <th class="center">Action</th>
                            <?php $c = 1; ?>
                            <?php foreach ($blogs as $blog) : ?>
                                <tr>
                                    <td><?php echo $c++; ?></td>
                                    <td><?php echo $blog['title'] ?></td>
                                    <td><?php echo $blog['description'] ?></td>
                                    <td> <img src="../images/<?php echo $blog['profile_image'] ?>" style="height:100px"></td>
                                    <td class="center">
                                        <button data-target="viewmodal<?php echo $blog['id'] ?>" class="btn blue modal-trigger">View</button>

                                        <div id="viewmodal<?php echo $blog['id'] ?>" class="modal">
                                            <div class="modal-content">
                                                <div class="row">
                                                    <form class="col s12">
                                                        <div class="row">
                                                            <h4>View Post</h4>
                                                            <div class="input-field col s12">
                                                                <input id="first_name2" type="text" class="validate" readonly value="<?php echo $blog['title'] ?>">
                                                                <label class="active" for="first_name2">Titile</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <textarea id="textarea2" class="materialize-textarea" data-length="120" readonly><?php echo $blog['description'] ?></textarea>
                                                                <label for="textarea2">Textarea</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <img src="../images/<?php echo $blog['profile_image'] ?>" style="height:250px">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <button data-target="editmodal<?php echo $blog['id'] ?>" class="btn green modal-trigger">Edit</button>

                                        <div id="editmodal<?php echo $blog['id'] ?>" class="modal">
                                            <div class="modal-content">
                                                <div class="row">
                                                    <form class="col s12" method="post" action="<?php echo base_url('updatePost'); ?>" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <h4>Edit Post</h4>
                                                            <div class="input-field col s12">
                                                                <input id="first_name2" type="text" class="validate" name="title" value="<?php echo $blog['title'] ?>">
                                                                <label class="active" for="first_name2">Titile</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <textarea id="textarea2" class="materialize-textarea" name="description" data-length="120"><?php echo $blog['description'] ?></textarea>
                                                                <label for="textarea2">Textarea</label>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="id" value="<?php echo $blog['id'] ?>">
                                                        <div class="row">
                                                            <div class="input-field col s12 left">
                                                                <img src="../images/<?php echo $blog['profile_image'] ?>" style="height:250px">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 left">
                                                                <!-- Your custom button -->
                                                                <label for="profile_image_update<?php echo $blog['id'] ?>" class="waves-effect green btn">Update Source Image</label>
                                                                <!-- The actual file input (hidden) -->
                                                                <input type="file" name="profile_image" id="profile_image_update<?php echo $blog['id'] ?>" required>
                                                                <!-- Display the selected file name (optional) -->
                                                                <div class="file-name" id="file-name-update<?php echo $blog['id'] ?>"></div>
                                                                <!-- JavaScript to display the selected file name -->
                                                                <script>
                                                                    document.getElementById('profile_image_update<?php echo $blog['id'] ?>').addEventListener('change', function() {
                                                                        // Display the selected file name
                                                                        document.getElementById('file-name-update<?php echo $blog['id'] ?>').textContent = this.files[0].name;
                                                                    });
                                                                </script>
                                                                <!-- <input type="file" name="profile_image" id="profile_image" required> -->
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <div class="right">
                                                                    <button type="submit" class="modal-close waves-effect waves-green btn">Update Post</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn red modal-trigger" data-target="deletemodal<?php echo $blog['id'] ?>">Delete</button>
                                        <div id="deletemodal<?php echo $blog['id'] ?>" class="modal">
                                            <div class="modal-content">
                                                <div class="row">
                                                    <form class="col s12" method="post" action="<?php echo base_url('deletePost'); ?>">
                                                        <div class="row">
                                                            <h4>Edit Post</h4>
                                                            <div class="col s12">
                                                                Are You Sure?
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="id" value="<?php echo $blog['id'] ?>">
                                                        <div class="row">
                                                            <div class="col s12">
                                                                <div class="center">
                                                                    <button type="submit" class="modal-close waves-effect waves-green btn">Delete Post</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                </tr>
                            <?php endforeach; ?>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.modal').modal();
        });
    </script>
</body>

</html>