@extends('layouts.index')

@section('title') Sign in @endsection

@section('nav-links')
    <!--  -->
@endsection

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="container">

    <div class="d-flex justify-content-between align-items-center">
        <h2>Sign in</h2>
        <ol>
            <li><a href="/">Home</a></li>
            <li>Sign in</li>
        </ol>
    </div>

    </div>
</div><!-- End Breadcrumbs -->



<div class="container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="form-group">
            <label class="control-label" for="email">Email</label>
            <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        
        <div class="form-group">
            <label class="control-label" for="password">Password</label>
            <input class="form-control" id="password" type="password" name="password" required>
        </div>

        <div>
            <button class="btn btn-primary" type="submit">Login</button>
        </div>
    </form>
</div>

<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <div class="form-group">
            <label class="control-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" required autofocus>
        </div>
        
        <div class="form-group">
            <label class="control-label" for="name">Nama Depan</label>
            <input class="form-control" type="text" name="name[first]" required>
            <label class="control-label" for="name">Nama Belakang</label>
            <input class="form-control" type="text" name="name[sur]" required>
        </div>

        <div class="form-group birth">
            <label class="control-label" for="date">Hari</label>
            <input class="form-control" type="text" name="date[D]" required>
            <label class="control-label" for="date">Bulan</label>
            <input class="form-control" type="text" name="date[M]" required>
            <label class="control-label" for="date">Tahun</label>
            <input class="form-control" type="text" name="date[Y]" required>
        </div>
        
        <div class="form-group">
            <label class="control-label" for="gender">Jenis Kelamin</label>
            <input class="form-control" type="text" name="gender" required>
        </div>
        
        <div class="form-group">
            <label class="control-label" for="password">Password</label>
            <input class="form-control" id="password" type="password" name="password" required>
        </div>

        <div>
            <button class="btn btn-primary" type="submit">Register</button>
        </div>
    </form>
</div>
@endsection