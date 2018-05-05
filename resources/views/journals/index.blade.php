@extends('layouts.app')

@section('content')
    <div class="grid-x grid-margin-x">
        <table class="stack hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Creator</th>
                    <th>Contributor</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($journals as $journal)
                    <tr>
                        <td>{{ $journal['title'] }}</td>
                        <td>{{ $journal['creator'] }}</td>
                        <td>{{ $journal['contributor'] }}</td>
                        <td class="middle text-center">
                            <a class="button secondary" href="{{ route('journals.show', $journal['id']) }}">Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection