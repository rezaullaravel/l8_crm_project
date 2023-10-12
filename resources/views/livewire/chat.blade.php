<div wire:poll>
    <div class="container">
        <div class="row">

          <div class="col-md-8 offset-md-2">
            <div class="card">
               <div class="card-header">
                  <p>{{ $userId }}</p>
                  <h2>Chat Between Admin And Employee <a href="{{route('logout')}}" class="btn btn-info" style="float: right;"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                    >Logout</a></h2>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                     </form>
               </div>

               @php
                $user = App\Models\User::where('id',Auth::user()->id)->first();
               @endphp

               @if( $user->role==1)
                  <div class="card-body" style="min-height: 400px;">
                    <div class="row">

                        <div class="col-md-6">
                            @php

                             $admin_messages = App\Models\Message::where('user_id', $user->id)->where('receiver',$userId)->get();
                            @endphp

                              @foreach($admin_messages as $message)
                             <div class="card">
                                <div class="card-body bg-primary">
                                    <h5>{{$message->user->name}}</h5>
                                    <p>{{$message->message}}</p>
                                </div>
                             </div>
                            @endforeach
                         </div>

                      <div class="col-md-6 mt-5">
                         @php
                          $user_messages = App\Models\Message::where('user_id',$userId)->get();
                         @endphp

                         @foreach($user_messages as $message)
                          <div class="card">
                             <div class="card-body">
                                 <h5>{{$message->user->name}}</h5>
                                 <p>{{$message->message}}</p>
                             </div>
                          </div>
                         @endforeach
                      </div>
                   </div>
               </div>
               @endif


               @if($user->role==2)
                   <div class="card-body" style="min-height: 400px;">
                    <div class="row">
                      <div class="col-md-6 mt-5">
                         @php
                         $admin = App\Models\User::where('role',1)->first();
                          $user_messages = App\Models\Message::where('user_id',$user->id)->where('receiver', $admin->id)->get();
                         @endphp

                         @foreach($user_messages as $message)
                          <div class="card">
                             <div class="card-body bg-primary">
                                 <h5>{{$message->user->name}}</h5>
                                 <p>{{$message->message}}</p>
                             </div>
                          </div>
                         @endforeach
                      </div>
                      <div class="col-md-6">
                         @php

                          $admin_messages = App\Models\Message::where('user_id', $admin->id)->where('receiver',$user->id)->get();
                         @endphp

                           @foreach($admin_messages as $message)
                          <div class="card">
                             <div class="card-body">
                                 <h5>{{$message->user->name}}</h5>
                                 <p>{{$message->message}}</p>
                             </div>
                          </div>
                         @endforeach
                      </div>
                   </div>
               </div>
               @endif


            </div>
         </div>
        </div>{{--row--}}

       <div class="row">
         <div class="col-md-8 offset-md-2">
            <form wire:submit.prevent="sentFromUser">
                @csrf
                <div class="form-group">
               <input type="text" wire:model.difer="message" class="form-control" style="display:inline;">
               <input type="hidden" wire.model.difer="userId" value="{{ $userId }}" class="form-control" style="display:inline;">
               <button type="submit" class="btn btn-success" style="display: inline;">Send</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>


