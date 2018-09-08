@push('styles')
    <style>
        #extra-data-datatables-attributes tbody tr {
            cursor: pointer;
        }
    </style>
@endpush
<table id="extra-data-datatables-attributes" class="display" style="width:100%">
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
            $('#extra-data-datatables-attributes').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                ajax: "{{ route('get_extra_data_datatables_attributes_data') }}",
                columns: [
                    { name: 'id' },
                    { name: 'name' },
                    { name: 'mobile' },
                    { name: 'email' },
                    { name: 'gender' },
                    { name: 'active' },
                ],
            });

            $('#extra-data-datatables-attributes').on('click', 'tr', function () {
                alert('Clicked row id is: ' + $(this).data('id'));
            });
        });
    </script>
@endpush