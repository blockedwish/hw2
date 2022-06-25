@extends('layouts.welcome')

@section("head_aggiuntivi")
@stop


@section("white_container")
<h1> {{$message}} </h1>
<a href="."><button> ANDIAMO! </button></a>
@stop