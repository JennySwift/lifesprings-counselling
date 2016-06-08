<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Lifesprings Counselling</title>
    @include('main.shared.head-links')
</head>
<body id="appointment-and-contact-page" class="scrollbar-container">

<navbar></navbar>

<div class="img-container">
    <img src="/img/waterfall.jpg">
</div>

{{--<div class="cover"></div>--}}
<div class="text">
    <h1>Appointment and Contact</h1>

    <p>Appointments are available at Waterloo or Ramsgate as follows:</p>

    <div class="time">
        <p><span class="bold">Tuesdays and Thursdays</span> (12pm-7:30pm last appointment)</p>
        <p>Location:  20/198-222 Young Street, Waterloo (inner Sydney)</p>
    </div>

    <div class="time">
        <p><span class="bold">Wednesday</span> (5- 8 pm last appointment)</p>
        <p>Location:  245 Rocky Point Road, Ramsgate (south Sydney)</p>
    </div>

    <h2>To make an appointment call Dina on 0414 440 727.</h2>
</div>



@include('main.shared.footer')

</body>
</html>