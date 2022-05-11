@extends('layouts.master')

@section('tilte', 'Dashboard')
<h1>Dashboard {{$developer}}</h1>
@push('scripts')
  <script src="fisrt"></script>   
@endpush

@ifLogic
  <h3>Logic</h3>
@endif

@prepend('scripts')
  <script src="last"></script>
@endprepend

@section('content')
  Welcome to your application Dashbord
@endsection

@component('components.modal', ['title' => 'Title Heading'])
  Hello Components
@endcomponent

@section('footerScripts')
  @parent
  <script src="dashboard.js"></script>
@endsection