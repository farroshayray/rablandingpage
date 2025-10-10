@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1>Add Specification</h1>
    <form method="POST" action="{{ route('admin.specifications.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Specification Name</label>
            <input type="text" name="name" class="form-control" required>
            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-2">Save</button>
        <a href="{{ route('admin.specifications.index') }}" class="btn btn-secondary mt-2">Back</a>
    </form>
</div>
@endsection
