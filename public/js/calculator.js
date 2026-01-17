function calcularLote() {

   const calcularLote = () => {
    // 1. Captura de Dados
    const ativo = document.getElementById('ativo').value;
    const banca = parseFloat(document.getElementById('banca').value);
    const riscoPercent = parseFloat(document.getElementById('risco').value);
    const entrada = parseFloat(document.getElementById('entrada').value);
    const stopLoss = parseFloat(document.getElementById('stop').value);
    const resultadoDiv = document.getElementById('resultado');

    // 2. Validação de Segurança Básica
    if (!banca || !riscoPercent || !entrada || !stopLoss || entrada === stopLoss) {
        resultadoDiv.classList.remove('hidden');
        resultadoDiv.innerHTML = `<p class="text-red-500 font-bold uppercase text-xs">Preencha todos os dados corretamente!</p>`;
        return;
    }

    // 3. Configuração de Especificação de Contrato (A Magia da Precisão)
    // Forex: 1 lote = 100.000 unidades | Ouro: 1 lote = 100 onças | BTC: 1 lote = 1 BTC
    const specs = {
        // MAJORS (Pip na 4ª casa: 0.0001)
        'EURUSD': 10, 'GBPUSD': 10, 'AUDUSD': 10, 'NZDUSD': 10, 'USDCAD': 10, 'USDCHF': 10,
        // JPY PAIRS (Pip na 2ª casa: 0.01)
        'USDJPY': 9.10, 'EURJPY': 9.10, 'GBPJPY': 9.10, 'AUDJPY': 9.10, 'CADJPY': 9.10, 'CHFJPY': 9.10,
        // MINORS
        'EURGBP': 12.50, 'EURAUD': 6.50, 'EURNZD': 6.00, 'EURCAD': 7.30, 'EURCHF': 10.50,
        'GBPAUD': 6.50, 'GBPCAD': 7.30, 'GBPCHF': 10.50, 'GBPNZD': 6.00,
        // METAIS (XAUUSD: 1 ponto no preço = $100 no lote cheio)
        'XAUUSD': 100,
        // CRIPTO (BTCUSD: 1 dólar no preço = $1 no lote cheio)
        'BTCUSD': 1, 'ETHUSD': 1
    };

    // 4. Cálculo do Risco Financeiro (Quanto dinheiro vai sair da conta se perder)
    const riscoFinanceiro = banca * (riscoPercent / 100);

    // 5. Cálculo da Distância do Stop
    const distancia = Math.abs(entrada - stopLoss);

    let loteFinal = 0;

    // 6. Lógica de Cálculo por Tipo de Ativo
    if (ativo.includes('JPY')) {
        // Para JPY, pips são 0.01
        const pips = distancia / 0.01;
        loteFinal = riscoFinanceiro / (pips * specs[ativo]);
    } else if (ativo === 'XAUUSD') {
        // Para Ouro: Lote = Risco / (Distancia em $ * 100)
        loteFinal = riscoFinanceiro / (distancia * 100);
    } else if (ativo === 'BTCUSD' || ativo === 'ETHUSD') {
        // Para Cripto: Lote = Risco / Distancia em $
        loteFinal = riscoFinanceiro / distancia;
    } else {
        // Forex comum: pips são 0.0001
        const pips = distancia / 0.0001;
        loteFinal = riscoFinanceiro / (pips * specs[ativo]);
    }

    // 7. Proteção contra Lotes irrisórios ou excessivos
    if (loteFinal < 0.01) loteFinal = 0.01; // Mínimo da corretora

    // 8. Exibição do Resultado
    resultadoDiv.classList.remove('hidden');
    resultadoDiv.innerHTML = `
        <div class="space-y-4 animate-in fade-in duration-500">
            <div class="flex justify-between items-center border-b border-white/5 pb-2">
                <span class="text-gray-400 text-[10px] uppercase tracking-widest">Risco em Dinheiro</span>
                <span class="text-red-500 font-bold">$ ${riscoFinanceiro.toFixed(2)}</span>
            </div>
            <div class="flex justify-between items-center border-b border-white/5 pb-2">
                <span class="text-gray-400 text-[10px] uppercase tracking-widest">Lote Recomendado</span>
                <span class="text-green-500 text-3xl font-black">${loteFinal.toFixed(2)}</span>
            </div>
            <p class="text-[9px] text-gray-500 italic">
                * Pare de operar se o lote sugerido for maior do que sua margem permite.
            </p>
        </div>
    `;
};

<select id="ativo" class="calc-input appearance-none">
    <optgroup label="Forex - Majors" class="bg-black">
        <option value="EURUSD">EURUSD</option>
        <option value="GBPUSD">GBPUSD</option>
        <option value="USDJPY">USDJPY</option>
        <option value="AUDUSD">AUDUSD</option>
        <option value="USDCAD">USDCAD</option>
        <option value="USDCHF">USDCHF</option>
        <option value="NZDUSD">NZDUSD</option>
    </optgroup>
    <optgroup label="Forex - Minors/Crosses" class="bg-black">
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
    </optgroup>
    <optgroup label="Metais & Cripto" class="bg-black text-green-500">
        <option value="XAUUSD">XAUUSD (Ouro)</option>
        <option value="BTCUSD">BTCUSD (Bitcoin)</option>
        <option value="ETHUSD">ETHUSD (Ethereum)</option>
    </optgroup>
</select>
}
