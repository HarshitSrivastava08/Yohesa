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
                                <th>S.NO.</th>
                                    <th>Meta Title</th>
                                    <th>Image</th>
                                    <th>Meta Description</th>
                                    <th>Short Description</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $serial = 1; 
                            ?> 
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $serial++ }}</td>
                                    <td>{{ $product-> meta_title}}</td>
                                    <td> @if ($product->image)
                                        <img src="{{ asset('/' . $product->image) }}" width="50">
                                        @endif</td>
                                    <td>{{ $product-> meta_description}}</td>
                                    <td>{{ $product-> description}}</td>
                                    <td>{{ $product-> editor1 }}</td>
                                    <td>
                                        <a href="{{url('blog/edit_admin_blog/'.$product->id)}}"><i class="fa fa-pencil-square-o"
                                                style="font-size:20px; color: #5dbcc8;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{url('blog_delete/'.$product->id)}}"><i class="fa fa-trash" style="font-size:20px; color: red;"></i></a>
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