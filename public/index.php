
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<div class="bg-gray-200 text-2xl text-center">¡Bienvenido de nuevo!</div>
<body>
    <div class=" h-20 w-3/4 p-4 p-60 mx-80 my-44 mt-44
    md:w-2/4 rounded-lg bg-gray-200  pt-44 pb-36 justify-center flex flex-col space-y-6 ">


    <h1 class="font-black text-center">Log in</h1>

        <div>
            <label>Email:</label>
            <input id="emailI" class="rounded-full border border-black">
        </div>

        <div>
            <label>Contraseña:</label>
            <input id="passwordI" class="rounded-full border border-black">
        </div>

        <div class="p-3 ">
            <button type="submit" onclick="guardarEnStorage()" class="rounded-full relative w-44 h-50 bg-blue-900 text-white ">Iniciar sesión</button>
        </div>
    </div>

</body>

</html>


