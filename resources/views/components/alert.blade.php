<div>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/alert.css') }}" />

    @if(session()->has('message'))
        {{$slot}}
        <div class='success'>
            <ul>
                <li>
                    {{ session()->get('message') }}
                </li>
            </ul>
        </div>

    @elseif(session()->has('error'))
        {{$slot}}
        <div class='danger'>
            <ul>
                <li>
                    {{ session()->get('error') }} 
                </li>
            </ul>
        </div>
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