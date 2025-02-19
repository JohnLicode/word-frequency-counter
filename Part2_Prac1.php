<?php
/**
 * Calculate the total price of items in a shopping cart.
 *
 * @param array $items An array of items, each containing 'name' and 'price'.
 * @return float The total price of all items.
 */
function calculate_total_price(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

// Sample shopping cart items
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

// Display total price
echo "Total price: $" . calculate_total_price($items) . "<br><br>";

/**
 * Remove spaces from a string and convert it to lowercase.
 *
 * @param string $input The input string.
 * @return string The formatted string.
 */
function format_string(string $input): string {
    $input = str_replace(' ', '', $input);
    return strtolower($input);
}

// Example string manipulation
$string = "This is a poorly written program with little structure and readability.";
echo "Modified string: " . format_string($string) . "<br><br>";

/**
 * Check if a number is even or odd.
 *
 * @param int $number The number to check.
 * @return string A message indicating whether the number is even or odd.
 */
function check_even_odd(int $number): string {
    return $number % 2 === 0 ? "The number $number is even." : "The number $number is odd.";
}

// Example number check
$number = 42;
echo check_even_odd($number) . "<br>";
?>
