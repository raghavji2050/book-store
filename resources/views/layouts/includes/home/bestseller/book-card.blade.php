<div class="single-bestseller {{ !empty($additionalClass) ? $additionalClass : '' }}">
    <div class="bestseller-img">
        <a href="{{ route('productDetail', $book['id']) }}"><img src="{{ $book['featured_image'] }}" alt="book" /></a>
        <!-- <div class="product-flag">
            <ul>
                <li><span class="sale">new</span></li>
                <li><span class="discount-percentage">-5%</span></li>
            </ul>
        </div> -->
    </div>
    <div class="bestseller-text text-center">
        <h3><a href="{{ route('productDetail', $book['id']) }}">{{ $book['name'] }}</a></h3>
        <div class="price">
            <ul>
                <li>
                  <span class="new-price">
                    ₹{{ $book['discounted_price'] ?? $book['price'] }}
                  <span>
                </li>
                @if($book['discounted_price'] && $book['discounted_price'] != $book['price'])
                  <li>
                    <span class="old-price">
                      ₹{{ $book['price'] }}
                    </span>
                  </li>
                @endif
            </ul>
        </div>
    </div>
</div>
