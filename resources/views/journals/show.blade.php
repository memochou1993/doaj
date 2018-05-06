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
        </div>

        <div class="grid-x grid-padding-x">
            <div class="medium-3 medium-offset-3 cell">
                <div class="text-center">
                    <a href="{{ route('journals.edit', $journal['id']) }}" class="button warning">Edit</a>
                </div>
            </div>
            <div class="medium-3 cell">
                <div class="text-center">
                    <form action="{{ route('journals.destroy', $journal['id']) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
    
                        <button type="submit" class="button alert">Delele</button>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endsection