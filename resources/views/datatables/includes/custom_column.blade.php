<table id="custom-column-example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>
</table>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#custom-column-example').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                searching: false,
                ajax: "{{ route('custom-column') }}",
                columns: [
                    { name: 'name', orderable: false},
                    { name: 'mobile', orderable: false},
                    { name: 'email', orderable: false},
                    { name: 'gender', orderable: false},
                    { name: 'action', orderable: false }
                ]
            });
        });
    </script>
@endpush