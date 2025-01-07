@extends('admin.layout.layout')
@section('content')
<style>
.share {
  position: relative;
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  width: 133px;
  height: 60px;
}

.share::before {
  content: "Share";
  /* font-family: fontAwesome; */
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(45deg, #ff00ff, #8a2be2);
  border-radius: 30px;
  text-align: center;
  line-height: 60px;
  color: #fff;
  font-size: 30px;
  padding-left: 2px;
  transition: 0.5s;
  z-index: 1;
}

.share:hover::before {
  width: 60px;
}

.share li {
  position: absolute;
  transition: 1s;
}

.share li a {
  display: block;
  width: 60px;
  height: 60px;
  line-height: 60px;
  text-align: center;
  background-color: #262626;
  color: #fff;
  border-radius: 50%;
  font-size: 30px;
  transition: 0.5s;
}

.share li:nth-child(1) a {
  background-color: #3b5999;
}

.share li:nth-child(2) a {
  background-color: #55acee;
}
.share li:nth-child(3) a {
  background-color: #dd4b39;
}
.share li:nth-child(4) a {
  background-color: #0077B5;
}
.share li:nth-child(5) a {
  background-color: #e4405f;
}

.share:hover li:nth-child(1) a {
  transform: translatex(68px) rotate(360deg);
  transition-delay: 0.8s;
}

.share:hover li:nth-child(2) a {
  transform: translatex(136px) rotate(360deg);
  transition-delay: 0.6s;
}

.share:hover li:nth-child(3) a {
  transform: translatex(204px) rotate(360deg);
  transition-delay: 0.4s;
}

.share:hover li:nth-child(4) a {
  transform: translatex(272px) rotate(360deg);
  transition-delay: 0.2s;
}

.share:hover li:nth-child(5) a {
  transform: translatex(340px) rotate(360deg);
  transition-delay: 0s;
}
</style>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">{{$title}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <!-- <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Dashboard</a></li> -->
                                <!-- <li class="breadcrumb-item">{{$title}}</li> -->
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
        
            <div class="row">
                <div class="col-md-3">
                    <div class="card mini-stats-wid">
                        <a href="{{route('user')}}">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Customers</p>
                                        <h4 class="mb-0">{{$total_user}}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="dripicons-user-group font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>




                <div class="col-md-3">
                    <div class="card mini-stats-wid">
                        <a href="{{route('page')}}">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Pages</p>
                                        <h4 class="mb-0">{{$Page}}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-file font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>





            </div>
        </div>
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection