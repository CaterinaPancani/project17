<x-layout>
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
                        <a href="{{route('users.show',$user)}}" class="btn btn-primary">Show</a>
          
                        <a href="{{route('users.edit',$user)}}" class="btn btn-success">Edit</a>
          
                        <a wire:click="delete({{$user->id}})" class="btn btn-danger">Delete</a>
                      </td>
                  </tr>   
                  @endforeach
          
                </tbody>
                {{$users->links()}}
              </table></div>
      </x-layout>
