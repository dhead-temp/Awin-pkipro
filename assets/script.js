   // Event Listener for all radio 
   const radioButtons = document.querySelectorAll('input[type="radio"]');
    
   for (let i = 0; i < radioButtons.length; i++) {
     radioButtons[i].addEventListener("change", function () {
       selected_answer(this);
     });
   }

   // function triggered on radio selection 

   function selected_answer(ele) {
     var value = ele.value;
     var name = ele.name;
    

    // Action 1 - Set the background color based on the value
    const progressBar = document.querySelector('#progress_bar > span');
   progressBar.style.backgroundColor = value === '1' ? 'green' : 'red';
   
   // Action 1 - play answer sfx
    playSound(value);


     // Action 2 - Change Text below options
    document.getElementById("text_below_option").innerHTML = "Answer Next Questions to see the Results";

    // Action 3 - Show Loading Bar
    document.getElementById("progress_bar").style.display = "flex";

    // Action 4 - Saving Answer 
    document.cookie = `${name}=${value};expires=${new Date(
       Date.now() + 86400000
     ).toUTCString()};path=/;`;

    // Action 5 - Redirecting to Next Question
     redirect();

   // Testings
     console.log(value);
     console.log(name);
     gtag('event', 'answer', {
      name : value
    });

   }
   // Redorection function after 2000 Ms
   function redirect() {
     setTimeout(myURL, 300);
   }

   // Play sound or right and wrong question

   function playSound(value) {
    var audioElement = new Audio();
    
    if (value === "1") {
      audioElement.src = '/assets/audio/right1.mp3';
    } else if (value === "0") {
      audioElement.src = '/assets/audio/wrong.mp3';
    }
    
    audioElement.play();
  }

  function playBackgroundMusic() {
    var audioElement = new Audio();
    
    audioElement.loop = true;
    audioElement.src = '/assets/audio/time.mp3';

    if (document.title.includes('Q1') || document.title.includes('Q2') || document.title.includes('Q3')) {
      audioElement.play();
      }
      }
  
  window.addEventListener('load', playBackgroundMusic);

  function clicksound() {
    var clicksound = new Audio(); 
    clicksound.src = '/assets/audio/click.mp3';
    clicksound.play();
  }