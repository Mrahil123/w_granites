<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <title>{{$title}} - Globell One Inc</title>

    <!-- Fonts Here-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <!-- Fonts here-->

    <!-- Style Here -->
    <link rel="stylesheet" href="css/custum.css">
    <link rel="stylesheet" href="css/slick.css" >
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <!-- JS -->
    <script src="js/popper.min.js" defer></script>
    <script src="js/jquery.min.js" defer></script>
    <script src="js/bootstrap.min.js" defer></script>
    
    <!-- Google <Caption></Caption> -->
  	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
    <div class="wrapper">
      <x-nav title={{$title}} img={{$img}} />
      {{$slot}}
      <x-footer/>
    </div>

    <!-- JS Here -->
    <script src="js/custome.js" defer></script>
    <script src="js/slick.js" defer></script>
    <script src="js/jquery.validate.min.js" defer></script>
    <!-- JS Here -->
    
</body>

</html>