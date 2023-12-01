@include('admin_header')
<div class="content-wrapper">
{{--  create new model starts --}}
    <section class="section_admin new_model">
        <div class="container mb-5">
                <div class="create_new_model">
                    <h2 class="text-center">Create a New Model</h2>
                    <div class="row my-5">
                        <div class="col-4">
                        </div>
                        <div class="col-2">
                            <form action="{{ URL::to('/Twowheelerspecsfeature/create')}}" method="GET">
                                {!! csrf_field() !!}
                                <input type='hidden' name='cate' value='2wheeler'>
                             <button type="radio"  class="btn btn-info btn-sm" name="twowheel" value="2wheeler"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                            <label for="2wheel">2 Wheeler</label><br>
                            </form> 
                        </div>
                        <div class="col-2">
                            <form action="{{ URL::to('/Threewheelercargofeature/create')}}" method="GET">
                            <input type='hidden' name='cate' value='3wheeler Cargo'>
                             <button type="radio"  class="btn btn-info btn-sm" value="3wheeler Cargo"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                            <label for="3wheelcargo">3 Wheeler Cargo</label><br>
                            </form>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4">
                        </div>
                        <div class="col-2">
                            <form action="{{ URL::to('/fourwheelerspecsfeature/create/')}}" method="GET">
                            <input type='hidden' name='cate' value='4wheeler'>
                            <button type="radio"  class="btn btn-info btn-sm"  value="4wheeler"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                            <label for="4wheel">4 Wheeler</label><br>
                            </form>
                        </div>
                        <div class="col-2">
                            <form action="{{ URL::to('/Threewheelerpassfeature/create')}}" method="GET">
                            <input type='hidden' name='cate' value='3wheeler Pass'>
                            <button type="radio"  class="btn btn-info btn-sm" value="3wheelpass"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                            <label for="3wheelpass">3 Wheeler Pass</label><br>
                            </form>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                </div>
            <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1 model_rtn_admin">Return To Admin Screen</button></a></center>
        </div>
    </section>

{{--  create new model ends --}}


</div>
<script>
    function passv(){
        // alert('2 wheeler');
        $.ajax({
               type:'POST',
               url:'/get2w',
               data:'',
               success:function(data) {
                //   $("#msg").html(data.msg);
                alert (data);
               }
            });
    }
</script>