<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
              <th scope="row">{{$user->id}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
                <a href="{{route('user.show',$user)}}">Show</a>
                <a wire:click="delete({{$user->id}})">Delete</a>

              </td>
            </tr>                
            @endforeach
        </tbody>
        {{$users->links()}}
      </table></div>
