@include('admin_body.admin_head.header')
@include('admin_body.admin_head.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>HSBC TEAM<small>Preview</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">HSBC TEAM</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-body">
                <form onsubmit="event.preventDefault(); validateEmail(); validatePhoneNumber();">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Month<span class="req">*</span></label>
                                <input type="month" class="form-control" id="" placeholder="Enter Month">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>File Received Date<span class="req">*</span></label>
                                <input type="date" class="form-control" id="" placeholder="Enter File Received Date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>FORM SOURCE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter FORM SOURCE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>FORM CAMPAIGN ID<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter FORM CAMPAIGN ID">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>FRN NUMBER<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter FRN NUMBER">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>FRN NUMBER<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter FRN NUMBER">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Links<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter Links">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Link date<span class="req">*</span></label>
                                <input type="date" class="form-control" id="" placeholder="Enter Link date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Campaign<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter Campaign">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CRID<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter CRID">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>USER<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter USER">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>MANAGER<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter MANAGER">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box-footer" style="text-align:center;">
                                <button type="submit" class="btn btn-primary">Submit <i
                                        class="fa fa-send-o"></i></button>
                            </div>
                        </div>


                </form>
            </div>
        </div>
    </section>
</div>
@include('admin_body.admin_head.footer')