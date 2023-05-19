<x-layout title="Product Enquiry Form
" img="images/products/bg/pavement-stones-bg.png">
  <div class="container mt-5">
    <h2 class="text-center">Product Enquiry Form</h2>
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <!-- Product Inquiry Form -->
        <form>
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="Phone Number">Phone Number:</label>
            <input type="tel" class="form-control" id="number" name="number" required>
          </div>
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
          </div>

          <!-- Google reCAPTCHA v3 -->
          <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6Lf96LIlAAAAAIOpv_C5U0yGf8iAA3_UwanoBP-c"></div>
          </div>
          <div class="text-center">
            <!-- Button to open the form and redirect to Gmail compose window -->
            <button type="button" class="btn btn-dark btn-lg mb-5" onclick="openGmailCompose()">Send Inquiry via Gmail</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  

	<!-- JavaScript to open the Gmail compose window with product ID and name -->
	<script>
		function openGmailCompose() {
  // Get the product ID and name from the form

  // Get the URL query string
  var queryString = window.location.search;

  // Parse the query string and extract the value of the 'name' parameter
  var urlParams = new URLSearchParams(queryString);

  var product_name = urlParams.get('product_name');
  var category = urlParams.get('category');

  var email = document.getElementById("email").value;
  var name = document.getElementById("name").value;
  var message = document.getElementById("message").value;
  var number = document.getElementById("number").value;
  
  // Construct the Gmail compose URL with product ID and name as parameters
  var gmailComposeUrl = "https://mail.google.com/mail/?view=cm&fs=1&to=info@globell.com&su=Product Inquiry - " + product_name + " - from " + category + "&body=Hi, I'm " + name + ", I'm interested in the following product:%0D%0A%0D%0AProduct ID: " + product_name + " from " + category + "%0D%0A%0D%0AMessage:%0D%0A%0D%0A" + message + "%0D%0A%0D%0AContact Details:%0D%0A%0D%0AEmail: " + email + "%0D%0A%0D%0APhone Number: " + number + "%0D%0A%0D%0APlease let me know more details about it. Thank you.";

  // Redirect to the Gmail compose window
  window.location.href = gmailComposeUrl;
}

	</script>
</x-layout>