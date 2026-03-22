<div class="mt-20 mx-120">
    <div class="border border-[#cde3bb] rounded">
        <h1 class="border-b border-[#cde3bb] text-[#cde3bb] font-bold px-4 py-2">Login</h1>
        <form class="p-4 space-y-4" method="POST">
            <?php if($validacoes = flash()->get('validacoes_login')): ?>
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
            <button type="submit" class="border-[#cde3bb] bg-[#004e4c] text-[#cde3bb] px-4 py-1 rounded-md border-2 hover:bg-[#cde3bb]" >Logar</button>
        </form>
    </div>
</div>