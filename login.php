<?php @include 'layout/header.php'?>
    <div class="ContactUsSec">
        <div class="container">
            <div class="row">
                <form action="" enctype="multipart/form-data">
                    <h2 class="text-center mb-5 fw-bold">Login</h2>
                    <label>E-MAIL</label>
                    <input type="email" name="email" placeholder="Enter email" required />
                    <label>Password</label>
                    <input type="password" name="password" placeholder="*****">
                    <div class="button w-100 text-center"><a href="admin" class="text-decoration-none fw-bold text-white">Login</a></div>
                </form>
            </div>
        </div>
    </div>
<?php @include 'layout/footer.php'?>