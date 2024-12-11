@include('admin_body.admin_head.header')
@include('admin_body.admin_head.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            HDFC Bank Infinia Credit Card LIST
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">HDFC Bank Infinia Credit Card LIST</li>
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
                                    <th>S.NO</th>
                                    <th>First Name</th>
                                    <th>URL</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sno=1
                                    ?>
                                @foreach ($data as $dt)
                                <tr>
                                    <td>{{ $sno++ }}</td>
                                    <td>{{ $dt -> first_name}}</td>
                                    <td>{{ $dt -> url}}</td>
                                    <td>
                                        <a href="{{url('credit_card/hdfc/edit_admin_hdfc_infinia/' . $dt->id)}}"><i class="fa fa-pencil-square-o"
                                                style="font-size:20px; color: #5dbcc8;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{url('delete_infinia_hdfc/' . $dt->id)}}"><i class="fa fa-trash" style="font-size:20px; color: red;"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('admin_body.admin_head.footer')