<?php @include 'layout/header.php'?>
    <div class="LoginSec">
        <div class="container">
            <div class="row">
                <form action="" enctype="multipart/form-data">
                    <h2 class="text-center mb-5 fw-bold">Login</h2>
                    <label class="mb-2">E-MAIL</label>
                    <input type="email" name="email" placeholder="Enter email" class="form-control" required />
                    <label class="mb-2">Password</label>
                    <input type="password" name="password"  class="form-control" placeholder="*****">
                    <div class="button w-100 text-center"><a href="#" class="text-decoration-none fw-bold text-white">Login</a></div>
                </form>
            </div>
        </div>
    </div>
<?php @include 'layout/footer.php'?>