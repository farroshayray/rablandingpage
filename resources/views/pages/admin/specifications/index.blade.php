@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h1>Specifications</h1>
    <a href="{{ route('admin.specifications.create') }}" class="btn btn-primary mb-3">+ Add Specification</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th class="w-[5%]">#</th>
                <th class="w-[50%]">Name</th>
                <th class="w-[10%]">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($specifications as $specification)
                <tr>
                    <td>{{ ($specifications->currentPage() - 1) * $specifications->perPage() + $loop->iteration }}</td>
                    <td>{{ $specification->name }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.specifications.edit', $specification) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.specifications.destroy', $specification) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this specification?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $specifications->links() }}
    </div>
</div>
@endsection
