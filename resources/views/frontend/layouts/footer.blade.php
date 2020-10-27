<footer class="footer">
    @php
    $settings = \App\Models\Settings::first();
    @endphp
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Follow Us
                        </h3>
                        <ul>
                            <li><a href="{{ $settings->facebook_address }}">Facebook</a></li>
                            <li><a href=" {{ $settings->twitter }}<"> Twitter</a></li>
                            <li><a href="{{ $settings->instagram }}">Instagram</a></li>
                            <li><a href="{{ $settings->youtube }}">Youtube</a></li>

                        </ul>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Links
                        </h3>
                        <ul>
                            <li><a href="service.html">Services</a></li>
                            <li><a href="work.html"> Work</a></li>
                            <li><a href="about.html">About</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Address
                        </h3>
                        <p>
                            {{ $settings->location }} <br>
                            <a target="_blank" href="{{ $settings->email_address }}">{{ $settings->email_address }}</a> <br>
                            <a target="_blank" href="{{ $settings->mobile_address }}">{{ $settings->mobile_address }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://github.com/obaidaattaee" target="_blank">obaida attaee</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
