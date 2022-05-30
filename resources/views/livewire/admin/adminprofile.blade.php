<div>

        <div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
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
                                                @if($Admin->image)

                                                                 <img src="{{ asset('images/admin') }}/{{ $Admin->image }}" width="100%" />
                                                          @else
                                                                 <img src="{{ asset('images/admin/Placeholder_Person.jpg') }}" width="100%" />
                                                           @endif



                                            </div>
                                            <div class="col-md-8" style="text-align: center">
                                                            <h3>Name : {{ Auth::user()->name }}</h3>
                                                            <p>{{ $Admin ->about }}</p>
                                                            <p><b>Email :</b>{{ Auth::user()->email }}</p>
                                                            <p><b>phone :</b>{{ $Admin->phone }}</p>
                                                            <p><b>City :</b>{{ $Admin->address }}</p>



                                                            <a href="{{ route ('admin.edit.profile') }}" class="btn btn-info pull-right">Edit profile </a>


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
