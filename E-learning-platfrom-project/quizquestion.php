<!DOCTYPE html>
<html>
<head>
  <title>Quiz Selector</title>
 <link rel="stylesheet" href="quizstyle.css"></head>
<body>
  <div class="container">
    <h1>Select a Quiz</h1>
    <div class="buttons">
      <button onclick="startQuiz('html')">HTML Quiz</button>
      <button onclick="startQuiz('css')">CSS Quiz</button>
      <button onclick="startQuiz('js')">JavaScript Quiz</button>
    </div>

    <div id="quizBox" class="quiz-box hidden">
      <h2 id="question"></h2>
      <ul id="options"></ul>
      <p id="feedback"></p>
      <button onclick="nextQuestion()">Next</button>
    </div>
  </div>
  <script src="quiz.js"></script>
</body>
</html>
