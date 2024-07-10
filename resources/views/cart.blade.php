<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shopping Cart</title>
    <base href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/" />
    <script src="{{ asset('catalog/view/javascript/jquery/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/bootstrap/js/bootstrap.min.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Playball&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!--<link href="catalog/view/theme//stylesheet/TemplateBunch/bootstrap.min.css" rel="stylesheet" media="screen" />-->

    <!-- default CSS START -->

    <link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/icofont.min.css') }}" rel="stylesheet">
    <link href="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.css" rel="stylesheet" media="screen" />
    <link href="catalog/view/javascript/jquery/owl-carousel/owl.theme.default.min.css" rel="stylesheet" media="screen" />
    <link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/animate.css" rel="stylesheet" type="text/css" />

    <!-- default CSS END -->

    <!-- TemplateBunch Custom CSS Start -->

    <link href="{{ asset('catalog/view/theme/OPCTB49_01/stylesheet/stylesheet.css') }}" rel="stylesheet">

    <link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-blog.css" rel="stylesheet">
    <link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-category-feature.css" rel="stylesheet" type="text/css" />
    <link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-countdown.css" rel="stylesheet" type="text/css" />
    <link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-home.css" rel="stylesheet" type="text/css" />
    <link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-innerpage.css" rel="stylesheet" type="text/css" />
    <link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-lightbox.css" rel="stylesheet" type="text/css" />
    <link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-menu.css" rel="stylesheet" type="text/css" />
    <link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-newsletter.css" rel="stylesheet" type="text/css" />
    <link href="catalog/view/theme/OPCTB49_01/stylesheet/TemplateBunch/custom/tb-product.css" rel="stylesheet" type="text/css" />

    <!-- TemplateBunch Custom CSS End -->



    <script src="catalog/view/javascript/common.js"></script>


    <!-- default JS START -->
    <script src="catalog/view/javascript/TemplateBunch/default/inview.js"></script>
    <script src="catalog/view/javascript/TemplateBunch/default/parallex.js"></script>
    <script src="catalog/view/javascript/TemplateBunch/default/theia-sticky-sidebar.min.js"></script>
    <script src="catalog/view/javascript/TemplateBunch/default/lightbox-2.6.min.js"></script>
    <script src="catalog/view/javascript/TemplateBunch/default/waypoints.min.js"></script>
    <script src="catalog/view/javascript/TemplateBunch/default/wow.min.js"></script>
    <script src="catalog/view/javascript/TemplateBunch/default/bootstrap-notify.min.js"></script>
    <script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js"></script>
    <!-- default JS End -->

    <!-- TemplateBunch custom JS START -->
    <script src="catalog/view/javascript/TemplateBunch/actionscript.js"></script>
    <script src="catalog/view/javascript/TemplateBunch/menu.js"></script>
    <script src="catalog/view/javascript/TemplateBunch/tb_countdown.js"></script>
    <script src="catalog/view/javascript/TemplateBunch/tb_owl.js"></script>
    <!-- <script src="catalog/view/javascript/TemplateBunch/tb_quickview.js"></script> -->
    <!-- TemplateBunch custom JS END -->

    <script>
        new WOW().init();
    </script>


    <link href="image/catalog/cart.png" rel="icon" />

    <script src="catalog/view/javascript/TemplateBunch/default/jquery.bpopup.min.js"></script>
    <script src="catalog/view/javascript/TemplateBunch/default/jquery.cookie.js"></script>

</head>

<body class="checkout-cart">
    <div class="tbloading-bg tbloader"></div>
    <div id="page">
            @include('part.header')
        <div class="header-content-title">
        </div>

        <div id="checkout-cart" class="container">
            <ul class="breadcrumb">
                <li><a href="#"><i class="icofont-home"></i></a></li>
                <li><a href="#">Shopping Cart</a></li>
            </ul>
            <div class="row">
                <div id="content" class="col-sm-12">
                    <h1>Shopping Cart
                    </h1>
                    <form action="">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td class="text-center">Image</td>
                                        <td class="text-left">Name</td>
                                        <td class="text-left">Quantity</td>
                                        <td class="text-right">Unit Price</td>
                                        <td class="text-right text-right-price">Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <a href="#"><img src="#" title="Pineapple Jam Preservatives" class="img-thumbnail" /></a>
                                        </td>
                                        <td class="text-left"><a href="#">Pineapple Jam Preservatives</a>
                                        </td>
                                        <td class="text-left">
                                            <div class="cart_input_block input-group btn-block" style="max-width: 200px;">
                                                <input type="text" name="quantity[21]" value="1" size="1" class="form-control" />
                                                <span class="input-group-btn">
                                                    <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-primary main"><i class="icofont-refresh"></i></button><button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onclick="cart.remove('21');">
                                                        <i class="icofont-close"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-right unit-price">$1,202.00</td>
                                        <td class="text-right total-price">$1,202.00</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>What would you like to do next?</h2>
                            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                        </div>
                        <div class="panel-group col-sm-8" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">Use Coupon Code
                                            <i class="icofont-simple-down"></i></a></h4>
                                </div>
                                <div id="collapse-coupon" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <label class="col-sm-2 control-label" for="input-coupon">Enter your coupon here</label>
                                        <div class="input-group">
                                            <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control" />
                                            <span class="input-group-btn">
                                                <input type="button" value="Apply Coupon" id="button-coupon" data-loading-text="Loading..." class="btn btn-primary" />
                                            </span>
                                        </div>
                                        <script type="text/javascript">
                                            <!--
                                            $('#button-coupon').on('click', function() {
                                                $.ajax({
                                                    url: 'index.php?route=extension/total/coupon/coupon',
                                                    type: 'post',
                                                    data: 'coupon=' + encodeURIComponent($('input[name=\'coupon\']').val()),
                                                    dataType: 'json',
                                                    beforeSend: function() {
                                                        $('#button-coupon').button('loading');
                                                    },
                                                    complete: function() {
                                                        $('#button-coupon').button('reset');
                                                    },
                                                    success: function(json) {
                                                        $('.alert-dismissible').remove();
                                                        if (json['redirect']) {
                                                            location = json['redirect'];
                                                        }

                                                        if (json['error']) {
                                                            $.notify({
                                                                message: json['error'],
                                                                target: '_blank'
                                                            }, {
                                                                // settings
                                                                element: 'body',
                                                                position: null,
                                                                type: "info",
                                                                allow_dismiss: true,
                                                                newest_on_top: false,
                                                                placement: {
                                                                    from: "top",
                                                                    align: "right"
                                                                },
                                                                offset: 20,
                                                                spacing: 10,
                                                                z_index: 2031,
                                                                delay: 5000,
                                                                timer: 1000,
                                                                url_target: '_blank',
                                                                mouse_over: null,
                                                                animate: {
                                                                    enter: 'animated fadeInDown',
                                                                    exit: 'animated fadeOutUp'
                                                                },
                                                                onShow: null,
                                                                onShown: null,
                                                                onClose: null,
                                                                onClosed: null,
                                                                icon_type: 'class',
                                                                template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-danger alert-dismissible" role="alert">' +
                                                                    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button>' +
                                                                    '<span data-notify="message"><i class="icofont-check-circled"></i>&nbsp; {2}</span>' +
                                                                    '<div class="progress" data-notify="progressbar">' +
                                                                    '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                                                    '</div>' +
                                                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                                                    '</div>'
                                                            });
                                                        }
                                                    },
                                                    error: function(xhr, ajaxOptions, thrownError) {
                                                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                                                    }
                                                });
                                            });
                                            //
                                            -->
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#collapse-shipping" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">Estimate Shipping &amp; Taxes
                                            <i class="icofont-simple-down"></i></a></h4>
                                </div>
                                <div id="collapse-shipping" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <div class="form-horizontal">
                                            <div class="form-group required">
                                                <label class="col-sm-2 control-label" for="input-country">Country</label>
                                                <div class="col-sm-10">
                                                    <select name="country_id" id="input-country" class="form-control">
                                                        <option value=""> --- Please Select --- </option>
                                                        <option value="244">Aaland Islands</option>
                                                        <option value="1">Afghanistan</option>
                                                        <option value="2">Albania</option>
                                                        <option value="3">Algeria</option>
                                                        <option value="4">American Samoa</option>
                                                        <option value="5">Andorra</option>
                                                        <option value="6">Angola</option>
                                                        <option value="7">Anguilla</option>
                                                        <option value="8">Antarctica</option>
                                                        <option value="9">Antigua and Barbuda</option>
                                                        <option value="10">Argentina</option>
                                                        <option value="11">Armenia</option>
                                                        <option value="12">Aruba</option>
                                                        <option value="252">Ascension Island (British)</option>
                                                        <option value="13">Australia</option>
                                                        <option value="14">Austria</option>
                                                        <option value="15">Azerbaijan</option>
                                                        <option value="16">Bahamas</option>
                                                        <option value="17">Bahrain</option>
                                                        <option value="18">Bangladesh</option>
                                                        <option value="19">Barbados</option>
                                                        <option value="20">Belarus</option>
                                                        <option value="21">Belgium</option>
                                                        <option value="22">Belize</option>
                                                        <option value="23">Benin</option>
                                                        <option value="24">Bermuda</option>
                                                        <option value="25">Bhutan</option>
                                                        <option value="26">Bolivia</option>
                                                        <option value="245">Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="27">Bosnia and Herzegovina</option>
                                                        <option value="28">Botswana</option>
                                                        <option value="29">Bouvet Island</option>
                                                        <option value="30">Brazil</option>
                                                        <option value="31">British Indian Ocean Territory</option>
                                                        <option value="32">Brunei Darussalam</option>
                                                        <option value="33">Bulgaria</option>
                                                        <option value="34">Burkina Faso</option>
                                                        <option value="35">Burundi</option>
                                                        <option value="36">Cambodia</option>
                                                        <option value="37">Cameroon</option>
                                                        <option value="38">Canada</option>
                                                        <option value="251">Canary Islands</option>
                                                        <option value="39">Cape Verde</option>
                                                        <option value="40">Cayman Islands</option>
                                                        <option value="41">Central African Republic</option>
                                                        <option value="42">Chad</option>
                                                        <option value="43">Chile</option>
                                                        <option value="44">China</option>
                                                        <option value="45">Christmas Island</option>
                                                        <option value="46">Cocos (Keeling) Islands</option>
                                                        <option value="47">Colombia</option>
                                                        <option value="48">Comoros</option>
                                                        <option value="49">Congo</option>
                                                        <option value="50">Cook Islands</option>
                                                        <option value="51">Costa Rica</option>
                                                        <option value="52">Cote D'Ivoire</option>
                                                        <option value="53">Croatia</option>
                                                        <option value="54">Cuba</option>
                                                        <option value="246">Curacao</option>
                                                        <option value="55">Cyprus</option>
                                                        <option value="56">Czech Republic</option>
                                                        <option value="237">Democratic Republic of Congo</option>
                                                        <option value="57">Denmark</option>
                                                        <option value="58">Djibouti</option>
                                                        <option value="59">Dominica</option>
                                                        <option value="60">Dominican Republic</option>
                                                        <option value="61">East Timor</option>
                                                        <option value="62">Ecuador</option>
                                                        <option value="63">Egypt</option>
                                                        <option value="64">El Salvador</option>
                                                        <option value="65">Equatorial Guinea</option>
                                                        <option value="66">Eritrea</option>
                                                        <option value="67">Estonia</option>
                                                        <option value="68">Ethiopia</option>
                                                        <option value="69">Falkland Islands (Malvinas)</option>
                                                        <option value="70">Faroe Islands</option>
                                                        <option value="71">Fiji</option>
                                                        <option value="72">Finland</option>
                                                        <option value="74">France, Metropolitan</option>
                                                        <option value="75">French Guiana</option>
                                                        <option value="76">French Polynesia</option>
                                                        <option value="77">French Southern Territories</option>
                                                        <option value="126">FYROM</option>
                                                        <option value="78">Gabon</option>
                                                        <option value="79">Gambia</option>
                                                        <option value="80">Georgia</option>
                                                        <option value="81">Germany</option>
                                                        <option value="82">Ghana</option>
                                                        <option value="83">Gibraltar</option>
                                                        <option value="84">Greece</option>
                                                        <option value="85">Greenland</option>
                                                        <option value="86">Grenada</option>
                                                        <option value="87">Guadeloupe</option>
                                                        <option value="88">Guam</option>
                                                        <option value="89">Guatemala</option>
                                                        <option value="256">Guernsey</option>
                                                        <option value="90">Guinea</option>
                                                        <option value="91">Guinea-Bissau</option>
                                                        <option value="92">Guyana</option>
                                                        <option value="93">Haiti</option>
                                                        <option value="94">Heard and Mc Donald Islands</option>
                                                        <option value="95">Honduras</option>
                                                        <option value="96">Hong Kong</option>
                                                        <option value="97">Hungary</option>
                                                        <option value="98">Iceland</option>
                                                        <option value="99">India</option>
                                                        <option value="100">Indonesia</option>
                                                        <option value="101">Iran (Islamic Republic of)</option>
                                                        <option value="102">Iraq</option>
                                                        <option value="103">Ireland</option>
                                                        <option value="254">Isle of Man</option>
                                                        <option value="104">Israel</option>
                                                        <option value="105">Italy</option>
                                                        <option value="106">Jamaica</option>
                                                        <option value="107">Japan</option>
                                                        <option value="257">Jersey</option>
                                                        <option value="108">Jordan</option>
                                                        <option value="109">Kazakhstan</option>
                                                        <option value="110">Kenya</option>
                                                        <option value="111">Kiribati</option>
                                                        <option value="253">Kosovo, Republic of</option>
                                                        <option value="114">Kuwait</option>
                                                        <option value="115">Kyrgyzstan</option>
                                                        <option value="116">Lao People's Democratic Republic</option>
                                                        <option value="117">Latvia</option>
                                                        <option value="118">Lebanon</option>
                                                        <option value="119">Lesotho</option>
                                                        <option value="120">Liberia</option>
                                                        <option value="121">Libyan Arab Jamahiriya</option>
                                                        <option value="122">Liechtenstein</option>
                                                        <option value="123">Lithuania</option>
                                                        <option value="124">Luxembourg</option>
                                                        <option value="125">Macau</option>
                                                        <option value="127">Madagascar</option>
                                                        <option value="128">Malawi</option>
                                                        <option value="129">Malaysia</option>
                                                        <option value="130">Maldives</option>
                                                        <option value="131">Mali</option>
                                                        <option value="132">Malta</option>
                                                        <option value="133">Marshall Islands</option>
                                                        <option value="134">Martinique</option>
                                                        <option value="135">Mauritania</option>
                                                        <option value="136">Mauritius</option>
                                                        <option value="137">Mayotte</option>
                                                        <option value="138">Mexico</option>
                                                        <option value="139">Micronesia, Federated States of</option>
                                                        <option value="140">Moldova, Republic of</option>
                                                        <option value="141">Monaco</option>
                                                        <option value="142">Mongolia</option>
                                                        <option value="242">Montenegro</option>
                                                        <option value="143">Montserrat</option>
                                                        <option value="144">Morocco</option>
                                                        <option value="145">Mozambique</option>
                                                        <option value="146">Myanmar</option>
                                                        <option value="147">Namibia</option>
                                                        <option value="148">Nauru</option>
                                                        <option value="149">Nepal</option>
                                                        <option value="150">Netherlands</option>
                                                        <option value="151">Netherlands Antilles</option>
                                                        <option value="152">New Caledonia</option>
                                                        <option value="153">New Zealand</option>
                                                        <option value="154">Nicaragua</option>
                                                        <option value="155">Niger</option>
                                                        <option value="156">Nigeria</option>
                                                        <option value="157">Niue</option>
                                                        <option value="158">Norfolk Island</option>
                                                        <option value="112">North Korea</option>
                                                        <option value="159">Northern Mariana Islands</option>
                                                        <option value="160">Norway</option>
                                                        <option value="161">Oman</option>
                                                        <option value="162">Pakistan</option>
                                                        <option value="163">Palau</option>
                                                        <option value="247">Palestinian Territory, Occupied</option>
                                                        <option value="164">Panama</option>
                                                        <option value="165">Papua New Guinea</option>
                                                        <option value="166">Paraguay</option>
                                                        <option value="167">Peru</option>
                                                        <option value="168">Philippines</option>
                                                        <option value="169">Pitcairn</option>
                                                        <option value="170">Poland</option>
                                                        <option value="171">Portugal</option>
                                                        <option value="172">Puerto Rico</option>
                                                        <option value="173">Qatar</option>
                                                        <option value="174">Reunion</option>
                                                        <option value="175">Romania</option>
                                                        <option value="176">Russian Federation</option>
                                                        <option value="177">Rwanda</option>
                                                        <option value="178">Saint Kitts and Nevis</option>
                                                        <option value="179">Saint Lucia</option>
                                                        <option value="180">Saint Vincent and the Grenadines</option>
                                                        <option value="181">Samoa</option>
                                                        <option value="182">San Marino</option>
                                                        <option value="183">Sao Tome and Principe</option>
                                                        <option value="184">Saudi Arabia</option>
                                                        <option value="185">Senegal</option>
                                                        <option value="243">Serbia</option>
                                                        <option value="186">Seychelles</option>
                                                        <option value="187">Sierra Leone</option>
                                                        <option value="188">Singapore</option>
                                                        <option value="189">Slovak Republic</option>
                                                        <option value="190">Slovenia</option>
                                                        <option value="191">Solomon Islands</option>
                                                        <option value="192">Somalia</option>
                                                        <option value="193">South Africa</option>
                                                        <option value="194">South Georgia &amp; South Sandwich Islands</option>
                                                        <option value="113">South Korea</option>
                                                        <option value="248">South Sudan</option>
                                                        <option value="195">Spain</option>
                                                        <option value="196">Sri Lanka</option>
                                                        <option value="249">St. Barthelemy</option>
                                                        <option value="197">St. Helena</option>
                                                        <option value="250">St. Martin (French part)</option>
                                                        <option value="198">St. Pierre and Miquelon</option>
                                                        <option value="199">Sudan</option>
                                                        <option value="200">Suriname</option>
                                                        <option value="201">Svalbard and Jan Mayen Islands</option>
                                                        <option value="202">Swaziland</option>
                                                        <option value="203">Sweden</option>
                                                        <option value="204">Switzerland</option>
                                                        <option value="205">Syrian Arab Republic</option>
                                                        <option value="206">Taiwan</option>
                                                        <option value="207">Tajikistan</option>
                                                        <option value="208">Tanzania, United Republic of</option>
                                                        <option value="209">Thailand</option>
                                                        <option value="210">Togo</option>
                                                        <option value="211">Tokelau</option>
                                                        <option value="212">Tonga</option>
                                                        <option value="213">Trinidad and Tobago</option>
                                                        <option value="255">Tristan da Cunha</option>
                                                        <option value="214">Tunisia</option>
                                                        <option value="215">Turkey</option>
                                                        <option value="216">Turkmenistan</option>
                                                        <option value="217">Turks and Caicos Islands</option>
                                                        <option value="218">Tuvalu</option>
                                                        <option value="219">Uganda</option>
                                                        <option value="220">Ukraine</option>
                                                        <option value="221">United Arab Emirates</option>
                                                        <option value="222" selected="selected">United Kingdom</option>
                                                        <option value="223">United States</option>
                                                        <option value="224">United States Minor Outlying Islands</option>
                                                        <option value="225">Uruguay</option>
                                                        <option value="226">Uzbekistan</option>
                                                        <option value="227">Vanuatu</option>
                                                        <option value="228">Vatican City State (Holy See)</option>
                                                        <option value="229">Venezuela</option>
                                                        <option value="230">Viet Nam</option>
                                                        <option value="231">Virgin Islands (British)</option>
                                                        <option value="232">Virgin Islands (U.S.)</option>
                                                        <option value="233">Wallis and Futuna Islands</option>
                                                        <option value="234">Western Sahara</option>
                                                        <option value="235">Yemen</option>
                                                        <option value="238">Zambia</option>
                                                        <option value="239">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <label class="col-sm-2 control-label" for="input-zone">Region / State</label>
                                                <div class="col-sm-10">
                                                    <select name="zone_id" id="input-zone" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control" />
                                                </div>
                                            </div>
                                            <button type="button" id="button-quote" data-loading-text="Loading..." class="btn btn-primary">Get Quotes</button>
                                        </div>
                                        <!-- <script type="text/javascript">
                                            <!--
                                            $('#button-quote').on('click', function() {
                                                $.ajax({
                                                    url: 'index.php?route=extension/total/shipping/quote',
                                                    type: 'post',
                                                    data: 'country_id=' + $('select[name=\'country_id\']').val() + '&zone_id=' + $('select[name=\'zone_id\']').val() + '&postcode=' + encodeURIComponent($('input[name=\'postcode\']').val()),
                                                    dataType: 'json',
                                                    beforeSend: function() {
                                                        $('#button-quote').button('loading');
                                                    },
                                                    complete: function() {
                                                        $('#button-quote').button('reset');
                                                    },
                                                    success: function(json) {
                                                        $('.alert-dismissible, .text-danger').remove();

                                                        if (json['redirect']) {
                                                            location = json['redirect'];
                                                        }

                                                        if (json['error']) {
                                                            if (json['error']['warning']) {
                                                                $.notify({
                                                                    message: json['error'],
                                                                    target: '_blank'
                                                                }, {
                                                                    // settings
                                                                    element: 'body',
                                                                    position: null,
                                                                    type: "info",
                                                                    allow_dismiss: true,
                                                                    newest_on_top: false,
                                                                    placement: {
                                                                        from: "top",
                                                                        align: "right"
                                                                    },
                                                                    offset: 20,
                                                                    spacing: 10,
                                                                    z_index: 2031,
                                                                    delay: 5000,
                                                                    timer: 1000,
                                                                    url_target: '_blank',
                                                                    mouse_over: null,
                                                                    animate: {
                                                                        enter: 'animated fadeInDown',
                                                                        exit: 'animated fadeOutUp'
                                                                    },
                                                                    onShow: null,
                                                                    onShown: null,
                                                                    onClose: null,
                                                                    onClosed: null,
                                                                    icon_type: 'class',
                                                                    template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-danger alert-dismissible" role="alert">' +
                                                                        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button>' +
                                                                        '<span data-notify="message"><i class="icofont-check-circled"></i>&nbsp; {2}</span>' +
                                                                        '<div class="progress" data-notify="progressbar">' +
                                                                        '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                                                        '</div>' +
                                                                        '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                                                        '</div>'
                                                                });
                                                            }

                                                            if (json['error']['country']) {
                                                                $('select[name=\'country_id\']').after('<div class="text-danger">' + json['error']['country'] + '</div>');
                                                            }

                                                            if (json['error']['zone']) {
                                                                $('select[name=\'zone_id\']').after('<div class="text-danger">' + json['error']['zone'] + '</div>');
                                                            }

                                                            if (json['error']['postcode']) {
                                                                $('input[name=\'postcode\']').after('<div class="text-danger">' + json['error']['postcode'] + '</div>');
                                                            }
                                                        }

                                                        if (json['shipping_method']) {
                                                            $('#modal-shipping').remove();

                                                            html = '<div id="modal-shipping" class="modal">';
                                                            html += '  <div class="modal-dialog">';
                                                            html += '    <div class="modal-content">';
                                                            html += '      <div class="modal-header">';
                                                            html += '        <h4 class="modal-title">Please select the preferred shipping method to use on this order.</h4>';
                                                            html += '      </div>';
                                                            html += '      <div class="modal-body">';

                                                            for (i in json['shipping_method']) {
                                                                html += '<p><strong>' + json['shipping_method'][i]['title'] + '</strong></p>';

                                                                if (!json['shipping_method'][i]['error']) {
                                                                    for (j in json['shipping_method'][i]['quote']) {
                                                                        html += '<div class="radio">';
                                                                        html += '  <label>';

                                                                        if (json['shipping_method'][i]['quote'][j]['code'] == '') {
                                                                            html += '<input type="radio" name="shipping_method" value="' + json['shipping_method'][i]['quote'][j]['code'] + '" checked="checked" />';
                                                                        } else {
                                                                            html += '<input type="radio" name="shipping_method" value="' + json['shipping_method'][i]['quote'][j]['code'] + '" />';
                                                                        }

                                                                        html += json['shipping_method'][i]['quote'][j]['title'] + ' - ' + json['shipping_method'][i]['quote'][j]['text'] + '</label></div>';
                                                                    }
                                                                } else {
                                                                    html += '<div class="alert alert-danger alert-dismissible">' + json['shipping_method'][i]['error'] + '</div>';
                                                                }
                                                            }

                                                            html += '      </div>';
                                                            html += '      <div class="modal-footer">';
                                                            html += '        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>';

                                                            html += '        <input type="button" value="Apply Shipping" id="button-shipping" data-loading-text="Loading..." class="btn btn-primary" disabled="disabled" />';

                                                            html += '      </div>';
                                                            html += '    </div>';
                                                            html += '  </div>';
                                                            html += '</div> ';

                                                            $('body').append(html);

                                                            $('#modal-shipping').modal('show');

                                                            $('input[name=\'shipping_method\']').on('change', function() {
                                                                $('#button-shipping').prop('disabled', false);
                                                            });
                                                        }
                                                    },
                                                    error: function(xhr, ajaxOptions, thrownError) {
                                                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                                                    }
                                                });
                                            });

                                            $(document).delegate('#button-shipping', 'click', function() {
                                                $.ajax({
                                                    url: 'index.php?route=extension/total/shipping/shipping',
                                                    type: 'post',
                                                    data: 'shipping_method=' + encodeURIComponent($('input[name=\'shipping_method\']:checked').val()),
                                                    dataType: 'json',
                                                    beforeSend: function() {
                                                        $('#button-shipping').button('loading');
                                                    },
                                                    complete: function() {
                                                        $('#button-shipping').button('reset');
                                                    },
                                                    success: function(json) {
                                                        $('.alert-dismissible').remove();
                                                        if (json['redirect']) {
                                                            location = json['redirect'];
                                                        }

                                                        if (json['error']) {
                                                            $.notify({
                                                                message: json['error'],
                                                                target: '_blank'
                                                            }, {
                                                                // settings
                                                                element: 'body',
                                                                position: null,
                                                                type: "info",
                                                                allow_dismiss: true,
                                                                newest_on_top: false,
                                                                placement: {
                                                                    from: "top",
                                                                    align: "right"
                                                                },
                                                                offset: 20,
                                                                spacing: 10,
                                                                z_index: 2031,
                                                                delay: 5000,
                                                                timer: 1000,
                                                                url_target: '_blank',
                                                                mouse_over: null,
                                                                animate: {
                                                                    enter: 'animated fadeInDown',
                                                                    exit: 'animated fadeOutUp'
                                                                },
                                                                onShow: null,
                                                                onShown: null,
                                                                onClose: null,
                                                                onClosed: null,
                                                                icon_type: 'class',
                                                                template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-danger alert-dismissible" role="alert">' +
                                                                    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button>' +
                                                                    '<span data-notify="message"><i class="icofont-check-circled"></i>&nbsp; {2}</span>' +
                                                                    '<div class="progress" data-notify="progressbar">' +
                                                                    '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                                                    '</div>' +
                                                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                                                    '</div>'
                                                            });
                                                        }
                                                    },
                                                    error: function(xhr, ajaxOptions, thrownError) {
                                                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                                                    }
                                                });
                                            });
                                            
                                        </script> -->
                                        <!-- <script type="text/javascript">
                                            <!--
                                            $('select[name=\'country_id\']').on('change', function() {
                                                $.ajax({
                                                    url: 'index.php?route=extension/total/shipping/country&country_id=' + this.value,
                                                    dataType: 'json',
                                                    beforeSend: function() {
                                                        $('select[name=\'country_id\']').prop('disabled', true);
                                                    },
                                                    complete: function() {
                                                        $('select[name=\'country_id\']').prop('disabled', false);
                                                    },
                                                    success: function(json) {
                                                        if (json['postcode_required'] == '1') {
                                                            $('input[name=\'postcode\']').parent().parent().addClass('required');
                                                        } else {
                                                            $('input[name=\'postcode\']').parent().parent().removeClass('required');
                                                        }

                                                        html = '<option value=""> --- Please Select --- </option>';

                                                        if (json['zone'] && json['zone'] != '') {
                                                            for (i = 0; i < json['zone'].length; i++) {
                                                                html += '<option value="' + json['zone'][i]['zone_id'] + '"';

                                                                if (json['zone'][i]['zone_id'] == '') {
                                                                    html += ' selected="selected"';
                                                                }

                                                                html += '>' + json['zone'][i]['name'] + '</option>';
                                                            }
                                                        } else {
                                                            html += '<option value="0" selected="selected"> --- None --- </option>';
                                                        }

                                                        $('select[name=\'zone_id\']').html(html);
                                                    },
                                                    error: function(xhr, ajaxOptions, thrownError) {
                                                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                                                    }
                                                });
                                            });

                                            $('select[name=\'country_id\']').trigger('change');
                                            
                                        </script> -->
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#collapse-voucher" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">Use Gift Certificate
                                            <i class="icofont-simple-down"></i></a></h4>
                                </div>
                                <div id="collapse-voucher" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <label class="col-sm-2 control-label" for="input-voucher">Enter your gift certificate code here</label>
                                        <div class="input-group">
                                            <input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control" />
                                            <span class="input-group-btn">
                                                <input type="submit" value="Apply Gift Certificate" id="button-voucher" data-loading-text="Loading..." class="btn btn-primary" />
                                            </span>
                                        </div>
                                        <script type="text/javascript">
                                            <!--
                                            $('#button-voucher').on('click', function() {
                                                $.ajax({
                                                    url: 'index.php?route=extension/total/voucher/voucher',
                                                    type: 'post',
                                                    data: 'voucher=' + encodeURIComponent($('input[name=\'voucher\']').val()),
                                                    dataType: 'json',
                                                    beforeSend: function() {
                                                        $('#button-voucher').button('loading');
                                                    },
                                                    complete: function() {
                                                        $('#button-voucher').button('reset');
                                                    },
                                                    success: function(json) {
                                                        if (json['redirect']) {
                                                            location = json['redirect'];
                                                        }

                                                        if (json['error']) {
                                                            $.notify({
                                                                message: json['error'],
                                                                target: '_blank'
                                                            }, {
                                                                // settings
                                                                element: 'body',
                                                                position: null,
                                                                type: "info",
                                                                allow_dismiss: true,
                                                                newest_on_top: false,
                                                                placement: {
                                                                    from: "top",
                                                                    align: "right"
                                                                },
                                                                offset: 20,
                                                                spacing: 10,
                                                                z_index: 2031,
                                                                delay: 5000,
                                                                timer: 1000,
                                                                url_target: '_blank',
                                                                mouse_over: null,
                                                                animate: {
                                                                    enter: 'animated fadeInDown',
                                                                    exit: 'animated fadeOutUp'
                                                                },
                                                                onShow: null,
                                                                onShown: null,
                                                                onClose: null,
                                                                onClosed: null,
                                                                icon_type: 'class',
                                                                template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-danger alert-dismissible" role="alert">' +
                                                                    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button>' +
                                                                    '<span data-notify="message"><i class="icofont-check-circled"></i>&nbsp; {2}</span>' +
                                                                    '<div class="progress" data-notify="progressbar">' +
                                                                    '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                                                    '</div>' +
                                                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                                                    '</div>'
                                                            });
                                                        }
                                                    },
                                                    error: function(xhr, ajaxOptions, thrownError) {
                                                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                                                    }
                                                });
                                            });
                                            //
                                            -->
                                        </script>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4 sub-total-table">
                            <table class="table table-bordered">
                                <tr>
                                    <td class="text-right heading-title"><strong>Sub-Total:</strong></td>
                                    <td class="text-right total-amount">$1,000.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right heading-title"><strong>Eco Tax (-2.00):</strong></td>
                                    <td class="text-right total-amount">$2.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right heading-title"><strong>VAT (20%):</strong></td>
                                    <td class="text-right total-amount">$200.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right heading-title"><strong>Total:</strong></td>
                                    <td class="text-right total-amount">$1,202.00</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="buttons clearfix">
                        <div class="pull-left"><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=common/home" class="btn btn-default cnt">Continue Shopping</a></div>
                        <div class="pull-right"><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=checkout/checkout" class="btn btn-primary checkout">Checkout</a></div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="tb-footer">
            <div class="footer-top-cms">
                <div class="container">
                    <aside id="footer-top">
                        <div id="TB-newletter-subscribe" class="newletter-subscribe wow fadeInRight" data-wow-delay="0.3s">
                            <div id="newletter-boxes">
                                <div id="dialog-normal" class="window">
                                    <div class="box">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="newletter-title">
                                                    <h2 class="tb-title">Subscribe Our Newsletter</h2>
                                                    <span class="newletter-desc">Get 20% off first order!</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="box-content newleter-content">
                                                    <div id="form_subscribe">
                                                        <form name="subscribe" id="subscribe">
                                                            <input type="text" placeholder="Your email address" value="" name="subscribe_email" id="subscribe_email">
                                                            <input type="hidden" value="" name="subscribe_name" id="subscribe_name" />
                                                            <a class="button btn btn-primary" onclick="email_subscribe()"><span>Subscribe</span><i class="icofont-location-arrow"></i></a>

                                                        </form>
                                                    </div><!-- /#form_subscribe -->
                                                    <div id="notification-normal"></div>
                                                </div>
                                            </div><!-- /.box-content -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                function email_subscribe() {
                                    $.ajax({
                                        type: 'post',
                                        url: 'index.php?route=extension/module/tbnewslettersubscribe/subscribe',
                                        dataType: 'html',
                                        data: $("#subscribe").serialize(),
                                        success: function(html) {
                                            try {

                                                eval(html);

                                            } catch (e) {}

                                        }
                                    });


                                }

                                function email_unsubscribe() {
                                    $.ajax({
                                        type: 'post',
                                        url: 'index.php?route=extension/module/tbnewslettersubscribe/unsubscribe',
                                        dataType: 'html',
                                        data: $("#subscribe").serialize(),
                                        success: function(html) {
                                            try {

                                                eval(html);

                                            } catch (e) {}
                                        }
                                    });
                                    $('html, body').delay(1500).animate({
                                        scrollTop: 0
                                    }, 'slow');

                                }
                            </script>
                            <script>
                                $(document).ready(function() {
                                    $('#subscribe_email').keypress(function(e) {
                                        if (e.which == 13) {
                                            e.preventDefault();
                                            email_subscribe();
                                        }
                                        var name = $(this).val();
                                        $('#subscribe_name').val(name);
                                    });
                                    $('#subscribe_email').change(function() {
                                        var name = $(this).val();
                                        $('#subscribe_name').val(name);
                                    });

                                });
                            </script>
                        </div>
                    </aside>

                </div>
            </div>
            <div class="container">
                <div class="tb-comen-row wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="footer-left-cms col-lg-3">
                            <aside id="footer-left">
                                <div class="html-content">
                                    <div class="box-content">
                                        <div id="TB-Footer-cms" class="links">
                                            <div class="tb-footer-logo"><a href="index.php?route=common/home"><img src="image/catalog/demo/banners/footer-logo.png" alt="footer-logo"></a></div>
                                            <div class="tb-footer-desc">I use Lorem ipsum text all day long and spend hours formatting it, so I set this site up to make my day.</div>
                                        </div>
                                    </div>
                                </div>

                            </aside>

                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="footer-commen footer-my-account">
                                        <h5>My Account</h5>
                                        <ul class="list-unstyled">
                                            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/account">My Account</a></li>
                                            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/order">Order History</a></li>
                                            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/wishlist">Wish List</a></li>
                                            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/newsletter">Newsletter</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="footer-commen footer-information">
                                        <h5>Information</h5>
                                        <ul class="list-unstyled">
                                            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/information&amp;information_id=4">About Us</a></li>
                                            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/information&amp;information_id=6">Delivery Information</a></li>
                                            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>
                                            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="footer-commen footer-Extras">
                                        <h5>Extras</h5>
                                        <ul class="list-unstyled">
                                            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/manufacturer">Brands</a></li>
                                            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/voucher">Gift Certificates</a></li>
                                            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=affiliate/login">Affiliate</a></li>
                                            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/special">Specials</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--   
    <div class="col-lg-4">
        <div class="footer-commen footer-Customer Service">
          <h5>Customer Service</h5>
          <ul class="list-unstyled">
            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/contact">Contact Us</a></li>
            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=account/return/add">Returns</a></li>
            <li><a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=information/sitemap">Site Map</a></li>
          </ul>
          </div>
      </div>
    -->
                        <div class="footer-column footer-right-cms col-lg-2">
                            <aside id="footer-right">
                                <div class="html-content">
                                    <div class="box-content">
                                        <div id="Tb-contact-us">
                                            <div class="tb-contact-us footer-commen">
                                                <h5>Contact Us</h5>
                                                <ul class="tb-contact-us-wrapper list-unstyled">
                                                    <div class="tb-contact-list">
                                                        <i class="icofont-location-pin"></i>
                                                        <p>A20 Green Hill Road, <br>Fayetteville, California.</p>
                                                    </div>
                                                    <div class="tb-contact-list">
                                                        <i class="icofont-ui-call"></i>
                                                        <p><a href="tel:+1 209-223-2635">+1 209-223-2635</a></p>
                                                    </div>
                                                    <div class="tb-contact-list">
                                                        <i class="icofont-ui-message"></i>
                                                        <p><a href="mailto:info@hurzanorze.com">info@admin.com</a></p>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </aside>

                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="footer-bottom-left col-lg-6">
                            <p>Powered By <a href="http://www.opencart.com">OpenCart</a> Address &copy; 2024</p>
                        </div>
                        <div class="block-social col-lg-6">
                            <div class="footer-bottom-cms">
                                <aside id="footer-bottom">
                                    <div class="html-content">
                                        <div class="box-content">
                                            <div id="Tb-social-media-cms">
                                                <div class="Tb-social-media-wrapper">
                                                    <div class="Tb-social-media-icon">
                                                        <a href="#URL" class="facebook"><i class="icofont-facebook"></i></a>
                                                        <a href="#URL" class="instagram"><i class="icofont-instagram"></i></a>
                                                        <a href="#URL" class="twitter"> <i class="icofont-twitter"></i></a>
                                                        <a href="#URL" class="skype"><i class="icofont-skype"></i></a>
                                                        <a href="#URL" class="vimeo"><i class="icofont-vimeo"></i></a>
                                                        <a href="#URL" class="youtube"><i class="icofont-youtube-play"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </aside>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        <!--
        var tb_live_search = {
            selector: '#search input[name=\'search\']',
            text_no_matches: 'Your shopping cart is empty!',
            height: '50px'
        }

        $(document).ready(function() {
            var html = '';
            html += '<div class="live-search">';
            html += '	<ul>';
            html += '	</ul>';
            html += '<div class="result-text"></div>';
            html += '</div>';

            //$(tb_live_search.selector).parent().closest('div').after(html);
            $(tb_live_search.selector).after(html);

            $(tb_live_search.selector).autocomplete({
                'source': function(request, response) {
                    var filter_name = $(tb_live_search.selector).val();
                    var cat_id = 0;
                    var module_tb_live_search_min_length = '1';
                    if (filter_name.length < module_tb_live_search_min_length) {
                        $('.live-search').css('display', 'none');
                    } else {
                        var html = '';
                        html += '<li style="text-align: center;height:10px;">';
                        html += '<img class="loading" src="image/catalog/demo/banners/loading.gif" />';
                        html += '</li>';
                        $('.live-search ul').html(html);
                        $('.live-search').css('display', 'block');

                        $.ajax({
                            url: 'index.php?route=extension/module/tb_live_search&filter_name=' + encodeURIComponent(filter_name),
                            dataType: 'json',
                            success: function(result) {
                                var products = result.products;
                                $('.live-search ul li').remove();
                                $('.result-text').html('');
                                if (!$.isEmptyObject(products)) {
                                    var show_image = 1;
                                    var show_price = 1;
                                    var show_description = 1;
                                    $('.result-text').html('<a href="https://templatebunch.com/Opencart/OPC005/OPCTB49/OPC01/index.php?route=product/search&amp;search=' + filter_name + '" class="view-all-results">  View all results   (' + result.total + ')</a>');

                                    $.each(products, function(index, product) {
                                        var html = '';

                                        html += '<li>';
                                        html += '<a href="' + product.url + '" title="' + product.name + '">';
                                        if (product.image && show_image) {
                                            html += '	<div class="product-image col-sm-4"><img alt="' + product.name + '" src="' + product.image + '"></div>';
                                        }
                                        html += '<div class="search-description col-sm-8 col-xs-8">';
                                        html += '	<div class="product-name">' + product.name;
                                        if (show_description) {
                                            html += '<p>' + product.extra_info + '</p>';
                                        }
                                        html += '</div>';
                                        if (show_price) {
                                            if (product.special) {
                                                html += '	<div class="product-price"><span class="price">' + product.special + '</span><span class="special">' + product.price + '</span></div>';
                                            } else {
                                                html += '	<div class="product-price"><span class="price">' + product.price + '</span></div>';
                                            }
                                        }
                                        html += '</div>';
                                        html += '<span style="clear:both"></span>';
                                        html += '</a>';
                                        html += '</li>';
                                        $('.live-search ul').append(html);
                                    });
                                } else {
                                    var html = '';
                                    html += '<li style="text-align: center;height:10px;">';
                                    html += tb_live_search.text_no_matches;
                                    html += '</li>';

                                    $('.live-search ul').html(html);
                                }
                                $('.live-search').css('display', 'block');
                                return false;
                            }
                        });
                    }
                },
                'select': function(product) {
                    $(tb_live_search.selector).val(product.name);
                }
            });

            $(document).bind("mouseup touchend", function(e) {
                var container = $('.live-search');
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.hide();
                }
            });
        });
        //
        -->
    </script>


    <!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

</body>

</html>