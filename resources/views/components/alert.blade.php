<div>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/alert.css') }}" />

    @if(session()->has('message'))
        {{$slot}}
        <div class='success'>{{ session()->get('message') }} </div>

    @elseif(session()->has('error'))
        {{$slot}}
        <div class='danger'>{{ session()->get('error') }} </div>
    @endif

    @if($errors->any())
        <div class="danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>