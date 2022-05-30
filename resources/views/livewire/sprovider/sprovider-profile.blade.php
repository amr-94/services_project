<div>

        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Profile</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li> Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row portfolioContainer">
                            <div class=" col-md-8 col-md-offset-2 profile1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                              <div class="col-md-6">
                                                     Profile
                                               </div>
                                               <div class="col-md-6">

                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                @if($Sprovider->image)

                                                                 <img src="{{ asset('images/sprovider') }}/{{ $Sprovider->image }}" width="100%" />
                                                          @else
                                                                 <img src="{{ asset('images/sprovider/dummy-member.jpg') }}" width="100%" />
                                                           @endif



                                            </div>
                                            <div class="col-md-8" style="text-align: center">
                                                            <h3>Name : {{ Auth::user()->name }}</h3>
                                                            <p>{{ $Sprovider ->about }}</p>
                                                            <p><b>Email :</b>{{ Auth::user()->email }}</p>
                                                            <p><b>phone :</b>{{ Auth::user()->phone  }}</p>
                                                            <p><b>Service Location :</b>{{ $Sprovider->city }}</p>
                                                            <p><b>Service Category :</b>
                                                               @if ($Sprovider->service_category_id)
                                                               {{ $Sprovider->category->name }}
                                                               @endif
                                                            </p>
                                                            <p><b>Provider city :</b> {{ Auth::user()->address }}</p>
                                                            {{-- <p><b>Service Location :</b> {{ $Sprovider->service_location }}</p> --}}


                                                            <a href="{{ route('Sprovider.edit.profile') }}" class="btn btn-info pull-right">Edit profile </a>


                                           </div>

                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</div>
