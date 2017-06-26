@extends('partials.admin.app')

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-file-text-o"></i> Add New Team Member</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="/admin">Home</a></li>
                        <li><i class="icon_document_alt"></i>Team</li>
                        <li><i class="fa fa-file-text-o"></i>Add New Member</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    @include('flash::message')
                    <section class="panel">
                        <header class="panel-heading">
                            Add New Team Member
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="/admin/team/store" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    @if($errors->any())
                                        @foreach($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <strong>Danger!</strong> {{$error}}.
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">member_name<span style="color:red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">member_position<span style="color:red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="position">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">member_email<span style="color:red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">member_image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Description<span style="color:red;">*</span></label>
                                    <div class="col-sm-10">
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label"></label>
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>

        </section>
    </section>
    <!--main content end-->

@endsection