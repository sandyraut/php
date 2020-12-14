
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
    <title>Registration Form</title>
</head>
<body>
<br>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form method="POST" name="registrationForm" id="registrationForm">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">First Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="fname" nam class="form-control" name="fname">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Last Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="lname" class="form-control" name="lname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" class="form-control" name="email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Mobile No</label>
                                    <div class="col-md-6">
                                        <input type="text" id="mobile_no" name="mobile_no"  oninput="this.setCustomValidity('')" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" minlength="10" maxlength="10" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">State</label>
                                    <div class="col-md-6">
                                        <select class="form-control select2" id="state" name="state">
                                            <option value="0">--Select State--</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">City</label>
                                    <div class="col-md-6">
                                        <select class="form-control select2" id="district" name="district">
                                            <option value="0">--Select District--</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="passwordyut" id="password" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="cfpassword" class="form-control" name="cfpassword">
                                        <span id='message'></span>
                                    </div>
                                </div>


                                    <div class="col-md-6 offset-md-6">
                                        <button type="button" name="register" class="btn btn-primary register" id="register">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>

</body>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery3_1.min"></script>
<script src="<?php echo base_url(); ?>assets/js/iziToast.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/regwh.js"></script>

<script type="text/javascript">
    $('#password, #cfpassword').on('keyup', function () {
          if ($('#password').val() == $('#cfpassword').val()) {
            $('#message').html('Matching').css('color', 'green');
          } else 
            $('#message').html('Not Matching').css('color', 'red');
        });
</script>
</html>