<section class="product_section layout_padding" style="padding: 40px 0; background-color: #f4f4f4;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <div class="heading_container heading_center" style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 36px; color: #333;">
                Our <span style="color: #f39c12;">products</span>
            </h2>
        </div>
        <div class="row" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
            @foreach($product as $products)
                <div class="col-sm-6 col-md-4 col-lg-4" style="margin-bottom: 30px;">
                    <div class="box" style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                        <div class="option_container" style="padding: 20px;">
                            <div class="options" style="display: flex; flex-direction: column; gap: 15px;">
                                <a href="{{url('product_details', $products->id)}}" class="option1" style="text-align: center; padding: 10px; background-color: #f39c12; color: white; font-weight: bold; text-decoration: none; border-radius: 5px;">
                                    Product Details
                                </a>
                                <form action="{{url('add_cart', $products->id)}}}" method="POST">
                                    @csrf
                                    <div class="row" style="display: flex; gap: 10px; justify-content: center;">
                                        <div class="col-md-4">
                                            <input type="number" name="quantity" value="1" min="1" style="width: 100px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="submit" value="Add to Cart" style="padding: 10px 20px; background-color: #28a745; color: white; font-weight: bold; border: none; border-radius: 5px; cursor: pointer;">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="img-box" style="text-align: center; padding: 20px;">
                            <img src="product/{{$products->image}}" alt="" style="max-width: 100%; height: auto; border-radius: 5px;">
                        </div>
                        <div class="detail-box" style="padding: 15px; text-align: center;">
                            <h5 style="font-size: 20px; color: #333;">{{$products->title}}</h5>

                            <div class="price-box" style="margin-top: 15px;">
                                @if($products->discount_price != null)
                                    <h6 style="color: red; font-size: 18px;" class="discount-price">
                                        Discount Price<br>
                                        Rs. {{$products->discount_price}}
                                    </h6>
                                    <h6 style="text-decoration: line-through; color: blue; font-size: 16px;" class="original-price">
                                        Price
                                        <br>
                                        Rs. {{$products->price}}
                                    </h6>
                                @else
                                    <h6 class="original-price" style="color: blue; font-size: 18px;">
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
            <span style="padding-top: 50px; display: block; text-align: center;">
                {!! $product->withQueryString()->links('pagination::bootstrap-5') !!}
            </span>
        </div>
    </div>
</section>
