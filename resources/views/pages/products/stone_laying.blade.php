<x-layout title="Stone Laying" img="images/products/bg/Stone-laying-bg.png">
    <section class="mt-2">
        <div class="container">
            <div class="row">
                
                @foreach ($items as $item)
                <div class="col-sm-12 col-md-4">
                    <div class="card d-flex-sm">
                      <img class="card-img-left" src="images/products/{{$item["category"]}}/{{$item["productImage"]}}" alt="Image 1">
                      <div class="card-body card-body-right">
                        <p class="card-text my-1 py-1">{{ucwords(str_replace("-", " ", $item["category"]))}}</p>
                        <h5 class="card-title">{{$item["productName"]}}</h5>
                        <p class="card-text"><span class="price">₹{{$item["middlePrice"]}}</span>   ₹{{$item["currentPrice"]}}</p>
                      </div>
                      
                    </div>
                    <form action="{{route("en_form")}}" method="get">
                      <input type="hidden" name="product_name" value="{{$item["productName"]}}">
                      <input type="hidden" name="catagary" value="{{$item["category"]}}">
                      <button type="submit" class="btn btn-dark btn-block mb-5">Send Enquiry</button>
                    </form>
                  </div>
                @endforeach
              
            </div>
          </div>
    
          <style>
            /* Switch image and text layout in mobile view */
            @media (max-width: 767px) {
              .card-img-left {
                order: 2;
                max-width: 125px;
                margin-bottom: 10px;
    
              }
              .card-body-right {
                order: 1;
                text-align: left;
                padding-left: 10px;
                padding-top: 0;
    
              }
              .d-flex-sm {
                display: flex;
                flex-direction: row-reverse;
              }
              .card-title{
                font-size: 18px;
                padding: 0;
                margin: 0;
                font-weight: bold;
              }
              .card-text{
                font-size: 14px;
                padding: 0;
              }
            }
            
            /* Set image height and text alignment in desktop view */
            @media (min-width: 768px) {
              .card-img-left {
                height: 200px;
                object-fit: cover;
              }
              .card-body-right {
                text-align: left;
              }
            }
          </style>
    </section>
    </x-layout>