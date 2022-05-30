<div>
 <div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>{{ $scategory->name }} Services</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>{{ $scategory->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="container">
                <div class="row" style="margin-top: -30px;">
                    <div class="titles">
                        <h2>{{ $scategory->name }} <span>Services</span></h2>
                        <i class="fa fa-plane"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div class="content_info" style="margin-top: -70px;">
                <div>
                    <div class="container">
                        <div class="portfolioContainer">
                            @foreach ($scategory->services as $services  )
                                
                           
                            <div class="col-xs-6 col-sm-4 col-md-3 nature hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="{{ route('home.service_details',['service_slug'=>$services->slug]) }}">
                                    <div class="img-hover">
                                        <img src="{{ asset('images/services/thumbnails') }}/{{$services->thumbnail  }}" alt="{{ $services->name }}"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>{{ $services->name }}</h3>
                                        <hr class="separator">
                                        <p>{{ $services->tagline }}</p>
                                        <div class="content-btn"><a href="{{ route('home.service_details',['service_slug'=>$services->slug]) }}"
                                                class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span>&#36;</span><b>From</b>{{ $services->price }}</div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            
                           
                           
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>            
        </section> 

</div>
