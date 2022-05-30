<div>

        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Edit Profile</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Edit Profile</li>
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
                                                   Edit  Profile
                                               </div>
                                               <div class="col-md-6">

                                                </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if (Session::has('message'))
                                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>

                                                @endif
                                                <form class="form-horizontal" wire:submit.prevent="updateprofile">

                                                    <div class="form-group" >
                                                        <label for="image" class="control-label col-md-3">Profile Image :</label>
                                                        <div class="col-md-9">

                                                        <input type="file" class="form-control-file" name="newimage" wire:model='newimage' />
                                                        @if ($newimage)
                                                        <img src="{{ $newimage->temporaryUrl() }}" width="220" />
                                                        @elseif ($image)
                                                        <img src="{{ asset('images/sprovider') }}" width="220" />
                                                        @else
                                                        <img src="{{ asset('images/sprovider/dummy-member.jpg') }}" width="220" />

                                                        @endif
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="about" class="control-label col-md-3">About :</label>
                                                        <div class="col-md-9">
                                                                <textarea class="form-control" name="about" wire:model='about'></textarea>

                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="city" class="control-label col-md-3">City :</label>


                                                        <div class="col-md-9">
                                                        <input type="text" class="form-control-file" name="city" wire:model='city'/>
                                                    </div>
                                                      </div>



                                                    <div class="form-group">
                                                        <label for="service_category_id" class="control-label col-md-3">Service Category :</label>


                                                        <div class="col-md-9">
                                                        <select  class="form-control-file" name="service_category_id" wire:model='service_category_id'>
                                                            @foreach ($categories as $categories)
                                                            <option value="{{ $categories->id }}">{{ $categories->name }}</option>

                                                            @endforeach

                                                        </select>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="service_location" class="control-label col-md-3">Service Locations :</label>
                                                             <div class="col-md-9">

                                                             <input type="text" class="form-control-file" name="service_location" wire:model='service_location'/>
                                                    </div>
                                                    </div>


                                                                          <div class="form-group">
                                                        <label for="phone" class="control-label col-md-3">phone :</label>
                                                             <div class="col-md-9">

                                                             <input type="text" class="form-control-file" name="phone" wire:model='phone'/>
                                                    </div>
                                                    </div>


                                                    <button type="submit" class="btn btn-success pull-right">Update Profile</button>


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
