@extends('layouts.app')

@section('title', 'Liste des spectacles')

@section('scripts')
<script>/* alert('ok'); */</script>
@endsection

@section('content')
@if($shows->isNotEmpty())
<table>
    <thead>
        <tr>
            <th>TITLE</th>
        </tr>
    </thead>
    <tbody>
        @foreach($shows as $show)
        <tr>
            <td>
                {{ Form::open([
                    'url'=>'shows/' . $show->id,
                    'method'=>'delete',
                    'action'=>'ShowController@destroy',
                ]) }}
                <button><i class="fa fa-times"></i></button>
                {!! Form::close() !!}
            </td>
            <td><a href="shows/{{ $show->id }}">{{ $show->title }}</a></td>
            <td><img src="{{ $show->poster_url }}" alt="{{ $show->title }}"></td>
            <td>{{ $show->location_id}}</td>
            <td>{{ $show->bookable }}</td>
            <td>{{ $show->price }}</td>
            <td>{{ $show->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>Aucun spectacle.</p>
@endif

@endsection