<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/favicon.ico" />
    <title>Murah Tiketnya - Beli Tiket Murah Ya Disini Tempatnya.</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bulma.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/core_green.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/core_demo.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/slick-carousel/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/datepicker/datepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/easyAutocomplete/easy-autocomplete.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/slick-carousel/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/ggpopover/ggtooltip.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/jqdropdown/jquery.dropdown.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/chosen/chosen.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Icons -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/icons.min.css">
    <style>
        .jst-hours {
            float: left;
            font-size: 30px;
        }
        .jst-minutes {
            float: left;
            font-size: 30px;
        }
        .jst-seconds {
            float: left;
            font-size: 30px;
        }
        .jst-clearDiv {
            clear: both;
        }

        .bodyTimeoutBackground {
         background: white;
        }

        .timeout {
            color: red;
            -webkit-animation-name: blinker;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: cubic-bezier(1.0,0,0,1.0);
            -webkit-animation-duration: 1s;
            }
            @-webkit-keyframes blinker {
            from { opacity: 1.0; }
            to { opacity: 0.0; }
        }

      
    </style>
    <!-- Javascript -->
    <script src="<?php echo base_url() ?>assets/js/core/jquery.min.js"></script>
</head>
<body>
<!--Page Loader-->
<div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <!-- Hero and nav -->
            <div class="navbar-wrapper navbar-sticky">
                <div class="hero-head">

            <!-- Nav -->
            <div class="container">
                <nav class="nav">
                    <div class="container big">
                        <div class="nav-left" style="overflow: visible;">
                            <a class="nav-item" href="#" target="_blank">
                                <img src="<?php echo base_url() ?>assets/images/logos/bulkit-logo-green.png" alt="Logo">
                            </a>
                            <a href="<?=base_url('Landing')?>" class="nav-item is-tab nav-inner is-not-mobile">Home</a>
                            <a href="#booking" class="nav-item is-tab nav-inner is-not-mobile">Booking</a>
                            <a href="#adventage" class="nav-item is-tab nav-inner is-not-mobile">Adventage</a>
                            <a href="#jadwal" class="nav-item is-tab nav-inner is-not-mobile">Jadwal</a>
                            <a href="#testimoni" class="nav-item is-tab nav-inner is-not-mobile">Testimoni</a>
                        </div>
                        <!-- Responsive toggle -->
                        <span class="nav-toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                        </span>
                        <div class="nav-right nav-menu">
                            <a href="#home" class="nav-item is-tab nav-inner is-menu-mobile">Home</a>
                            <a href="#booking" class="nav-item is-tab nav-inner is-menu-mobile">Booking</a>
                            <a href="#adventage" class="nav-item is-tab nav-inner is-menu-mobile">Adventage</a>
                            <a href="#jadwal" class="nav-item is-tab nav-inner is-menu-mobile">Destinasi</a>
                            <a href="#testimoni" class="nav-item is-tab nav-inner is-menu-mobile">Testimoni</a>
                            <span class="nav-item">
                                <a href="<?=base_url('KodePembayaran')?>"><div class="button button-cta btn-align primary-btn rounded is-bold light-btn centered">Kode Pembayaran </div></a>
                            </span>
                        </div>
                    </div>
                </nav>
            </div>
            <!--/Nav-->

                </div>
            </div>

<!-- Content -->
<?php $this->load->view('contents/'.$contents); ?>

