# Case Study: Word Frequency Counter

### Problem Description:

You are tasked with developing a PHP program that reads a text document and calculates the frequency of each word in the document. The program should provide a list of unique words along with their respective frequencies. The students are required to create functions to accomplish this task.

### Requirements:

- User Input: The program should allow the user to input text by pasting it into a textarea provided in the HTML interface.

- Tokenization: The program should tokenize the pasted text into words. Words should be considered as sequences of characters separated by spaces, punctuation, or line breaks.

- Word Frequency Calculation: Create a function that calculates the frequency of each unique word in the input text. Common stop words (e.g., "the," "and," "in") should be ignored during word frequency calculation.

- Sorting Options: Implement a function that sorts the list of words by frequency. The user should have the option to choose either ascending or descending order during the sorting process.

- Display Limit: Provide an option for the user to specify the number of words to display in the output. This should limit the number of words shown, such as displaying the top N most frequent words.

- User Interface: Create a user-friendly interface with an HTML form that includes a textarea for text input, a dropdown menu to select sorting order, and an input field to specify the number of words to display.

- Output: Display the result, including the list of unique words and their respective frequencies, based on the user's input and choices. The output should be presented in a clear and readable format.

- Error Handling: Implement error handling to handle cases where the user provides invalid input or if the program encounters any issues during processing.

### Hints and Considerations:

Create functions for each major step (e.g., reading the file, tokenizing the text, calculating word frequencies).

Students can use built-in PHP functions like file_get_contents(), str_word_count(), explode(), array_count_values(), and arsort() for sorting.

Provide a list of common stop words that students can use to filter out irrelevant words from their analysis.
