<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-[#00995d] text-[#cde3bb]">
    <header class="bg-[#004e4c] border-t-2 border-b-2">
        <nav class="mx-auto max-w-screen-xlg flex justify-between py-8 px-6">
            <div class="font-bold text-xl">UNIMED</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-[#cde3bb]">Noticias</a></li>
                <li><a href="/minhas-noticias" class="hover::underline">Minhas Noticias</a></li>
            </ul>
            <ul>
                <li><a href="/login" class="hover:underline"></a>Login</li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-xlg space-y-6 mt-6 px-6">
        <?php 
            require "../{$view}.view.php";
        ?>
    </main>
    
    <footer>
        
    </footer>
    
</body>
</html>