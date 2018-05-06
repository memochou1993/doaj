@extends('layouts.app')

@section('content')
    <form action="{{ route('journals.store') }}" method="POST">
        <div class="card">
            <div class="card-divider">
                Edit Details
            </div>
            <div class="card-section">
                {{ csrf_field() }}

                <div class="grid-x grid-padding-x">
                    @foreach($cores as $core_key => $core_value)
                        <div class="cell medium-3 medium-text-right">
                            <label>{{ $core_key }}</label>
                        </div>
                        <div class="cell medium-9">
                            <input type="text" name="{{ $core_value }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="text-center">
            <input type="submit" class="button success" value="Save">
        </div>
    </form>
@endsection