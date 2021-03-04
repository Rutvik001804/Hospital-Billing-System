<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient History</title>
    <script src="{{URL::asset('s_jquery.js')}}"></script>
    <script src="{{URL::asset('s_bootstrap.js')}}"></script>
    @include('layouts.head_files')
</head>
<body class="goto-here">
    @include('layouts.header')
    @include('layouts.showhistory')
    @include('layouts.footer')
</body>
</html>