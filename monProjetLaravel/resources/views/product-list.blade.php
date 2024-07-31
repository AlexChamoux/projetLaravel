@include('header')

<div class="container">
    <div class="row">
        @for ($i = 0; $i < 10; $i++)
            <div class="col-md-3">
                @include('thumbnail')
            </div>
        @endfor
    </div>
</div>

@include('footer')
