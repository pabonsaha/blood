@extends('admin.admin_master')

@section('admin')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


            <div class="container mt-5">
                <h2 class="mb-4">All Member List</h2>
                <table class="table table-bordered yajra-datatable">
                    <thead>
                        <tr>
                            {{-- <th>ID</th> --}}
                            <th>Name</th>
                            <th>Blood Group</th>
                            <th>Phone One</th>
                            <th>Phone Two</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Facebook Link</th>
                            <th>Last Blood Donation Date</th>
                            <td></td>
                            
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
            <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
            
            <script type="text/javascript">
              $(function () {
                
                var table = $('.yajra-datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('admin.users.list') }}",
                    columns: [
                        
                        {data: 'name', name: 'name'},
                        {data: 'blood_group', name: 'blood_group'},
                        {data: 'phone_1', name: 'phone_1'},
                        {data: 'phone_2', name: 'phone_2'},
                        {data: 'address', name: 'address'},
                        {data: 'email', name: 'email'},
                        {data: 'fb_link', name: 'fb_link'},
                        {data: 'last_donation_date', name: 'last_donation_date'},
                        
                    ]
                });
                
              });
            </script>


        </div>
    </div>
    
</div>
    



@endsection