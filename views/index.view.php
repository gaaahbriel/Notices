<form class="w-full flex space-x-2 mt-6">
    <input type="text" id="pesquisar" class="border-[#cde3bb] border-2 rounded-md bg-[#004e4c] text-sm focus:outline-none size-full py-2"
    placeholder="Pesquisar" name="pesquisar">
    <button type="submit">🔍</button>
</form>
<section class="grid gap-3 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    <?php require 'partials/_noticia.php'; ?>
</section>