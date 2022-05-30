
<div>


            @if(Route::has('login'))
       @auth
       @if (Auth::user()->utype==='SVP'or Auth::user()->utype==='ADM')
          @foreach ($usersA as $usersA  )
                 <div class="col-md-6">






                      <ul class="visible-md visible-lg text-left">

                            <li><a href=" tel:{{ $usersA ->phone }}"><i class="fa fa-phone"></i> {{ $usersA ->phone }}</a>
                            <a href="mailto:{{  $usersA->email }}"><i class="fa fa-envelope"></i>
                                    {{ $usersA->email }}</a></li>

                                     {{-- <li class="login-form"> <a href="#" title="Register">Notifications</a>
                                    <ul ul class="visible-md visible-lg text-left">
                                             <li> عدد الاشعارات الغير مقروءة :<h3  style="color: rgb(241, 23, 23)" id="notifications_count">
                                                   {{ auth()->user()->unreadNotifications->count() }}
                                                     </h3>
                                              </li>
                                                     @foreach(auth()->user()->unreadNotifications as $notification)
                                                   <li>
                                                       <a href="{{ url('service')}}/{{  $notification->data['slug'] }}">

                                                       {{ $notification->data['title'] }} :
                                                        <p ><h3 style="color: rgb(0, 0, 0);text-align: center">
                                                        {{ $notification->data['user'] }}</h3></p>
                                                       <p style="color: rgb(0, 0, 0);text-align: center">   {{ $notification->created_at }} </p>
                                                       </a>
                                                    </li>
                                                       @endforeach

                                    </ul>
                            </li> --}}
                        </ul>

                    </div>


             @endforeach
                 @endif
                      @endauth
                      @endif



  @if(Route::has('login'))
       @auth
       @if (Auth::user()->utype==='cst')

  @foreach ($usersP as $usersA  )
                 <div class="col-md-6">






                      <ul class="visible-md visible-lg text-left">

                            <li><a href=" {{ $usersA ->phone }}"><i class="fa fa-phone"></i> {{ $usersA ->phone }}</a></li>
                            <li><a href="mailto:lost_angel51@yahoo.com"><i class="fa fa-envelope"></i>
                                    {{ $usersA->email }}</a></li>
                        </ul>

                    </div>


@endforeach





                      @endif
                      @endauth
                      @endif




</div>
