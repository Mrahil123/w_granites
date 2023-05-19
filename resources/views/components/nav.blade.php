<header id="Header">
    <div class="main_header inner_page">
        <div class="top_nav" id="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="{{route("home")}}" title="Crave Ordering"><img width="140px" src="images/global-one-logo.jpg" alt="global-one-logo"></a>
                        </div>
                        <div class="nav_manu">
                            <div class="Menu_list">
                                <ul class="menu">
                                  <li><a href="{{route("home")}}" class="">Home</a></li>
                                  
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="products" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Products
                                    </a>
                                    <div class="dropdown-menu p-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{route("p_stone_laying")}}">Stone Laying</a>
                                      <a class="dropdown-item" href="{{route("p_stone_funriture")}}">Stone Furniture</a>
                                      <a class="dropdown-item" href="{{route("p_head_stones")}}">Head Stones</a>
                                      <a class="dropdown-item" href="{{route("p_granite_fence_poles")}}">Granite fence poles</a>
                                      <a class="dropdown-item" href="{{route("p_wash_basins")}}">Wash Basins</a>
                                      </div>
                                  </li>
                                    <li><a href="{{route("about")}}" class="trans">About</a></li>
                                    <li><a href="{{route("contact")}}" class="trans">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button id="burger" class="open-main-nav">
            <span class="burger"></span>
        </button>
        <div class="H_banner" style="background-image: url({{$img}})">
            <div class="main_pitch">
                <div class="main_Order">
                    <h2 class="title">{{$title}}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="device">
        <nav class="main-nav" id="main-nav">
            <div class="logo">
                <a href="{{route("home")}}" title="Crave Ordering"><img width="125px" src="images/global-one-logo.jpg" alt="Crave Ordering"></a>
            </div>
            <ul>
                <ul class="menu">
                  <li><a href="{{route("home")}}" class="">Home</a></li>
                                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="products" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products
                    </a>
                    <div class="dropdown-menu p-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{route("p_stone_laying")}}">Stone Laying</a>
                      <a class="dropdown-item" href="{{route("p_stone_funriture")}}">Stone Furniture</a>
                      <a class="dropdown-item" href="{{route("p_head_stones")}}">Head Stones</a>
                      <a class="dropdown-item" href="{{route("p_granite_fence_poles")}}">Granite fence poles</a>
                      <a class="dropdown-item" href="{{route("p_wash_basins")}}">Wash Basins</a>
                      </div>
                  </li>
                  <li><a href="{{route("about")}}" class="trans">About</a></li>
                  <li><a href="{{route("contact")}}" class="trans">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>