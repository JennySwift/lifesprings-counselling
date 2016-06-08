<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Lifesprings Counselling</title>
    @include('main.shared.head-links')
</head>
<body id="service-page" class="scrollbar-container">

<navbar></navbar>

<div class="text-img-container">
    {{--<div class="cover"></div>--}}
    <div class="text">

        <h1>Service</h1>

        <p>A GP referral is not required to make an appointment.</p>

        <p>Counselling and therapy are available for the following:</p>

        <div class="list">
            <ul>
                <li>Stress management</li>
                <li>Anxiety</li>
                <li>Anger Management</li>
                <li>Grief and Loss</li>
                <li>Trauma recovery</li>
                <li>Identity issues</li>
                <li>Self esteem</li>
                <li>Boundaries</li>
                <li>Life transitions</li>
                <li>Emotional crisis</li>
            </ul>

            <ul>
                <li>Addictions</li>
                <li>Cultural conflicts</li>
                <li>Unhealthy patterns of behaviour</li>
                <li>Relationship counselling</li>
                <li>Marriage counselling</li>
                <li>Pre-marriage counselling</li>
                <li>Separation and divorce recovery</li>
                <li>Communication</li>
                <li>Conflict resolution</li>
            </ul>
        </div>

        <p>Fees are charged at the following rates:</p>

        <ul>
            <li>Individual sessions  $80 (50 minutes)</li>
            <li>Couple sessions  $120 (80 minutes)</li>
        </ul>

        <p>Concessions are available for full time students and those genuinely in need.</p>

        <p>Please note that Medicare rebates are not available for counselling.</p>

        <p>The cost of this service will typically be around the same or lower than the out of pocket cost (gap) of seeing a psychologist under Medicare.</p>

    </div>

    <div class="img-container">
        {{--<img src="/img/forest.jpg">--}}
        <img class="smaller-screens" src="/img/river.jpg">
        <img class="bigger-screens" src="/img/natural.jpg">
    </div>
</div>



@include('main.shared.footer')

</body>
</html>