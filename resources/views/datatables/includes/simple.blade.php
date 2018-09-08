<table id="simple-datatable-example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Country</th>
        </tr>
    </thead>
</table>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#simple-datatable-example').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                ajax: "{{ route('simple_datatables_users_data') }}",
                columns: [
                    { name: 'first_name' },
                    { name: 'last_name' },
                    { name: 'mobile' },
                    { name: 'email' },
                    { name: 'gender' },
                    { name: 'country' }
                ],
            });
        });
    </script>
@endpush