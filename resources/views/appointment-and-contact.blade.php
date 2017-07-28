<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Lifesprings Counselling</title>
    @include('main.shared.head-links')
</head>
<body id="appointment-and-contact-page" class="">

<div class="main">
    <div class="navbar-text-container-container">
        <div class="navbar-text-container">
            <div class="text-container scrollbar-container">
                <navbar></navbar>
                <div class="text">

                    <h1 class="">
                        <div>To make an appointment call Dina on</div>
                        <div><a href="tel:0414440727">&#48;&#52;&#49;&#52; &#52;&#52;&#48; &#55;&#50;&#55;</a>.</div>
                    </h1>

                    {{--<h1 class="smaller-screens">--}}
                        {{--<span>To make an appointment call Dina on</span>--}}
                        {{--<span><a href="tel:0414440727">&#48;&#52;&#49;&#52; &#52;&#52;&#48; &#55;&#50;&#55;</a>.</span>--}}
                    {{--</h1>--}}

                    {{--<h1 class="bigger-screens">To make an appointment call Dina on <a href="tel:0414440727">&#48;&#52;&#49;&#52; &#52;&#52;&#48; &#55;&#50;&#55;</a>.</h1>--}}

                    <p>Appointments are available at Waterloo or Ramsgate as follows:</p>

                    <div class="time">
                        <p><span class="bold">Tuesdays and Thursdays</span> (12pm-7:30pm last appointment)</p>
                        <p>Location:  20/198-222 Young Street, Waterloo (inner Sydney) <a target="_blank" href="https://www.google.com.au/maps/place/20%2F198-222+Young+St,+Waterloo+NSW+2017">Map</a></p>
                    </div>

                    <div class="time">
                        <p><span class="bold">Wednesday</span> (1-8pm last appointment)</p>
                        <p>Location:  245 Rocky Point Road, Ramsgate (south Sydney)</p>
                        <p>
                            <a target="_blank" href="https://www.google.com.au/maps/place/245+Rocky+Point+Rd,+Ramsgate+NSW+2217">Map</a></p>
                    </div>
                </div>

                <div class="img-container">
                    <img src="/img/waterfall.jpg">
                </div>

            </div>
        </div>
    </div>


</div>

@include('main.shared.footer')
</body>
</html>