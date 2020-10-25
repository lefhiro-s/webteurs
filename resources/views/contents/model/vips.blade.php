@section('case')
  <div id="models-vip-carousel" class="carousel slide border-bottom border-danger" data-ride="carousel">
    <div class="carousel-inner" style="height:99vh">
        @php
          $active = 'active'
        @endphp
      
        @foreach ($models as $key => $model)
          <div class="carousel-item  {{$active}} h-100 ">
              @php
                $model_image_profile = json_decode($model->url_adress)[0]->download_link;
                $active = ''
              @endphp
                <div class="w-100 h-100 carousel-image-container" 
                     style="background-image: url({{asset('storage/'.$model_image_profile)}});" alt="...">
                </div>
                <div class="carousel-caption d-none d-md-block">
                  <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                    <h2 class="section-heading mb-4">
                      <span class="section-heading-upper">Fresh Coffee</span>
                      <span class="section-heading-lower">Worth Drinking</span>
                    </h2>
                    <p class="mb-3">Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!
                    </p>
                    <div class="intro-button mx-auto">
                      <a class="btn btn-danger btn-xl" href="#">Visit Us Today!</a>
                    </div>
                  </div>
                </div>
          </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#models-vip-carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#models-vip-carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@show