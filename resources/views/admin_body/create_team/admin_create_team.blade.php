@include('admin_body.admin_head.header')
@include('admin_body.admin_head.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Create Team<small>Preview</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Create Team</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-body">
                <form method="post" action="{{route('create_team')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Admin<span class="req">*</span></label>
                                <select class="form-control" required name="main">
                                    <option>Select Admin</option>
                                    <option>x</option>
                                    <option>y</option>
                                    <option>z</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="senior">Senior Manager <span class="req">*</span></label>
                                <select class="form-control" id="senior" name="senior" required>
                                    <option value="" disabled selected>Select Sr. Manager</option>
                                    <option value="x">X</option>
                                    <option value="y">Y</option>
                                    <option value="z">Z</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Manager<span class="req">*</span></label>
                                <select class="form-control" required name="manager">>
                                    <option>Select Manager</option>
                                    <option>x</option>
                                    <option>y</option>
                                    <option>z</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Team Leader<span class="req">*</span></label>
                                <select class="form-control" required name="team">>
                                    <option>Select Team Leader</option>
                                    <option>x</option>
                                    <option>y</option>
                                    <option>z</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Telecaller<span class="req">*</span></label>
                                <select class="form-control" required name="telecaller">>
                                    <option>Select Telecaller</option>
                                    <option>x</option>
                                    <option>y</option>
                                    <option>z</option>
                                </select>
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