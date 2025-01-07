<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>Noor MediCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{url('/resources/views/frontend/Noor_page3/')}}/images/favicon.ico" />
    <link rel="stylesheet" href="{{url('/resources/views/frontend/Noor_page3/')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/resources/views/frontend/Noor_page3/')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{url('/resources/views/frontend/Noor_page3/')}}/css/custom.css" />
    <link rel="stylesheet" href="{{url('/resources/views/frontend/Noor_page3/')}}/css/responsive.css" />
</head>

<body>
    <div class="container-fluid py-2 top-bar">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <a href="mailto:support@noormedicare.com" target="_blank">
                        <i class="fas fa-envelope px-1"></i>
                        <span>support@noormedicare.com</span>
                    </a>
                </div>
                <div class="col-4">
                    <a href="https://api.whatsapp.com/send?phone=919555197411" target="_blank">
                        <i class="fa-brands fa-whatsapp px-1"></i>
                        <span>+91-95551-97411</span>
                    </a>
                </div>
                <div class="col-4">
                    <a href="https://www.facebook.com/NoorMediCare.health" target="_blank">
                        <i class="fa-brands fa-facebook-f px-1"></i>
                        <span>Noor Medi Care</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="form-holder">
        <i class="fas fa-times" id="form-close" ></i>
        <form  id="contactForm" method="post">
            @csrf
            <div>
                <h2 class="fs-20 fw-600 text-center">Book Free Consultancy!</h2>
                <p class="text-center text-muted respo-msg">Without paying anything in advanced</p>
            </div>
            <div class="mb-3">
                <label for="" class="form-label required">Name</label>
                <input type="text" autofocus name="name" id="user_name" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label required">Email</label>
                <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label required">Contact Number</label>
                <input type="text" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label required">Country</label>
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
                <label for="" class="form-label required">Treatment</label>
                <select name="treatment" class="form-control">
                    <option value="">Select a treatment</option>
                    <option>BMT Surgeons</option>
                    <option>Cardiology</option>
                    <option>Dentists</option>
                    <option>Dermatology</option>
                    <option>Endocrinology</option>
                    <option>ENT Surgeon</option>
                    <option>G I Surgeon</option>
                    <option>Gastro</option>
                    <option>Gynaecology</option>
                    <option>Kidney Transplant Surgeons</option>
                    <option>LTP Surgeons</option>
                    <option>Neuro Surgeon</option>
                    <option>Neurology</option>
                    <option>Oncologist</option>
                    <option>Opthalmology Surgeons</option>
                    <option>Orthopaedics</option>
                    <option>Paediatric</option>
                    <option>Plastic Surgeons</option>
                    <option>Rheumatologist</option>
                    <option>Spine Surgeon</option>
                    <option>Urology</option>

                </select>
            </div>
            <div>
                <button type="submit" class="btn">Book Now</button>
            </div>
        </form>
    </div>
    <div class="header">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>
    <section class="py-2 bg-section mb-3">
        <header class="container-fluid px-lg-5">
            <div class="row  d-block d-lg-none">
                <div class="col-12">
                    <div class="shadow bg-white p-md-4 p-3 rounded-3 mx-auto mt-xl-0 mt-4">
                        <h2 class="fs-20 fw-600 text-center">Book Free Consultancy!</h2>
                        <p class="text-center text-muted respo-msg">Without paying anything in advanced</p>
                        <form id="contactForm" method="post">
            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label required">Name</label>
                                <input type="text" autofocus name="name" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Email</label>
                                <input type="text" name="email" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Contact Number</label>
                                <input type="text" name="phone" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Country</label>
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
                                <label for="" class="form-label required">Treatment</label>
                                <select name="treatment" class="form-control">
                                    <option value="">Select a treatment</option>
                                    <option>BMT Surgeons</option>
                                    <option>Cardiology</option>
                                    <option>Dentists</option>
                                    <option>Dermatology</option>
                                    <option>Endocrinology</option>
                                    <option>ENT Surgeon</option>
                                    <option>G I Surgeon</option>
                                    <option>Gastro</option>
                                    <option>Gynaecology</option>
                                    <option>Kidney Transplant Surgeons</option>
                                    <option>LTP Surgeons</option>
                                    <option>Neuro Surgeon</option>
                                    <option>Neurology</option>
                                    <option>Oncologist</option>
                                    <option>Opthalmology Surgeons</option>
                                    <option>Orthopaedics</option>
                                    <option>Paediatric</option>
                                    <option>Plastic Surgeons</option>
                                    <option>Rheumatologist</option>
                                    <option>Spine Surgeon</option>
                                    <option>Urology</option>

                                </select>
                            </div>
                            <div>
                                <input type="submit" value="Book Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 p-4">
                    <div class="logo">
                        <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/logo2.svg" alt="" width="200" />
                    </div>
                    <div class="theme-text-color mt-2">
                        <h1 class="my-4">Find Personalized, Affordable, and Fully-Managed Medical Treatment in India!
                        </h1>
                        <p>
                            Tired of navigating the complex and less-effective healthcare services in your country? Time
                            to say goodbye to this stress– Let Us Help.
                        </p>
                        <p>
                            Get access to the best medical expertise in India with ease. From specialized treatments to
                            curing life-threatening diseases, we will guide you every step of the way to ensure that you
                            receive the highest standard of medical care at an affordable price.
                        </p>
                        <p>
                            Don't wait. Schedule your consultation now, and let us help you transform your health and
                            your
                            life!"
                        </p>
                        <button class="btn btn-action" onclick="contactForm()">Yes! Book My Free Consultation.</button>
                    </div>
                </div>
                <div class="col-lg-4 form-section d-lg-block d-none">
                    <div class="shadow bg-white p-md-4 rounded-3 mx-auto mt-xl-0 mt-4">
                        <h2 class="fs-20 fw-600 text-center">Book Free Consultancy!</h2>
                        <p class="text-center text-muted respo-msg">Without paying anything in advanced</p>
                        <form action="" id="contact-form">
                            <div class="mb-3">
                                <label for="" class="form-label required">Name</label>
                                <input type="text" autofocus name="name" id="user_name" class="form-control"
                                    placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Email</label>
                                <input type="text" name="email" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Contact Number</label>
                                <input type="text" name="number" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label required">Country</label>
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
                                <label for="" class="form-label required">Treatment</label>
                                <select name="treatment" class="form-control">
                                    <option value="">Select a treatment</option>
                                    <option>BMT Surgeons</option>
                                    <option>Cardiology</option>
                                    <option>Dentists</option>
                                    <option>Dermatology</option>
                                    <option>Endocrinology</option>
                                    <option>ENT Surgeon</option>
                                    <option>G I Surgeon</option>
                                    <option>Gastro</option>
                                    <option>Gynaecology</option>
                                    <option>Kidney Transplant Surgeons</option>
                                    <option>LTP Surgeons</option>
                                    <option>Neuro Surgeon</option>
                                    <option>Neurology</option>
                                    <option>Oncologist</option>
                                    <option>Opthalmology Surgeons</option>
                                    <option>Orthopaedics</option>
                                    <option>Paediatric</option>
                                    <option>Plastic Surgeons</option>
                                    <option>Rheumatologist</option>
                                    <option>Spine Surgeon</option>
                                    <option>Urology</option>
                
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-action d-block book-now">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
        </header>
    </section>
    <section class="mb-3 container-fluid px-lg-5">
        <div class="row my-1">
            <div class="col-lg-4 col-md-6 rating-box my-2">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
                <h4 style="display: inline;"> 4.8/5 </h4>
                <span class="text-muted fw-bold">(<span class="counter" data-val="2394"></span> Ratings)</span>
            </div>
            <div class="col-lg-4 col-md-6 my-2 rating-box text-end">
                <i class="fas fa-shield"></i>
                <h4 style="display: inline;"> <span class="counter" data-val="2362"></span> </h4>
                <span class="text-muted fw-bold">(Successful Treatments)</span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mb-3">Join the Hundreds of Satisfied Patients Who Have Found the Right Medical Treatment in
                    India with
                    Our Help!</h2>
                <p>
                    We connect you with top-notch medical specialists, doctors, and hospitals who are leaders in
                    their fields. With their extensive knowledge and experience, you can trust that you are
                    receiving the highest standard of medical care at the lowest possible cost.
                </p>
            </div>
        </div>

    </section>
    <section class="bg-section py-4">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- <h3 class="text-center">YOUR COMPREHENSIVE HEALTHCARE SOLUTION</h3> -->
                    <h2 class="mb-3">Health Concerns No More! Find Guaranteed Quality Treatment for Any Disease or Issue
                        <i class="fas fa-star" style="color:gold"></i>
                    </h2>
                    <p>
                        Get specialized care for every healthcare issue. Find expert consultancy for bone marrow
                        transplants, cardiac treatments, and 20+ more concerns.
                    </p>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="row text-center">
                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="bg-white rounded py-3 services">Bone Marrow Transplant </div>
                                </div>
                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="bg-white rounded py-3 services">Spine Surgery</div>
                                </div>
                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="bg-white rounded py-3 services">General & Minimal Access Surgery</div>
                                </div>
                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="bg-white rounded py-3 services">Cardiac Treatment</div>
                                </div>
                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="bg-white rounded py-3 services">Bariatric & GI Surgery</div>
                                </div>
                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="bg-white rounded py-3 services">Paediatric Cardiac Surgery</div>
                                </div>
                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="bg-white rounded py-3 services">Kidney Transplant</div>
                                </div>
                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="bg-white rounded py-3 services">Gastroenterology Treatment</div>
                                </div>
                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="bg-white rounded py-3 services">Orthopaedic & Joint Treatment</div>
                                </div>

                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="bg-white rounded py-3 services">Liver Transplant </div>
                                </div>
                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="bg-white rounded py-3 services">Gynaecology Treatment</div>
                                </div>
                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="bg-white rounded py-3 services">Plastic & Cosmetic Surgery</div>
                                </div>
                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="bg-white rounded py-3 services">Neurology & Neurosurgery Treatment</div>
                                </div>
                                <div class="col-lg-4 col-md-6 my-2">
                                    <div class="bg-white rounded py-3 services">IVF & Infertility Treatment</div>
                                </div>
                                <div class="col-lg-4 col-md-12 my-2">
                                    <div class="bg-white rounded py-3 services">ENT Treatment</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-3">Your One-Stop Solution For Effortless & Fully-Managed Healthcare Solutions in India
                    </h2>
                    <p>
                        With Noor Medicare, you get completely well-managed services, personalized support, and
                        guidance– at every step of your medical journey!
                    </p>
                    <div class="pointer-box">
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>Free Customized Consultation</h5>
                                </div>
                            </div>
                            <p>
                                Every patient is different, and so are their health issues. We understand everything in
                                depth and offer you personalized assessments at no cost.
                            </p>
                        </div>

                    </div>
                    <div class="pointer-box">
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>Specialist Doctors & Hospitals</h5>
                                </div>
                            </div>
                            <p>
                                We work with a network of highly-skilled & specialized doctors and top-rated hospitals.
                                You get access to the best medical care in the country.
                            </p>
                        </div>
                    </div>
                    <div class="pointer-box">
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>Free Quote for Treatment</h5>
                                </div>
                            </div>
                            <p>
                                You get free quotes and a detailed breakdown of the cost of your treatment. Our team is
                                always here to help you better understand the expenses involved.
                            </p>
                        </div>
                    </div>
                    <div class="pointer-box">
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>Visa Assistance</h5>
                                </div>
                            </div>
                            <p>
                                We offer visa assistance to make your medical travel smooth and hassle-free. Find our
                                help in submitting applications, and documentation and getting regular updates on
                                status.
                            </p>
                        </div>
                    </div>
                    <div class="pointer-box">
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>Airport Transfer</h5>
                                </div>
                            </div>
                            <p>
                                Arriving in a foreign country can be overwhelming. But we are here for you with airport
                                pick-up and drop to make your travel as stress-free and relaxing as possible.
                            </p>
                        </div>
                    </div>
                    <div class="pointer-box">
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>Currency Exchange</h5>
                                </div>
                            </div>
                            <p>
                                Get expert guidance on competitive currency exchange rates, low transaction fees, and
                                secure & reliable financial services. No confusion and stressful processes.
                            </p>
                        </div>
                    </div>
                    <div class="pointer-box">
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>Travel & Accommodation Arrangements</h5>
                                </div>
                            </div>
                            <p>
                                We manage everything for you during your stay in India. Find assistance with flight &
                                travel bookings, economical accommodation, and restaurant/dining options.
                            </p>
                        </div>
                    </div>
                    <div class="pointer-box">
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>24/7 Availability</h5>
                                </div>
                            </div>
                            <p>
                                No matter what time of day or night, we are here for you every step of the way to answer
                                your questions, provide timely updates, navigate the local area, and everything else.
                            </p>
                        </div>
                    </div>
                    <div class="pointer-box">
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>Regular Follow-Ups</h5>
                                </div>
                            </div>
                            <p>
                                We will be in touch with you, and provide regular updates, so that you focus on your
                                recovery, knowing that a dedicated team is behind you throughout the entire journey.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-8">
                    <h4 class="text-center">
                        <i>Get the Care You Deserve – Contact Us Today to Learn More About Our
                            Services! </i>
                    </h4>
                    <button class="mx-auto mt-3 btn btn-action" style="display: block;" onclick="contactForm()">Book
                        Free
                        Appointment</button>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-section py-4">
        <div class="container-fluid px-lg-5">
            <div class="row my-1">
                <div class="col-lg-8">
                    <h2>
                        Noor Medicare – Your Reliable Medical Assistant in India <img class="ind-img"
                            src="{{url('/resources/views/frontend/Noor_page3/')}}/images/img.png" alt="">
                    </h2>
                    <p>
                        Noor Medicare is a global platform to assist you with finding the best medicinal services in
                        India
                        that can give the highest care for your health issues. We give you all the possible information
                        to
                        help you with taking the decision about your healthcare services, doctors, and hospitals. We
                        provide
                        a complete medical treatment package with consultation, diagnostic checkups, etc.
                    </p>
                    <p>
                        We aim to help you get better health and lifestyle with the most affordable medical services in
                        India. Over the years, we have offered personalized support and expert guidance to a large
                        number of
                        patients from different countries and helped them get the right treatment they needed.
                    </p>
                    <p>
                        Don’t let the high cost of medical treatment in your country hold you back from getting the care
                        you
                        need. Take advantage of our expertise and contact us today to learn more about how we can help
                        you.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container-fluid px-lg-5">
            <div class="row my-1">
                <div class="col-lg-8">
                    <h2 class="mb-3">Why India is The Most Sought-After Medical Tourism Destination in The World?</h2>
                    <div class="pointer-box mt-3">
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>Cost-effective Medical Treatments</h5>
                                </div>
                            </div>
                            <p>
                                Medical procedures in India are often significantly less expensive compared to other
                                developed countries, making it an attractive destination for those seeking
                                cost-effective healthcare options.
                            </p>
                        </div>
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>High-quality Medical Care</h5>
                                </div>
                            </div>
                            <p>
                                Despite the lower costs, India offers world-class medical facilities and highly skilled
                                medical professionals, making it a top choice for medical tourists.
                            </p>
                        </div>
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>Advanced Medical Technology</h5>
                                </div>
                            </div>
                            <p>
                                India is home to a growing number of cutting-edge medical facilities that offer
                                state-of-the-art medical technology backed by veteran doctors in the country.
                            </p>
                        </div>
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>Growing Infrastructure</h5>
                                </div>
                            </div>
                            <p>
                                The Indian government has taken steps to promote medical tourism, and as a result, the
                                country is investing in the development of new medical facilities and improving its
                                existing infrastructure.
                            </p>
                        </div>
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>Choice of Patients from 76 Countries</h5>
                                </div>
                            </div>
                            <p>
                                More than 2 million people from over 76 nations come to India for different types of
                                medical treatments every year. This is a token of trust and the result people get.
                            </p>
                        </div>
                        <div class="pointer-item">
                            <div class="box">
                                <div class="bullet">
                                    <i class="fas fa-circle"></i>
                                </div>
                                <div>
                                    <h5>India Supplies 60% of Global Vaccine Demand</h5>
                                </div>
                            </div>
                            <p>
                                70% of WHO’s vaccine demand is met by India. Moreover, over 60% of vaccines around the
                                world are supplied from India, showing its expertise in producing medicines.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-section py-4">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-3">
                        Get Expert Treatment and Care from The Best Doctors in The Country
                    </h2>
                    <p>
                        We are proud to work with the leading doctors in the industry who have decades of experience in
                        their respective specializations. You get the highest standard of treatment and care, making you
                        feel confident that you are in the best hands.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="loop owl-carousel owl-theme custom-slider">
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/doctor/Dr T.S Kler.png" alt="">
                                </div>
                                <h5>Dr. T.S Kler</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/doctor/dr-dr-ramkinkar-jha (1).jpg" alt="">
                                </div>
                                <h5>Dr. Ramkinkar Jha</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/doctor/dr-i-p-s-oberoi.jpg" alt="">
                                </div>
                                <h5>Dr. I P S Oberoi</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/doctor/Dr-Vivek-Vij.jpg" alt="">
                                </div>
                                <h5>Dr. Vivek Vij</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/doctor/Dr_Anant_Kumar.jpg" alt="">
                                </div>
                                <h5>Dr. Anant Kumar</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/doctor/drhiteshgarg.jpg" alt="">
                                </div>
                                <h5>Dr. Hitesh Garg</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/doctor/Naresh_Trehan.jpg" alt="">
                                </div>
                                <h5>Dr. Naresh Trehan</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/doctor/sandeep vaishya.jpg" alt="">
                                </div>
                                <h5>Dr. Sandeep Vaishya</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/doctor/vikas dua.jpg" alt="">
                                </div>
                                <h5>Dr. Vikas Dua</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-3">
                        Experience the Best in Healthcare with Our Premier Partner Hospitals
                    </h2>
                    <p>
                        When it comes to medical treatment, the hospital you choose makes a huge difference. Hence, we
                        recommend you the best hospitals in the country based on their exceptional record,
                        state-of-the-art facilities, and experienced medical teams.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="loop owl-carousel owl-theme custom-slider">
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/apollo hospitals.jpg" alt="">
                                </div>
                                <h5>Apollo Hospitals</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Artemis Hospial.jpg" alt="">
                                </div>
                                <h5>Artemis Hospial</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Blk max.jpg" alt="">
                                </div>
                                <h5>Blk max</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Fortis Hospital.jpg" alt="">
                                </div>
                                <h5>Fortis Hospital</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Jaypee Hospital.jpg" alt="">
                                </div>
                                <h5>Jaypee Hospital</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Manipal hospital.jpeg" alt="">
                                </div>
                                <h5>Manipal hospital</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Max Blk Saket.jpg" alt="">
                                </div>
                                <h5>Max Blk Saket</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Medanta.jpg" alt="">
                                </div>
                                <h5>Medanta</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Venkateshwar Hospital.jpg" alt="">
                                </div>
                                <h5>Venkateshwar Hospital</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-section py-4">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="text-center">
                        <i> Don’t Wait Any Longer. Book Your Appointment Today And Start Your Journey to
                            Better Health Now! </i>
                    </h4>
                    <button class="mx-auto mt-3 btn btn-action" style="display: block;" onclick="contactForm()">Get in
                        Touch With Us</button>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="py-4">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-lg-8">
                    <h2>
                        Real Stories from Real People: Our Client Reviews
                    </h2>
                    <p>
                        At Noor Medicare, we're proud and thrilled to hear about the positive experiences of our
                        clients. See for yourself what it's like to work with us.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="loop owl-carousel owl-theme custom-slider">
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/apollo hospitals.jpg" alt="">
                                </div>
                                <h5>Apollo Hospitals</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Artemis Hospial.jpg" alt="">
                                </div>
                                <h5>Artemis Hospial</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Blk max.jpg" alt="">
                                </div>
                                <h5>Blk max</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Fortis Hospital.jpg" alt="">
                                </div>
                                <h5>Fortis Hospital</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Jaypee Hospital.jpg" alt="">
                                </div>
                                <h5>Jaypee Hospital</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Manipal hospital.jpeg" alt="">
                                </div>
                                <h5>Manipal hospital</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Max Blk Saket.jpg" alt="">
                                </div>
                                <h5>Max Blk Saket</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Medanta.jpg" alt="">
                                </div>
                                <h5>Medanta</h5>
                            </div>
                            <div class="item">
                                <div class="slider-img-box">
                                    <img src="{{url('/resources/views/frontend/Noor_page3/')}}/images/hospitals/Venkateshwar Hospital.jpg" alt="">
                                </div>
                                <h5>Venkateshwar Hospital</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="bg-section py-4">
        <div class="container-fluid px-lg-5">
            <div class="row my-1">
                <div class="col-lg-8">
                    <h2 class="mb-3">
                        No Hidden Costs. Zero Mediator Charges.
                    </h2>
                    <p>
                        Get the medical care you deserve without any hidden costs. Our medical consultancy services come
                        with no mediator charges, ensuring that you receive the best medical treatment services in India
                        at an affordable price. Schedule your consultation now and experience the benefits of
                        world-class medical treatment without breaking the bank.
                    </p>
                    <!-- <button class="mt-3 btn btn-action" onclick="contactForm()">Get in
                        Touch With Us</button> -->
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bd823b90cc.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{url('/resources/views/frontend/Noor_page3/')}}/js/owl.carousel.js"></script>
    <script src="{{url('/resources/views/frontend/Noor_page3/')}}/js/app.js"></script>
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
            
            'country': {
                required: true
            },
            
        },
        messages: {
            'name': "Please Enter name.",
            'email': "Please Enter valid email address.",
            'phone': "Please Enter valid mobile number.",
            'country': "Please select country.",
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
                data: $('#contactForm').serialize(),
                
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
</body>

</html>