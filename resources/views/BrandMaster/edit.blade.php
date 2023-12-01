@include('admin_header')
<div class="content-wrapper">
{{--  Edit OEM Master in OEM Master  starts --}}
<form action="{{URL::to('/BrandMaster/update')}}/{{$Brandmaster->id}}" method="POST" enctype="multipart/form-data">
  {!! csrf_field() !!}
    <section class="new_feature ">
        <div class="container mb-5">
            <div class="create_new_feature">
                <h2 class="text-center">Edit OEM Master in OEM Master</h2>
            </div>
            <div class="new_brand my-5">
                    <div class="row my-5 fname">
                        <input type="hidden" name="id" id="id" value="{{$Brandmaster->id}}">
                        <div class="card py-2 my-3">
                            <label for="oem_name" style="font-size:24px;">Enter OEM Name</label>
                            <center><input type="text" class="new_oem_text py-3" name="new_oem_name" id="new_oem" placeholder="Text OEM Name"  value="{{$Brandmaster->new_oem_name}}"></center>
                        </div>
                        <div class="col-3 my-3">
                        </div>
                        <div class="card py-5 my-3" id="FAQ1">
                            <div class="col-3">
                                    <h4 class="text-center">Question 1</h4>
                            </div>
                            <div class="col-3">
                                    <textarea name="Question1" id="Question1" id="frown" placeholder="Enter Text..." rows="3" cols="100"   value="{{$Brandmaster->Question1}}">{{$Brandmaster->Question1}}</textarea>
                            </div>
                            <div class="col-3">
                                    <h4 class="text-center">Answer 1</h4>
                            </div>
                            <div class="col-3">
                                    <textarea name="Answer1" id="Answer1" id="frown" placeholder="Enter Text..." rows="3" cols="100"  value="{{$Brandmaster->Answer1}}">{{$Brandmaster->Answer1}}</textarea>
                            </div>
                        </div>
                        <div class="card py-5 my-3" id="FAQ2">
                            <div class="col-3">
                                    <h4 class="text-center">Question 2</h4>
                            </div>
                            <div class="col-3">
                                    <textarea name="Question2" id="Question2" id="frown" placeholder="Enter Text..." rows="3" cols="100"  value="{{$Brandmaster->Question2}}">{{$Brandmaster->Question2}}</textarea>
                            </div>
                            <div class="col-3">
                                    <h4 class="text-center">Answer 2</h4>
                            </div>
                            <div class="col-3">
                                    <textarea name="Answer2" id="Answer2" id="frown" placeholder="Enter Text..." rows="3" cols="100"  value="{{$Brandmaster->Answer2}}">{{$Brandmaster->Answer2}}</textarea>
                            </div>
                        </div>
                        <div class="card py-5 my-3" id="FAQ3">
                            <div class="col-3">
                                    <h4 class="text-center">Question 3</h4>
                            </div>
                            <div class="col-3">
                                    <textarea name="Question3" id="Question3" id="frown" placeholder="Enter Text..." rows="3" cols="100"  value="{{$Brandmaster->Question3}}">{{$Brandmaster->Question3}}</textarea>
                            </div>
                            <div class="col-3">
                                    <h4 class="text-center">Answer 3</h4>
                            </div>
                            <div class="col-3">
                                    <textarea name="Answer3" id="Answer3" id="frown" placeholder="Enter Text..." rows="3" cols="100"  value="{{$Brandmaster->Answer3}}">{{$Brandmaster->Answer3}}</textarea>
                            </div>
                        </div>
                        <div class="col-7 my-3">
                            
                                
                                <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02" name="OEMImage" value="{{$Brandmaster->OEMImage}}">
                                <label class="input-group-text upload_icon" for="inputGroupFile02"  value="{{$Brandmaster->OEMImage}}" >Upload logo</label></div>
                                <p style="text-color:blue">Note :Should upload only jpeg,png,svg,jpg-Dimension 400px X 400px and maxsize:50kb </p>
                                <img src="{{url('/UploadImages/BrandMaster/'.$Brandmaster->OEMImage)}}" class="img-thumbnail"  width="150" height="150" alt="logo">
                            
                        </div>
                        <div class="container">
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <div class="alart alart-danger" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif    
                        </div>
                    </div>
                </div>
                <center><button value="Save" class="btn btn-warning my-3 save_change_btn">Update</button></center><br>
        </div>
    </section>    
</form>
<!--<form action="{{url('/NewFeature/index/')}}" method="GET">-->
<!--    {!! csrf_field() !!}-->
<!--    <center><a href="{{url('/NewFeature/index/')}}"><button  class="return_admin_button my-5 ">Back</button></a></center>-->
<!--</form>-->
<center><a href="{{url('/home')}}"><button  class="return_admin_button my-1">Return To Admin Screen</button></a></center>
</div>
