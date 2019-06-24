<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
</script>


<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic,700,700italic|Annie+Use+Your+Telescope|Architects+Daughter|Varela+Round' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="{{ mix('/css/app.css') }}">