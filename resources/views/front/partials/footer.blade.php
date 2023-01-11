<!-- footer -->
<!-- download calendars -->

    <div class="cl-dld-footer">
        <div class="container">
            <div class="cl-dld-fc">
                <h5>Download Training Calendar</h5>
                    <a class="btn btn-success" href="">
                        <span class="fa fa-file-pdf-o"></span> 2023 Calendar
                    </a>
            </div>
        </div>
    </div>

<!-- truly-african -->
<span class="truly-african"></span>
<div class="ires-footer">
    <div class="container">
        <!-- main footer elements -->
        <div class="row">
            <div class="ires-footer-content col-sm-3">
                <h4>Contact Us</h4>
                <div class="ires-f-col-1">

                        <div class="ires-f-contact">
                            <p>Kamukina KG 501 Gate<br>Kigali, Rwanda<br>
                            <a href="tel:+250789621067">(+250) 789 621 067</a><br>
                            <a href="mailto:outreach.rwanda@indepthresearch.org">outreach.rwanda@indepthresearch.org</a></p>
                        </div>

                        <div class="ires-f-contact">
                            <p>Njema Court, Suite R2<br>
                            Rhapta Road, Westlands<br>
                            <a href="tel:+254715077817">(+254) 715 077 817</a><br>
                            or <a href="tel:+254792516000">(+254) 792 516 000</a><br>
                            <a href="mailto:outreach@indepthresearch.org">outreach@indepthresearch.org</a></p>
                        </div>

                    <span class="bc-btn bc-btn-ftr">
                        <a class="btn" href="">Become a Trainer</a>
                    </span>
                </div>
            </div>

            <div class="ires-footer-content col-sm-3">
                <h4>Training Calendar</h4>
                <div class="ires-f-col-3">
                    <div class="ires-f-training">
                        <ul>
                            <li>
                                <a href="">
                                    Training Calendar Year
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Training Calendar Year
                                </a>
                            </li>
                            <li>
                                <a  href="">
                                    5-Day Training Courses
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    10-Day Training Courses
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="ires-footer-content col-sm-3">
                <h4>Company</h4>
                <div class="ires-f-col-2">
                    <div class="ires-f-company">
                        <ul>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="#">Consultancy Services</a></li>
                            <li><a href="#">Training Courses</a></li>
                            <li><a href="#">Industry Insights</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="ires-footer-content col-sm-3">
                <h4> Who we are?</h4>
                <div class="ires-f-col-4">
                    <div class="ires-f-about">
                        <p>
IRES has a firm belief that every organization has a unique purpose only they can fulfil in this world. We work with you in organizing your resources to exploit opportunities so that you can fulfil your purpose and realize full potential.</p>
                    <span class="bc-btn bc-btn-ftr">
                        <a class="btn" href="/about">Read More</a>
                    </span>
                    </div>
                    <div class="ires-f-social">
                        <a class="fb" href="https://www.facebook.com/indepthresearch" target="_blank" title="Follow us on Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a class="tw" href="https://twitter.com/Indepthresearch" target="_blank" title="Follow us on Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a class="in" href="https://www.linkedin.com/company/indepth-research-services" target="_blank" title="Follow us on LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a class="fl" href="https://www.flickr.com/photos/indepthresearch" target="_blank" title="Follow us on Flickr"><i class="fa fa-flickr" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <!-- footer bottom credits -->
        <div class="copyrights">
            <hr/>
            <div class="row">
                <div class="col-sm-8">
                    <small>
                        &copy; <span id="currentYear"></span>. Indepth Research Institute. All Rights Reserved.
                        <br>Powered by <a href="https://rdfyne.com" target="_blank" class="RT">Rdfyne Technologies</a>
                    </small>
                </div>
                <div class="legal col-sm-4">
                    <small>
                        <span><a href="#">Privacy</a></span>
                        <span class="c-sep"></span>
                        <span><a href="#">Terms</a></span>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END footer -->

<!-- fixed header on scroll -->
<script>
    window.onscroll = function() {myFunction()};

var header = document.getElementById("stickyMainNav");
var sticky = header.offsetTop;

function myFunction() {
if (window.pageYOffset > sticky) {
header.classList.add("sticky-main-nav");
} else {
header.classList.remove("sticky-main-nav");
}
}
</script>
<!-- END fixed header on scroll -->

<!-- current year -->
<script type="text/javascript">
    document.getElementById("currentYear").innerHTML = new Date().getFullYear();
</script>
<!-- END current year -->

<!-- tour testimonials -->
<script type="text/javascript">
    $(document).ready(function() {
        $(".testimonial-carousel").slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            arrows: true,
            prevArrow: $(".testimonial-carousel-controls .prev"),
            nextArrow: $(".testimonial-carousel-controls .next")
        });
    });
</script>
<!-- END tour testimonials -->

<!-- bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{ asset('front/assets/bootstrap/js/bootstrap.min.js') }}" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- slick carousel JS -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('front/assets/slick/slick.min.js') }}"></script>

@stack('script')
