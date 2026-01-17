@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">

    <h1 class="text-3xl font-extrabold text-gray-800 mb-6">
        📩 Mensagens dos Clientes
    </h1>

    @if($messages->count() === 0)
        <div class="bg-yellow-100 text-yellow-800 p-4 rounded-lg">
            Nenhuma mensagem recebida ainda.
        </div>
    @else
        <div class="overflow-x-auto bg-white shadow rounded-xl">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase">Nome</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase">WhatsApp</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase">Mensagem</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase">Data</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($messages as $message)
                        <tr>
                            <td class="px-6 py-4">{{ $message->name }}</td>
                            <td class="px-6 py-4">{{ $message->email }}</td>
                            <td class="px-6 py-4">{{ $message->message }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                {{ $message->created_at->format('d/m/Y H:i') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

</div>
@endsection
