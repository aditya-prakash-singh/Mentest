
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Assesment</title>
    <style>
      * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap');
.main {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fedbc5;
}

.container {
    width: 35rem;
    box-shadow: 0px 0px 5px grey;
    display: flex;
    background-color: white;
    border-radius: 10px;
    overflow: hidden;
    flex-direction: column;
}

.col {
    text-align: justify;
    padding: 15px;
    width: 95%;
}

#submit {
    width: 100%;
    background-color: #e6884e;
    transition: 0.5s;
    color: white;
    outline: none;
    border: none;
    font-size: 25px;
    display: block;
    padding: 10px;
    cursor: pointer;
}

#submit:hover {
    background-color: rgb(18, 198, 18);
}

.box {
    box-shadow: 0px -1px 1px grey;
    width: 100%;
}

#aaa{
    float:right;

}
#bbb{
    color:red;
}
#ccc{
    color:green;
}
#questionBox{
    color:#e6884e
}
    </style>
</head>

<body >
    <section class="main">

        <div class="container">
            <div class="col">
                <h3 id="questionBox">
                    1Lorem ipsum dolor sit amet, consectetur adipisicing elit Debitis?
                </h3>
            </div>
            <div class="col box" ><label for="first">
                <input name="option" type="radio" id="first" value="a" required>
                <span id="first1" >Testing 1</span></label>
            </div>
            <div class="col box" ><label for="second">
                <input name="option" type="radio" id="second" value="b" required>
                <span id="second2"> Testing 2</label></span>
            </div>
            <div class="col box" ><label for="third">
                <input name="option" type="radio" id="third" value="c" required>
                <span id="third3">Testing 3</label></span>
            </div>
            <div class="col box" ><label for="fourth">
                <input name="option" type="radio" id="fourth" value="d" required>
                <span id="fourth4">Testing 4</label></span>
            </div>
            <button id="submit">Submit</button>
        </div>

    </section>
    <script>
      const quizData = [{
        question: "How much do you sleep in a day?",
        a: "8+ Hours",
        b: "6-8 Hours",
        c: "3-6 Hours",
        d: "less than 3 hours",
        correct: "d",
    },
    {
        question: "How much time do you spend on social media?",
        a: "8+ Hours",
        b: "6-8 Hours",
        c: "3-6 Hours",
        d: "Less than 3 Hours",
        correct: "a",
    },
    {
        question: "How satisfied do you feel with your life?",
        a: "No Satisfication",
        b: "Not Much Satisfication",
        c: "Neutral ",
        d: "Very Much Satisfied",
        correct: "b",
    },
    {
        question: "How often do you feel future was bleak?",
        a: "Never ",
        b: "Sometimes",
        c: "Usually",
        d: "Always",
        correct: "b",
    },
    {
        question: "How much times you feel motivated?",
        a: "Never ",
        b: "Sometimes",
        c: "Usually",
        d: "Always",
        correct: "c",
    },

    {
        question: "Overall how you rate your physical health?",
        a: "Excellent ",
        b: "Average",
        c: "Poor",
        d: "Not Sure",
        correct: "c",
    },

    {
        question: "Overall how you rate your mental health?",
        a: "Excellent ",
        b: "Average",
        c: "Poor",
        d: "Not sure",

    },

    {
        question:"How  particularly fee low or down these days?",
        a: "Very often ",
        b: "Somewhat often",
        c: "Not so often",
        d: "Not at all",
    },

    {
        question: "how do you feel most of the time?",
        a: "Calm and Peaceful ",
        b: "Energetic",
        c: "Gloomy",
        d: "Angry",

    },
    {
        question: "Have you noticed any change in your diet habits?",
        a: "Yes , I eat too much ",
        b: "Yes ,I don't feel hungry",
        c: "Not much",
        d: "No change",
    },

    {
        question: "What was last time you were really happy?",
        a: "Few hours ago ",
        b: "Few days ago",
        c: "few weeks ago",
        d: "I don't remember",

    },
    {
        question: "What was last time you feel good about yourself?",
        a: "Few hours ago ",
        b: "Few days ago",
        c: "few weeks ago",
        d: "I don't remember",

    },

];
let index = 0;
let total = quizData.length;
let questionBox = document.getElementById("questionBox");
let allInputs = document.querySelectorAll("input[type='radio']")
const loadQuestion = () => {
    if (total === index) {
        return quizEnd()
    }
    reset()
    const data = quizData[index]
    questionBox.innerHTML = `${index + 1}) ${data.question}`
    allInputs[0].nextElementSibling.innerText = data.a
    allInputs[1].nextElementSibling.innerText = data.b
    allInputs[2].nextElementSibling.innerText = data.c
    allInputs[3].nextElementSibling.innerText = data.d
}
const answers = [];
document.querySelector("#submit").addEventListener(
    "click",

    function() {
        const data = quizData[index]
        const ans = getAnswer()
        answers[index]= ans;
        index++;
        loadQuestion()
    }
)

