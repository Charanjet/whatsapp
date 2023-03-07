<?php
include_once './header.php';
$cncodes = ["BD"=> "880","BE"=> "32","BF"=> "226","BG"=> "359","BA"=> "387","WF"=> "681","BL"=> "590","BN"=> "673","BO"=> "591","BH"=> "973","BI"=> "257","BJ"=> "229","BT"=> "975","BW"=> "267","WS"=> "685","BQ"=> "599","BR"=> "55","BY"=> "375","BZ"=> "501","RU"=> "7","RW"=> "250","RS"=> "381","TL"=> "670","RE"=> "262","TM"=> "993","TJ"=> "992","RO"=> "40","TK"=> "690","GW"=> "245","GT"=> "502","GR"=> "30","GQ"=> "240","GP"=> "590","JP"=> "81","GY"=> "592","GF"=> "594","GE"=> "995","GB"=> "44","GA"=> "241","SV"=> "503","GN"=> "224","GM"=> "220","GL"=> "299","GI"=> "350","GH"=> "233","OM"=> "968","TN"=> "216","JO"=> "962","HR"=> "385","HT"=> "509","HU"=> "36","HK"=> "852","HN"=> "504","VE"=> "58","PS"=> "970","PW"=> "680","PT"=> "351","SJ"=> "47","PY"=> "595","IQ"=> "964","PA"=> "507","PF"=> "689","PG"=> "675","PE"=> "51","PK"=> "92","PH"=> "63","PN"=> "870","PL"=> "48","PM"=> "508","ZM"=> "260","EH"=> "212","EE"=> "372","EG"=> "20","ZA"=> "27","EC"=> "593","IT"=> "39","VN"=> "84","SB"=> "677","ET"=> "251","SO"=> "252","ZW"=> "263","SA"=> "966","ES"=> "34","ER"=> "291","ME"=> "382","MD"=> "373","MG"=> "261","MF"=> "590","MA"=> "212","MC"=> "377","UZ"=> "998","MM"=> "95","ML"=> "223","MO"=> "853","MN"=> "976","MH"=> "692","MK"=> "389","MU"=> "230","MT"=> "356","MW"=> "265","MV"=> "960","MQ"=> "596","UG"=> "256","TZ"=> "255","MY"=> "60","MX"=> "52","IL"=> "972","FR"=> "33","IO"=> "246","SH"=> "290","FI"=> "358","FJ"=> "679","FK"=> "500","FM"=> "691","FO"=> "298","NI"=> "505","NL"=> "31","NO"=> "47","NA"=> "264","VU"=> "678","NC"=> "687","NE"=> "227","NF"=> "672","NG"=> "234","NZ"=> "64","NP"=> "977","NR"=> "674","NU"=> "683","CK"=> "682","CI"=> "225","CH"=> "41","CO"=> "57","CN"=> "86","CM"=> "237","CL"=> "56","CC"=> "61","CA"=> "1","CG"=> "242","CF"=> "236","CD"=> "243","CZ"=> "420","CY"=> "357","CX"=> "61","CR"=> "506","CW"=> "599","CV"=> "238","CU"=> "53","SZ"=> "268","SY"=> "963","SX"=> "599","KG"=> "996","KE"=> "254","SS"=> "211","SR"=> "597","KI"=> "686","KH"=> "855","KM"=> "269","ST"=> "239","SK"=> "421","KR"=> "82","SI"=> "386","KP"=> "850","KW"=> "965","SN"=> "221","SM"=> "378","SL"=> "232","SC"=> "248","KZ"=> "7","SG"=> "65","SE"=> "46","SD"=> "249","DJ"=> "253","DK"=> "45","DE"=> "49","YE"=> "967","DZ"=> "213","US"=> "1","UY"=> "598","YT"=> "262","UM"=> "1","LB"=> "961","LA"=> "856","TV"=> "688","TW"=> "886","TR"=> "90","LK"=> "94","LI"=> "423","LV"=> "371","TO"=> "676","LT"=> "370","LU"=> "352","LR"=> "231","LS"=> "266","TH"=> "66","TG"=> "228","TD"=> "235","LY"=> "218","VA"=> "379","AE"=> "971","AD"=> "376","AF"=> "93","IS"=> "354","IR"=> "98","AM"=> "374","AL"=> "355","AO"=> "244","AR"=> "54","AU"=> "61","AT"=> "43","AW"=> "297","IN"=> "91","AZ"=> "994","IE"=> "353","ID"=> "62","UA"=> "380","QA"=> "974","MZ"=> "258"];
$cnnames = ["BD"=> "Bangladesh", "BE"=> "Belgium", "BF"=> "Burkina Faso", "BG"=> "Bulgaria", "BA"=> "Bosnia and Herzegovina", "BB"=> "Barbados", "WF"=> "Wallis and Futuna", "BL"=> "Saint Barthelemy", "BM"=> "Bermuda", "BN"=> "Brunei", "BO"=> "Bolivia", "BH"=> "Bahrain", "BI"=> "Burundi", "BJ"=> "Benin", "BT"=> "Bhutan", "JM"=> "Jamaica", "BV"=> "Bouvet Island", "BW"=> "Botswana", "WS"=> "Samoa", "BQ"=> "Bonaire, Saint Eustatius and Saba ", "BR"=> "Brazil", "BS"=> "Bahamas", "JE"=> "Jersey", "BY"=> "Belarus", "BZ"=> "Belize", "RU"=> "Russia", "RW"=> "Rwanda", "RS"=> "Serbia", "TL"=> "East Timor", "RE"=> "Reunion", "TM"=> "Turkmenistan", "TJ"=> "Tajikistan", "RO"=> "Romania", "TK"=> "Tokelau", "GW"=> "Guinea-Bissau", "GU"=> "Guam", "GT"=> "Guatemala", "GS"=> "South Georgia and the South Sandwich Islands", "GR"=> "Greece", "GQ"=> "Equatorial Guinea", "GP"=> "Guadeloupe", "JP"=> "Japan", "GY"=> "Guyana", "GG"=> "Guernsey", "GF"=> "French Guiana", "GE"=> "Georgia", "GD"=> "Grenada", "GB"=> "United Kingdom", "GA"=> "Gabon", "SV"=> "El Salvador", "GN"=> "Guinea", "GM"=> "Gambia", "GL"=> "Greenland", "GI"=> "Gibraltar", "GH"=> "Ghana", "OM"=> "Oman", "TN"=> "Tunisia", "JO"=> "Jordan", "HR"=> "Croatia", "HT"=> "Haiti", "HU"=> "Hungary", "HK"=> "Hong Kong", "HN"=> "Honduras", "HM"=> "Heard Island and McDonald Islands", "VE"=> "Venezuela", "PR"=> "Puerto Rico", "PS"=> "Palestinian Territory", "PW"=> "Palau", "PT"=> "Portugal", "SJ"=> "Svalbard and Jan Mayen", "PY"=> "Paraguay", "IQ"=> "Iraq", "PA"=> "Panama", "PF"=> "French Polynesia", "PG"=> "Papua New Guinea", "PE"=> "Peru", "PK"=> "Pakistan", "PH"=> "Philippines", "PN"=> "Pitcairn", "PL"=> "Poland", "PM"=> "Saint Pierre and Miquelon", "ZM"=> "Zambia", "EH"=> "Western Sahara", "EE"=> "Estonia", "EG"=> "Egypt", "ZA"=> "South Africa", "EC"=> "Ecuador", "IT"=> "Italy", "VN"=> "Vietnam", "SB"=> "Solomon Islands", "ET"=> "Ethiopia", "SO"=> "Somalia", "ZW"=> "Zimbabwe", "SA"=> "Saudi Arabia", "ES"=> "Spain", "ER"=> "Eritrea", "ME"=> "Montenegro", "MD"=> "Moldova", "MG"=> "Madagascar", "MF"=> "Saint Martin", "MA"=> "Morocco", "MC"=> "Monaco", "UZ"=> "Uzbekistan", "MM"=> "Myanmar", "ML"=> "Mali", "MO"=> "Macao", "MN"=> "Mongolia", "MH"=> "Marshall Islands", "MK"=> "Macedonia", "MU"=> "Mauritius", "MT"=> "Malta", "MW"=> "Malawi", "MV"=> "Maldives", "MQ"=> "Martinique", "MP"=> "Northern Mariana Islands", "MS"=> "Montserrat", "MR"=> "Mauritania", "IM"=> "Isle of Man", "UG"=> "Uganda", "TZ"=> "Tanzania", "MY"=> "Malaysia", "MX"=> "Mexico", "IL"=> "Israel", "FR"=> "France", "IO"=> "British Indian Ocean Territory", "SH"=> "Saint Helena", "FI"=> "Finland", "FJ"=> "Fiji", "FK"=> "Falkland Islands", "FM"=> "Micronesia", "FO"=> "Faroe Islands", "NI"=> "Nicaragua", "NL"=> "Netherlands", "NO"=> "Norway", "NA"=> "Namibia", "VU"=> "Vanuatu", "NC"=> "New Caledonia", "NE"=> "Niger", "NF"=> "Norfolk Island", "NG"=> "Nigeria", "NZ"=> "New Zealand", "NP"=> "Nepal", "NR"=> "Nauru", "NU"=> "Niue", "CK"=> "Cook Islands", "XK"=> "Kosovo", "CI"=> "Ivory Coast", "CH"=> "Switzerland", "CO"=> "Colombia", "CN"=> "China", "CM"=> "Cameroon", "CL"=> "Chile", "CC"=> "Cocos Islands", "CA"=> "Canada", "CG"=> "Republic of the Congo", "CF"=> "Central African Republic", "CD"=> "Democratic Republic of the Congo", "CZ"=> "Czech Republic", "CY"=> "Cyprus", "CX"=> "Christmas Island", "CR"=> "Costa Rica", "CW"=> "Curacao", "CV"=> "Cape Verde", "CU"=> "Cuba", "SZ"=> "Swaziland", "SY"=> "Syria", "SX"=> "Sint Maarten", "KG"=> "Kyrgyzstan", "KE"=> "Kenya", "SS"=> "South Sudan", "SR"=> "Suriname", "KI"=> "Kiribati", "KH"=> "Cambodia", "KN"=> "Saint Kitts and Nevis", "KM"=> "Comoros", "ST"=> "Sao Tome and Principe", "SK"=> "Slovakia", "KR"=> "South Korea", "SI"=> "Slovenia", "KP"=> "North Korea", "KW"=> "Kuwait", "SN"=> "Senegal", "SM"=> "San Marino", "SL"=> "Sierra Leone", "SC"=> "Seychelles", "KZ"=> "Kazakhstan", "KY"=> "Cayman Islands", "SG"=> "Singapore", "SE"=> "Sweden", "SD"=> "Sudan", "DO"=> "Dominican Republic", "DM"=> "Dominica", "DJ"=> "Djibouti", "DK"=> "Denmark", "VG"=> "British Virgin Islands", "DE"=> "Germany", "YE"=> "Yemen", "DZ"=> "Algeria", "US"=> "United States", "UY"=> "Uruguay", "YT"=> "Mayotte", "UM"=> "United States Minor Outlying Islands", "LB"=> "Lebanon", "LC"=> "Saint Lucia", "LA"=> "Laos", "TV"=> "Tuvalu", "TW"=> "Taiwan", "TT"=> "Trinidad and Tobago", "TR"=> "Turkey", "LK"=> "Sri Lanka", "LI"=> "Liechtenstein", "LV"=> "Latvia", "TO"=> "Tonga", "LT"=> "Lithuania", "LU"=> "Luxembourg", "LR"=> "Liberia", "LS"=> "Lesotho", "TH"=> "Thailand", "TF"=> "French Southern Territories", "TG"=> "Togo", "TD"=> "Chad", "TC"=> "Turks and Caicos Islands", "LY"=> "Libya", "VA"=> "Vatican", "VC"=> "Saint Vincent and the Grenadines", "AE"=> "United Arab Emirates", "AD"=> "Andorra", "AG"=> "Antigua and Barbuda", "AF"=> "Afghanistan", "AI"=> "Anguilla", "VI"=> "U.S. Virgin Islands", "IS"=> "Iceland", "IR"=> "Iran", "AM"=> "Armenia", "AL"=> "Albania", "AO"=> "Angola", "AQ"=> "Antarctica", "AS"=> "American Samoa", "AR"=> "Argentina", "AU"=> "Australia", "AT"=> "Austria", "AW"=> "Aruba", "IN"=> "India", "AX"=> "Aland Islands", "AZ"=> "Azerbaijan", "IE"=> "Ireland", "ID"=> "Indonesia", "UA"=> "Ukraine", "QA"=> "Qatar", "MZ"=> "Mozambique"];

