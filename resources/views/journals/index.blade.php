@extends('layouts.app')

@section('content')
    <div class="grid-x grid-margin-x">
        <table class="stack hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Creator</th>
                    <th>Subject</th>
                    <th>Publisher</th>
                    <th>Date</th>
                    <th class="middle text-center">
                        <a href="{{ route('journals.create') }}" class="button primary">Create</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($journals as $journal)
                    <tr>
                        <td>{{ $journal['title'] }}</td>
                        <td>{{ $journal['creator'] }}</td>
                        <td>{{ $journal['subject'] }}</td>
                        <td>{{ $journal['publisher'] }}</td>
                        <td>{{ $journal['date'] }}</td>
                        <td class="middle text-center">
                            <a class="button secondary" href="{{ route('journals.show', $journal['id']) }}">Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection