<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
        {{--  bootstrap css styles  --}}
        <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('../css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('../css/custom.css') }}" />

</head>
<body class="section_admin">

    {{--  table creation starts  --}}
    <section class="table_section ">
        <div class="container-fluid">
            <h1 class="text-center">Admin Panel</h1>
            <div class="add_new ">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary button_add_user  mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add New
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{URL::to('Registration/store')}}" method="POST">
                                 @csrf
                                <div class="modal-body">
                                    {{--  <label for="username" class="btn btn-secondary">Username</label>
                                    <input type="text" name="username" id="username">  --}}
                                    <div class="row">
                                        <div class="col-6 my-3">
                                            <label for="username" class="btn btn-secondary">Username</label>
                                        </div>
                                        <div class="col-6  my-3">
                                            <input type="text" name="username"  required>
                                        </div>
                                        <div class="col-6  my-3">
                                            <label for="email" class="btn btn-secondary">Email Id</label>
                                        </div>
                                        <div class="col-6  my-3">
                                            <input type="text" name="email"  required>
                                        </div>
                                        <div class="col-6  my-3">
                                            <label for="password" class="btn btn-secondary">Password</label>
                                        </div>
                                        <div class="col-6  my-3">
                                            <input type="password" name="password"  required>
                                        </div>
                                        <div class="col-6  my-3">
                                            <label for="confirm_password" class="btn btn-secondary">Confirm Password</label>
                                        </div>
                                        <div class="col-6  my-3">
                                            <input type="password" name="confirm_password" >
                                        </div>
                                        <div class="col-6  my-3">
                                            <label for="Permission_Type" class="btn btn-secondary">Permission Type</label>
                                        </div>
                                        <div class="col-6  my-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="role" value="Admin">
                                                <label class="form-check-label btn btn-secondary" for="flexCheckDefault">
                                                Admin
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="role" value="SuperAdmin" >
                                                <label class="form-check-label btn btn-secondary" for="flexCheckChecked">
                                                Super Admin
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                        </div>
                                        <div class="col-7">
                                            <div class="form-check">
                                                <input class="form-check-input " type="checkbox" name="role[]" value="Notify" >
                                                <label class="form-check-label btn btn-secondary" for="flexCheckDefault">
                                                Notify User Through Mail
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card my-2 table_card section_admin">
            <form>
            <div class="container-fluid">
                <div class="table_section">
                    <table>
                                <thead>
                                    <tr>
                                        <th>Slno</th>
                                        <th >username</th>
                                        <th >email</th>
                                        <th hidden="true">password</th>
                                        <th >role</th>
                                        <th >Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Registration as $item)
                                    <tr>
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->username}}</td>
                                        <td>{{ $item->email}}</td>
                                        <td hidden="true">{{ $item->password}}</td>
                                        <td>{{ $item->role}}</td>
                                        <td>
                                            <!--<a href="{{ URL::to('/Registration/edit') }}/{{$item->id}}" title="View Registrations"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Edit</button></a>-->
                                            <form method="GET" action="{{  URL::to('/Registration/delete')}}/{{$item->id}} " accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Registrations" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>    
                                    @endforeach
                                </tbody>
                    </table>
                </div>
                </form>
            </div>
        </div>
         <a href="{{url('/home')}}"><button class="btn btn-warning table_return_admin my-3">Return To Admin</button></a>
    </section>

    {{--  table creation Ends  --}}


    {{--  bootstrap js files  --}}
    <script type="text/javascript" src="{{ URL('../js/bootstrap.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ URL('../js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL('../js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL('../js/bootstrap.min.js') }}"></script>
</body>
</html>
