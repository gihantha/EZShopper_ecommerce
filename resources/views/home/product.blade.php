<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            @foreach($product as $products)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{url('product_details', $products->id)}}" class="option1">
                                    Product Details
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="product/{{$products->image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>{{$products->title}}</h5>

                            <div class="price-box">
                                @if($products->discount_price!=null)
                                <h6 style="color: red" class="discount-price">
                                    Discount Price<br>
                                    Rs. {{$products->discount_price}}
                                </h6>
                                    <h6 style="text-decoration: line-through; color: blue" class="original-price">
                                        Price
                                        <br>
                                        Rs. {{$products->price}}
                                    </h6>
                                @else
                                    <h6 class="original-price" style="color: blue">
                                        Price
                                        <br>
                                        Rs. {{$products->price}}
                                    </h6>
                                @endif

                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
            <span style="padding-top: 50px">
{{--            {!! $product->appends(Request::all())->links()!!}--}}
                {!! $product->withQueryString()->links('pagination::bootstrap-5')!!}
            </span>
        </div>
    </div>
</section>
