<?php
// Define the questions, options, and correct answers
$questions = [
  "What is the capital of France?" => ["Paris", "Berlin", "Madrid", "Rome"],
  "Who wrote 'Romeo and Juliet'?" => ["William Shakespeare", "Charles Dickens", "Mark Twain", "Jane Austen"],
  "What is the largest planet in our solar system?" => ["Earth", "Jupiter", "Mars", "Venus"],
  "What is the chemical symbol for water?" => ["H2O", "O2", "CO2", "N2"],
  "What is the speed of light?" => ["300,000 km/s", "150,000 km/s", "1,000 km/s", "500,000 km/s"],
];

// Define correct answers
$correct_answers = [
  "What is the capital of France?" => "Paris",
  "Who wrote 'Romeo and Juliet'?" => "William Shakespeare",
  "What is the largest planet in our solar system?" => "Jupiter",
  "What is the chemical symbol for water?" => "H2O",
  "What is the speed of light?" => "300,000 km/s",
];

// Initialize variables
$user_answers = [];
$score = 0;
$is_submitted = false;

// Process the form when submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user_answers = $_POST['answers'] ?? [];
  $is_submitted = true;

  // Calculate the score
  foreach ($questions as $question => $options) {
    if (isset($user_answers[$question]) && $user_answers[$question] === $correct_answers[$question]) {
      $score++;
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Quiz</title>
</head>

<body>
  <h1>Online Quiz</h1>
  <?php if ($is_submitted): ?>
    <h2>Your Score: <?php echo $score; ?>/<?php echo count($questions); ?></h2>
    <p><?php echo $score === count($questions) ? "Perfect Score! Well done!" : "Better luck next time!"; ?></p>
    <a href="quiz.php">Retake Quiz</a>
  <?php else: ?>
    <form action="" method="post">
      <?php foreach ($questions as $question => $options): ?>
        <fieldset>
          <legend><?php echo htmlspecialchars($question); ?></legend>
          <?php foreach ($options as $option): ?>
            <label>
              <input type="radio" name="answers[<?php echo htmlspecialchars($question); ?>]"
                value="<?php echo htmlspecialchars($option); ?>" required>
              <?php echo htmlspecialchars($option); ?>
            </label><br>
          <?php endforeach; ?>
        </fieldset>
        <br>
      <?php endforeach; ?>
      <button type="submit">Submit</button>
    </form>
  <?php endif; ?>
</body>

</html>