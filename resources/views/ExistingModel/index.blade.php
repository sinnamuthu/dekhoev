@include('admin_header')
<div class="content-wrapper">
{{--  Make Change to an Exisiting Model  starts --}}

<section class="new_feature ">
    <div class="container mb-5">
        <div class="create_new_feature">
            <h2 class="text-center">Make Change to an Exisiting Model</h2>
            <div class="row my-5">
                <div class="col-4">
                </div>
                <div class="col-2">
                    <form action="{{URL::to('/ExistingModel/twowheelerExitmodel')}}" method="HEAD" >
                        <input type='hidden' name='cate' value='2wheeler'>
                        <button type="radio"  class="btn btn-info btn-sm" value="2wheeler"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                        <!--<a href="{{URL::to('/Twowheelerspecsfeature/index')}}" title="View 4w specs"><button class="btn btn-success btn-sm">2W pass</button></a>-->
                        <label for="2wheel">2 Wheeler</label><br>
                    </form> 
                </div>
                <div class="col-2">
                    <form action="{{URL::to('/ExistingModel/threewheelercargoExistingmodel')}}" method="HEAD" >
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
                    <form action="{{URL::to('/ExistingModel/fourwheelerExistingmodel')}}" method="GET" >
                        <input type='hidden' name='cate' value='4wheeler'>
                        <button type="radio"  class="btn btn-info btn-sm" value="4wheeler"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                        <label for="4wheel">4 Wheeler</label><br>
                    </form>
                </div>
                <div class="col-2">
                    <form action="{{URL::to('/ExistingModel/threewheelerpassExistingModel')}}" method="GET" >
                        <input type='hidden' name='cate' value='3wheeler Pass'>
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
{{--  Make Change to an Exisiting Model end  --}}

        <center><a href="{{url('/home')}}"><button  class="return_admin_button my-1">Return To Admin Screen</button></a></center>
</div>
