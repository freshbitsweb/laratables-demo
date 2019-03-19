<table id="searching-example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
    </thead>
</table>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#searching-example').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                ajax: "{{ route('searching') }}",
                columns: [
                    { name: 'name', orderable: false},
                    { name: 'mobile', orderable: false},
                    { name: 'email', orderable: false},
                    { name: 'gender', orderable: false},
                ]
            });
        });
    </script>
@endpush