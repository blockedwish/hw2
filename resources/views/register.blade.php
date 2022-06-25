@extends('layouts.welcome')
@section("head_aggiuntivi")
<script src="./js/register.js" defer></script>
@stop

@section("content_form")
<div class="allowinformation">
    <input id="check" name="check" type="checkbox" checked>
    <label for="check">Acconsento il trattamento dei dati</label>
</div>

    <button  >REGISTRA</button>

@stop

