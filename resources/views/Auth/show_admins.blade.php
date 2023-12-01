
@include('admin_header')
<div class="content-wrapper">
<div class="overlay">
    <form action="/register" method="get">
        <center><button class="super_admin btn btn-primary my-5">Create Super Admin</button></center>
    </form>
    <div class="container">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alart alart-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif    
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div> 
    @endif
        <table>
            <thead style="background-color:lightblue;">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($User as $values)
                    <tr>
                        <td>{{$values->id}}</td>
                        <td>{{$values->name}}</td>
                        <td>{{$values->email}}</td>
                        <td>{{$values->confirm_password}}</td>
                        <td>
                        <a href="{{ URL::to('/Auth/delete_admin') }}/{{$values->id}}" title="Delete Admin"><button class="btn btn-danger btn-sm" onclick="return confirm(&quot;Do you want delete this admin user ?&quot;)"><i class="fa fa-eye" aria-hidden="true"></i> Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1 model_rtn_admin">Return To Admin Screen</button></a></center>
</div>
</div>
