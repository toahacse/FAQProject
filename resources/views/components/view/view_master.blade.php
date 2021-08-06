<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$title}}</title>
    <link rel="icon" href="{{ asset('/') }}view/img/favicon.ico">

    {{--Styles file included--}}
    @include('view.layouts.partials.style')


</head>

<body class="full_body">

<div class="container">

    {{--Header file included--}}
    @include('view.layouts.partials.header')


    <div class="row tob_bar">
        <div class="col-md-12 text-center mb-4 mt-4">
            <h1 class="my_h1"> <span class="type"></span></h1>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <input type="text" id="search" class="form-control search_form"
                   placeholder="&#xf002; Search for questions...">
        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="row my_content">
        <div class="col-md-12">
            <div class="container">
                <div class="row" style="margin-top: 30px">

                    {{--Sidebar included--}}
                    @include('view.layouts.partials.sidebar')

                    {{--Main Component Body--}}
                    {{$slot}}

                </div>
            </div>
        </div>
    </div>

    {{--Footer included--}}
    @include('view.layouts.partials.footer')

</div>

{{--Scripts file included--}}
@include('view.layouts.partials.script')

</body>
</html>