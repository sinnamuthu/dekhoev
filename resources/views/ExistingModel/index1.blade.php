<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
        {{--  bootstrap css styles  --}}
        <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('public/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('public/css/custom.css') }}" />

</head>    
    <body>
            <form>
            <div class="container-fluid">
                <div class="table_section">
                    <table>
                                <thead>
                                    <tr>
                                        <th>Slno</th>
                                        <th hidden="true">Newfeaturemaster_id</th>
                                        <th hidden="true">brandmaster_id</th>
                                        <th >Products</th>
                                        <th >OEM_name</th>
                                        <th >model_name</th>
                                        <th hidden="true">feature_name</th>
                                        <th hidden="true">Featurevalues</th>
                                        <th hidden="true">Modelimage</th>
                                        
                                        <th >Actions</th>
                                        <th >Status</th>
                                    </tr>
                                </thead>
                                <!--<tbody>-->
                                <!--    @foreach($NewMo $item)-->
                                <!--    <tr>-->
                                <!--        <td>{{ $item->id}}</td>-->
                                <!--        <td>{{ $item->username}}</td>-->
                                <!--        <td>{{ $item->email}}</td>-->
                                <!--        <td hidden="true">{{ $item->password}}</td>-->
                                <!--        <td>{{ $item->role}}</td>-->
                                <!--        <td>-->
                                <!--            <a href="{{ URL::to('/Registration/edit') }}/{{$item->id}}" title="View Registrations"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Edit</button></a>-->
                                <!--            <form method="GET" action="{{  URL::to('/Registration/delete')}}/{{$item->id}} " accept-charset="UTF-8" style="display:inline">-->
                                <!--                {{ method_field('DELETE') }}-->
                                <!--                {{ csrf_field() }} -->
                                <!--                <button type="submit" class="btn btn-danger btn-sm" title="Delete Registrations" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>-->
                                <!--            </form>-->
                                <!--        </td>-->
                                <!--    </tr>    -->
                                <!--    @endforeach-->
                                <!--</tbody>-->
                    </table>
                </div>
                </form>
    {{--  bootstrap js files  --}}
    <script type="text/javascript" src="{{ URL('public/js/bootstrap.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ URL('public/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL('public/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL('public/js/bootstrap.min.js') }}"></script>
</body>
</html>