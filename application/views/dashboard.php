<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
}
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/font.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/iziToast.min.css">
    
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery_2_1_1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery_3_1.min.js"></script>
    <title>Dashboard</title>
</head>
<body>



<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
                                <div class="container">
                                <a class="navbar-brand" href="#">Dashboard</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="logout">Logout</a>
                                        </li>
                                    </ul>

                                </div>
                                </div>
                            </nav>
                        </div>
                        
                        <div class="card-body">
                           <h5> Hi, <?php //echo $username;?></h5>
                           <h5> You are loggedin!</h5>

                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
</body>
</html>