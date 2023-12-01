@include('admin_header')
<div class="content-wrapper">
{{--  create OEM Master in OEM master  starts --}}

<section class="new_feature ">
    <div class="container mb-5">
        <div class="create_new_feature">
            <h2 class="text-center">Create New OEM Master in OEM Master</h2>
            <div class="row my-5">
                <div class="col-4">
                </div>
                <div class="col-2">
                    <form action="{{URL::to('/BrandMaster/create')}}" method="GET" >
                        <input type='hidden' name='cate' value='2wheeler'>
                        <button type="radio"  class="btn btn-info btn-sm" value="2wheeler"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                        <label for="2wheel">2 Wheeler</label><br>
                    </form> 
                </div>
                <div class="col-2">
                    <form action="{{URL::to('/BrandMaster/create')}}" method="GET" >
                        <input type='hidden' name='cate' value='3wheeler Cargo'>
                        <!--<input type="radio" id="3wheelcargo" name="Products" value="3wheelcargo">-->
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
                    <form action="{{URL::to('/BrandMaster/create')}}" method="GET" >
                        <input type='hidden' name='cate' value='4wheeler'>
                        <!--<input type="radio" id="4wheel" name="Products" value="4wheel">-->
                        <button type="radio"  class="btn btn-info btn-sm" value="4wheeler"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                        <label for="4wheel">4 Wheeler</label><br>
                    </form>
                </div>
                <div class="col-2">
                    <form action="{{URL::to('/BrandMaster/create')}}" method="GET" >
                        <input type='hidden' name='cate' value='3wheeler Pass'>
                        <!--<input type="radio" id="3wheelpass" name="Products" value="3wheelpass">-->
                        <button type="radio"  class="btn btn-info btn-sm" value="3wheeler Pass"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                        <label for="3wheelpass">3 Wheeler Pass</label><br>
                    </form>
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>
    </div>
</section>
{{--  create new feature in feature master ends  --}}
        <!--<form action="{{URL::to('/NewFeature/show')}}" method="GET">-->
        <!--    <div class="show Feature">-->
        <!--        <center><a href=""><button Value="Save" class="btn btn-success my-3">View Features</button></a></center>   -->
        <!--    </div>-->
        <!--</form>-->

        <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1">Return To Admin Screen</button></a></center>
</div>
