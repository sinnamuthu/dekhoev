@include('admin_header')
<div class="content-wrapper">
<div class="container my-3">
        <form action="" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
            <h2 class="text-center"> {{$Metadescription->page_name}} </h2>
            
                <div class="row my-2">
                    <div class="col-3 my-3">
                        <h3 class="text-center fw-bold">Keyword</h3>
                    </div>
                    <div class="col-6  my-3">
                        <input type="text" name="Posttitle" id="title" placeholder="Post title entered to be here" value="{{$Metadescription->page_name}}">
                    </div>
                    <div class="col-3  my-3">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-3 my-3">
                        <h3 class="text-center fw-bold">Title</h3>
                    </div>
                
                    <div class="col-6  my-3">
                    <input type="text" name="title" id="title" placeholder="Post title entered to be here" value="{{$Metadescription->title}}">
                    </div>
                    <div class="col-6  my-3">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-3 my-3">
                        <h3 class="text-center fw-bold">Description</h3>
                    </div>
                
                    <div class="col-6  my-3">
                    <input type="text" name="Posttitle" id="title" placeholder="Post title entered to be here" value="{{$Metadescription->page_name}}">
                    </div>
                    <div class="col-6  my-3">
                    </div>
                </div>

            
                <!-- <center><a href=""><button class="btn btn-warning my-1 ">Post</button></a></center><br> -->
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
