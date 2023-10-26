<div wire:poll>
    <div class="container">

        <style>
            .adminMessage{
                width: 43%;
                margin-left: 21rem;
            }

            .employeeMessage{
                width: 43%;
            }
        </style>
       <div class="row">
          <div class="col-md-8 offset-md-2">
             <div class="card">
                <div class="card-header">

                   {{--
                   <p>{{ $userId }}</p>
                   --}}
                   <h2>Chat Between Admin And Employee @if (Auth::user()->role=='2')
                      <a href="{{route('logout')}}" class="btn btn-info" style="float: right;"
                         onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"
                         >Logout</a>
                      @endif
                   </h2>
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
                      <div class="col-md-12">
                         @php
                         $messages = App\Models\Message::where('user_id', $user->id)->orWhere('user_id',$userId)->where('receiver',$userId)->orWhere('receiver',$user->id)->get();
                         $admin = App\Models\User::where('role',1)->first();
                         @endphp
                         @foreach($messages as $message)
                         @if ($message->user_id==$user->id && $message->receiver==$userId)
                         <div class="card adminMessage">
                            <div class="card-body bg-primary">
                               <h5>{{$message->user->name}}</h5>
                               <p>{{$message->message}}</p>
                            </div>
                         </div>
                         @endif
                         @if ($message->user_id==$userId && $message->receiver==$user->id)
                         <div class="card employeeMessage">
                            <div class="card-body">
                               <h5>{{$message->user->name}}</h5>
                               <p>{{$message->message}}</p>
                            </div>
                         </div>
                         @endif
                         @endforeach
                      </div>
                   </div>
                </div>
                @endif


                @if( $user->role==2)
                <div class="card-body" style="min-height: 400px;">
                   <div class="row">
                      <div class="col-sm-12">
                         @php
                         $messages = App\Models\Message::where('user_id', $user->id)->orWhere('user_id',$userId)->where('receiver',$userId)->orWhere('receiver',$user->id)->get();
                         $admin = App\Models\User::where('role',1)->first();
                         @endphp
                         @foreach($messages as $message)
                         @if ($message->user_id==$user->id && $message->receiver==$admin->id)
                         <div class="card adminMessage">
                            <div class="card-body bg-primary">
                               <h5>{{$message->user->name}}</h5>
                               <p>{{$message->message}}</p>
                            </div>
                         </div>
                         @endif
                         @if ($message->user_id== $admin->id && $message->receiver==$user->id)
                         <div class="card employeeMessage">
                            <div class="card-body">
                               <h5>{{$message->user->name}}</h5>
                               <p>{{$message->message}}</p>
                            </div>
                         </div>
                         @endif
                         @endforeach
                      </div>
                   </div>
                </div>
                @endif


             </div>
          </div>
       </div>
       {{--row--}}

       <script>
        function changeRoute(route) {
            Livewire.emit('changeRoute', route);
        }
        </script>


       <div class="row">
          <div class="col-md-8 offset-md-2">
             <form wire:submit.prevent="sentFromUser">
                @csrf
                <div class="form-group">
                   <input type="text" wire:model.difer="message" class="form-control" style="display:inline;" required>
                   <input type="hidden" wire.model.difer="userId" value="{{ $userId }}" class="form-control" style="display:inline;">
                   <button type="submit" class="btn btn-success" style="display: inline;">Send</button>
                </div>
             </form>
          </div>
       </div>

 </div>{{-- container --}}



