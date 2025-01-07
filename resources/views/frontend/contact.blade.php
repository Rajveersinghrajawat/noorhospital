@extends('frontend.layout.layout')
@section('content')

<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Contact Us</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Us section Start -->
    <section class="contact-us-wrap ptb-100">
        <div class="container">
            <div class="row justify-content-center pb-75">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="flaticon-map"></i>
                        </span>
                        <div class="contact-info">
                            <h3>Visit Us Anytime</h3>
                            <p>{{$setting->address}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="flaticon-email-2"></i>
                        </span>
                        <div class="contact-info">
                            <h3>Send An Email</h3>
                            <a href="mailto:{{$setting->email}}"><span class="__cf_email__" data-cfemail="0a626f6666654a7e6f666324696567">
                                    {{$setting->email}}</span></a>
                            <a href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#6d1e181d1d021f192d19080104430e0200"><span class="__cf_email__" data-cfemail="9cefe9ececf3eee8dce8f9f0f5b2fff3f1">[email&#160;protected]</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="flaticon-call"></i>
                        </span>
                        <div class="contact-info">
                            <h3>Call Center</h3>
                            <a href="tel: {{$setting->phone}}">+91 {{$setting->phone}}</a>
                            <!-- <a href="tel:88098787869">+55 576 234532</a> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mapp Contact -->

            <div class="row gx-lg-5">
                <div class="col-xl-6 col-lg-6 mx-auto col-12">
                    <div class="contact-form">
                        <h3>Fill The Form to Contact NoorMediCare</h3>
                        <form class="form-wrap" id="contactForm" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name*" required data-error="Please enter your name">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" required placeholder="Email*" data-error="Please enter your email">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" id="phone" name="phone" required  data-error="Please enter your phone">

                                    </div>
                                </div>
                                

                                <div class="col-md-6">
                                    <div class="form-group">
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
                                </div>
                                

                                <div class="col-md-12">
                                    <div class="form-group v1">
                                        <textarea name="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>

                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                                <div class="form-check checkbox">
                                                    <input
                                                        name="gridCheck"
                                                        value="I agree to the terms and privacy policy."
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        id="gridCheck"
                                                        required
                                                    >
                                                    <label class="form-check-label" for="gridCheck">
                                                        I agree to the <a class="link style1" href="terms-of-service.html">terms &amp; conditions</a> and <a class="link style1" href="privacy-policy.html">privacy policy</a>
                                                    </label>
                                                    <div class="help-block with-errors gridCheck-error"></div>
                                                </div>
                                            </div> -->
                                <div class="col-md-12">
                                    <button type="submit" class="btn style1 text-white">Send Message</button>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="comp-map">
                        {!!$setting->map!!}
                    </div>
                </div> -
            </div>
        </div>
    </section>
    <!-- Contact Us section End -->

</div>
<!-- Content wrapper end -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $("#contactForm").validate({

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
                    required: true,
                    
                },
            'email': {
                required: true,
                email: true
            },
            'subject': {
                required: true
            },
            'message': {
                required: true
            },
            'country': {
                required: true
            },
            'state': {
                required: true
            },
        },
        messages: {
            'name': "Please Enter name.",
            'email': "Please Enter valid email address.",
            'phone': "Please Enter valid mobile number.",
            'subject': "Please Enter subject.",
            'message': "Please Enter message.",
            'country': "Please Select country.",
            'state': "Please Select state.",
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
                url: "{{ route('contact_enquery') }}",
                type: 'GET',
                //data: $('#contactForm').serialize(),
                data: function() {
                    var formData = $('#contactForm').serializeArray();
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
                                window.location = "{{route('home')}}"
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