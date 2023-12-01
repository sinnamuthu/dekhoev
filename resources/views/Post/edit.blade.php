@include('admin_header')
<div class="content-wrapper">
<div class="container my-3">
        <form action="{{URL::to('/Post/update')}}/{{$Posts->id}}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
            <h2 class="text-center">Edit Posts </h2>
            
                @if(session('Success'))
                    <div class="alert alert-success">
                      {{ session('Success') }}
                    </div> 
                @endif
                    <div class="container">
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <div class="alart alart-danger" role="alert">
                                        <h4 style="color:red;">{{$error}}</h4>
                                    </div>
                                @endforeach
                            @endif    
                    </div>
                <div class="row my-2">
                    <div class="col-3 my-3">
                        <h3 class="text-center fw-bold">Blog Title</h3>
                    </div>
                    <div class="col-6  my-3">
                        <textarea name="Posttitle" id="title" placeholder="Post title entered to be here" value="{{$Posts->Posttitle}}" row="3" cols="80">{{$Posts->Posttitle}}</textarea>
                    </div>
                    <div class="col-3  my-3">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-3 my-3">
                        <h3 class="text-center fw-bold">Meta Description</h3>
                    </div>
                    <div class="col-6  my-3">
                        <textarea name="metadescription" id="title" placeholder="Meta description" value="{{$Posts->meta_description}}" row="3" cols="80">{{$Posts->meta_description}}</textarea>
                    </div>
                    <div class="col-3  my-3">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-3 my-3">
                        <h3 class="text-center fw-bold">Meta Keyword</h3>
                    </div>
                    <div class="col-6  my-3">
                        <textarea name="metakeyword" id="title" placeholder="Meta Keyword" value="{{$Posts->meta_keyword}}" row="3" cols="80">{{$Posts->meta_keyword}}</textarea>
                    </div>
                    <div class="col-3  my-3">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-3 my-3">
                        <h3 class="text-center fw-bold">Meta Title</h3>
                    </div>
                    <div class="col-6  my-3">
                        <textarea name="metatitle" id="title" placeholder="Meta Title" value="{{$Posts->meta_title}}" row="3" cols="80">{{$Posts->meta_title}}</textarea>
                    </div>
                    <div class="col-3  my-3">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-3 my-3">
                        <h3 class="text-center fw-bold">Content</h3>
                    </div>
                    <!-- <div class="col-6  my-3">
                        <textarea id="exampleFormControlTextarea1" name="Postcontent"  placeholder="Post content to be entered here" value="{{$Posts->Postcontent}}" rows="10" cols="80">{{$Posts->Postcontent}}</textarea>
                        
                    </div> -->
                    <div class="col-6  my-3">
                        <textarea type="text" class="tinymce-editor" id="exampleFormControlTextarea1" placeholder="Post content to be entered here" value="{{$Posts->Postcontent}}" name="Postcontent">{{$Posts->Postcontent}}</textarea>
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
                                <input type="file" class="form-control" name ="Postimage" id="inputGroupFile02">
                                <label class="input-group-text upload_icon" for="inputGroupFile02">Upload Image</label>                               
                            </div>
			                <h5 style="color: blue;" >Note :Should upload only jpeg,png,svg,jpg. Dimension 400px X 400px  and maximum size:30kb </h5>	
                        </center>
                        <center><figure><img src="{{url('UploadImages/Post/'. $Posts->Postimage)}}" class="img-thumbnail"  width="150" height="150" alt="Image"></figure></center>
                    </div>
                    <div class="col-3">
                        
                    </div>
                    <div class="col-3">
                        
                    </div>
                </div>
            
                <center><button class="btn btn-warning my-1 ">Update</button></center><br>
        </form>
          <center><a href="/home"><button  class="return_admin_button  my-1">Return To Admin Screen</button></a></center>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script type="text/javascript">
            tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>