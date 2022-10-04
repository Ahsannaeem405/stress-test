<?php @include 'layout/header.php'?>
    <div class="LoginSec">
        <div class="container">
            <div class="row">
                <form action="" enctype="multipart/form-data">
                    <h2 class="text-center mb-5 fw-bold">Register</h2>
                    <label class="mb-2">Name</label>
                    <input type="text" name="name" placeholder="Enter Name" class="form-control" required />
                    <label class="mb-2">E-MAIL</label>
                    <input type="email" name="email" placeholder="Enter email" class="form-control" required />
                    <label class="mb-2">Password</label>
                    <input type="password" name="password"  class="form-control" placeholder="*****">
                    <label class="mb-2">Confirm Password</label>
                    <input type="password" name="confirm password"  class="form-control" placeholder="*****">
                    <div class="form-check mb-3 mt-4">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label p-1" for="flexCheckDefault">I agree to the <b>Terms & Conditions</b>.</label>
                    </div>
                    <div class="button w-100 text-center"><a href="admin" class="text-decoration-none fw-bold text-white">Register</a></div>
                </form>
            </div>
        </div>
    </div>
<?php @include 'layout/footer.php'?>