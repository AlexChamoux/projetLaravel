@include('header')


<main role="main" class="container">

    @if (isset($error))
        <p style="color: red;">Error: {{ $error }}</p>
    @endif

    @if (!empty($categories))
        @foreach($categories as $categorie )
                {{$categorie-> name_category}}

        <ul>
            @foreach ($categorie->products as $item)
{{--                @dd($categories)--}}
                <li>{{ $item->name }} - {{ $item->description }}</li>
            @endforeach
            @endforeach
        </ul>
{{--                @foreach ($categorie as $key)--}}
{{--                    --}}{{--                @dd($categories)--}}
{{--                    <li>{{ $key->name }} - {{ $key->description }}</li>--}}
{{--                @endforeach--}}
    @else
        <p>No data available</p>
    @endif

</main>

@include('footer')


