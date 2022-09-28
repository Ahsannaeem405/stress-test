<?php @include 'layout/header.php'?>
    <div class="ContactUsSec PaymentSec">
        <div class="container">
            <div class="row">
                <form action="">
                    <h4 class="mb-3 fw-bold">Car radio Code</h4>
                    <p class="flex items-center justify-between text-sm font-medium text-gray-900 border-t border-gray-200 pt-6 my-6">
                        <span class="text-base">Total</span>
                        <span class="text-base fw-bold float-end">£14.99</span>
                    </p>
                    <label for="card">Name on Card</label>
                    <input type="text" name="name" placeholder="Card holder's name" class="form-control" required />
                    <label for="card number">Card Number</label>
                    <input type="number" name="number" placeholder="0000-******" class="form-control" required />
                    <div class="form-group d-flex mt-4">
                        <div class="col">
                            <label>Expiry Date</label>
                            <input type="date" placeholder="">
                        </div>
                        <div class="col">
                            <label>CVV</label>
                            <input type="number" placeholder="1234">
                        </div>
                    </div>
                    <div class="col-span-full">
                        <a href="success-msg.php" type="submit" class="payBtn text-white w-100 mt-6 mb-3 text-decoration-none text-center">Pay £14.99</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php @include 'layout/footer.php'?>