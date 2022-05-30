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
                    <h1>Contacts</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Contacts</li>
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
                                        All Contacts

                                       </div>
                                       <div class="col-md-6">


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
                                            <th>name</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>message</th>
                                            <th>Created At</th>
                                            <th>Created At</th>
                                            <th>Action</th>




                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contact as $catagory )
                                            <tr>
                                                <td>{{ $catagory->id }}</td>

                                                <td>{{ $catagory->name }}</td>
                                                <td>{{ $catagory->email }}</td>
                                                <td>{{ $catagory->phone }}</td>
                                                <td>{{ $catagory->message }}</td>
                                                <td> {{ $catagory->created_at->locale('ar_AR')->diffForHumans() }} </td>

                                                <td> {{ $catagory->created_at }} </td>
                                                <td>
                                                <a href="#" onclick="confirm('are you sure, you went to delete this !')||event.stopImmediatePropagation()" wire:click.prevent="deletemessage({{ $catagory->id }})"
                                                     style="margin-left: 20px">
                                                        <i class="fa fa-times fa-2x text-danger"></i></a>
                                                </td>
                                               {{-- <td> {{\Carbon\Carbon::parse($catagory['created_at'])->diffForHumans() }}</td> --}}




                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{  $contact->links()  }}
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

</div>
