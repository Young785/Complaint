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
            @if (session()->has('msg'))
                <div class="alert alert-success text-center">Complain deleted successfully!</div>
            @endif
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
                        @foreach ($complaint as $item)
                            <div class="alert alert-info clearfix">
                                <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                                <div class="notification-info">
                                    <ul class="clearfix notification-meta">
                                        <li class="pull-left notification-sender"><span><a href="#">{{ $item->name}}</a></span> {{ $item->location}} </li>
                                        <a style="cursor: pointer;" class="fa fa-times pull-right" data-toggle="modal" href="#deleteModal{{ $item->id }}"></a>
                                        <li class="pull-right notification-time">{{ $item->created_at->diffForHumans() }}</li>
                                    </ul>
                                    <p>
                                        {{$item->information}}
                                    </p>
                                </div>
                            </div>
                            <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Delete Complain</h4>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this Complain ?
                                        </div>
                                        <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-default" type="button" style="float: right;">Close</button>
                                            <form action="/conadmin/delete/{{ $item->id }}" style="float: right; margin-right: 20px;">
                                                <button class="btn btn-success" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </div>
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