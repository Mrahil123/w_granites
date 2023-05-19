<x-layout title="Contact Us" img="images/products/bg/pavement-stones-bg.png">
    <div class="container mt-5">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <h1 class="text-center mb-4">Contact Us</h1>
            <ul class="list-group shadow-sm">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                  <i class="bi bi-geo-alt-fill me-2"></i>
                  <span>Globell One Inc
                  </span>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                  <i class="bi bi-geo-alt-fill me-2"></i>
                  <span>8119 Cheyenne hills trail
                    Richmond TX 77406
                    </span>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                  <i class="bi bi-telephone-fill me-2"></i>
                  <span>(123) 456-7890</span>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                  <i class="bi bi-envelope-fill me-2"></i>
                  <span>info@globellone.com</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
<section class="contact-form">
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <h2 class="text-center my-4">Enquiry Form</h2>
      <form>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your Phone Number">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
        </div>

        <!-- Google reCAPTCHA v3 -->
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6Lf96LIlAAAAAIOpv_C5U0yGf8iAA3_UwanoBP-c"></div>
        </div>


        <button type="submit" class="btn btn-dark btn-block mb-5">Submit</button>
      </form>
    </div>
  </div>
</div>
</section>

</x-layout>