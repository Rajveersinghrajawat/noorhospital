@extends('frontend.layout.layout')
@section('content')
<style>
    .service-card.style1 {
  -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  background-color: #fff;
}

</style>
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-1 style1  portfolio-wrap ptb-100">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Hospitals at NoorHealth</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Hospitals</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

     <section>
       <div class="filtersection mt-30">
           <div class="container">
            <form action="{{url('/hospitals')}}" method="post" id="filterForm">
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
                 <!-- <div class="col-lg-3">
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
               </div> -->
                 <div class="col-lg-2">
                       <div class="doctorfiller py-2">
                             <div class="form-group">
                              <select name="city" id="" class="form-control">
                                <option value=""> Select City </option>
                                
                                @foreach($city as $city_data)
                                <option value="{{$city_data->id}}">{{$city_data->city}}</option>
                                @endforeach
                            </select>
                       </div>
                   </div>
               </div>
                 <div class="col-lg-3">
                       <div class="doctorfiller py-2">
                           <div class="form-outline">
                            <input type="search" name="search" class="form-control" placeholder="Search by hospital" id="">
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

    <section class="  style1 portfolio-wrap ptb-100">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <!-- <span>Our Portfolio</span> -->
                <h2>Our Hospitals</h2>
            </div>
            <div class="row">
                @foreach($hospital as $hos)
                <div class="col-xl-3 col-md-3 col-lg-3 col-sm-12 col-12 my-3">
                    <div class="service-card style1">
                        <div class="service-img imgeffects">
                            <img src="{{isset($hos->image)?url($hos->image):url('/public/noimage.png')}}" alt="{{isset($hog->image_tag)?$hog->image_tag:'Image'}}" height="300px" width="100%">
                        </div>
                        <div class="row" style="color: #1E427B; text-align: center;">
                            <div class="col-6 pt-2 pl-5">
                            <span> <i class='fas fa-map-marker-alt'></i> {{$hos['get_city']->city}}, India</span>
                            </div>
                            <!--<div class="col-6 pt-2 pl-5">-->
                            <!--<span> <i class='fas fa-clock'></i> Estb in {{$hos->estb}}</span>-->
                            <!--</div>-->
                            <!--<div class="col-6 pt-2 pl-5">-->
                            <!--<span> <i class='fa fa-road'></i> {{$hos->distance}} km fron airport</span>-->
                            <!--</div>-->
                            <div class="col-6 pt-2 pl-5">
                            <span> <i class="fa fa-bed"></i> {{$hos->bed}} Beds</span>
                            </div>
                        </div>
                        <div class="service-info textsize p-2 text-center">
                            
                            <h3><a href="{{url('/hospital/'.$hos->slug)}}">{{$hos->title}}</a></h3>
                            
                            <a href="{{url('/hospital/'.$hos->slug)}}" class="profilebtn">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- <div class="text-center mt-10">
                        <div class="hero-btn ">
                                <a href="service-one.php" class="btn style1">View More</a>
                                </div>
                    </div> -->
            </div>
            <div class="d-flex justify-content-center">
                            {!! $hospital->links() !!}
                        </div>
        </div>
    </section>

    <script>
    function clearFilters() {
        document.getElementById("filterForm").reset();
        location.reload();
    }
</script>

    @endsection