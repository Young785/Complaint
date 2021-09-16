@section('title', 'Complaint - My Profile')
@include('admin.header')
<body>
<section id="container" >
    @include('admin.nav')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-md-8">
                <section class="panel">
                    <div class="panel-body profile-information">
                       <div class="col-md-4">
                           <div class="profile-pic text-center">
                               <img src="/admin/images/lock_thumb.jpg" alt="">
                           </div>
                       </div>
                       <div class="col-md-8">
                           <div class="profile-desk">
                               <h1>Ayomikun</h1>
                               <span class="text-muted">ayomikunariyo@gmail.com</span>
                               <p style="width: 100%">Position: Admin</p>
                               <a href="/" class="btn btn-primary">Go back home</a>
                           </div>
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