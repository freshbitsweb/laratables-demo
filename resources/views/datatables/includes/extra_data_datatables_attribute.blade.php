<table id="extra-data-example" class="display" style="width:100%">
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
            $('#extra-data-example').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                searching: false,
                ajax: "{{ route('extra-data') }}",
                columns: [
                    { name: 'id', orderable: false },
                    { name: 'name', orderable: false },
                    { name: 'mobile', orderable: false },
                    { name: 'email', orderable: false },
                    { name: 'gender', orderable: false },
                    { name: 'active', orderable: false },
                ],
            });
        });
    </script>
@endpush