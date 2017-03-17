@if(session('status'))
    <script>
        $.notify({
            message: '{{ session('status') }}'
        }, {
            type: 'success',
            z_index: 9999999
        });
    </script>
@elseif (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif