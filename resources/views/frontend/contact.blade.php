@extends('layouts.site')
@section('title','lien he')

@section('content')
@if($contact)
        <p>Phone: {{ $contact->phone }}</p>
    
    @else
        <p>No contact information</p>
    @endif
@endsection