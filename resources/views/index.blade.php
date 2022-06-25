@extends('layouts.welcome')

@section("head_aggiuntivi")
<script src="./js/login.js" defer></script>
@stop

@section("content_form")
<a href="{{url('register')}}">Non ho un account, voglio registrarmi </a>
<button >ENTRA</button>
@stop