?>
    <div class="container m-sm-2 m-md-5 m-lg-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 offset-md-4 offset-lg-4 text-left">
                <div class="content">
                    You can send your message on whatsapp without saving the number on your phone. Just fill the below form with Country Code and phone number. You can enter message as well it will automatically goes to your whatsapp.
                </div>
                <form action="#" method="post" id="whatsapp-send" class="text-left mt-5 mb-5">
                    <div class="form-group">
                        <label class="col-form-label" for="cn-code"><span class="text-danger">*</span>Country Code: </label>
                        <input list="cn-codes" name="cn-code" id="cn-code" placeholder="Select Country Code" required>
                        <datalist id="cn-codes">
                            <?php
                                foreach ($cnnames as $ccode => $cname){
                                    foreach ($cncodes as $sccode => $prefix){
                                        if ($ccode == $sccode ){
                                            echo "<option value='".$prefix."'>".$prefix." (".$cname.")"."</option>";
                                        }
                                    }
                                }
                            ?>
                        </datalist>
                    </div>
                    <div class="cn-code-error d-none text-danger">Please select the Code First</div>
                    <div class="form-group">
                        <label class="col-form-label" for="phone"><span class="text-danger">*</span>Phone Number: </label> <input id="phone" type="text" name="phone" required>
                    </div>
                    <div class="phone-error d-none text-danger">Phone Number is Required</div>

                    <div class="form-group">
                        <label class="col-form-label" for="msg">Initial Message: </label> <input type="text" name="message" id="msg" placeholder="Message(optional)">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn"><img class="img-fluid" src="./assets/btnl.svg" alt=""></button>
                    </div>
                </form>
                <div class="consent font-italic">
                    <p class="info"><span class="text-danger">**</span>We are not saving any of the details in our database. It is just a tool to ease the message sending.</p>
                    <p>We are using Official Whatsapp API https://wa.me/</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#cn-code').on("focus",function(){
            $('#cn-code').trigger('click')
        });
        $('#whatsapp-send').on('submit',function (e) {
            e.preventDefault();
            var cncode = $('#cn-code').val();
            var phone = $('#phone').val();
            var msg = $('#msg').val();

            if (cncode==''){
                $('.cn-code-error').removeClass('d-none');
            }else if(phone==''){
                $('.phone-error').removeClass('d-none');
            }
            else
                window.location= 'https://wa.me/'+cncode+phone+'?text='+msg;

        })
    </script>
    <style>
        .nice-select.cn-code .list{
            max-height: 200px;
            overflow-y: scroll;
        }
        @media screen and (min-width:768px){
            .col-form-label{
                width: 25%;
            }
        }
    </style>
<?php


include_once './footer.php';