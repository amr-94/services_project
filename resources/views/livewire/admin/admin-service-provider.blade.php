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
                    <h1>Service Providers</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Service Providers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="content_info">
                <div class="paddings-mini" >
                    <div class="container" >
                        <div class="row portfolioContainer">
                            <div class=" col-md-12 profile1">
                               <div class="panel panel-default">
                                   <div class="panel-heading">
                                   <div class="row">
                                       <div class="col-md-6">
                                           All Service Providers

                                       </div>

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
                                            <th>image</th>
                                            <th>name</th>
                                            <th>Email</th>
                                            <th>phone</th>
                                            <th>from</th>
                                            {{-- <th>Service Category</th> --}}
                                            <th>Service location</th>
                                            <th>Created At</th>
                                            <th>last_updated	</th>
                                            <th>last_uploade	</th>





                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sprovider as $sprovidera )
                                            <tr>
                                                <td>{{ $sprovidera->id }}</td>

                                                <td><img src="{{ asset('images/sprovider') }}/{{ $sprovidera->image }}" width="60" /></td>
                                                <td>{{ $sprovidera->user->name }}</td>
                                                <td>{{ $sprovidera->user->email }}</td>
                                                <td> {{   ($sprovidera ->user->phone) }} </td>
                                                <td>{{ $sprovidera->user->address }}</td>
                                                {{-- <td> {{   ($sprovidera ->category->name) }} </td> --}}
                                                <td> {{   ($sprovidera ->service_location) }} </td>




                                                {{-- <td> {{ $sprovidera->created_at }} </td> --}}
                                                <td> {{ $sprovidera->created_at->locale('ar_AR')->diffForHumans() }} </td>
                                                <td> {{ $sprovidera->updated_at->locale('ar_AR')->diffForHumans() }} </td>

                                                {{-- <td> {{ $catagory->created_at->diffForHumans() }} </td> --}}


                                               {{-- <td> {{\Carbon\Carbon::parse($catagory['created_at'])->diffForHumans() }}</td> --}}


                                                {{-- <td>{{ $providerservice->service->name }}</td> --}}



                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{  $sprovider->links()  }}
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

</div>
