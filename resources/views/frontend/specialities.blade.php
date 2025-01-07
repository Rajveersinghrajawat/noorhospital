@extends('frontend.layout.layout')
@section('content')

<style>
    .limit_text{
    text-overflow: ellipsis;
    display: -webkit-box;
    overflow: hidden;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}
</style>

<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Specialities at NoorHealth</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="index.php">Home </a></li>
                    <li>Specialities</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!--<section>-->
    <!--   <div class="filtersection mt-30">-->
    <!--       <div class="container">-->
    <!--           <div class="row py-3 shodowsclass">-->
    <!--               <div class="col-lg-2">-->
    <!--                   <div class="doctorfiller py-2">-->
    <!--                         <div class="form-group">-->
    <!--                          <select name="specialities" id="" class="form-control">-->
    <!--                            <option>Select Specialities </option>-->
    <!--                            <option>Rheumatology</option>-->
    <!--                            <option>Cosmetic surgery</option>-->
    <!--                            <option>Dermatology </option>-->
    <!--                            <option>Nephrology</option>-->
    <!--                        </select>-->
    <!--                   </div>-->
    <!--               </div>-->
    <!--           </div>-->
    <!--             <div class="col-lg-2">-->
    <!--                   <div class="doctorfiller py-2">-->
    <!--                         <div class="form-group">-->
    <!--                          <select name="hospitals" id="" class="form-control">-->
    <!--                            <option> Select Hospitals </option>-->
    <!--                            <option>Manipal Hospital</option>-->
    <!--                            <option>Albania</option>-->
    <!--                            <option>Algeria</option>-->
    <!--                        </select>-->
    <!--                   </div>-->
    <!--               </div>-->
    <!--           </div>-->
    <!--             <div class="col-lg-2">-->
    <!--                   <div class="doctorfiller py-2">-->
    <!--                         <div class="form-group">-->
    <!--                          <select name="SPECIALISTS" id="" class="form-control">-->
    <!--                            <option> Select Specialists </option>-->
    <!--                            <option>Dr. Vikas Dua </option>-->
    <!--                            <option>Albania</option>-->
    <!--                            <option>Algeria</option>-->
    <!--                        </select>-->
    <!--                   </div>-->
    <!--               </div>-->
    <!--           </div>-->
    <!--             <div class="col-lg-4">-->
    <!--                   <div class="doctorfiller py-2">-->
    <!--                       <div class="form-outline">-->
    <!--                        <input type="search" class="form-control" placeholder="Search by disease, procedure, doctor or hospital" id="">-->
    <!--                       </div>-->
                 
    <!--               </div>-->
    <!--           </div>-->
               
    <!--           <div class="col-lg-2">-->
    <!--               <div class="service-info text-end py-2">-->
    <!--                    <a href="#">-->
    <!--                        <button class="btn style1 d-block mx-auto">-->
    <!--                            Filter-->
    <!--                        </button>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--           </div>-->
    <!--       </div>-->
    <!--   </div>-->
    <!--</section>-->



    <!-- Service Section Start -->
    <section class="service-wrap ptb-50 bg-athens">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <!-- <span>Our Services</span> -->
                <!--<h2>Speciality and Treatment or Condition</h2>-->
            </div>
            <div class="row">
                @foreach($servic as $ser)
                <div class=" col-xl-3 col-lg-3 col-md-4 col-sm-10 col-12 my-3 ">
                    <div class="service-card style1 shadow-lg">
                        <div class="service-img">
                            <img src="{{isset($ser->image)?url($ser->image):url('/public/noimage.png')}}" alt="{{isset($ser->image_tag)?$ser->image_tag:'Image'}}">

                        </div>
                        <div class="service-info text-center">
                            <h3><a href="{{url('/speciality/'.$ser->slug)}}">{{$ser->title}}</a></h3>
                            <p class="limit_text">{{$ser->short_description}}</p>
                            <a href="{{url('/speciality/'.$ser->slug)}}" class="profilebtn">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            <div class="d-flex justify-content-center">
                            {!! $servic->links() !!}
                        </div>
        </div>
    </section>
    <!-- Service Section End -->


</div>
<!-- Content wrapper end -->
@endsection