<?php 

/**
 * Tokenizes the text and removes punctuation.
 *
 * @param string $text Input text
 * @return array Array of words
 */
function tokenizeText(string $text): array {
    $text = strtolower($text);
    $text = preg_replace('/[^\w\s]/', '', $text); // Remove punctuation
    return explode(' ', $text);
}

/**
 * Filters out common stop words.
 *
 * @param array $words List of words
 * @return array Filtered words
 */
function filterStopWords(array $words): array {
    $stopWords = ["the", "and", "in", "to", "a", "of", "is", "that", "it", "for", "on", "was", "with", "as", "at", "by", "an"];
    return array_filter($words, function ($word) use ($stopWords) {
        return !in_array($word, $stopWords) && !empty($word);
    });
}

/**
 * Counts word frequencies.
 *
 * @param array $words List of words
 * @return array Word frequencies
 */
function getWordFrequencies(array $words): array {
    return array_count_values($words);
}

/**
 * Sorts words by frequency.
 *
 * @param array $wordFrequencies Word frequencies
 * @param string $order Sort order (asc/desc)
 * @return array Sorted word frequencies
 */
function sortWords(array $wordFrequencies, string $order): array {
    if ($order === 'asc') {
        asort($wordFrequencies);
    } else {
        arsort($wordFrequencies);
    }
    return $wordFrequencies;
}

// Process user input
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $text = trim($_POST["text"] ?? '');
    $sortOrder = $_POST["sort_order"] ?? 'desc';
    $limit = (int) ($_POST["limit"] ?? 10);

    if (empty($text)) {
        echo "<p style='color: red;'>Error: No text provided.</p>";
        exit;
    }

    if ($limit < 1) {
        echo "<p style='color: red;'>Error: Please enter a valid number for limit.</p>";
        exit;
    }

    // Tokenize, filter, and analyze words
    $words = tokenizeText($text);
    $filteredWords = filterStopWords($words);
    $wordFrequencies = getWordFrequencies($filteredWords);
    $sortedWords = sortWords($wordFrequencies, $sortOrder);

    // Limit results
    $sortedWords = array_slice($sortedWords, 0, $limit, true);

    // Display results
    echo "<div class='output'><h3>Word Frequency Analysis</h3><ul>";
    foreach ($sortedWords as $word => $count) {
        echo "<li><strong>$word</strong>: $count</li>";
    }
    echo "</ul></div>";
} else {
    echo "<p style='color: red;'>Error: Invalid request.</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Word Frequency Counter</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<title>Word Frequency Counter</title>
    <link rel = 'stylesheet' href = 'styles.css'>
</head>
<body>
    <h2>Word Frequency Counter</h2>
    <form action="index.php" method="post">
        <label for="text">Enter Text:</label>
        <textarea name="text" id="text" required></textarea>

        <label for="sort_order">Sort Order:</label>
        <select name="sort_order" id="sort_order">
            <option value="desc">Descending</option>
            <option value="asc">Ascending</option>
        </select>

        <label for="limit">Number of Words to Display:</label>
        <input type="number" name="limit" id="limit" min="1" max="100" value="10">

        <button type="submit">Analyze</button>
    </form>
</body>
</html>
