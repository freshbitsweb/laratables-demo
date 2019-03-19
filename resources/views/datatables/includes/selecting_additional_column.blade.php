<table id="selecting-additional-column-example" class="display" style="width:100%">
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
            $('#selecting-additional-column-example').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                searching: false,
                ajax: "{{ route('selecting-additional-column') }}",
                columns: [
                    { name: 'name', orderable: false },
                    { name: 'mobile', orderable: false },
                    { name: 'email', orderable: false },
                    { name: 'gender', orderable: false },
                ]
            });
        });
    </script>
@endpush