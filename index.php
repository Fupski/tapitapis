<?php
if (!isset($_GET['number'])) {
    echo 'Параметр "number" не найден в URL.';
} else {
    // Получение значения параметра "number"
    $number = $_GET['number'];

    // Проверка на допустимый диапазон числа
    if ($number < 1 || $number > 1000) {
        echo 'Число должно быть в диапазоне от 1 до 1000.';
    } else {
        // Функция для проверки числа на простоту
        function isPrime($num)
        {
            if ($num <= 1) {
                return false;
            }
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i === 0) {
                    return false;
                }
            }
            return true;
        }

        // Создание массива простых чисел
        $primeNumbers = [];
        for ($i = 2; $i <= $number; $i++) {
            if (isPrime($i)) {
                $primeNumbers[] = $i;
            }
        }

        // Вывод массива простых чисел
    
        echo implode(', ', $primeNumbers);
    }
}
?>
