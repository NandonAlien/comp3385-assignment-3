@extends('layouts.app')

@section('content')
    <h1 class="display-5 fw-bold text-body-emphasis">Dashboard</h1>
    <a href ='{{url('/client/add')}}'>Create Client</a>
    <p class="lead">Welcome to your dashboard. Here you can manage your account, your clients and much more.</p>
    @foreach($clients as $client)
    <div>
        <img src= "{{asset({{$client->company_logo}})}}" alt = '{{$client->name}}'>
        <h1>{{$client->name}}</h1>
        <p>{{$client->email}}</p>
        <p>{{$client->telephone}}</p>
        <p>{{$client->Address}}</p>
    </div>
    @endforeach
@endsection
