@include('admin_body.admin_head.header')
@include('admin_body.admin_head.sidebar')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>UPDATE</h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">UPDATE</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-body">
                <div class="contaienr">
                    <form action="{{route('updatefunction')}}" method="post">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Category<span class="req">*</span></label>
                                <input type="text" class="form-control" id="category" name="category_name"
                                    value="{{$data['category_name']}}" placeholder="Category">
                                    <input type="hidden" name="id" value="{{ $data->id }}">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box-footer" style="text-align:center;">
                                <button type="submit" class="btn btn-primary">UPDATE </button>
                            </div>
                            <p>
                                @if(session('msg'))
                                <script>
                                alert("{{session('msg')}}");
                                </script>
                                @endif
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@include('admin_body.admin_head.footer')