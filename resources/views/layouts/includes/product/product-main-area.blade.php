<div class="product-main-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-12 order-lg-1 order-1">
                <!-- product-main-area-start -->
                <div class="product-main-area">
                    <div class="row">
                        @include('layouts.includes.product.image-slider')
                        @include('layouts.includes.product.details-area')
                    </div>
                </div>
                <!-- product-main-area-end -->
                <!-- product-info-area-start -->
                @include('layouts.includes.product.product-info-area')
                <!-- product-info-area-end -->
                <!-- new-book-area-start -->
                {{-- @include('layouts.includes.product.upselling-books-area') --}}
                <!-- new-book-area-start -->
            </div>
            {{-- @include('layouts.includes.product.right-side-bar') --}}
        </div>
    </div>
</div>
