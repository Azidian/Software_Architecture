@extends('layouts.app')

@section('title', 'Human List')
@section('subtitle', 'Humans ordered by aura amount')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Registered Aura Farmers</h5>
        <a href="{{ route('human.create') }}" class="btn btn-sm btn-light">New Human</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped align-middle mb-0">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Aura Amount</th>
                    <th scope="col">Hierarchy</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($viewData['humans'] as $human)
                    <tr>
                        <td>{{ $human->getId() }}</td>
                        <td>
                            {{ $human->getName() }}
                            @if ($human->getHierarchy() === 'legendary')
                                <span class="badge bg-warning text-dark ms-2">Boff</span>
                            @endif
                        </td>
                        <td>
                            @if ($human->getHierarchy() === 'common')
                                <span class="text-primary fw-bold">{{ $human->getAura() }}</span>
                            @else
                                {{ $human->getAura() }}
                            @endif
                        </td>
                        <td>{{ $human->getHierarchy() }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">No humans registered in the database.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection