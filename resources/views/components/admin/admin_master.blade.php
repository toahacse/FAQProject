<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{$title}}</title>
    <link rel="icon" href="{{ asset('/') }}view/img/favicon.ico">
    {{--Styles file included--}}
    @include('admin.layouts.partials.style')

</head>

<body>

<div id="wrapper">
    {{--Navbar included--}}
    @include('admin.layouts.partials.navbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col--12">

                {{--Main Component Body--}}
                {{$slot}}

            </div>
        </div>
    </div>

</div>
{{--Scripts file included--}}
@include('admin.layouts.partials.script')

</body>
</html>


