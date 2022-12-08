<!-- bestseller-area-start -->
@if(!empty($bestSellingAuthor['title']))
  <div class="bestseller-area pb-100 pt-95">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-12 col-12">
                  <div class="bestseller-content">
                      <h1>Author best selling</h1>
                      <h2>
                          {{ $bestSellingAuthor['title'] }}
                      </h2>
                      <!-- <p class="categories">categories:<a href="#">Books</a> , <a href="#">Audiobooks</a></p> -->
                      <p>
                        {{ $bestSellingAuthor['description'] }}
                      </p>
                      <!-- <div class="social-author">
                          <ul>
                              <li>
                                  <a href="#"><i class="fa fa-facebook"></i></a>
                              </li>
                              <li>
                                  <a href="#"><i class="fa fa-twitter"></i></a>
                              </li>
                          </ul>
                      </div> -->
                  </div>
                  <div class="banner-img-2">
                      <a href="#"><img src="{{ $bestSellingAuthor['featured_image'] }}" alt="banner" /></a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-12 col-12">
                  <div class="bestseller-active owl-carousel owl-loaded owl-drag">
                      <div class="owl-stage-outer">
                          <div class="owl-stage" style="transform: translate3d(-374px, 0px, 0px); transition: all 0s ease 0s; width: 1309px;">
                            @foreach(array_chunk($bestSellingAuthor['books'], 2) as $chunk)
                              <div class="owl-item active" style="width: 167px; margin-right: 20px;">
                                <div class="bestseller-total">
                                  @foreach($chunk as $book)
                                    @include('layouts.includes.home.bestseller.book-card', ['additionalClass' => 'mb-25'])
                                  @endforeach
                                </div>
                              </div>
                            @endforeach
                          </div>
                      </div>
                      <div class="owl-nav">
                          <button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button>
                      </div>
                      <div class="owl-dots disabled"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endif
<!-- bestseller-area-end -->
