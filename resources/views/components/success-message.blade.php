@if(session()->has('success'))
    <style>
        .flash-success{
            margin-top: 5px;
            text-align: center;
            width: 12rem;
            background:green 50%;
            color: white;
            padding: 3px 3px 3px 3px;
            border-radius: 10px;
            font-size:10px;
            margin:0 auto;
        }
    </style>
    
    <div class="flash-success">
        <p>{{ session('success') }}</p>
    </div>
@endif