@include('admin_body.admin_head.header')
@include('admin_body.admin_head.sidebar')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Axis Bank Airtel Credit Card<small>Preview</small></h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Axis Bank Airtel Credit Card</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-body">
                <form method="post" action="{{route('airtel')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h4 style="background: lightgray; padding: 5px 5px 5px 5px; font-weight: 700;">Information
                            </h4>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name<span class="req">*</span></label>
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                    placeholder="Enter First Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>URL<span class="req">*</span></label>
                                <input type="text" class="form-control" id="url" name="url" placeholder="Enter URL" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box-footer" style="text-align:center;">
                                <button type="submit" class="btn btn-primary">Submit <i
                                        class="fa fa-send-o"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@include('admin_body.admin_head.footer')