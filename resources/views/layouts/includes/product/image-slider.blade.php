@if (count($book['images']))
  <div class="col-lg-5 col-md-6 col-12">
      <div class="flexslider">
          <div class="flex-viewport" style="overflow: hidden; position: relative;">
              <ul class="slides" style="width: 1200%; transition-duration: 0s; transform: translate3d(-322px, 0px, 0px);">
                @foreach($book['images'] as $image)
                  <li data-thumb="{{ $image['path'] }}" style="width: 322px; margin-right: 0px; float: left; display: block;" class="flex-active-slide" data-thumb-alt="">
                      <img src="{{ $image['path'] }}" alt="woman" draggable="false" />
                  </li>
                @endforeach
              </ul>
          </div>
          <ul class="flex-direction-nav">
              <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
              <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
          </ul>
      </div>
  </div>
@endif
