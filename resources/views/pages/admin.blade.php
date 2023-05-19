<!DOCTYPE html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="//unpkg.com/alpinejs" defer></script>
  <title>Product Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom styles for the form */
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f7f7f7;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-group label {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-container">
      <h2>Product Form</h2>
      @if(session('message'))
          <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="alert alert-success" id="box">
              {{ session('message') }}
          </div>
      @endif

      <form method="POST" action="{{route("store")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="productName">Product Name</label>
          <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter product name">
        </div>
        <div class="form-group">
          <label for="productImage">Product Image</label>
          <input type="file" class="form-control-file" id="productImage" name="productImage">
        </div>
        <div class="form-group">
          <label for="middlePrice">Middle Line Price</label>
          <input type="text" class="form-control" id="middlePrice" name="middlePrice" placeholder="Enter middle line price">
        </div>
        <div class="form-group">
          <label for="currentPrice">Current Price</label>
          <input type="text" class="form-control" id="currentPrice" name="currentPrice" placeholder="Enter current price">
        </div>
        <div class="form-group">
          <label for="category">Category Selection</label>
          <select class="form-control" id="category" name="category">
            <option value="stone-laying">Stone Laying</option>
            <option selected value="stone-furniture">Stone Furniture</option>
            <option value="head-stones">Head Stones</option>
            <option value="granite-fence-poles">Granite Fence Poles</option>
            <option value="wash-basins">Wash Basins</option>
          </select>
        </div>
        @error('category')
         <p class="my-1">{{$message}}</p>   
        @enderror
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
