<table id="custom-column-example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Country</th>
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
                ajax: "{{ route('get_custom_column_attributes_data') }}",
                columns: [
                    { name: 'name' },
                    { name: 'mobile' },
                    { name: 'email' },
                    { name: 'gender' },
                    { name: 'country' },
                    { name: 'action', orderable: false, searchable: false }
                ]
            });
        });
    </script>
@endpush