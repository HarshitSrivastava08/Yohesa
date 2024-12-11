@include('admin_body.admin_head.header')
@include('admin_body.admin_head.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Create Team LIST
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Create Team LIST</li>
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
                                    <th>Admin</th>
                                    <th>Senior Manager</th>
                                    <th>Manager</th>
                                    <th>Team Leader</th>
                                    <th>Telecaller</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                                $sno=1;
                                ?>
                            @foreach ($data as $d)
                            <tbody>
                                <tr>
                                    <td>{{ $sno++ }}</td>
                                    <td>{{ $d -> main }}</td>
                                    <td>{{ $d -> senior }}</td>
                                    <td>{{ $d -> manager }}</td>
                                    <td>{{ $d -> team }}</td>
                                    <td>{{ $d -> telecaller }}</td>
                                    <td>
                                        <a href="{{url('admin_body/create_team/edit_team/' .$d->id)}}"><i
                                                class="fa fa-pencil-square-o"
                                                style="font-size:20px; color: #5dbcc8;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{url('delete_team/' .$d->id)}}"><i class="fa fa-trash"
                                                style="font-size:20px; color: red;"></i></a>
                                    </td>
                                </tr>
                                </tfoot>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('admin_body.admin_head.footer')