const getAnswer = () => {
    let ans;
    let atLeastOneChecked = false; // Initialize a variable to track if at least one radio button is checked

    allInputs.forEach((inputEl) => {
        if (inputEl.checked) {
            atLeastOneChecked = true; // Set the flag to true if a radio button is checked

            if (inputEl.value === 'a' ) {
                ans = inputEl.value;
            }
            if (inputEl.value === 'b') {
                ans = inputEl.value;
            }
            if (inputEl.value === 'c') {
                ans = inputEl.value;
            }
            if (inputEl.value === 'd') {
                ans = inputEl.value;
            }
        }
    });

    if (!atLeastOneChecked) {
        //alert('Please select at least one option');
        return 'NoSelection';
    }

    return ans;
};


const reset = () => {
    allInputs.forEach(
        (inputEl) => {
            inputEl.checked = false;
        }
    )
}


function ab(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}
check=[1,0,0,1,0,1,1,0,1,0,1,1]
let score=0;
const quizEnd = () =>{
    // console.log(document.getElementsByClassName("container"));
    let text=JSON.stringify(answers);
    for(let i=0;i<answers.length;i++){
        if (check[i] && answers[i]!='NoSelection'){
            if (answers[i]=='a')score+=10;
            else if (answers[i]=='b')score+=5;
            else if (answers[i]=='c')score+=0;
            else score-=4;
        }
        else if (answers[i]!='NoSelection'){
            if (answers[i]=='d')score+=10;
            else if (answers[i]=='c')score+=5;
            else if (answers[i]=='b')score+=0;
            else score-=4;
        }
        else score-=2;
    }
    
    if (score >= 110) {
    disp = `<center style="padding:50px;color:green;"><h2>Excellent Health</h2></br><div>Your remarkable health is truly something to admire. You radiate vitality and well-being in everything you do. It's clear that you prioritize self-care and fitness, and it's inspiring to see how strong and full of life you are. Keep up the fantastic work! </br></br> You have a score of ${score} out of 120.</br></br> Still we recommend you to go through our <a href='book.php'>Counsellors list</a> and stay healthy as always.</div></br></br><a href="book.php" style="padding:18px;color:green;background-color:#fedbc5;border:none;border-radius:5px;">Book Appointment</a></center>`;
} else if (score >= 80 && score < 110) {
    disp = `<center style="padding:50px;color:blue;"><h2>Good Health</h2></br><div>Congratulations on maintaining good health! You're doing a great job of taking care of yourself, and it shows. Your commitment to your well-being is commendable. Keep up the positive habits!</br></br>You have a score of ${score} out of 120.</br></br>Remember to check out our <a href='book.php'>Counsellors list</a> for any additional support you may need.</div></br></br><a href="book.php" style="padding:18px;color:blue;background-color:#fedbc5;border:none;border-radius:5px;">Book Appointment</a></center>`;
} else if (score >= 50 && score < 80) {
    disp = `<center style="padding:50px;color:orange;"><h2>Fair Health</h2></br><div>Your health is in a decent place, but there's room for improvement. It's important to prioritize self-care and seek support when needed. Take steps to address any concerns and focus on making positive changes.</br></br>You have a score of ${score} out of 120.</br></br>We encourage you to explore our <a href='book.php'>Counsellors list</a> to help you along your journey to better health.</div></br></br><a href="book.php" style="padding:18px;color:orange;background-color:#fedbc5;border:none;border-radius:5px;">Book Appointment</a></center>`;
} else if (score >= 20 && score < 50) {
    disp = `<center style="padding:50px;color:purple;"><h2>Needs Improvement</h2></br><div>Your health could use some attention. It's essential to address any areas of concern and prioritize self-care. Seeking support from professionals can make a significant difference in your well-being. You're capable of making positive changes!</br></br>You have a score of ${score} out of 120.</br></br>We strongly recommend reaching out to one of our <a href='book.php'>Counsellors</a> for guidance and support.</div></br></br><a href="book.php" style="padding:18px;color:purple;background-color:#fedbc5;border:none;border-radius:5px;">Book Appointment</a></center>`;
} else {
    disp = `<center style="padding:50px;color:red;"><h2>Poor Health</h2></br><div>Your health needs urgent attention. It's crucial to prioritize self-care and seek professional support to address your health concerns. Remember, you're not alone, and there are resources available to help you on your journey to better health.</br></br>You have a score of ${score} out of 120.</br></br>We urge you to contact one of our <a href='book.php'>Counsellors</a> as soon as possible to discuss your situation and create a plan for improvement.</div></br></br><a href="book.php" style="padding:18px;color:red;background-color:#fedbc5;border:none;border-radius:5px;">Book Appointment</a></center>`;
}
    
    
    document.getElementsByClassName("container")[0].innerHTML = disp;
}
loadQuestion(index);
    </script>
</body>

</html>
