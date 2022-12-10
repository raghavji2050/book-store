@if ($book['description'] || $book['review_count'])
  <div class="product-info-area mt-80">
      <!-- Nav tabs -->
      <ul class="nav" role="tablist">
          @if($book['description'])
            <li><a class="active" href="#Details" data-bs-toggle="tab" aria-selected="true" role="tab">Details</a></li>
          @endif
          @if ($book['review_count'])
            <li><a href="#Reviews" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Reviews $book['review_count']</a></li>
          @endif
      </ul>
      <div class="tab-content">
        @if($book['description'])
          @include('layouts.includes.product.tabs.detail')
        @endif
        @if ($book['review_count'])
          @include('layouts.includes.product.tabs.review')
        @endif
      </div>
  </div>
@endif
