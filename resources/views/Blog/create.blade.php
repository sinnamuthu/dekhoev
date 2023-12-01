@include('admin_header')
<div class="content-wrapper">
<div class="container my-3">
        <form action="{{URL::to('Blog/store')}}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
            <h2 class="text-center">Create a New Blog</h2>
            
                <div class="row my-2">
                    <div class="col-3 my-3">
                        <h3 class="text-center fw-bold">Title</h3>
                    </div>
                    <div class="col-6  my-3">
                        <input type="text" name="Blogtitle" id="title" placeholder="blog title entered to be here">
                    </div>
                    <div class="col-3  my-3">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-3 my-3">
                        <h3 class="text-center fw-bold">Content</h3>
                    </div>
                    <div class="col-6  my-3">
                        <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="Blogcontent" rows="10" placeholder="Blog content to be entered here"></textarea>
                    </div>
                    <div class="col-6  my-3">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-3">
                    </div>
                    <div class="col-6">
                        <center>
                            <div class="input-group mb-2 ">
                                <input type="file" class="form-control" name ="Blogimage" id="inputGroupFile02">
                                <label class="input-group-text upload_icon" for="inputGroupFile02">Upload Image</label>
                            </div>
                        </center>
                    </div>
                    <div class="col-3">
                    </div>
                </div>
            
                <center><a href=""><button class="btn btn-warning my-1 ">Submit</button></a></center><br>
        </form>
        <center><a href={{('/home')}}><button  class="return_admin_button  my-1">Return To Admin Screen</button></a></center>
    </div>
</div>
