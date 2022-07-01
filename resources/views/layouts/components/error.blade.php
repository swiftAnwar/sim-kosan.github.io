@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-rounded">
            {{ $error }}
        </div>
    @endforeach
@endif