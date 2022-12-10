<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="modal-tab">
                            <div class="product-details-large tab-content">
                                @foreach($book['images'] as $index => $image)
                                  <div class="tab-pane {{ !$index ? 'active' : '' }}" id="image-{{++$index}}">
                                      <img src="{{ $image['path'] }}" alt="" />
                                  </div>
                                @endforeach
                            </div>
                            <div class="product-details-small quickview-active owl-carousel owl-loaded owl-drag mt-20">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                        @foreach($book['images'] as $index => $image)
                                        <div class="owl-item {{ !$index ? 'active' : '' }}">
                                            <a class="" href="{{ $image['path'] }}"><img src="{{ $image['path'] }}" alt="" style="width:20%" /></a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button>
                                    <button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button>
                                </div>
                                <div class="owl-dots">
                                    <button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="modal-pro-content">
                            <h3>{{ $book['name'] }}</h3>
                            <div class="price">
                                <span>₹{{ $book['discounted_price'] ?? $book['price'] }}</span>
                            </div>
                            <p>{{ $book['description'] }}</p>
                            @if ($book['in_stock'])
                              <form action="javascript:void(0)">
                                  <input type="number" value="1" class="qty" />
                                  <button class="add-to-cart" data-book-id="{{ $book['id'] }}">Add to cart</button>
                              </form>
                              <span><i class="fa fa-check"></i> In stock</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
