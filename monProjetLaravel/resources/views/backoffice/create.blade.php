@extends('layouts.backoffice')

@section('title', 'Add Product')

@section('content')
    <h1>Add Product</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('backoffice.store') }}" method="POST">
        @csrf
        @include('backoffice.form')
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
