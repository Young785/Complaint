@section('title', 'Complaint - Dashboard')
@include('admin.header')
<body>
<section id="container" >
    @include('admin.nav')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-md-3">
                <div class="mini-stat clearfix">
                    <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                    <div class="mini-stat-info">
                        <span>{{ count($complaint) }}</span>
                        Total Complain
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--notification start-->
                <section class="panel">
                    <header class="panel-heading">
                        Latest Complain <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                    </header>

                    <div class="panel-body">
                        @foreach ($comps as $item)
                            <div class="alert alert-info clearfix">
                                <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                                <div class="notification-info">
                                    <ul class="clearfix notification-meta">
                                        <li class="pull-left notification-sender"><span><a href="#">{{ $item->name}}</a></span> {{ $item->location}} </li>
                                        <li class="pull-right notification-time">{{ $item->created_at->diffForHumans() }}</li>
                                    </ul>
                                    <p>
                                        {{$item->information}}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
                <!--notification end-->
            </div>
            </div>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->

@include('admin.footer')