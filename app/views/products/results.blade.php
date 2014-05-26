<ul class="thumbnails grid">
    @foreach($products as $product)
    <li class="col-lg-4 col-sm-6">
        <a class="prdocutname" href="{{ route('showproduct', $product->slug) }}">{{ $product->name }}</a>
        <div class="thumbnail">
            @if(count($product->images))
            <a href="{{ route('showproduct', $product->slug) }}"><img alt="" src="{{ asset('uploads/products/thumbs/full/'.$product->images->first()->path) }}"></a>
            @else 
            <a href="{{ route('showproduct', $product->slug) }}"><img alt="" src="http://placehold.it/270x350"></a>
            @endif
            <div class="shortlinks">
                <a class="details" href="{{ route('showproduct', $product->slug) }}">DETAILS</a>
                <!--                                            <a class="wishlist" href="#">WISHLIST</a>
                                                            <a class="compare" href="#">COMPARE</a>-->
            </div>
            <div class="pricetag">
                <span class="spiral"></span><a href="{{ route('add_cart_get', $product->id) }}" class="productcart">ADD TO CART</a>
                <div class="price">
                    <div class="pricenew">{{ $product->net_price }}</div>
                    <div class="priceold">{{ $product->formatted_price }}</div>
                </div>
            </div>
        </div>
    </li>
    @endforeach
</ul>
<ul class="thumbnails list row">
    @foreach($products as $product)
    <li>
        <div class="thumbnail">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <span title="" data-original-title="" class="offer tooltip-test">Offer</span>
                    @if(count($product->images))
                    <a href="{{ route('showproduct', $product->slug) }}"><img alt="" src="{{ asset('uploads/products/thumbs/full/'.$product->images->first()->path) }}"></a>
                    @else 
                    <a href="{{ route('showproduct', $product->slug) }}"><img alt="" src="http://placehold.it/270x350"></a>
                    @endif
                </div>
                <div class="col-lg-8 col-sm-8">
                    <a class="prdocutname" href="{{ route('showproduct', $product->slug) }}">{{ $product->name }}</a>
                    <div class="productdiscrption"> {{ $product->desc }}</div>
                    <div class="pricetag">
                        <span class="spiral"></span><a href="{{ route('add_cart_get', $product->id) }}" class="productcart">ADD TO CART</a>
                        <div class="price">
                            <div class="pricenew">{{ $product->net_price }}</div>
                            <div class="priceold">{{ $product->formatted_price }}</div>
                        </div>
                    </div>
                    <div class="shortlinks">
                        <a class="details" href="{{ route('showproduct', $product->slug) }}">DETAILS</a>
                        <!--                                                    <a class="wishlist" href="#">WISHLIST</a>
                                                                            <a class="compare" href="#">COMPARE</a>-->
                    </div>
                </div>
            </div>
        </div>
    </li>
    @endforeach
</ul>
<div>
    <?php echo $products->links(); ?>
</div>
<script>
    $('.pagination a').on('click', function(event) {
        var telo = $(this).attr('href')+'&data='+$('#sorting').val()+'&num='+$('#num').val();
        if ($(this).attr('href') != '#') {
            $("html, body").animate({scrollTop: 0}, "fast");
            $('#categorygrid').load(telo);
        }
        event.preventDefault();
    });
</script>