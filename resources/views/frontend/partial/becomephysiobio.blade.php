@extends('frontend.partial.master')

@section('content')
<div class="container">
    <div class="row profile-docacc-main">
        <div class="col-4">
            <div class="blue-tick-main">
                <img class="acc-docter-img" src="{{ asset('frontend/img/doctor-3.png') }}" alt="">
                <img class="blue-tick-img" src="{{ asset('frontend/img/blue-tick.png') }}" alt="">
            </div>
            <h4 class="do-name-bio">Dr. Yikine Linka</h4>
            <div class="twi-insta-accidmain">
                <span class="twitter-accid"><i class="fa-brands fa-x-twitter"></i> dr.Yinke.linka</span>
                <span class="insta-accid"><i class="fa-brands fa-instagram"></i> dr_Yinke_linka</span>
            </div>
            <div class="acc-followers-main">
                <p><span>11k</span> Followers</p>
                <p><span>20</span>  Following</p>
            </div>
            <div class="follow-btnmain">
                <a href="#" class="follow-profile-main">Follow</a>
                <a href="#" class="profile-upload-btn"> <i class="fa-solid fa-cloud-arrow-up"></i> Upload</a>
            </div>
        </div>
        <div class="col-8">
              <iframe width="100%" height="350" src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- doctor account  detail  end -->
<!-- bio detail  doctor start  -->
        <div class="container">
            <div class="row education-detail-bg">
                <div class="col-4">
                    <div class="education-cap-detail">
                        <img src="{{ asset('frontend/img/user-cap.png') }}" alt=""> <h4>Education Details</h4>
                    </div>
                        <ul class="do-education-detail">
                            <li><i class="fa-solid fa-chevron-right"></i>Graduate in Physiotherapy</li>
                            <li><i class="fa-solid fa-chevron-right"></i>Professional Degree in Physiology</li>
                            <li><i class="fa-solid fa-chevron-right"></i>Snt. Xaviour Schools</li>
                        </ul>
                </div>
                <div class="col-4">
                    <div class="education-cap-detail">
                        <img src="{{ asset('frontend/img/user-bag.png') }}" alt="">
                        <h4> Professional Details </h4>
                    </div>
                    <ul class="do-education-detail">
                        <li><i class="fa-solid fa-chevron-right"></i>Physiotherapist at Herodicus </li>
                        <li><i class="fa-solid fa-chevron-right"></i>3 - Years of clinical experience</li>
                    </ul>
                </div>
                <div class="col-4">
                    <div class="education-cap-detail">
                        <img src="{{ asset('frontend/img/user-headphone.png') }}" alt="">
                        <h4> Services</h4>
                    </div>
                    <a href="#" class="service-boibtn">injury prevention</a>
                    <a href="#" class="service-boibtn">Surgical Bandage</a>
                    <a href="#" class="service-boibtn">Bedsore</a>
                    <a href="#" class="service-boibtn">Antimicrobial</a>
                    <a href="#" class="service-boibtn">VAC</a>
                    <a href="#" class="service-boibtn">Wound Dressing</a>
                </div>
            </div>
        </div>
<!-- bio detail  doctor end  -->

<!-- video  column auto  adjust  demo  start  -->
<div class="container">
    <div class="mansory-box-bgmain">
        <div class="msrItems">
            <div class="itm1 msrItem">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="itm2 msrItem">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="itm3 msrItem">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="itm4 msrItem">
                <iframe width="100%" height="350" src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="itm5 msrItem">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="itm6 msrItem">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="itm7 msrItem">
                <iframe width="100%" height="150" src="https://www.youtube.com/embed/FOF71Lb5SkA?si=tl7qhKaRgTczwDtV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
