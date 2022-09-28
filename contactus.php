<?php @include 'layout/header.php'?>
    <div class="ContactUsSec">
        <div class="container">
            <div class="row">
                <form action="" enctype="multipart/form-data">
                    <h2 class="text-center mb-3 fw-bold">Contact Us.</h2>
                    <p class="fst-italic text-center">Complete the contact form below and we will contact you as soon as possible.</p>
                    <div class="form-group d-flex mt-4">
                        <div class="col">
                            <label>FIRST NAME</label>
                            <input type="text" aria-label="First name" placeholder="First name">
                        </div>
                        <div class="col">
                            <label>LAST NAME</label>
                            <input type="text" aria-label="Last name" placeholder="First name">
                        </div>
                    </div>
                    <label>E-MAIL</label>
                    <input type="email" name="email" placeholder="Enter email" required />
                    <label>MESSAGE</label>
                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                    <a href="./admin" class="mt-5 text-decoration-none"><button>Send Message</button></a>
                </form>
            </div>
        </div>
    </div>
<?php @include 'layout/footer.php'?>