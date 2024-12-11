@include('admin_body.admin_head.header')
@include('admin_body.admin_head.sidebar')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Documentation<small>Preview</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Documentation</li>
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
                                <label>APPLICATION REFERENCE NUMBER<span class="req">*</span></label>
                                <input type="text" class="form-control" id=""
                                    placeholder="Enter APPLICATION REFERENCE NUMBER">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>E REFERENCE NUMBER<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter E REFERENCE NUMBER">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>SOURCING CHANNEL<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter SOURCING CHANNEL">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CREATION DATE<span class="req">*</span></label>
                                <input type="date" class="form-control" id="" placeholder="Enter CREATION DATE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CUSTOMER TYPE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter CUSTOMER TYPE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CUSTOMER NAME<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter CUSTOMER NAME">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>SM CODE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter SM CODE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>PRODUCT CODE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter PRODUCT CODE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>PROMO CODE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter PROMO CODE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>LC1 CODE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter LC1 CODE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>COMPANY NA<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter COMPANY NA">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DROPOFF REASON<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter DROPOFF REASON">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>IDCOM STATUS<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter IDCOM STATUS">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>VKYC STATUS<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter VKYC STATUS">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>IPA STATUS<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter IPA STATUS">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CURRENT ST<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter CURRENT ST">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CITY<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter CITY">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>STATE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter STATE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>PIN CODE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter PIN CODE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>SURROGATE ELIGIBILITY<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter SURROGATE ELIGIBILITY">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DECLINE CODE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter DECLINE CODE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>FINAL DECISION<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter FINAL DECISION">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ETB NB SUCC FLAG<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter ETB NB SUCC FLAG">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CURABLE FLAG<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter CURABLE FLAG">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DECLINE DESCRIPTION<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter DECLINE DESCRIPTION">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>AGEING BRA<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter AGEING BRA">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>BRANCH CODE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter BRANCH CODE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CHANNEL<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter CHANNEL">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>VKYC CONSENT DATE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter VKYC CONSENT DATE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ADV REF NO<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter ADV REF NO">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>VKYC EXPIR<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter VKYC EXPIR">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CAPTURE LINK<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter CAPTURE LINK">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>PROFILE ID<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter PROFILE ID">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DAP FINAL FLAG<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter DAP FINAL FLAG">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>LC2 CODE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter LC2 CODE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>LG CODE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter LG CODE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>RESTART FLAG<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter RESTART FLAG">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DAP FINAL FLAG<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter DAP FINAL FLAG">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>QDE STATUS<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter QDE STATUS">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>QDE REJECT REASON<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter QDE REJECT REASON">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>COMPANY CODE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter COMPANY CODE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>VARIABLE VALUE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter VARIABLE VALUE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>LOGIN MONTH<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter LOGIN MONTH">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DECISION M<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter DECISION M">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Un-Assisted/Assisted<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter Un-Assisted/Assisted">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DAP FINAL<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter DAP FINAL">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CREATION DATE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter CREATION DATE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>FINAL DECISION DATE<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter FINAL DECISION DATE">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Inprocess Classification<span class="req">*</span></label>
                                <input type="text" class="form-control" id=""
                                    placeholder="Enter Inprocess Classification">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Classification<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter Classification">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Decline Type<span class="req">*</span></label>
                                <input type="text" class="form-control" id="" placeholder="Enter Decline Type">
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