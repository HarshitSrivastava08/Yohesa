@include('admin_body.admin_head.header')
@include('admin_body.admin_head.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Blogs LIST
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Blogs LIST</li>
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
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $sno = 1;
                                @endphp
                                @foreach($data as $d)
                                <tr>
                                    <td>{{ $sno++ }}</td>
                                    <td>{{$d->category_name}}</td>
                                    <td>
                                        <a href="{{url('admin_body/edit/'.$d->id)}}"><i class="fa fa-pencil-square-o"
                                                style="font-size:20px; color: #5dbcc8;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{url('delete/'.$d->id)}}"><i class="fa fa-trash"
                                                style="font-size:20px; color: red;"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('admin_body.admin_head.footer')