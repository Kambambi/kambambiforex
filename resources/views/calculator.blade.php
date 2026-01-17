@extends('layouts.public')

@section('content')
<style>
    .calc-container {
        background: rgba(255, 255, 255, 0.02);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 32px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    }
    .input-group label {
        display: block;
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #4b5563;
        margin-bottom: 8px;
        font-weight: 800;
    }
    .calc-input {
        width: 100%;
        background: rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 14px;
        border-radius: 12px;
        color: white;
        font-family: 'Inter', sans-serif;
        transition: all 0.3s ease;
    }
    .calc-input:focus {
        border-color: #22c55e;
        outline: none;
        background: rgba(34, 197, 94, 0.05);
        box-shadow: 0 0 15px rgba(34, 197, 94, 0.1);
    }
    .res-box {
        background: linear-gradient(135deg, rgba(34, 197, 94, 0.1) 0%, transparent 100%);
        border: 1px dashed rgba(34, 197, 94, 0.3);
        border-radius: 16px;
        min-height: 100px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>

<div class="bg-black min-h-screen pt-40 pb-20">
    <div class="container mx-auto px-6">

        <div class="max-w-4xl mx-auto text-center mb-12">
            <h2 class="text-4xl md:text-6xl font-black text-white mb-4 tracking-tighter uppercase">
                Calculadora de <span class="text-green-500">Lote</span>
            </h2>
            <p class="text-gray-500 uppercase tracking-widest text-xs">Precisão Profissional • Gestão de Risco</p>
        </div>

        <div class="max-w-2xl mx-auto calc-container p-8 md:p-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div class="input-group md:col-span-2">
                    <label>Selecione o Ativo (+40 Pares)</label>
                    <select id="ativo" class="calc-input appearance-none">
                        <optgroup label="Forex - Majors" class="bg-black text-green-500">
                            <option value="EURUSD">EURUSD</option>
                            <option value="GBPUSD">GBPUSD</option>
                            <option value="USDJPY">USDJPY</option>
                            <option value="AUDUSD">AUDUSD</option>
                            <option value="USDCAD">USDCAD</option>
                            <option value="USDCHF">USDCHF</option>
                            <option value="NZDUSD">NZDUSD</option>
                        </optgroup>
                        <optgroup label="Forex - Crosses" class="bg-black">
                            <option value="EURGBP">EURGBP</option>
                            <option value="EURJPY">EURJPY</option>
                            <option value="GBPJPY">GBPJPY</option>
                            <option value="EURAUD">EURAUD</option>
                            <option value="EURNZD">EURNZD</option>
                            <option value="EURCAD">EURCAD</option>
                            <option value="EURCHF">EURCHF</option>
                            <option value="GBPAUD">GBPAUD</option>
                            <option value="GBPCAD">GBPCAD</option>
                            <option value="GBPCHF">GBPCHF</option>
                            <option value="GBPNZD">GBPNZD</option>
                            <option value="AUDJPY">AUDJPY</option>
                            <option value="CADJPY">CADJPY</option>
                            <option value="CHFJPY">CHFJPY</option>
                            <option value="AUDCAD">AUDCAD</option>
                            <option value="AUDNZD">AUDNZD</option>
                            <option value="AUDCHF">AUDCHF</option>
                            <option value="CADCHF">CADCHF</option>
                            <option value="NZDJPY">NZDJPY</option>
                            <option value="NZDCAD">NZDCAD</option>
                            <option value="NZDCHF">NZDCHF</option>
                        </optgroup>
                        <optgroup label="Metais & Cripto" class="bg-black text-green-500">
                            <option value="XAUUSD">XAUUSD (Ouro)</option>
                            <option value="BTCUSD">BTCUSD (Bitcoin)</option>
                            <option value="ETHUSD">ETHUSD (Ethereum)</option>
                        </optgroup>
                    </select>
                </div>

                <div class="input-group">
                    <label>Saldo da Banca ($)</label>
                    <input type="number" id="banca" placeholder="Ex: 1000" class="calc-input">
                </div>

                <div class="input-group">
                    <label>Risco por Operação (%)</label>
                    <input type="number" id="risco" placeholder="Ex: 1" class="calc-input">
                </div>

                <div class="input-group">
                    <label>Preço de Entrada</label>
                    <input type="number" step="any" id="entrada" placeholder="0.00000" class="calc-input">
                </div>

                <div class="input-group">
                    <label>Stop Loss</label>
                    <input type="number" step="any" id="stop" placeholder="0.00000" class="calc-input">
                </div>

            </div>

            <button onclick="calcularLote()" class="w-full mt-10 py-5 bg-green-500 text-black font-black rounded-2xl hover:scale-[1.02] active:scale-95 transition-all shadow-[0_10px_30px_rgba(34,197,94,0.3)] uppercase tracking-[3px]">
                Executar Cálculo
            </button>

            <div id="resultado" class="res-box mt-10 p-6 text-center hidden"></div>

            <p class="text-[10px] text-gray-600 uppercase tracking-widest text-center mt-8 leading-relaxed">
                *Cálculo baseado em tamanhos de contrato padrão (Standard Lot). Verifique os limites da sua corretora.
            </p>
        </div>
    </div>
</div>

<script>
function calcularLote() {
    const ativo = document.getElementById('ativo').value;
    const banca = parseFloat(document.getElementById('banca').value);
    const riscoPercent = parseFloat(document.getElementById('risco').value);
    const entrada = parseFloat(document.getElementById('entrada').value);
    const stopLoss = parseFloat(document.getElementById('stop').value);
    const resDiv = document.getElementById('resultado');

    if (!banca || !riscoPercent || !entrada || !stopLoss) {
        alert("Por favor, preencha todos os campos.");
        return;
    }

    // 1. Calcular Valor em Risco (Dinheiro real)
    const riscoUSD = banca * (riscoPercent / 100);

    // 2. Calcular Distância Absoluta
    const distancia = Math.abs(entrada - stopLoss);
    if (distancia === 0) return;

    // 3. Definição de Valor de Pip/Ponto por Ativo
    // Forex Majors/Minors (exceto JPY) = Pip na 4ª casa (0.0001)
    // Forex JPY = Pip na 2ª casa (0.01)
    // XAUUSD = 1.00 de movimento = $100 de risco por lote cheio
    // BTCUSD = 1.00 de movimento = $1 de risco por lote cheio

    let loteFinal = 0;

    if (ativo === "XAUUSD") {
        loteFinal = riscoUSD / (distancia * 100);
    } else if (ativo === "BTCUSD" || ativo === "ETHUSD") {
        loteFinal = riscoUSD / distancia;
    } else if (ativo.includes("JPY")) {
        const pips = distancia / 0.01;
        loteFinal = riscoUSD / (pips * 9.10); // Valor aproximado seguro para JPY
    } else {
        const pips = distancia / 0.0001;
        loteFinal = riscoUSD / (pips * 10); // Padrão $10/pip para Majors
    }

    // 4. Mostrar Resultado
    resDiv.classList.remove('hidden');
    resDiv.innerHTML = `
        <div class="animate-pulse mb-2 text-red-500 text-[10px] font-bold uppercase tracking-widest">
            Risco em Dinheiro: $ ${riscoUSD.toFixed(2)}
        </div>
        <div class="text-white text-xs uppercase tracking-widest mb-1">Lote Sugerido:</div>
        <div class="text-green-500 text-5xl font-black">${loteFinal.toFixed(2)}</div>
    `;
}
</script>
@endsection
