<?php
    include("function/function.php");
    $object_create = new adminphp();

// ===============================================
    // Validation Check
// ===============================================

    if(isset($_POST["submit_btn"])){

    if(empty($_POST["first_name"])){
      $first_name = "Name is required";
    }else{
      $name = mytest($_POST['first_name']);
    }
    
    if(empty($_POST['last_name'])){
      $last_name = "Name is required";
    }else{
      $father_name = mytest($_POST['last_name']);
    }

    if(empty($_POST['email'])){
      $email = "Name is required";
    }else{
      $email = mytest($_POST['email']);
    }

    if(empty($_POST['number'])){
      $number = "Name is required";
    }else{
      $email = mytest($_POST['number']);
    }
    
    if(empty($_POST['stree_add'])){
      $stree_add = "Name is required";
    }else{
      $email = mytest($_POST['stree_add']);
    }
    if(empty($_POST['city'])){
      $city = "Name is required";
    }else{
      $email = mytest($_POST['city']);
    }

    if(empty($_POST['state'])){
      $state = "Name is required";
    }else{
      $email = mytest($_POST['state']);
    }
    
    if(empty($_POST['country'])){
      $country = "Name is required";
    }else{
      $email = mytest($_POST['country']);
    }

    if(empty($_POST['password'])){
      $password = "Name is required";
    }else{
      $email = mytest($_POST['password']);
    }
    
    if(empty($_POST['com_password'])){
      $com_password = "Name is required";
    }else{
      $email = mytest($_POST['com_password']);
    }
    
    // Check the Password Characters
    if($password!=$com_password){
        $password[] = " Password Not Matched !";
    }
    
    if(empty($_POST['checkbox'])){
      $checkbox = "Name is required";
    }else{
      $email = mytest($_POST['checkbox']);
    }
    
}

function mytest($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// ===============================================
    // Add Data
// ===============================================

if (isset($_POST['submit_btn'])) {
    $addmsg = $object_create->add_data($_POST);
}
?>
?>



<!-- Header Section Begin -->
<?php include_once('./includes/page_header.php'); ?>
<!-- Header End -->

<!-- Breadcrumb Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__option">
                    <a href="./index.html"><span class="fa fa-home"></span> Home</a>
                    <span>Register</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Services Section Begin -->
<section class="services-section spad">
    <div class="container">
        <div class="card w-75 m-auto">
            <div class="card-body p-5">
                <p class="text-center text-success"><?php if (isset($addmsg)) { echo $addmsg; } ?></p>
                <div class="row">
                    <h2 class="text-center pb-5">Register From</h2>
                </div>
                <form class="row" action="#" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12 pb-4">
                        <h5>Personal Information</h5>
                    </div>
                    <div class="col-md-6 pb-4">
                        <label for="inputEmail4" class="form-label">First Name <span
                                class="text-danger">*<?php echo @$first_name ?></span></label>
                        <input type="text" class="form-control" name="first_name" id="inputEmail4">
                    </div>
                    <div class="col-md-6 pb-4">
                        <label for="inputPassword4" class="form-label">Last Name <span
                                class="text-danger">*<?php echo @$last_name ?></span></label>
                        <input type="text" class="form-control" name="last_name" id="inputPassword4">
                    </div>
                    <div class="col-md-6 pb-4">
                        <label for="inputPassword4" class="form-label">Email Address <span
                                class="text-danger">*<?php echo @$email ?></span></label>
                        <input type="email" class="form-control" name="email" id="inputPassword4">
                    </div>

                    <div class="col-md-6 pb-4">
                        <label for="inputPassword4" class="form-label">
                            Phone Number <span class="text-danger">*<?php echo @$number ?></span></label>
                        <input type="number" name="number" class="form-control" id="inputPassword4">
                    </div>

                    <div class="col-md-12 pb-4 mt-2">
                        <h5>Billing Address</h5>
                    </div>

                    <div class="col-6 pb-4">
                        <label for="inputAddress" class="form-label">Company Name (Optional)</label>
                        <input type="text" class="form-control" name="com_name" id="inputAddress" placeholder="">
                    </div>
                    <div class="col-md-6  pb-4">
                        <label for="inputEmail4" class="form-label">Street Address <span
                                class="text-danger">*<?php echo @$stree_add ?></span></label>
                        <input type="text" class="form-control" name="stree_add" id="inputEmail4">
                    </div>
                    <div class="col-md-6 pb-4">
                        <label for="inputPassword4" class="form-label">
                            Street Address 2 (Optional)</label>
                        <input type="text" class="form-control" name="stree_add2" id="inputPassword4">
                    </div>
                    <div class="col-md-6 pb-4">
                        <label for="inputPassword4" class="form-label">
                            City <span class="text-danger">*<?php echo @$city ?></span></label>
                        <input type="text" class="form-control" name="city" id="inputPassword4">
                    </div>
                    <div class="col-sm pb-4">
                        <label for="inputPassword4" class="form-label">
                            State <span class="text-danger">* <?php echo @$state ?></span></label>
                        <input type="text" class="form-control" name="state" placeholder="City" aria-label="City">
                    </div>
                    <div class="col-sm pb-4">
                        <label for="inputPassword4" class="form-label">
                            Postcode</label>
                        <input type="text" class="form-control" name="postcode" placeholder="City" aria-label="City">
                    </div>
                    <div class="col-sm pb-4">
                        <label for="inputPassword4" class="form-label">
                            Country <span class="text-danger">* <?php echo @$country ?></span></label>
                        <input type="text" class="form-control" name="country" placeholder="City" aria-label="City">
                    </div>
                    <div class="col-md-12 pb-4 mt-2">
                        <h5>Account Security</h5>
                    </div>
                    <div class="col-6 pb-4">
                        <label for="inputAddress" class="form-label">Password <span
                                class="text-danger">*<?php echo @$password ?></span></label>
                        <input type="text" class="form-control" name="password" id="inputAddress" placeholder="">
                    </div>
                    <div class="col-6 pb-4">
                        <label for="inputAddress" class="form-label">Confirm Password <span class="text-danger">*
                                <?php echo @$com_password ?></span></label>
                        <input type="text" class="form-control" name="com_password" id="inputAddress" placeholder="">
                    </div>
                    <div class="col-12 pb-4 mt-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                <span>I have read and agree to the <a href="#">Terms of Service</a><span
                                        class="text-danger"><span class="text-danger">* <?php echo @$checkbox ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <div class="d-grid gap-4 col-6 mx-auto">
                            <input type="submit" class="btn btn-primary w-100 p-3" name="submit_btn" id="#"
                                value="Register">
                        </div>
                    </div>
                </form>
                <hr>
                <div class="row text-center">
                    <div class="col-12">
                        <p>Already registered with us? <a href="login.php">Login</a> In or <a href="#">Reset
                                Password</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->



<!-- Footer Section Begin -->
<?php include_once('./includes/footer.php');?>
<!-- Footer Section End -->