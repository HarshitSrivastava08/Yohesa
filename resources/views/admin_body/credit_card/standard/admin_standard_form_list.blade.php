@include('admin_body.admin_head.header')
@include('admin_body.admin_head.sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Standard Chartered Form LIST
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Standard Chartered Form LIST</li>
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
                                    <th> CUSTOMER FULL NAME</th>
                                    <th>PAN NUMBER</th>
                                    <th>DATE OF BIRTH</th>
                                    <th>MOTHER NAME</th>
                                    <th>FATHER NAME</th>
                                    <th>CURRENT FULL ADDRESS</th>
                                    <th>LANDMARK 1</th>
                                    <th>LANDMARK 2</th>
                                    <th>PIN CODE</th>
                                    <th>MOBILE NUMBER</th>
                                    <th>PERSONAL MAIL ID</th>
                                    <th>OFFICIAL MAIL ID</th>
                                    <th>COMPANY NAME</th>
                                    <th>DESIGNATION</th>
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
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>11</td>
                                    <td>12</td>
                                    <td>13</td>
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