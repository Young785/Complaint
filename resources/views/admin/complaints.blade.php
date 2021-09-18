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
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                       <h4 class="gen-case">Complaint ({{ count($complaint)}})
                        <form action="#" class="pull-right mail-src-position">
                            <div class="input-append">
                                <input type="text" class="form-control " placeholder="Search Mail">
                            </div>
                        </form>
                       </h4>
                    </header>
                    <div class="panel-body minimal">
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Location</th>
                                        <th>Information</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                        <tbody>
                                            @php
                                                for ($i=0; $i < count($complaint); $i++) {}
                                            @endphp 
                                            @foreach ($complaint as $item)
                                                <tr class="unread">
                                                   <td>{{ $i++ }}</td>
                                                    <td class="view-message">{{ $item->name}}</td>
                                                    <td>
                                                        @if ($item->location > 10)
                                                            {{ Str::substr($item->location, 0, 20, '...' )}}
                                                            @else
                                                            {{ $item->location }}
                                                        @endif
                                                    </td>
                                                    <td class="view-message ">
                                                        @if ($item->information > 20)
                                                            {{ Str::substr($item->information, 0, 30, '...' )}}
                                                            @else
                                                            {{ $item->information }}
                                                        @endif
                                                    <td class="view-message">{{ $item->created_at->diffForHumans() }}</td>
                                                    <td class="view-message ">
                                                        <a class="btn btn-success" href="/conadmin/complaint/{{ $item->id }}" style="color: white;">Show Complain</a>
                                                    </td>
                                                    <td class="view-message ">
                                                        <a class="btn btn-danger" data-toggle="modal" href="#deleteModal{{ $item->id }}" style="color: white;">Delete</a>
                                                    </td>
                                                </tr>
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
                                                                <button data-dismiss="modal" class="btn btn-default" type="button" style="float: right; margin-left: 20px;">Close</button>
                                                                <form action="/conadmin/delete/{{ $item->id }}" style="float: right; margin-right: 20px;">
                                                                    <button class="btn btn-success" type="submit">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </table>
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