const quizzes = {
  html: [
    { question: "What does HTML stand for?", options: ["Hyper Text Markup Language", "Hyperlinks and Markup Language", "How to Make Landingpage"], answer: "Hyper Text Markup Language" },
    { question: "Who is the inventor of HTML?", options: ["Tim Berners-Lee", "Bill Gates", "Elon Musk"], answer: "Tim Berners-Lee" },
    { question: "What does HTML stand for?", options: ["HTML describes the structure of a webpage", " HTML is the standard markup language mainly used to create web pages", "All of the mentioned"], answer: "All of the mentioned" },
     { question: "Which of the following tag is used for inserting the largest heading in HTML?", options: ["heading", " <h1>", "<h6>"], answer: "<h1>" }
  ],
  css: [
    { question: "What does CSS stand for?", options: ["Color Style Sheet", "Cascading Style Sheet", "Creative Style Sheet"], answer: "Cascading Style Sheet" },
    { question: "Which CSS property controls text size?", options: ["font-size", "text-style", "text-size"], answer: "font-size" }
  ],
  js: [
    { question: "Which company developed JavaScript?", options: ["Mozilla", "Netscape", "Microsoft"], answer: "Netscape" },
    { question: "What is used for looping?", options: ["for", "if", "function"], answer: "for" }
  ]
};

let currentQuiz = [];
let currentIndex = 0;
let score = 0;

function startQuiz(subject) {
  currentQuiz = quizzes[subject];
  currentIndex = 0;
  score = 0;
  document.getElementById("quizBox").classList.remove("hidden");
  showQuestion();
}

function showQuestion() {
  const q = currentQuiz[currentIndex];
  document.getElementById("question").innerText = q.question;
  const optionsList = document.getElementById("options");
  optionsList.innerHTML = "";
  q.options.forEach(option => {
    const li = document.createElement("li");
    const btn = document.createElement("button");
    btn.innerText = option;
    btn.onclick = () => checkAnswer(option);
    li.appendChild(btn);
    optionsList.appendChild(li);
  });
  document.getElementById("feedback").innerText = "";
}

function checkAnswer(selected) {
  const correct = currentQuiz[currentIndex].answer;
  if (selected === correct) {
    score++;
    document.getElementById("feedback").innerText = "Correct!";
  } else {
    document.getElementById("feedback").innerText = `Wrong! Correct: ${correct}`;
  }
  // disable buttons
  document.querySelectorAll("#options button").forEach(btn => btn.disabled = true);
}

function nextQuestion() {
  currentIndex++;
  if (currentIndex < currentQuiz.length) {
    showQuestion();
  } else {
    document.getElementById("quizBox").innerHTML = `<h2>Quiz Completed!</h2><p>Your Score: ${score}/${currentQuiz.length}</p>`;
  }
}
