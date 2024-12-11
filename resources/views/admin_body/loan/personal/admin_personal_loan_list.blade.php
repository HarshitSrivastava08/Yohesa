@include('admin_body.admin_head.header')
@include('admin_body.admin_head.sidebar')


<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Personal Loan LIST
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Personal Loan LIST</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Mobile Number</th>
                                    <th>Email</th>
                                    <th>Loan Amount</th>
                                    <th>Loan Months</th>
                                    <th>City</th>
                                    <th>Page Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td><select>Status
                                            <option>Approved</option>
                                            <option>Reject</option>
                                        </select></td>
                                    <td>
                                        <a href=""><i class="fa fa-pencil-square-o"
                                                style="font-size:20px; color: #5dbcc8;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href=""><i class="fa fa-trash" style="font-size:20px; color: red;"></i></a>
                                    </td>
                                </tr>
                                </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('admin_body.admin_head.footer')