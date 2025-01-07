@extends('frontend.layout.layout')
@section('content')

<style>
    .sizedoct h3 a {
    padding: 0px 25px;
    margin-bottom: 8px;
    transition: 0.5s;
    box-shadow: 0px 0px 1px #6c9914;
    user-select: none;
    border-radius: 5px;
    display: inline-block;
    /*width: 100%;*/
    margin: 1%;
}

.sizedoct h3 a:hover {
    background: #6c9914 !important;
    color: white;
}
</style>

<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Specialists at NoorHealth</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Specialists </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <section>
       <div class="filtersection mt-30">
           <div class="container">
            <form action="{{url('/doctors')}}" method="post" id="filterForm">
                @csrf
               <div class="row py-3 shodowsclass">
                   <div class="col-lg-3">
                       <div class="doctorfiller py-2">
                             <div class="form-group">
                              <select name="specialities" id="" class="form-control">
                                <option value="">Select Specialities </option>
                                @foreach($servic as $ser_data)
                                <option value="{{$ser_data->id}}">{{$ser_data->title}}</option>
                                @endforeach
                            </select>
                       </div>
                   </div>
               </div>
                 <div class="col-lg-3">
                       <div class="doctorfiller py-2">
                             <div class="form-group">
                              <select name="hospitals" id="" class="form-control">
                                <option value=""> Select Hospitals </option>
                                 @foreach($hospital as $hos_data)
                                <option value="{{$hos_data->id}}">{{$hos_data->title}}</option>
                                @endforeach
                            </select>
                       </div>
                   </div>
               </div>
                 <!-- <div class="col-lg-2">
                       <div class="doctorfiller py-2">
                             <div class="form-group">
                              <select name="city " id="" class="form-control">
                                <option value=""> Select City </option>
                                
                                @foreach($city as $city_data)
                                <option value="{{$city_data->id}}">{{$city_data->city}}</option>
                                @endforeach
                            </select>
                       </div>
                   </div>
               </div> -->
                 <div class="col-lg-3">
                       <div class="doctorfiller py-2">
                           <div class="form-outline">
                            <input type="search" name="search" class="form-control" placeholder="Search by doctor" id="">
                           </div>
                 
                   </div>
               </div>
               
               <div class="col-lg-3">
                   <div class="service-info text-end py-2" style="display: flex;">
                        <a href="#">
                            <button type="submit" class="btn style1 d-block mx-auto">
                                Filter
                            </button>
                        </a> &nbsp;&nbsp;
                        <a href="{{url('/doctors')}}">
                            <button onclick="clearFilters()" class="btn style1 d-block mx-auto">
                                Clear
                            </button>
                        </a>
                    </div>
               </div>
           </form>
           </div>
           
       </div>
    </section>

    <section class="portfolio-wrap ptb-40">
        <div class="container">
            <div class='traingtabs '>
                <!--<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">-->

                <!--    <li class="nav-item" role="presentation">-->
                <!--        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All Show</button>-->
                <!--    </li>-->

                <!--    <li class="nav-item" role="presentation">-->
                <!--        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Cardiology </button>-->
                <!--    </li>-->

                <!--</ul>-->

                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="row">
                            @foreach($doctor as $doc)
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-10 col-12 mb-3">
                                <div class="portfolio-card style1 shadow-lg " style="padding-bottom:5px">
                                    <?php
                                    if (!empty($doc->image)) {
                                        $image = url($doc->image);
                                    } else {
                                        $image = url('/public/noimage.png');
                                    }
                                    ?>
                                    <a href="{{url('/doctor/'.$doc->slug)}}" class="portfolio-cat"><img src="{{$image}}" class="img-fluid" alt="{{isset($doc->image_tag)?$doc->image_tag:'Image'}}" style="width:100%;height:280px"></a>
                                    <div class="row" style="color: #1E427B; text-align: center;">
                            <div class="col-6 pt-2 pl-5">
                            <span>  {{isset($doc['get_hospital']->title)?$doc['get_hospital']->title:'N/A'}}</span>
                            </div>
                            <!--<div class="col-6 pt-2 pl-5">-->
                            <!--<span> <i class='fas fa-clock'></i> Estb in 2007</span>-->
                            <!--</div>-->
                            <!--<div class="col-6 pt-2 pl-5">-->
                            <!--<span> <i class='fa fa-road'></i> 23 km fron airport</span>-->
                            <!--</div>-->
                            <div class="col-6 pt-2 pl-5">
                            <span> Experience {{isset($doc->experience)?$doc->experience:'N/A'}}+</span>
                            </div>
                        </div>
                                    
                                    
                                    <!--<div class="row">-->
                                    <!--    <div class="col-6 pt-2 pl-5">-->
                                    <!--    <span> <i class='fas fa-map-marker-alt'></i> {{isset($doc['get_hospital']->title)?$doc['get_hospital']->title:'N/A'}}</span>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-6 pt-2 pl-5">-->
                                    <!--    <span> <i class='fas fa-clock'></i> Experience {{isset($doc->experience)?$doc->experience:'N/A'}}+</span>-->
                                    <!--    </div>-->
                                        
                                    <!--</div>-->
                                    <div class="portfolio-info sizedoct" style="padding: 10px;
        margin: auto;">
                                        
                                        <h3 class="mb-2"><a href="{{url('/doctor/'.$doc->slug)}}">{{$doc->title}}</a></h3>
                                        @if(!empty($doc['get_specialist']->slug))
                                        <a href="{{url('/speciality/'.$doc['get_specialist']->slug)}}" class="portfolio-cat">
                                            {{isset($doc['get_specialist']->title)?$doc['get_specialist']->title:'N/A'}}</a>
                                        @endif
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        <div class="d-flex justify-content-center">
                            {!! $doctor->onEachSide(1)->links() !!}
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    </section>





    <!-- Portfolio Section Start -->
    <!-- <section class="portfolio-wrap ptb-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-12 my-3">
                                <div class="portfolio-card style1">
                                    <img src="{{url('/public/frontend/')}}/assets/img/dr.-kumud-handa_1664185490.png" class="img-fluid"  alt="Image">
                                    <div class="portfolio-info sizedoct">
                                        <a href="portfolio-category.html" class="portfolio-cat">ENT Surgeon</a>
                                        <h3><a href="portfolio-details.html">Dr Kumud Handa</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-12 my-3">
                                <div class="portfolio-card style1">
                                    <img src="{{url('/public/frontend/')}}/assets/img/dr.-kumud-handa_1664185490.png" class="img-fluid"  alt="Image">
                                    <div class="portfolio-info sizedoct">
                                        <a href="portfolio-category.html" class="portfolio-cat">ENT Surgeon</a>
                                        <h3><a href="portfolio-details.html">Dr Kumud Handa</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-12 my-3">
                                <div class="portfolio-card style1">
                                    <img src="{{url('/public/frontend/')}}/assets/img/dr.-kumud-handa_1664185490.png" class="img-fluid"  alt="Image">
                                    <div class="portfolio-info sizedoct">
                                        <a href="portfolio-category.html" class="portfolio-cat">ENT Surgeon</a>
                                        <h3><a href="portfolio-details.html">Dr Kumud Handa</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-12 my-3">
                                <div class="portfolio-card style1">
                                    <img src="{{url('/public/frontend/')}}/assets/img/dr.-kumud-handa_1664185490.png" class="img-fluid"  alt="Image">
                                    <div class="portfolio-info sizedoct">
                                        <a href="portfolio-category.html" class="portfolio-cat">ENT Surgeon</a>
                                        <h3><a href="portfolio-details.html">Dr Kumud Handa</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-12 my-3">
                                <div class="portfolio-card style1">
                                    <img src="{{url('/public/frontend/')}}/assets/img/dr.-kumud-handa_1664185490.png" class="img-fluid"  alt="Image">
                                    <div class="portfolio-info sizedoct">
                                        <a href="portfolio-category.html" class="portfolio-cat">ENT Surgeon</a>
                                        <h3><a href="portfolio-details.html">Dr Kumud Handa</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-12 my-3">
                                <div class="portfolio-card style1">
                                    <img src="{{url('/public/frontend/')}}/assets/img/dr.-kumud-handa_1664185490.png" class="img-fluid"  alt="Image">
                                    <div class="portfolio-info sizedoct">
                                        <a href="portfolio-category.html" class="portfolio-cat">ENT Surgeon</a>
                                        <h3><a href="portfolio-details.html">Dr Kumud Handa</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-12 my-3">
                                <div class="portfolio-card style1">
                                    <img src="{{url('/public/frontend/')}}/assets/img/dr.-kumud-handa_1664185490.png" class="img-fluid"  alt="Image">
                                    <div class="portfolio-info sizedoct">
                                        <a href="portfolio-category.html" class="portfolio-cat">ENT Surgeon</a>
                                        <h3><a href="portfolio-details.html">Dr Kumud Handa</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-12 my-3">
                                <div class="portfolio-card style1">
                                    <img src="{{url('/public/frontend/')}}/assets/img/dr.-kumud-handa_1664185490.png" class="img-fluid"  alt="Image">
                                    <div class="portfolio-info sizedoct">
                                        <a href="portfolio-category.html" class="portfolio-cat">ENT Surgeon</a>
                                        <h3><a href="portfolio-details.html">Dr Kumud Handa</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-12 my-3">
                                <div class="portfolio-card style1">
                                    <img src="{{url('/public/frontend/')}}/assets/img/dr.-kumud-handa_1664185490.png" class="img-fluid"  alt="Image">
                                    <div class="portfolio-info sizedoct">
                                        <a href="portfolio-category.html" class="portfolio-cat">ENT Surgeon</a>
                                        <h3><a href="portfolio-details.html">Dr Kumud Handa</a></h3>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                       
                    </div>
                </section> -->
    <!-- Portfolio Section End -->

</div>
<!-- Content wrapper end -->
<script>
    function clearFilters() {
        document.getElementById("filterForm").reset();
        location.reload();
    }
</script>
@endsection