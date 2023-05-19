<div class="col-sm-12 col-md-4">
    <div class="card d-flex-sm">
      <img class="card-img-left" src="{{$img}}" alt="Image 1">
      <div class="card-body card-body-right">
        <p class="card-text my-1 py-1">{{$title}}</p>
        <h5 class="card-title">{{$p_name}}</h5>
        <p class="card-text"><span class="price">₹155</span>   ₹135</p>
      </div>
      
    </div>
    <form action="e-form.html" method="get">
      <input type="hidden" name="name" value="product-id">
      <button type="submit" class="btn btn-dark btn-block mb-5">Send Enquiry</button>
    </form>
  </div>