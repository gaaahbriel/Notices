<div class="p-2 rounded border-[#cde3bb] border-2 bg-[#004e4c]">
    <div class="flex gap-2">
        <div class="w-1/3">
            <img src="" alt="" class="w-60 rounded">IMAGEM
        </div>
        <div class="flex flex-col gap-1">
            <a href="../noticia?id=<?= $noticia->id ?>" class="font-semibold hover:underline"><?= $noticia->nomeDoEvento ?></a>
            <div div="text-cs italic">Autor do evento</div>
        </div>
    </div>
    <div class="text-sm mt-2">
        <?= $noticia->descricaoDoEvento ?>
    </div>
</div>