(function question1(){
  var q1 =[{
    question1:"Apakah komputer dapat hidup?",
    choice1:[0,1];
  }];
}

function question2(){
  var q2 =[{
    question2:"Apakah ada suara Beep?",
    choice2:[0,1];
  }];
}

function question3(){
  var q3 =[{
    question3:"Apakah komputer dapat masuk OS?",
    choice2:[0,1];
  }];
}

  var answer = 0;
  var selection=[];
  displayNext();
  $('#next').on('click', function (e) {
    e.preventDefault();
    
    // Suspend click listener during fade animation
    if(quiz.is(':animated')) {        
      return false;
    }
    choose();
    
    // If no user selection, progress is stopped
    if (isNaN(selections[answer])) {
      alert('Please make a selection!');
    } else {
      function question2();
      displayNext();
    }
  });
  

)();