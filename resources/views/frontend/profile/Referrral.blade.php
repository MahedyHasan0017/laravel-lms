@extends('layouts.app')

@section('home_content')

<section class="page-header">
    <!-- Your page header content -->
</section>

<section class="page-wrapper edutim-course-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-course-details">
                    <h4 class="course-title mb-4">Data Table</h4>
                    <div class="table-responsive">
                        <table class="table" id="data-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop

@section('scripts')
<script>
    $(document).ready(function() {
        $('#data-table').DataTable({
            processing: true,
            serverSide: false, // Set to false since we're not fetching data from the server
            data: [
                { "name": "John Doe", "email": "john@example.com", "phone": "123456789" },
                { "name": "Jane Smith", "email": "jane@example.com", "phone": "987654321" }
                // Add more rows as needed
            ],
            columns: [
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'phone', name: 'phone' }
            ]
        });
    });
</script>
@endsection
