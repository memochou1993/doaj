@extends('layouts.app')

@section('content')
    @if(!empty($journal))
        <div class="card">
            <div class="card-divider">
                Details
            </div>
            <div class="card-section">
                <div class="grid-x grid-padding-x">
                    @foreach($cores as $core_key => $core_value)
                        <div class="cell medium-3 medium-text-right">
                                {{ $core_key }}
                        </div>
                        <div class="cell medium-9">
                            {{ $journal[$core_value] }}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card-divider">
                <div class="cell text-center">
                    <a href="{{ route('journals.edit', $journal['id']) }}" class="button warning">Edit</a>
                </div>
            </div>
        </div>
    @endif
@endsection