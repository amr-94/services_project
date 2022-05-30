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
                    <h1>service categories</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>service categories</li>
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
                                           All service categories

                                       </div>
                                       <div class="col-md-6">
                                          <a href="{{ route('admin.add_category') }}" class="btn btn-info pull-right">add new Category</a>


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
                                            <th>slug</th>
                                            <th>Featured</th>
                                            <th>Created At</th>
                                            <th>Since</th>
                                             <th>updated_at	</th>

                                             <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($catagories as $catagory )
                                            <tr>
                                                <td>{{ $catagory->id }}</td>

                                                <td><img src="{{ asset('images/categories') }}/{{ $catagory->image }}" width="60" /></td>
                                                <td>{{ $catagory->name }}</td>
                                                <td>{{ $catagory->slug }}</td>
                                                <td>
                                                    @if ($catagory ->featured)
                                                    yes
                                                    @else
                                                    no

                                                    @endif



                                                </td>

                                                <td> {{ $catagory->created_at }} </td>
                                                <td> {{ $catagory->created_at->locale('ar_AR')->diffForHumans() }} </td>
                                                <td> {{ $catagory->updated_at->locale('ar_AR')->diffForHumans() }} </td>

                                                {{-- <td> {{ $catagory->created_at->diffForHumans() }} </td> --}}


                                               {{-- <td> {{\Carbon\Carbon::parse($catagory['created_at'])->diffForHumans() }}</td> --}}



                                                <td>
                                                        <a href="{{ route('admin.services_by_catecgory',['category_slug' =>$catagory->slug])}}" style="margin-right:10px"><i class="fa fa-list fa-2x text-info"></i></a>

                                                      <a href="{{ route('admin.edit_service_category',['category_id' =>$catagory->id])}}" ><i class="fa fa-edit fa-2x text-info"></i></a>

                                                       <a href="#" onclick="confirm('are you sure, you went to delete this !')||event.stopImmediatePropagation()" wire:click.prevent="deleteservice({{ $catagory->id }})" style="margin-left: 20px">
                                                              <i class="fa fa-times fa-2x text-danger"></i></a>

                                                </td>


                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{  $catagories->links()  }}
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

</div>
