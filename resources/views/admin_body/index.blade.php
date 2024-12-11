@include('admin_body.admin_head.header')
@include('admin_body.admin_head.sidebar')

<style>
.small-box>.small-box-footer {
    position: relative;
    text-align: center;
    padding: 3px 0;
    color: #fff;
    color: rgba(255, 255, 255, 0.8);
    display: block;
    z-index: 10;
    background: rgba(0, 0, 0, 0.1);
    text-decoration: none;
    border-radius: 10px;
}
</style>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header pb-5">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua" style="border-radius:10px;">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Axis Bank</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('admin/dist/img/card/axis.png')}}" style="width:100%; height:auto;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green" style="border-radius:10px;">
                    <div class="inner">
                        <h3>0</h3>

                        <p>HDFC Bank</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('admin/dist/img/card/hdfc.png')}}" style="width:100%; height:auto;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow" style="border-radius:10px;">
                    <div class="inner">
                        <h3>0</h3>

                        <p>SBI Bank</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('admin/dist/img/card/sbi.png')}}" style="width:100%; height:auto;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red" style="border-radius:10px;">
                    <div class="inner">
                        <h3>0</h3>

                        <p>IDFC Bank</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('admin/dist/img/card/idfc.png')}}" style="width:100%; height:auto;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red" style="border-radius:10px;">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Au Bank</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('admin/dist/img/card/au.png')}}" style="width:100%; height:auto;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow" style="border-radius:10px;">
                    <div class="inner">
                        <h3>0</h3>

                        <p>American Express</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('admin/dist/img/card/amecican.png')}}" style="width:100%; height:auto;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green" style="border-radius:10px;">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Indusind Bank</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('admin/dist/img/card/indusind.png')}}" style="width:100%; height:auto;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua" style="border-radius:10px;">
                    <div class="inner">
                        <h3>0</h3>

                        <p>HSBC Bank</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('admin/dist/img/card/hsbc.png')}}" style="width:100%; height:auto;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green" style="border-radius:10px;">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Yes Bank</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('admin/dist/img/card/yes.png')}}" style="width:100%; height:auto;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red" style="border-radius:10px;">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Kotak Mahindra Bank</p>
                    </div>
                    <div class="icon">
                        <img src="{{asset('admin/dist/img/card/kotak.png')}}" style="width:100%; height:auto;">
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
</div>

@include('admin_body.admin_head.footer')