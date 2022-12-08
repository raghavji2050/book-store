<!-- most-product-area-start -->
@php
  $size = 3;
@endphp

<div class="most-product-area pt-90 pb-100">
    <div class="container">
        <div class="row">
            @foreach($mostAreaBooks as $category)
              @if (count($category['books']))
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="section-title-2 mb-30">
                        <h3>{{ $category['title'] }}</h3>
                    </div>
                    <div class="product-active-2 owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-520px, 0px, 0px); transition: all 0s ease 0s; width: 1560px;">
                              @foreach(array_chunk($category['books'], $size) as $chunkIndex => $chunk)
                                <div class="owl-item {{ !$chunkIndex ? 'active' : '' }}" style="width: 260px;">
                                  <div class="product-total-2">
                                    @foreach($chunk as $bookIndex => $book)
                                      @if($bookIndex < $size - 1)
                                        @include('layouts.includes.home.most-product-area.book-card', ['additionalClass' => 'bd mb-18'])
                                      @else
                                        @include('layouts.includes.home.most-product-area.book-card')
                                      @endif
                                    @endforeach
                                  </div>
                                </div>
                              @endforeach
                            </div>
                        </div>
                        @if (count($category['books']) > $size)
                          <div class="owl-nav">
                              <button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button>
                          </div>
                        @endif
                    </div>
                </div>
              @endif
            @endforeach
        </div>
    </div>
</div>
<!-- most-product-area-end -->
