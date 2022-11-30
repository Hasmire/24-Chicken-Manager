@if ($errors->any())
    <div class="" style="color:red;text-align:center;padding:0;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif