@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1>Edit Specification</h1>
    <form method="POST" action="{{ route('admin.specifications.update', $specification) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Specification Name</label>
            <input type="text" name="name" class="form-control" value="{{ $specification->name }}" required>
            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-success mt-2">Update</button>
        <a href="{{ route('admin.specifications.index') }}" class="btn btn-secondary mt-2">Back</a>
    </form>
</div>
@endsection
