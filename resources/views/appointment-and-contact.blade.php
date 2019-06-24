<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Lifesprings Counselling</title>
    @include('main.shared.head-links')
</head>
<body id="appointment-and-contact-page" class="">

<div id="app" class="main">
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

                    <p>Appointments are available at Rockdale and Waterloo as follows:</p>

                    <div class="time">
                        <p><span class="bold">Tuesdays (morning and afternoon)</span></p>
                        <p>Location: 4/39-45 George Street, Rockdale <a target="_blank" href="https://www.google.com.au/maps/place/4%2F39-45+George+St,+Rockdale+NSW+2216/@-33.9518246,151.1382017,17z/data=!3m1!4b1!4m5!3m4!1s0x6b12b0aa9debfd17:0xebce859f78e8dccf!8m2!3d-33.9518246!4d151.1403904?dcr=0">Map</a></p>

                    </div>

                    <div class="time">
                        <p><span class="bold">Wednesdays and Thursdays (afternoon and evening)</span></p>
                        <p>Location: 20/198-222 Young Street, Waterloo <a target="_blank" href="https://www.google.com.au/maps/place/198%2F222+Young+St,+Waterloo+NSW+2017/@-33.8997928,151.2062749,17z/data=!3m1!4b1!4m5!3m4!1s0x6b12b1c2c8d009c1:0x48f72a920ef52fd3!8m2!3d-33.8997928!4d151.2084636?dcr=0">Map</a></p>
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