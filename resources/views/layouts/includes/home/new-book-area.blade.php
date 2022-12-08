@php
  $totalBooksCount = 0;

  foreach ($featuredBooks as $collection) {
    $totalBooksCount += count($collection['books'] ?? []);
  }
@endphp
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

                      @foreach(array_chunk($collection['books'], 2) as $bookIndex => $chunk)
                        <div class="owl-item active" style="width: 262.5px; margin-right: 20px;">
                            <div class="tab-total">
                                @foreach($chunk as $chunkIndex => $book)
                                  @if($chunkIndex == 0)
                                    @include('layouts.includes.home.product-area.book-card', ['additionalClass' => 'mb-40'])
                                  @else
                                    @include('layouts.includes.home.product-area.book-card')
                                  @endif
                                @endforeach
                            </div>
                        </div>
                      @endforeach
                    @endif
                  @endforeach
                </div>
            </div>
            @if($totalBooksCount > 8)
              <div class="owl-nav">
                  <button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button>
              </div>
            @endif
            <!-- <div class="owl-dots disabled"></div> -->
        </div>
    </div>
</div>
<!-- new-book-area-start -->
