<div class="single-most-product {{ !empty($additionalClass) ? $additionalClass : '' }}">
    <div class="most-product-img">
        <a href="#"><img src="{{ $book['featured_image'] }}" alt="book" /></a>
    </div>
    <div class="most-product-content">
        <div class="product-rating">
            <ul>
                @if($book['stars'])
                  @foreach(range(1, $book['stars']) as $star)
                    <li>
                        <a href="#"><i class="fa fa-star"></i></a>
                    </li>
                  @endforeach
                @endif
            </ul>
        </div>
        <h4><a href="#">{{ $book['name'] }}</a></h4>
        <div class="product-price">
            <ul>
                <li>
                  ₹{{ $book['discounted_price'] ?? $book['price'] }}
                </li>
                @if($book['discounted_price'] && $book['discounted_price'] != $book['price'])
                  <li class="old-price">
                    ₹{{ $book['price'] }}
                  </li>
                @endif
            </ul>
        </div>
    </div>
</div>
