@extends('layouts.welcome')

@section("head_aggiuntivi")
<script src="./js/login.js" defer></script>
@stop

@section("content_form")
<a href="{{url('register')}}">Non ho un account, voglio registrarmi </a>
<button >ENTRA</button>
@stop


@section("white_container")
<form id="mainform" method="post">
                    @csrf
                    <div class="form_row">
                        <label for="username_textbox">Username</label>
                        <input id="username" name="username" type="text">
                    </div>
                    <div class="form_row">
                        <label for="password_textbox">Password</label>
                        <input id="pwd" name="pwd" type="password">
                    </div>
                    @section("content_form")
                    @show()
                    
                    
                    
                </form>
@stop