@extends('admin.layouts.app')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">User List</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">User List
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">-->
<!--                <div class="form-group breadcrum-right">-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>-->
<!--                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
        <div class="content-body">
            <!-- Data list view starts -->
            <section id="data-thumb-view" class="data-thumb-view-header">
                <div class="action-btns d-none">
                    <div class="btn-dropdown mr-1 mb-1">
                        <div class="btn-group dropdown actions-dropodown">
                            <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Actions
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                                <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                                <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                                <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form starts -->
               <form method="POST" action="{{route('update-user',$user->id)}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Name</label>
                        <input name="name" type="text" style="border:1px solid white;" class="form-control" value="{{$user->name}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input name="email" type="text"class="form-control" style="border:1px solid white;" value="{{$user->email}}" required>
                    </div>
                    <div class="col-md-12 mt-2">
                        <button type="submit" class="btn btn-success" style="float: right;">Update</button>
                    </div>
                </div>
               </form>
                <!-- Form ends -->
            </section>
            <!-- Data list view end -->
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
