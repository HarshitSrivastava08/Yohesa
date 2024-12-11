@include('admin_body.admin_head.header')
@include('admin_body.admin_head.sidebar')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add Employee<small>Preview</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Employee</li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-body">
                <form >
                    <div class="row">
                        <div class="col-md-12">
                            <h4 style="background: lightgray; padding: 5px 5px 5px 5px; font-weight: 700;">Add Employee
                            </h4>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name<span class="req">*</span></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" required
                                    placeholder="Enter First Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name<span class="req">*</span></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" required
                                    placeholder="Enter Last Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Staff Id<span class="req">*</span></label>
                                <input type="text" class="form-control" id="staff" name="staff" required
                                    placeholder="Enter Staff Id">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email<span class="req">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required
                                    placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone No<span class="req">*</span></label>
                                <input type="TEXT" class="form-control" id="phone_no" name="phone_no" required
                                    placeholder="Enter Phone No">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date Of Birth<span class="req">*</span></label>
                                <input type="date" class="form-control" id="dob" name="dob" required
                                    placeholder="Enter Date Of Birth">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date Of Joining<span class="req">*</span></label>
                                <input type="date" class="form-control" id="doj" name="doj" required
                                    placeholder="Enter Date Of Joining">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender<span class="req">*</span></label>
                                <select class="form-control" name="gender" required>
                                    <option>Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image<span class="req">*</span></label>
                                <input type="file" class="form-control" id="image" name="image" required placeholder="Enter Image">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password<span class="req">*</span></label>
                                <input type="password" class="form-control" id="password" name="password" required placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirm Password<span class="req">*</span></label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword" required placeholder="Enter Confirm Password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Assign Role<span class="req">*</span></label>
                                <select class="form-control" name="role"  required>
                                    <option>Select Role</option>
                                    <option>Admin</option>
                                    <option>Senior Manager</option>
                                    <option>Manager</option>
                                    <option>Team Leader</option>
                                    <option>Tellecaller</option>
                                </select>
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