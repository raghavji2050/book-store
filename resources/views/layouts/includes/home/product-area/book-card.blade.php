<div class="product-wrapper {{ !empty($additionalClass) ? $additionalClass : '' }}">
    <div class="product-img">
        <a href="#">
            <img src="{{ $book['featured_image'] }}" alt="book" class="primary" />
        </a>
        <div class="quick-view">
            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                <i class="fa fa-search-plus"></i>
            </a>
        </div>
        <!-- <div class="product-flag">
            <ul>
                <li><span class="sale">new</span></li>
                <li><span class="discount-percentage">-5%</span></li>
            </ul>
        </div> -->
    </div>
    <div class="product-details text-center">
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
                <li>₹{{ $book['discounted_price'] ?? $book['price'] }}</li>
                @if($book['discounted_price'] && $book['discounted_price'] != $book['price'])
                  <li class="old-price">₹{{ $book['price'] }}</li>
                @endif
            </ul>
        </div>
    </div>
    <div class="product-link">
        <div class="product-button">
            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
        </div>
        <div class="add-to-link">
            <ul>
                <li>
                    <a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
