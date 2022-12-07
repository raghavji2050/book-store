<!-- product-area-start -->

<div class="product-area pt-95 xs-mb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-50">
                    <h2>Top interesting</h2>
                    <p>
                        Browse the collection of our best selling and top interresting products. <br />
                        ll definitely find what you are looking for..
                    </p>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- tab-menu-start -->
                <div class="tab-menu mb-40 text-center">
                    <ul class="nav justify-content-center" role="tablist">
                        @foreach($productAreaBooks as $index => $collection)
                          @if(count($collection['books'] ?? []))
                            @php
                              $isActiveTab = !$index;
                            @endphp
                            <li>
                              <a class="{{ $isActiveTab ? 'active' : '' }}"
                                 href="#{{ $collection['slug'] }}"
                                 data-bs-toggle="tab"
                                 aria-selected="{{ $isActiveTab ? 'true' : 'false' }}"
                                 role="tab"
                                 @if(!$isActiveTab) tabindex="-1" @endif
                                 >
                                 {{ $collection['title'] }}
                               </a>
                             </li>
                           @endif
                        @endforeach
                    </ul>
                </div>
                <!-- tab-menu-end -->
            </div>
        </div>
        <!-- tab-area-start -->
        <div class="tab-content">
            @foreach($productAreaBooks as $index => $collection)
              @if(count($collection['books'] ?? []))
                @php
                  $isActiveTab = !$index;
                @endphp
                <div class="tab-pane fade {{ $isActiveTab ? 'active show' : '' }}" id="{{ $collection['slug'] }}" role="tabpanel">
                    <div class="tab-active owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1130px, 0px, 0px); transition: all 0s ease 0s; width: 3955px;">
                              @foreach($collection['books'] as $bookIndex => $book)
                                @include('layouts.includes.home.product-area.book-card')
                              @endforeach
                            </div>
                        </div>
                        @if (count($collection['books']) > 4)
                          <div class="owl-nav">
                              <button type="button" role="presentation" class="owl-prev">
                                <i class="fa fa-angle-left">
                                </i>
                              </button>
                              <button type="button" role="presentation" class="owl-next">
                                <i class="fa fa-angle-right"></i>
                              </button>
                          </div>
                        @endif
                        <!-- <div class="owl-dots disabled"></div> -->
                    </div>
                </div>
              @endif
            @endforeach
        </div>
        <!-- tab-area-end -->
    </div>
</div>
<!-- product-area-end -->
