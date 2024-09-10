@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Delete Currency') }}</div>

                <div class="card-body">
                    <p>Are you sure you want to delete the currency: <strong>{{ $currency->name }}</strong>?</p>

                    <form action="{{ route('currency.destroy', $currency->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="form-group">
                            <a href="{{ route('currency.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
