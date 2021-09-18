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
            <div class="col-sm-9">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                       <h4 class="gen-case"> View Message</h4>
                    </header>
                    <div class="panel-body ">

                        <div class="mail-header row">
                            <div class="col-md-8">
                                <h4 class="pull-left">{{ $comp->name}} </h4>
                            </div>
                            <div class="col-md-4">
                                <div class="compose-btn pull-right">
                                    <a href="mail_compose.html" class="btn btn-sm btn-primary"><i class="fa fa-reply"></i> Reply</a>
                                </div>
                            </div>

                        </div>
                        <div class="mail-sender">
                            <div class="row">
                                <div class="col-md-8">
                                    <img src="images/chat-avatar2.jpg" alt="">
                                    <strong>{{ $comp->location }}</strong>
                                </div>
                                <div class="col-md-4">
                                    <p class="date"> {{ $comp->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="view-mail">
                            <p>{{ $comp->information }}</p>                            
                        </div>
                    </div>
                </section>
            </div>
            </div>
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
@include('admin.footer')