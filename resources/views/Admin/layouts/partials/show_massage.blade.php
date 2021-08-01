@if(Session::get('save'))
    <script>
        alertify.set('notifier','position', 'top-center');
        alertify.success('FAQ Save Successfully');
    </script>
@endif

@if(Session::get('update'))
    <script>
        alertify.set('notifier','position', 'top-center');
        alertify.success('FAQ Update Successfully');
    </script>
@endif

@if(Session::get('publish'))
    <script>
        alertify.set('notifier','position', 'top-center');
        alertify.success('FAQ Published Successfully');
    </script>
@endif

@if(Session::get('unPublish'))
    <script>
        alertify.set('notifier','position', 'top-center');
        alertify.warning('FAQ Unpublished Successfully');
    </script>
@endif

@if(Session::get('delete'))
    <script>
        alertify.set('notifier','position', 'top-center');
        alertify.error('FAQ Delete Successfully');
    </script>
@endif

@if(Session::get('error'))
    <script>
        alertify.set('notifier','position', 'top-center');
        alertify.error('FAQ Does not save,This priority already exist!!');
    </script>
@endif