<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{asset('/')}}admin//vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('/')}}admin//vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>



<script>

    jQuery("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        jQuery(".my_accordian button").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

        });
    });


    var typed = new Typed('.type', {
        strings: ['Have any questions?'],
        typeSpeed: 200,
        loop: true,
    });

</script>


{{--<script>--}}

{{--$(function () {--}}
{{--$('#search').keyup(function () {--}}
{{--var search_faq = $(this).val();--}}

{{--$.ajax({--}}
{{--url: "{{ url('/search-faq/') }}/"+search_faq,--}}
{{--success: function(result){--}}

{{--console.log(result);--}}
{{--}--}}

{{--});--}}
{{--})--}}
{{--})--}}

{{--</script>--}}
