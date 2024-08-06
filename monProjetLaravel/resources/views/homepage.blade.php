@include('header')


<main role="main" class="container">

    @if (isset($error))
        <p style="color: red;">Error: {{ $error }}</p>
    @endif

    @if (!empty($products))
        <ul>
            @foreach ($products as $item)
                <li>{{ $item->name }} - {{ $item->description }}</li>
            @endforeach
        </ul>
    @else
        <p>No data available</p>
    @endif

</main>

@include('footer')


