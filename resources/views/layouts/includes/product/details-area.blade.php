<div class="col-lg-7 col-md-6 col-12">
    <div class="product-info-main">
        <div class="page-title">
            <h1>{{ $book['name'] }}</h1>
        </div>
        <div class="product-info-stock-sku">
            <span>{{ $book['in_stock'] ? 'In stock' : 'Not Available' }}</span>
              <div class="product-attribute">
                  <span>SKU</span>
                  <span class="value">{{ $book['sku'] }}</span>
              </div>
        </div>
        <div class="product-reviews-summary">
            <div class="rating-summary">
                @if ($book['stars'])
                  @foreach(range(1, $book['stars']) as $star)
                    <a href="#"><i class="fa fa-star"></i></a>
                  @endforeach
                @endif
            </div>
            <div class="reviews-actions">
                @if ($book['review_count'])
                  <a href="#">{{ $book['review_count'] }} Reviews</a>
                @endif
                <a href="#" class="view">Add Your Review</a>
            </div>
        </div>
        <div class="product-info-price">
            <div class="price-final">
                <span>₹{{ $book['discounted_price'] ?? $book['price'] }}</span>
                @if($book['discounted_price'] && $book['discounted_price'] != $book['price'])
                  <span class="old-price">₹{{ $book['price'] }}</span>
                @endif
            </div>
        </div>
        <div class="product-add-form">
            <form action="#">
                <div class="quality-button">
                    <input class="qty" type="number" value="1" />
                </div>
                <a href="javascript:void(0)" class="add-to-cart" data-book-id="{{ $book['id'] }}">Add to cart</a>
            </form>
        </div>
        <div class="product-social-links">
            <!-- <div class="product-addto-links">
                <a href="#"><i class="fa fa-heart"></i></a>
                <a href="#"><i class="fa fa-pie-chart"></i></a>
                <a href="#"><i class="fa fa-envelope-o"></i></a>
            </div> -->
            <div class="product-addto-links-text">
                <p>
                    {{ $book['description'] }}
                </p>
            </div>
        </div>
    </div>
</div>
