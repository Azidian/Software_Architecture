@extends('layouts.app')

@section('title', 'Human Battle')
@section('subtitle', 'Aura farming confrontation between the first two humans')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-danger text-white">
        <h5 class="mb-0">Battle Arena</h5>
    </div>
    <div class="card-body">
        @if (count($viewData['humans']) < 2)
            <div class="alert alert-warning text-center mb-0">
                At least two humans are required in the database to start a battle.
            </div>
        @else
            <div class="row text-center mb-4 align-items-center">
                <div class="col-md-5">
                    <div class="border rounded p-4 bg-light shadow-sm">
                        <h4 class="text-primary">{{ $viewData['humans'][0]->getName() }}</h4>
                        <p class="display-6 my-2">{{ $viewData['humans'][0]->getAura() }} Aura</p>
                        <span class="badge bg-secondary text-uppercase">{{ $viewData['humans'][0]->getHierarchy() }}</span>
                    </div>
                </div>

                <div class="col-md-2 my-3 my-md-0">
                    <span class="fs-1 fw-bold text-danger">VS</span>
                </div>

                <div class="col-md-5">
                    <div class="border rounded p-4 bg-light shadow-sm">
                        <h4 class="text-primary">{{ $viewData['humans'][1]->getName() }}</h4>
                        <p class="display-6 my-2">{{ $viewData['humans'][1]->getAura() }} Aura</p>
                        <span class="badge bg-secondary text-uppercase">{{ $viewData['humans'][1]->getHierarchy() }}</span>
                    </div>
                </div>
            </div>

            <div class="alert alert-info text-center shadow-sm mb-0">
                <h4 class="alert-heading">Confrontation Result</h4>
                @if ($viewData['humans'][0]->getAura() > $viewData['humans'][1]->getAura())
                    <p class="fs-5 mb-0">
                        Would win the aura farming battle: <strong>{{ $viewData['humans'][0]->getName() }}</strong>
                    </p>
                @elseif ($viewData['humans'][1]->getAura() > $viewData['humans'][0]->getAura())
                    <p class="fs-5 mb-0">
                        Would win the aura farming battle: <strong>{{ $viewData['humans'][1]->getName() }}</strong>
                    </p>
                @else
                    <p class="fs-5 mb-0">
                        There is a tie in the aura farming battle!
                    </p>
                @endif
            </div>
        @endif
    </div>
</div>
@endsection