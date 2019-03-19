<table id="ordering-example" class="display" style="width:100%">
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
            $('#ordering-example').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                searching: false,
                ajax: "{{ route('ordering') }}",
                columns: [
                    { name: 'name' },
                    { name: 'mobile' },
                    { name: 'email' },
                    { name: 'gender' },
                ]
            });
        });
    </script>
@endpush