<!--Footer-->
<footer class="footer footer-light">
        <div class="container">
            <div class="columns footer-columns is-flex-mobile">
                <div class="column is-half-mobile">
                    <div class="footer-column">
                        <div class="footer-header">
                            <h3>Product</h3>
                        </div>
                        <ul class="link-list">
                            <li><a href="">Kereta Api</a></li>
                            <li><a href="">Pesawat</a></li>
                            <li><a href="">Hotel</a></li>
                            <li><a href="">Pelni</a></li>
                        </ul>
                    </div>
                </div>
                <div class="column is-half-mobile">
                    <div class="footer-column">
                        <div class="footer-header">
                            <h3>Company</h3>
                        </div>
                        <ul class="link-list">
                            <li><a href="">Help Center</a></li>
                            <li><a href="">Privacy policy</a></li>
                            <li><a href="">Terms of service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="column is-half-mobile">
                    <div class="footer-column">
                        <div class="footer-header">
                            <h3>Learning</h3>
                        </div>
                        <ul class="link-list">
                            <li><a href="">Resources</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul></div>
                    </div>
                <div class="column is-half-mobile">
                    <div class="footer-column">
                        <div class="footer-logo">
                            <img src="assets/images/logos/bulkit-logo-green.png" alt="">
                        </div>
                        <div class="footer-header"><nav class="level is-mobile">
                            <div class="level-left level-social">
                                <a class="level-item" href="https://www.facebook.com/">
                                    <span class="icon"><i class="fab fa-facebook"></i></span>
                                </a>
                                <a class="level-item" href="https://www.instagram.com/">
                                    <span class="icon"><i class="fab fa-instagram"></i></span>
                                </a>
                                <a class="level-item" href="https://www.linkedin.com/">
                                    <span class="icon"><i class="fab fa-linkedin"></i></span>
                                </a>
                                <a class="level-item" href="#"></a>
                            </div>
                        </nav>
                    </div>
                    <div class="copyright"><span class="moto">Copyright © 2019 by Murah Tiketnya</span></div>
                </div>
            </div>
        </div>
    </footer>

    <div id="backtotop"><a href="#"></a></div>
    <script>
        filterSelection("all")
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("single-toggle-wrapper");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
        }

        function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
        }
        element.className = arr1.join(" ");
        }

        // // Add active class to the current button (highlight it)
        // var btnContainer = document.getElementById("myBtnContainer");
        // var btns = btnContainer.getElementsByClassName("btn");
        //     for (var i = 0; i < btns.length; i++) {
        //     btns[i].addEventListener("click", function(){
        //         var current = document.getElementsByClassName("active");
        //         current[0].className = current[0].className.replace(" active", "");
        //         this.className += " active";
        //     });
        // }
        //////////////////////////////////////

        $(document).ready(function() {
            $('#myCheck').change(function(){    
                if(this.checked){
                    $('#myInput').prop("disabled",false);   
                } else {
                    $('#myInput').prop("disabled",true);
                }
            });
        });
        
        function change($) {
            
        }

        function myPesawat() {
            var checkBox = document.getElementById("myPswt");
            var showPswt = document.getElementById("showPswt");
            if (checkBox.checked == true){
                showPswt.style.display = "block";
            } else {
                showPswt.style.display = "none";
            }
        }

        function swapValues(){
            var tmp = document.getElementById("asal").value;
            document.getElementById("asal").value = document.getElementById("berangkat").value;
            document.getElementById("berangkat").value = tmp;     
        }

        function swapPesawat(){
            var tmp = document.getElementById("asalPesawat").value;
            document.getElementById("asalPesawat").value = document.getElementById("berangkatPesawat").value;
            document.getElementById("berangkatPesawat").value = tmp;     
        }

        $(document).ready(function() {
            $("#button_search").click(function() {
                $("#form_search").toggle();
            });
        });

        $(function(){
            $('.timer').startTimer();
        })      

        document.addEventListener('DOMContentLoaded', function() {
            let cardToggles = document.getElementsByClassName('card-toggle');
            for (let i = 0; i < cardToggles.length; i++) {
                cardToggles[i].addEventListener('click', e => {
                    e.currentTarget.parentElement.parentElement.childNodes[3].classList.toggle('is-hidden');
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            let cardToggles = document.getElementsByClassName('card-toggle2');
            for (let i = 0; i < cardToggles.length; i++) {
                cardToggles[i].addEventListener('click', e => {
                    e.currentTarget.parentElement.parentElement.childNodes[3].classList.toggle('is-hidden');
                });
            }
        });

        $(document).ready(function(){
            $('[data-toggle="datepicker"]').datepicker({ dateFormat: 'yy-mm-dd' });
        });

        function myPesawat(){

            if($('#checkLangsung').is(':checked')){
               
                var tipetransit = "Langsung";
 
                document.getElementById('#checkTransit').checked = false;
            }
            else if($('#checkTransit').is(':checked')){
                
                var tipetransit = "Transit";
                document.getElementById('#checkLangsung').checked = false;
            }

            console.log(tipetransit);
        } 

        filterSelection("all")
        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("single-toggle-wrapper");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);     
                }
            }
            element.className = arr1.join(" ");
        }

        function showProducts(minPrice, maxPrice) {
            $("#jadwal li").hide().filter(function() {
                    var price = parseInt($(this).data("price"), 10);
                    return price >= minPrice && price <= maxPrice;
                }).show();
            }

            $(function() {
                var options = {
                    range: true,
                    min: 0,
                    max: 10000000,
                    values: [0, 10000000],
                    slide: function(event, ui) {
                        var min = ui.values[0],
                            max = ui.values[1];

                        $("#amount").val("$" + min + " - $" + max);
                        showProducts(min, max);
                    }
                }, min, max;

                $("#slider-range").slider(options);

                min = $("#slider-range").slider("values", 0);
                max = $("#slider-range").slider("values", 1);

                $("#amount").val("Rp." + min + " - Rp." + max);

                showProducts(min, max);
            });
    </script>



    <!-- Core js -->
    <script src="<?php echo base_url() ?>assets/js/core/modernizr.min.js"></script>
    <!-- Plugins js -->
    <script src="<?php echo base_url() ?>assets/js/slick-carousel/slick.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/ggpopover/ggtooltip.js"></script>
    <script src="<?php echo base_url() ?>assets/js/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/datepicker/datepicker.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/easyAutocomplete/jquery.easy-autocomplete.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.simple.timer.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jqdropdown/jquery.dropdown.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chosen/chosen.jquery.min.js"></script>
   
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Bulkit js -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    <!-- Page specific JS -->
    <script src="<?php echo base_url() ?>assets/js/pages/landingv1.js"></script>
    <script src="<?php echo base_url() ?>assets/js/pages/components-range.js"></script>
    <!-- Collapsible -->

</body>
</html>