@include('admin_header')
<div class="content-wrapper">
{{--  create new model starts --}}
            <div class="container-fluid">
                <h1>Existing Models</h1>
                <br>
                <br>
                
                <div class="table_section">
                    <table id="tblexistmodel">
                                <thead>
                                    <tr>
                                        <th>Slno</th>
                                        <th >Products</th>
                                        <th >OEM Name</th>
                                        <th >Model Name</th>
                                        <!--<th >Status</th>-->
                                        <th >Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($NewModel as $item)
                                    <tr>
                                        <td>{{ $item->id}}</td>
                                        <td>{{ $item->Products}}</td>
                                        <td>{{ $item->OEM_name}}</td>
                                        <td>{{ $item->model_name}}</td>
                                        <!--<td>{{ $item->Status}}</td>-->
                                        <td>
                                            <form action="{{URL::to('/NewModel/destroy/')}}/{{ $item->id}}" method="GET">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }} 
                                            <!--<button id="btnApprove" onclick="Action('Approve')" class="btn btn-success btn-sm"  value="Approve">Approve</button>-->
                                            <button  type="submit" id="delete"  class="btn btn-danger btn-sm"  onclick="return confirm(&quot;Confirm delete?&quot;)" value="Delete">Delete</button>
                                            </form>
                                        </td>
                                    </tr>    
                                    @endforeach
                                </tbody>

                    </table>
                </div>
               
        </div>
        <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1 model_rtn_admin">Return To Admin Screen</button></a></center>
    </section>

{{--  create new model ends --}}


</div>
