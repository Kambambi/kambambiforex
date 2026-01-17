@extends('layouts.app')

@section('content')

<section class="admin">
    <div class="container">
        <h2>Painel Administrativo</h2>

        @if(count($messages) === 0)
            <p>Nenhuma mensagem recebida.</p>
        @else
            @foreach($messages as $msg)
                <div class="admin-message">
                    <strong>{{ $msg['name'] }}</strong> ({{ $msg['email'] }})<br>
                    <small>{{ $msg['date'] }}</small>
                    <p>{{ $msg['message'] }}</p>
                </div>
            @endforeach
        @endif
    </div>
</section>

@endsection
