<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white shadow-md rounded-lg p-6 w-80">
        <h1 class="text-xl font-bold mb-4 text-center">Kalkulator</h1>
        <form action="index.php" method="GET" class="space-y-4">
            <input type="text" name="number1" class="w-full p-2 border rounded" placeholder="Masukkan angka pertama" required>
            <input type="text" name="number2" class="w-full p-2 border rounded" placeholder="Masukkan angka kedua" required>
            <select name="operator" id="operator" class="w-full p-2 border rounded">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <button name="button" type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Hitung</button>
        </form>
        <?php
            $number1 = isset($_GET["number1"]) ? $_GET["number1"] : "";
            $number2 = isset($_GET["number2"]) ? $_GET["number2"] : "";
            $operator = isset($_GET["operator"]) ? $_GET["operator"] : "";
            $hasil = 0;

            if (isset($_GET["button"])){
                switch ($operator) {
                    case "+":
                        $hasil = $number1 + $number2;
                        break;
                    case "-":
                        $hasil = $number1 - $number2;
                        break;
                    case "*":
                        $hasil = $number1 * $number2;
                        break;
                    case "/":
                        $hasil = $number2 != 0 ? $number1 / $number2 : "Tidak bisa membagi dengan nol.";
                        break;
                }
                echo "<div class='mt-4 text-center font-bold'>Hasil: $hasil</div>";
            }
        ?>
    </div>
</body>
</html>
