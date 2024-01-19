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
        <div class="card w-50 m-auto">
            <div class="card-body p-5">
                <div class="row text-center ">
                    <h2 class="pb-5">Secure Client Login</h2>
                </div>
                <form class="row g-3" method="post">
                    <div class="col-md-12 pb-4">
                        <label for="inputEmail4" class="form-label">Email Address <span
                                class="text-danger">*</span></label>
                        <input type="email" name="username" required="" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-12 pb-4">
                        <label for="inputPassword4" class="form-label">
                            Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" required="" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12 pb-4 mt-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                <a href="#">Remember Me</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <div class="d-grid gap-4 col-6 mx-auto">
                            <button class="btn btn-primary w-100 p-3" type="button">Login</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="row text-center">
                    <div class="col-12">
                        <p>Not a member yet? <a href="./register.php">Create a New Account</a> In or <a href="#">Reset
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