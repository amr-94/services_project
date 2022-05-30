<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important ;
        }
        </style>

        <div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>All services </h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>All services </li>
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
                            <div class=" col-md-12 profile1">


                               <div class="panel panel-default">
                                   <div class="panel-heading">
                                   <div class="row">
                                       <div class="col-md-6">
                                           All service

                                       </div>
                                       @if(Route::has('login'))
                                            @auth
                                                           @if (Auth::user()->utype==='ADM')


                                       <div class="col-md-6">
                                          <a href="{{ route('admin.add_service') }}" class="btn btn-info pull-right">add new service</a>


                                       </div>
                                       @endif
                                         @endauth
                                          @endif
                                   </div>
                               </div>
                               </div>
                                    <div class="panel-body">
                                        @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ session::get('message') }}</div>
                                        @endif
                                       <table class="table table-srtiped ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                             <th>Featured</th>
                                            <th>Category</th>
                                            <th>Created At</th>
                                           <th>updated_at</th>

                                            {{-- @if(Route::has('login'))
                                            @auth
                                                                @if (Auth::user()->utype==='ADM') --}}

                                             <th>Action</th>
                                             {{-- @endif
                                              @endauth
                                          @endif --}}



                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $service )
                                            <tr>
                                                <td>{{ $service->id }}</td>

                                                <td><img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}" width="60" /></td>
                                                <td>{{ $service->name }}</td>
                                                <td>{{ $service->price }}</td>
                                                <td>
                                                    @if ($service->status)
                                                    Active
                                                    @else
                                                    Inactive

                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($service->featured)
                                                    yes
                                                    @else
                                                    no

                                                    @endif
                                                </td>
                                                <td> {{ $service->category->name }} </td>
                                                <td> {{ $service->created_at ->diffForHumans() }}  </td>
                                                <td> {{ $service->updated_at->diffForHumans() }} </td>

                                                {{-- @if(Route::has('login'))
                                            @auth
                                             @if (Auth::user()->utype==='ADM') --}}

                                                <td>
                                                    <a href="{{ route('admin.edit_service',['service_slug'=>$service->slug]) }}" ><i class="fa fa-edit fa-2x text-info"></i></a>
                                                    <a href="#" onclick="confirm('are you sure, you want to delete this service')||event.stopImmediatePropagation()" wire:click.pervent="deleteservice({{ $service->id }})" style="margin-left: px">
                                                    <i class="fa fa-times fa-2x text-danger"></i></a>
                                                </td>


                                            </tr>
                                            {{-- @endif
                                             @endauth
                                          @endif --}}
                                        @endforeach
                                    </tbody>
                                </table>
                                {{  $services->links()  }}
                                    </div>
                            </div>

                        </div>
                                            </div>
                </div>
            </div>


        </section>

</div>
