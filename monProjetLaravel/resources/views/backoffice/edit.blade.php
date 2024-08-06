@extends('layouts.backoffice')

@section('title', 'Edit Product')

@section('content')
    <h1>Edit Product</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('backoffice.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('backoffice.form', ['product' => $product])
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
