@extends('frontend.layout.layout')
@section('content')

<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Book Appointment</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="index.php">Home </a></li>
                    <li>Appointment</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Appointment section Start -->
    <section class="appointment-form-wrap ptb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                     <img src="{{url('/public/frontend/assets/img/2765.jpg')}}"/>
                </div>
                   <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <!--style="background-image:' {{isset($BestSolutions->image)?url($BestSolutions->image):url('/public/2765.jpg.png')}}';"-->
                <div class="appointment-bg bg-f shadow " >
                    <form id="appointment" class="appointment-form" method="post">

                        <h2>Book Free Consultancy!
                        </h2>
                        <div class="mb-3">
                            <label for="" class="form-label required">Name</label><br>
                            <input type="text"  class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                         <label for="" class="form-label required">Email Address</label><br>
                            <input type="email"  class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                         <label for="" class="form-label required">Phone Number</label><br>
                            <input type="tel" id="phone"  class="form-control" name="phone">
                        </div>
                        <div class="mb-3">
                         <label for="" class="form-label required">Select Country</label><br>
                            <select name="country" id="" class="form-control">
                                    <option> Select Country </option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>American Samoa</option>
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Anguilla</option>
                                    <option>Antarctica</option>
                                    <option>Antigua And Barbuda</option>
                                    <option>Argentina</option>
                                    <option>Armenia</option>
                                    <option>Aruba</option>
                                    <option>Australia</option>
                                    <option>Austria</option>
                                    <option>Azerbaijan</option>
                                    <option>Bahamas The</option>
                                    <option>Bahrain</option>
                                    <option>Bangladesh</option>
                                    <option>Barbados</option>
                                    <option>Belarus</option>
                                    <option>Belgium</option>
                                    <option>Belize</option>
                                    <option>Benin</option>
                                    <option>Bermuda</option>
                                    <option>Bhutan</option>
                                    <option>Bolivia</option>
                                    <option>Bosnia and Herzegovina</option>
                                    <option>Botswana</option>
                                    <option>Bouvet Island</option>
                                    <option>Brazil</option>
                                    <option>British Indian Ocean Territory</option>
                                    <option>Brunei</option>
                                    <option>Bulgaria</option>
                                    <option>Burkina Faso</option>
                                    <option>Burundi</option>
                                    <option>Cambodia</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                    <option>Cape Verde</option>
                                    <option>Cayman Islands</option>
                                    <option>Central African Republic</option>
                                    <option>Chad</option>
                                    <option>Chile</option>
                                    <option>China</option>
                                    <option>Christmas Island</option>
                                    <option>Cocos (Keeling) Islands</option>
                                    <option>Colombia</option>
                                    <option>Comoros</option>
                                    <option>Congo</option>
                                    <option>Congo The Democratic Republic Of The</option>
                                    <option>Cook Islands</option>
                                    <option>Costa Rica</option>
                                    <option>Cote D'Ivoire (Ivory Coast)</option>
                                    <option>Croatia (Hrvatska)</option>
                                    <option>Cuba</option>
                                    <option>Cyprus</option>
                                    <option>Czech Republic</option>
                                    <option>Denmark</option>
                                    <option>Djibouti</option>
                                    <option>Dominica</option>
                                    <option>Dominican Republic</option>
                                    <option>East Timor</option>
                                    <option>Ecuador</option>
                                    <option>Egypt</option>
                                    <option>El Salvador</option>
                                    <option>Equatorial Guinea</option>
                                    <option>Eritrea</option>
                                    <option>Estonia</option>
                                    <option>Ethiopia</option>
                                    <option>External Territories of Australia</option>
                                    <option>Falkland Islands</option>
                                    <option>Faroe Islands</option>
                                    <option>Fiji Islands</option>
                                    <option>Finland</option>
                                    <option>France</option>
                                    <option>French Guiana</option>
                                    <option>French Polynesia</option>
                                    <option>French Southern Territories</option>
                                    <option>Gabon</option>
                                    <option>Gambia The</option>
                                    <option>Georgia</option>
                                    <option>Germany</option>
                                    <option>Ghana</option>
                                    <option>Gibraltar</option>
                                    <option>Greece</option>
                                    <option>Greenland</option>
                                    <option>Grenada</option>
                                    <option>Guadeloupe</option>
                                    <option>Guam</option>
                                    <option>Guatemala</option>
                                    <option>Guernsey and Alderney</option>
                                    <option>Guinea</option>
                                    <option>Guinea-Bissau</option>
                                    <option>Guyana</option>
                                    <option>Haiti</option>
                                    <option>Heard and McDonald Islands</option>
                                    <option>Honduras</option>
                                    <option>Hong Kong S.A.R.</option>
                                    <option>Hungary</option>
                                    <option>Iceland</option>
                                    <option>India</option>
                                    <option>Indonesia</option>
                                    <option>Iran</option>
                                    <option>Iraq</option>
                                    <option>Ireland</option>
                                    <option>Israel</option>
                                    <option>Italy</option>
                                    <option>Jamaica</option>
                                    <option>Japan</option>
                                    <option>Jersey</option>
                                    <option>Jordan</option>
                                    <option>Kazakhstan</option>
                                    <option>Kenya</option>
                                    <option>Kiribati</option>
                                    <option>Korea North</option>
                                    <option>Korea South</option>
                                    <option>Kuwait</option>
                                    <option>Kyrgyzstan</option>
                                    <option>Laos</option>
                                    <option>Latvia</option>
                                    <option>Lebanon</option>
                                    <option>Lesotho</option>
                                    <option>Liberia</option>
                                    <option>Libya</option>
                                    <option>Liechtenstein</option>
                                    <option>Lithuania</option>
                                    <option>Luxembourg</option>
                                    <option>Macau S.A.R.</option>
                                    <option>Macedonia</option>
                                    <option>Madagascar</option>
                                    <option>Malawi</option>
                                    <option>Malaysia</option>
                                    <option>Maldives</option>
                                    <option>Mali</option>
                                    <option>Malta</option>
                                    <option>Man (Isle of)</option>
                                    <option>Marshall Islands</option>
                                    <option>Martinique</option>
                                    <option>Mauritania</option>
                                    <option>Mauritius</option>
                                    <option>Mayotte</option>
                                    <option>Mexico</option>
                                    <option>Micronesia</option>
                                    <option>Moldova</option>
                                    <option>Monaco</option>
                                    <option>Mongolia</option>
                                    <option>Montserrat</option>
                                    <option>Morocco</option>
                                    <option>Mozambique</option>
                                    <option>Myanmar</option>
                                    <option>Namibia</option>
                                    <option>Nauru</option>
                                    <option>Nepal</option>
                                    <option>Netherlands Antilles</option>
                                    <option>Netherlands The</option>
                                    <option>New Caledonia</option>
                                    <option>New Zealand</option>
                                    <option>Nicaragua</option>
                                    <option>Niger</option>
                                    <option>Nigeria</option>
                                    <option>Niue</option>
                                    <option>Norfolk Island</option>
                                    <option>Northern Mariana Islands</option>
                                    <option>Norway</option>
                                    <option>Oman</option>
                                    <option>Pakistan</option>
                                    <option>Palau</option>
                                    <option>Palestinian Territory Occupied</option>
                                    <option>Panama</option>
                                    <option>Papua new Guinea</option>
                                    <option>Paraguay</option>
                                    <option>Peru</option>
                                    <option>Philippines</option>
                                    <option>Pitcairn Island</option>
                                    <option>Poland</option>
                                    <option>Portugal</option>
                                    <option>Puerto Rico</option>
                                    <option>Qatar</option>
                                    <option>Reunion</option>
                                    <option>Romania</option>
                                    <option>Russia</option>
                                    <option>Rwanda</option>
                                    <option>Saint Helena</option>
                                    <option>Saint Kitts And Nevis</option>
                                    <option>Saint Lucia</option>
                                    <option>Saint Pierre and Miquelon</option>
                                    <option>Saint Vincent And The Grenadines</option>
                                    <option>Samoa</option>
                                    <option>San Marino</option>
                                    <option>Sao Tome and Principe</option>
                                    <option>Saudi Arabia</option>
                                    <option>Senegal</option>
                                    <option>Serbia</option>
                                    <option>Seychelles</option>
                                    <option>Sierra Leone</option>
                                    <option>Singapore</option>
                                    <option>Slovakia</option>
                                    <option>Slovenia</option>
                                    <option>Smaller Territories of the UK</option>
                                    <option>Solomon Islands</option>
                                    <option>Somalia</option>
                                    <option>South Africa</option>
                                    <option>South Georgia</option>
                                    <option>South Sudan</option>
                                    <option>Spain</option>
                                    <option>Sri Lanka</option>
                                    <option>Sudan</option>
                                    <option>Suriname</option>
                                    <option>Svalbard And Jan Mayen Islands</option>
                                    <option>Swaziland</option>
                                    <option>Sweden</option>
                                    <option>Switzerland</option>
                                    <option>Syria</option>
                                    <option>Taiwan</option>
                                    <option>Tajikistan</option>
                                    <option>Tanzania</option>
                                    <option>Thailand</option>
                                    <option>Togo</option>
                                    <option>Tokelau</option>
                                    <option>Tonga</option>
                                    <option>Trinidad And Tobago</option>
                                    <option>Tunisia</option>
                                    <option>Turkey</option>
                                    <option>Turkmenistan</option>
                                    <option>Turks And Caicos Islands</option>
                                    <option>Tuvalu</option>
                                    <option>Uganda</option>
                                    <option>Ukraine</option>
                                    <option>United Arab Emirates</option>
                                    <option>United Kingdom</option>
                                    <option>United States</option>
                                    <option>United States Minor Outlying Islands</option>
                                    <option>Uruguay</option>
                                    <option>Uzbekistan</option>
                                    <option>Vanuatu</option>
                                    <option>Vatican City State (Holy See)</option>
                                    <option>Venezuela</option>
                                    <option>Vietnam</option>
                                    <option>Virgin Islands (British)</option>
                                    <option>Virgin Islands (US)</option>
                                    <option>Wallis And Futuna Islands</option>
                                    <option>Western Sahara</option>
                                    <option>Yemen</option>
                                    <option>Yugoslavia</option>
                                    <option>Zambia</option>
                                    <option>Zimbabwe</option>
                                </select>
                        </div>
                       
                        <div class="mb-3">
                         <label for="" class="form-label required">Message</label><br>
                            <textarea class="form-control" name="message" ></textarea>
                            
                        </div>
                       
                        <button type="submit" class="btn style2">Book Now</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Appointment section End -->

