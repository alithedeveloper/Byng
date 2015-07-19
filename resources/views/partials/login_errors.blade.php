@if (Session::get('errors'))
    @foreach (Session::get('errors')->all() as $error)
        <li>
            <div class="form-errors">
               {{ $error }}
            </div>
        </li>
    @endforeach
@endif