@extends('template.index')
@section('title', 'Not Found')
@section('main')

<div class="container d-flex flex-column mt-5" style="align-items: center;">
    <img width="400" src="https://cdn.dribbble.com/users/1208688/screenshots/4563859/no-found.gif" alt="">
    <h1>{{ $message }}</h1>
</div>

@endSection
