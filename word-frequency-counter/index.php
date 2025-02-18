<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Word Frequency Counter</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Word Frequency Counter</h1>
        
        <form method="post">
            <label for="text">Paste your text here:</label><br>
            <textarea id="text" name="text" rows="10" cols="50" required><?php echo isset($_POST["text"]) ? htmlspecialchars($_POST["text"]) : ''; ?></textarea><br><br>

            <label for="sort">Sort by frequency:</label>
            <select id="sort" name="sort">
                <option value="asc" <?php if (isset($_POST["sort"]) && $_POST["sort"] == "asc") echo "selected"; ?>>Ascending</option>
                <option value="desc" <?php if (isset($_POST["sort"]) && $_POST["sort"] == "desc") echo "selected"; ?>>Descending</option>
            </select><br><br>

            <label for="limit">Number of words to display:</label>
            <input type="number" id="limit" name="limit" value="<?php echo isset($_POST["limit"]) ? (int)$_POST["limit"] : 10; ?>" min="1"><br><br>

            <input type="submit" value="Calculate Word Frequency">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $text = trim($_POST["text"]);
            $sortOrder = $_POST["sort"];
            $limit = isset($_POST["limit"]) ? (int)$_POST["limit"] : 10;

            if (empty($text)) {
                echo "<p>Error: No text provided.</p>";
            } else {
                // Define common stop words to ignore
                $stopWords = array("the", "and", "in", "to", "of", "a", "is", "that", "it", "for", "on", "with", "as", "was", "this", "at", "be", "by", "are");

                // Convert text to lowercase and remove punctuation
                $text = strtolower($text);
                $text = preg_replace('/[^\w\s]/', '', $text); // Remove punctuation

                // Tokenization: Split words by spaces and new lines
                $words = preg_split('/\s+/', $text);
                $words = array_filter($words); // Remove empty elements

                // Filter out stop words
                $filteredWords = array_filter($words, function($word) use ($stopWords) {
                    return !in_array($word, $stopWords);
                });

                // Calculate word frequency
                $wordFrequencies = array_count_values($filteredWords);

                // Sort by frequency
                if ($sortOrder === "desc") {
                    arsort($wordFrequencies);
                } else {
                    asort($wordFrequencies);
                }

                // Limit the number of words displayed
                $wordFrequencies = array_slice($wordFrequencies, 0, $limit, true);

                // Display output
                echo "<h2>Word Frequency Results</h2>";
                echo "<table>";
                echo "<tr><th>Word</th><th>Frequency</th></tr>";
                foreach ($wordFrequencies as $word => $count) {
                    echo "<tr><td>$word</td><td>$count</td></tr>";
                }
                echo "</table>";
            }
        }
        ?>
    </div>
</body>

</html>
