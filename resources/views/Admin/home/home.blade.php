<x-admin.admin_master>

    <x-slot name="title">
        Dashboard
    </x-slot>

    <h1 class="page-header">Dashboard</h1>

    <!-- /.col-lg-12 -->
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div style="font-size: 18px">Total FAQs</div>
                            <div class="huge">{{$count}}</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('/manage_faq')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-admin.admin_master>