</div>
<!-- Content wrapper end -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $("#appointment").validate({

        onfocusout: function(element) {
            $(element).valid();
        },
        highlight: function(element, errorClass) {

        },

        rules: {
            'name': {
                required: true
            },

            'phone': {
                required: true
            },

            'email': {
                required: true
            },

            'dob': {
                required: true
            },
            'message': {
                required: true
            },
            'gender': {
                required: true
            },
            'hospital': {
                required: true
            },
            'service': {
                required: true
            },
            'hospital': {
                required: true
            },

        },
        messages: {
            'name': "Please Enter name.",
            'phone': "Please Enter mobile number.",
            'email': "Please Enter email.",
            'dob': "Please Select dob.",
            'message': "Please enter message.",
            'gender': "Please Select gender.",
            'hospital': "Please Select hospital.",
            'service': "Please Select service.",
            'hospital': "Please Select hospital.",
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "data[Payment][phone]") {
                error.insertAfter(".error-placement");
            } else {
                error.insertAfter(element);
            }
        },

        submitHandler: function(form) {

            $.ajax({
                url: "{{ route('appointment_save') }}",
                type: 'GET',
                // data: $('#appointment').serialize(),
                data: function() {
                    var formData = $('#appointment').serializeArray();
                    var countryCode = $('#phone').closest('.mb-3').find('.iti__selected-dial-code').text();
                    var countryName = $('#phone').closest('.mb-3').find('.iti__a11y-text').text().split(' ')[0];
                    
                    // Append the country code to the form data
                    formData.push({ name: 'country_code', value: countryCode });
                    formData.push({ name: 'country_name', value: countryName });
                    
                    
                    return $.param(formData);
                }(),
                beforeSend: function() {
                    $("#preloader").show();
                },
                success: function(res) {
                    $("#preloader").hide();
                    if (res.status == 1) {
                        swal({
                                title: "Success!",
                                text: res.message,
                                icon: "success",
                                dangerMode: true,
                                buttons: false,
                                timer: 1000
                            })
                            .then(() => {
                                location.reload();
                            })

                    } else {
                        $("#preloader").hide();
                        swal({
                            icon: 'error',
                            title: 'Oops...',
                            text: res.message,
                        })
                    }
                },
                error: function(error) {
                    $("#preloader").hide();
                    swal({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    })
                }
            });
        },
    });
</script>
@endsection