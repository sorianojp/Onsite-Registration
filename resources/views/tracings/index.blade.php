@extends('layouts.app')
 
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="container">
    <table class="table table-responsive" id="tracings">
    <thead>
        <tr>
            <th>No</th>
            <th>Registered at</th>
            <th>Visited at</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($timevisits as $timevisit)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $timevisit->tracing->created_at }}</td>
            <td>{{ $timevisit->created_at }}</td>
            <td>{{ $timevisit->tracing->full_name }}</td>
            <td>{{ $timevisit->tracing->email }}</td>
            <td>{{ $timevisit->tracing->phone }}</td>
            <td>{{ $timevisit->tracing->full_address }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
  
</div>   



@endsection