<div class="mt-20 mx-120">
    <div class="border border-[#cde3bb] rounded">
        <h1 class="border-b border-[#cde3bb] text-[#cde3bb] font-bold px-4 py-2">Registrar</h1>
        <form class="p-4 space-y-4" method="POST" action="/registrar">
            <?php if($validacoes = flash()->get('validacoes_registrar')): ?>
            <div class="border-red-800 bg-red-900 text-red-400 ox-4 py-1 rounded-md border-2">
                <ul>
                    <?php foreach($validacoes as $validacao): ?>
                    <li>
                        <?= $validacao ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
            <?php if($sucessos = flash()->get('mensagem')): ?>
            <div class="border-green-800 bg-green-900 text-green-400 ox-4 py-1 rounded-md border-2">
                <ul>
                    <?php foreach($sucessos as $sucesso): ?>
                    <li>
                        <?= $sucesso ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
            <div class="flex flex-col">
                <label class="text-[#cde3bb] mb-1 text-xl">Usuário</label>
                <input
                    type="text"
                    name="usuario"
                    class="border-[#cde3bb] border-2 rounded-md bg-[#004e4c] focus:outline-none px-2 py-1"
                    placeholder="Usuário">
            </div>
            <div class="flex flex-col">
                <label class="text-[#cde3bb] mb-1 text-xl">Senha</label>
                <input
                    type="password"
                    name="senha"
                    class="border-[#cde3bb] border-2 rounded-md bg-[#004e4c] focus:outline-none px-2 py-1"
                    placeholder="Senha">
            </div>
            <div class="flex flex-col">
                <label class="text-[#cde3bb] mb-1 text-xl">Confirmar senha</label>
                <input
                    type="password"
                    name="senha_confirmacao"
                    class="border-[#cde3bb] border-2 rounded-md bg-[#004e4c] focus:outline-none px-2 py-1"
                    placeholder="Senha">
            </div>
            <button type="submit" class="border-[#cde3bb] bg-[#004e4c] text-[#cde3bb] px-4 py-1 rounded-md border-2 hover:bg-[#cde3bb]" >Cadastrar</button>
        </form>
    </div>
</div>