<table id="controlling-query-example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Status</th>
        </tr>
    </thead>
</table>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#controlling-query-example').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                ajax: "{{ route('get_controlling_the_query_attributes_data') }}",
                columns: [
                    { name: 'id' },
                    { name: 'name' },
                    { name: 'mobile' },
                    { name: 'email' },
                    { name: 'gender' },
                    { name: 'active' },
                ],
            });
        });
    </script>
@endpush