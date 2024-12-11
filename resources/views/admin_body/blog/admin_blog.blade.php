@include('admin_body.admin_head.header')
@include('admin_body.admin_head.sidebar')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Blogs<small>Preview</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Blogs</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-body">
                <form method="post" action="{{route('bloged')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Title<span class="req">*</span></label>
                                <input type="text" class="form-control" name="meta_title" id="meta_title" required
                                    placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image<span class="req">*</span></label>
                                <input type="file" class="form-control" name="image" id="image" required
                                    placeholder="Enter Image">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Meta Description<span class="req">*</span></label>
                                <textarea class="form-control" name="meta_description" id="meta_description" required
                                    placeholder=""></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Short Description<span class="req">*</span></label>
                                <textarea class="form-control" name="description" id="description" required
                                    placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="box box-info">
                                    <!-- /.box-header -->
                                    <div class="box-body pad">
                                        <form id="myForm">
                                            <textarea class="form-control" name="editor1" id="editor1" rows="10"
                                                cols="80" required placeholder="Enter content here..."></textarea>
                                            <!-- Display validation error message here -->
                                            @error('editor1')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box-footer" style="text-align:center;">
                                <button type="submit" class="btn btn-primary">Submit <i
                                        class="fa fa-send-o"></i></button>
                            </div>
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                        </div>
                </form>
            </div>
        </div>
    </section>
</div>
@include('admin_body.admin_head.footer')
<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
    var editorContent = document.getElementById('editor1').value.trim();
    if (editorContent === '') {
        event.preventDefault(); // Prevent form submission
        alert('The content field is required!');
    }
});
</script>