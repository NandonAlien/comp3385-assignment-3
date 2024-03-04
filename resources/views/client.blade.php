@extends('layouts.app')

@section('content')
<h1>Create Client</h1>
<form action = {{ url('/client')}} method="post" enctype="multipart/form-data" >
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <label for='Name'>Name</label><br>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for='email'>Email</label><br>
        <input type="text" id="email" name="email">
    </div>
    <div>
        <label for='Telephone'>Phone</label><br>
        <input type="text" id="Telephone" name="Telephone">
    </div>
    <div>
        <label for='address'>Address</label><br>
        <input type="text" id="Address" name="Address">
    </div>
    <div>
        <label for='company_logo'>Company Logo</label><br>
        <input type="text" id="company_logo" name="company_logo" accept ="image/*">
    </div>
    <button type="submit">Create</button>
</form>
@endsection