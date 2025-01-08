<section class="product_section layout_padding" style="padding: 40px 0; background-color: #f4f4f4;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <div class="heading_container heading_center" style="text-align: center; margin-bottom: 40px;">

            <div>
                <form action="{{url('search_product')}}" method="GET" style="display: flex; flex-direction: column; align-items: center; gap: 15px;">
                    @csrf
                    <!-- Search Bar with Increased Length -->
                    <input type="text" name="search" placeholder="Search for something"
                           style="padding: 12px 20px; font-size: 16px; border-radius: 25px; border: 2px solid #ddd; width: 500px; outline: none; transition: all 0.3s ease; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">

                    <!-- Shortened Search Button -->
                    <input type="submit" value="Search"
                           style="padding: 12px 20px; background-color: #f39c12; color: white; font-size: 16px; font-weight: bold; border: none; border-radius: 25px; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 6px rgba(0,0,0,0.2); width: 200px;">
                </form>
            </div>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session()->get('message') }}
            </div>
        @endif


        <div class="row" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
            @foreach($product as $products)
                <!-- Product Card -->
                <div class="col-sm-6 col-md-4 col-lg-3" style="display: flex; justify-content: center;">
                    <div class="box" style="width: 100%; max-width: 300px; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; height: 100%;">

                        <!-- Image Section -->
                        <div class="img-box" style="text-align: center; padding: 20px; flex-grow: 1;">
                            <img src="product/{{$products->image}}" alt="" style="max-width: 100%; height: auto; border-radius: 8px;">
                        </div>

                        <!-- Product Details Section -->
                        <div class="detail-box" style="padding: 15px; text-align: center; flex-shrink: 0;">
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

                            <!-- Options Section -->
                            <div class="option_container" style="padding: 10px; display: flex; flex-direction: column; gap: 10px; align-items: center;">
                                <!-- Add to Cart Button -->
                                <form action="{{url('add_cart', $products->id)}}" method="POST" style="width: 100%;">
                                    @csrf
                                    <div class="row" style="display: flex; gap: 10px; justify-content: center;">
                                        <div class="col-md-6" style="display: flex; justify-content: center;">
                                            <input type="number" name="quantity" value="1" min="1" style="width: 80px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
                                        </div>
                                        <div class="col-md-6" style="display: flex; justify-content: center;">
                                            <input type="submit" value="Add to Cart" style="padding: 10px 20px; background-color: #28a745; color: white; font-weight: bold; border: none; border-radius: 5px; cursor: pointer; width: 100%; font-size: 12px; text-align: center;">
                                        </div>
                                    </div>
                                </form>

                                <!-- Product Details Button (below Add to Cart) -->
                                <a href="{{url('product_details', $products->id)}}" class="option1" style="text-align: center; padding: 10px; background-color: #f39c12; color: white; font-weight: bold; text-decoration: none; border-radius: 5px; width: 100%; font-size: 16px;">
                                    Product Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Pagination -->
            <span style="padding-top: 50px; display: block; text-align: center;">
                {!! $product->withQueryString()->links('pagination::bootstrap-5') !!}
            </span>

        </div>
    </div>
</section>
