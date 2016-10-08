@extends('layouts.master')

@section('content')
    <div id="wrapper">

        <div id="side">
            <div class="circle"></div>
            <h1>Aaron Young </h1>
            <p>Full Stack Developer</p>
            <div class="nav"></div>
            <div></div>
        </div>

        <div class="bg"></div>
        @include('layouts.navigation')
        <div id="main" class="container-fluid">
            <div class="main-content">
            </div>
        </div>
    </div>
@endsection
