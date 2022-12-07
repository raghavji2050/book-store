<!-- new-book-area-start -->
<div class="new-book-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
              @foreach($featuredBooks as $index => $collection)
                @if(count($collection['books'] ?? []))
                  @php
                    $isActiveTab = !$index;
                  @endphp
                  <div class="section-title bt text-center pt-100 mb-30 section-title-res">
                      <h2>{{ $collection['title'] }}</h2>
                  </div>
                 @endif
              @endforeach
            </div>
        </div>
        <div class="tab-active owl-carousel owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-1130px, 0px, 0px); transition: all 0s ease 0s; width: 3955px;">
                  @foreach($featuredBooks as $index => $collection)
                    @if(count($collection['books'] ?? []))
                      @php
                        $isActiveTab = !$index;
                      @endphp

                      @foreach($collection['books'] as $bookIndex => $book)
                        @include('layouts.includes.home.product-area.book-card')
                      @endforeach
                    @endif
                  @endforeach
                    <div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;">
                        <div class="tab-total">
                            <!-- single-product-start -->
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/5.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Set of Sprite Yoga Straps</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$34.00</li>
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
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/19.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Compete Track Tote</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$32.00</li>
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
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;">
                        <div class="tab-total">
                            <!-- single-product-start -->
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/7.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span> <br /></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Strive Shoulder Pack</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$30.00</li>
                                            <li class="old-price">$32.00</li>
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
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/4.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$52.00</li>
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
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;">
                        <div class="tab-total">
                            <!-- single-product-start -->
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/9.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Wayfarer Messenger Bag</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$35.00</li>
                                            <li class="old-price">$40.00</li>
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
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/8.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Rival Messenger</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$35.00</li>
                                            <li class="old-price">$40.00</li>
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
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;">
                        <div class="tab-total">
                            <!-- single-product-start -->
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/11.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Impulse Duffle</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$74.00</li>
                                            <li class="old-price">$78.00</li>
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
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/3.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Crown Summit</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$36.00</li>
                                            <li class="old-price">$38.00</li>
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
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 262.5px; margin-right: 20px;">
                        <div class="tab-total">
                            <!-- single-product-start -->
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/1.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Joust Duffle Bag</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$60.00</li>
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
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/18.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span> <br /></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Driven Backpack</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$34.00</li>
                                            <li class="old-price">$36.00</li>
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
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 262.5px; margin-right: 20px;">
                        <div class="tab-total">
                            <!-- single-product-start -->
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/3.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span> <br /></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$52.00</li>
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
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/10.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Fusion Backpack</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$59.00</li>
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
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 262.5px; margin-right: 20px;">
                        <div class="tab-total">
                            <!-- single-product-start -->
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/5.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Set of Sprite Yoga Straps</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$34.00</li>
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
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/19.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Compete Track Tote</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$32.00</li>
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
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 262.5px; margin-right: 20px;">
                        <div class="tab-total">
                            <!-- single-product-start -->
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/7.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span> <br /></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Strive Shoulder Pack</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$30.00</li>
                                            <li class="old-price">$32.00</li>
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
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/4.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$52.00</li>
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
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <div class="owl-item" style="width: 262.5px; margin-right: 20px;">
                        <div class="tab-total">
                            <!-- single-product-start -->
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/9.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Wayfarer Messenger Bag</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$35.00</li>
                                            <li class="old-price">$40.00</li>
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
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/8.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Rival Messenger</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$35.00</li>
                                            <li class="old-price">$40.00</li>
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
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <div class="owl-item" style="width: 262.5px; margin-right: 20px;">
                        <div class="tab-total">
                            <!-- single-product-start -->
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/11.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Impulse Duffle</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$74.00</li>
                                            <li class="old-price">$78.00</li>
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
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/3.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Crown Summit</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$36.00</li>
                                            <li class="old-price">$38.00</li>
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
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;">
                        <div class="tab-total">
                            <!-- single-product-start -->
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/1.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Joust Duffle Bag</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$60.00</li>
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
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/18.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span> <br /></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Driven Backpack</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$34.00</li>
                                            <li class="old-price">$36.00</li>
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
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;">
                        <div class="tab-total">
                            <!-- single-product-start -->
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/3.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span> <br /></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$52.00</li>
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
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/10.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Fusion Backpack</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$59.00</li>
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
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;">
                        <div class="tab-total">
                            <!-- single-product-start -->
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/5.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Set of Sprite Yoga Straps</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$34.00</li>
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
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/19.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Compete Track Tote</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$32.00</li>
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
                            <!-- single-product-end -->
                        </div>
                    </div>
                    <div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;">
                        <div class="tab-total">
                            <!-- single-product-start -->
                            <div class="product-wrapper mb-40">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/7.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span> <br /></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Strive Shoulder Pack</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$30.00</li>
                                            <li class="old-price">$32.00</li>
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
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/4.webp" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$52.00</li>
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
                            <!-- single-product-end -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button>
            </div>
            <div class="owl-dots disabled"></div>
        </div>
    </div>
</div>
<!-- new-book-area-start -->
