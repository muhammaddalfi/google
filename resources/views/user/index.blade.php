@extends('layouts.index')

@section('content')
<div class="content-wrapper">

    <!-- Content area -->
    <div class="content">
        <!-- Dashboard content -->
        <div class="row">
            <div class="col-lg-6    ">
               <!-- Basic datatable -->
               <div class="card shadow-sm p-3 rounded">
                <div class="card-body">
                    <a href='#' class="btn btn-teal pt-40" data-toggle="modal" data-target="#modal_user">Create a user</a>
                </div>
                   <table class="table user">
                       <thead>
                           <tr>
                               <th>No</th>
                               <th>Email</th>
                               <th>Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                       </tbody>
                   </table>
               </div>
               <!-- /basic datatable -->
            </div>
       </div>
        <!-- /dashboard content -->
    </div>
    <!-- /content area -->

</div>    
@include('user.modals.create')
@endsection

@push('js')
<script src="{{ asset('assets/js/plugins/forms/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/forms/validation/validate.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/forms/jquery_ui/widgets.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/forms/jquery_ui/effects.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/notifications/sweet_alert.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/datatables.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/forms/moment/moment.min.js')}}"></script>
<script src="{{ asset('assets/js/user/user.js')}}"></script>
@endpush