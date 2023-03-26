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
    

    // Action 0 - Set the background color based on the value
    const progressBar = document.querySelector('#progress_bar > span');
   progressBar.style.backgroundColor = value === '1' ? 'green' : 'red';


     // Action 1 - Change Text below options
    document.getElementById("text_below_option").innerHTML = "Answer Next Questions to see the Results";

    // Action 2 - Show Loading Bar
    document.getElementById("progress_bar").style.display = "flex";

    // Action 3 - Saving Answer 
    document.cookie = `${name}=${value};expires=${new Date(
       Date.now() + 86400000
     ).toUTCString()};path=/;`;

    // Action 4 - Redirecting to Next Question
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
