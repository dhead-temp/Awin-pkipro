<?php
$a1 = isset($_COOKIE['a1']) ? intval($_COOKIE['a1']) : 0;
$a2 = isset($_COOKIE['a2']) ? intval($_COOKIE['a2']) : 0;
$a3 = isset($_COOKIE['a3']) ? intval($_COOKIE['a3']) : 0;

$sum = $a1 + $a2 + $a3;
$sum = $sum * 30;
$fail = ($sum < 2);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awin</title>

    <!-- ==== link === -->
    <link rel="stylesheet" href="assets/style.css?v2.10">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        .progress-container {
          position: relative;
          width: 100%;
          height: 30px;
          border: 1px solid #ccc;
          overflow: hidden;
          margin-top: 20px;
        }
  
        .progress-bar {
          position: absolute;
          top: -3px;
          left: -8px;
          bottom: 0;
          width: 10%;
          background-image: url(assets/img/bar3.svg);
          background-position: center;
          transform-origin: bottom left;
          transition: all 0.5s ease-in-out;
         transform: skew(168deg);
 
        }
        
        .recent_win{
            margin:20px;
        }
      </style>
</head>
<body>
    <header>
        <div class="container">
            <!-- <nav>Answer & Win</nav> -->
            <nav class="navigation-bar r-flex ali-c jut-sb">
                <div class="left_navBar r-flex ali-c ">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="11" cy="11" r="11" fill="#003861"/>
                        <path d="M6.96666 6.2333C6.96666 6.13606 7.00529 6.0428 7.07405 5.97403C7.14282 5.90527 7.23608 5.86664 7.33333 5.86664H14.6667C14.7639 5.86664 14.8572 5.90527 14.9259 5.97403C14.9947 6.0428 15.0333 6.13606 15.0333 6.2333C15.0333 6.62784 15.0245 7.0033 15.0084 7.3597C15.2982 7.40769 15.5754 7.51321 15.8237 7.67004C16.072 7.82687 16.2865 8.03184 16.4543 8.27286C16.6222 8.51388 16.7401 8.78607 16.801 9.07338C16.862 9.36069 16.8649 9.6573 16.8094 9.94572C16.7539 10.2341 16.6412 10.5085 16.478 10.7527C16.3148 10.9969 16.1043 11.2059 15.859 11.3675C15.6137 11.529 15.3386 11.6398 15.0498 11.6933C14.761 11.7468 14.4644 11.742 14.1775 11.679C13.5982 13.0467 12.8003 13.7155 12.1 13.8871V15.4806L13.145 15.7417C13.2873 15.7769 13.4215 15.8407 13.5388 15.9287L14.8867 16.94C14.9482 16.9861 14.9937 17.0505 15.0166 17.124C15.0396 17.1974 15.0388 17.2762 15.0145 17.3493C14.9902 17.4223 14.9435 17.4858 14.8811 17.5308C14.8186 17.5758 14.7436 17.6 14.6667 17.6H7.33333C7.25637 17.6 7.18136 17.5758 7.11893 17.5308C7.0565 17.4858 7.00981 17.4223 6.98548 17.3493C6.96114 17.2762 6.96039 17.1974 6.98334 17.124C7.00628 17.0505 7.05176 16.9861 7.11333 16.94L8.46119 15.9287C8.57853 15.8407 8.71273 15.7769 8.85499 15.7417L9.89999 15.4806V13.8871C9.19966 13.7155 8.40179 13.0467 7.82246 11.6783C7.53542 11.7416 7.23862 11.7467 6.94957 11.6934C6.66052 11.64 6.38509 11.5293 6.13954 11.3677C5.894 11.2062 5.68332 10.9971 5.51994 10.7527C5.35657 10.5084 5.24382 10.2338 5.18834 9.94512C5.13287 9.65647 5.1358 9.35963 5.19695 9.07214C5.25811 8.78464 5.37626 8.51231 5.54442 8.27124C5.71259 8.03017 5.92735 7.82524 6.17604 7.66855C6.42472 7.51186 6.70228 7.4066 6.99233 7.35897C6.97506 6.984 6.9665 6.60868 6.96666 6.2333ZM7.03926 8.09597C6.6566 8.16599 6.31742 8.38515 6.09635 8.70524C5.87527 9.02534 5.79041 9.42014 5.86043 9.8028C5.93044 10.1855 6.14961 10.5246 6.4697 10.7457C6.78979 10.9668 7.1846 11.0517 7.56726 10.9816C7.32306 10.2116 7.13606 9.26124 7.03926 8.09597ZM14.4335 10.9816C14.8161 11.0517 15.2109 10.9668 15.531 10.7457C15.8511 10.5246 16.0703 10.1855 16.1403 9.8028C16.2103 9.42014 16.1254 9.02534 15.9044 8.70524C15.6833 8.38515 15.3441 8.16599 14.9615 8.09597C14.8639 9.26197 14.6769 10.2116 14.4335 10.9816Z" fill="white"/>
                    </svg>                        
                    <span>Play423</span>
                </div>
                <a href="#" class="right_navBar">Check Other Contests</a>
            </nav>
        </div>
        
    </header>
    <main>
        <div class="container ">
            <div class="main-hero-cont r-flex ali-c">
                <div class="heroMoney_img">
                    <img src="assets/img/money.png" alt="money">
                </div>
                <div class="rightHero_textbox">Answer & Win 4100 Rs</div>
                <a href="#" class="winList" >See Winners List</a>
            </div>
            <div class="main-container-box">
                
                <div class="hero-container-box">
                    <div class="win-img"><img src="assets/img/win-cup.png" alt="win cup"></div>
                    <div class="herocucikes-img"><img src="assets/img/win-cucikes.png" alt="cookies"></div>
                    <div class="hero-head1">Congrats, You are </div>
                      <div class="hero-head1">Eligible to WIN 4100 Rs</div>
                    <div class="hero-head3">Your score</div>
                    <div class="hero-head4"><?php echo $sum; ?>/90</div>
                    
                    <div class="hero-head5">Share it <span id="leftsharecount">3</span> People to Proceed</div>
                </div> 
      <div class="progress-container">
                        <div class="progress-bar"></div>
                      </div>
                <div class="lower-btns">
                  
                    <button href="#" class="whatsAppBtn r-flex ali-c jut-c " id="share-button">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.4937 3.47792C12.8443 2.82195 12.0708 2.30185 11.2183 1.94795C10.3658 1.59406 9.45132 1.41345 8.52828 1.41667C4.66078 1.41667 1.50869 4.56875 1.50869 8.43625C1.50869 9.67583 1.83453 10.88 2.44369 11.9425L1.45203 15.5833L5.17078 14.6058C6.19786 15.1654 7.35244 15.4629 8.52828 15.4629C12.3958 15.4629 15.5479 12.3108 15.5479 8.44334C15.5479 6.56625 14.8183 4.8025 13.4937 3.47792ZM8.52828 14.2729C7.47994 14.2729 6.45286 13.9896 5.55328 13.4583L5.34078 13.3308L3.13078 13.9117L3.71869 11.7583L3.57703 11.5388C2.9946 10.6087 2.68533 9.53363 2.68453 8.43625C2.68453 5.22042 5.30536 2.59958 8.52119 2.59958C10.0795 2.59958 11.5458 3.20875 12.6437 4.31375C13.1873 4.85489 13.6181 5.49855 13.9112 6.20743C14.2042 6.9163 14.3536 7.67629 14.3508 8.44334C14.3649 11.6592 11.7441 14.2729 8.52828 14.2729ZM11.7299 9.90958C11.5529 9.82458 10.6887 9.39959 10.5329 9.33583C10.3699 9.27917 10.2566 9.25083 10.1362 9.42084C10.0158 9.59792 9.68286 9.99459 9.58369 10.1079C9.48453 10.2283 9.37828 10.2425 9.20119 10.1504C9.02411 10.0654 8.45744 9.87417 7.79161 9.27917C7.26744 8.81167 6.92036 8.23792 6.81411 8.06083C6.71494 7.88375 6.79994 7.79167 6.89203 7.69958C6.96994 7.62167 7.06911 7.49417 7.15411 7.395C7.23911 7.29583 7.27453 7.21792 7.33119 7.10458C7.38786 6.98417 7.35953 6.885 7.31703 6.8C7.27453 6.715 6.92036 5.85084 6.77869 5.49667C6.63703 5.15667 6.48828 5.19917 6.38203 5.19209H6.04203C5.92161 5.19209 5.73744 5.23459 5.57453 5.41167C5.41869 5.58875 4.96536 6.01375 4.96536 6.87792C4.96536 7.74209 5.59578 8.57792 5.68078 8.69125C5.76578 8.81167 6.92036 10.5825 8.67703 11.3404C9.09494 11.5246 9.42078 11.6308 9.67578 11.7088C10.0937 11.8433 10.4762 11.8221 10.7808 11.7796C11.1208 11.73 11.822 11.3546 11.9637 10.9438C12.1124 10.5329 12.1124 10.1858 12.0629 10.1079C12.0133 10.03 11.907 9.99459 11.7299 9.90958Z" fill="white"/>
                        </svg>                        
                        <span>Invite Your Friends</span>
                    </button>
                    <button href="#" class="payUPIbtn r-flex ali-c jut-c " id="next-button" onclick="window.location.href = 'details.php';" disabled>
                        <span>Proceed</span>
                        
                    </button>
                </div>
     </div>
            
        </div>
                <div class="recent_win">
                    <div class="recent_head">Recent Winners</div>
                    <div class="win_user r-flex ali-c jut-sb">
                        <span class="win_user_left">Amit (903******3)</span>
                        <span class="win_user_right">+4100</span>
                    </div>
                    <div class="win_user r-flex ali-c jut-sb">
                        <span class="win_user_left">Amit (903******3)</span>
                        <span class="win_user_right">+4100</span>
                    </div>
                    <div class="win_user r-flex ali-c jut-sb">
    <span class="win_user_left">Neha (905******5)</span>
    <span class="win_user_right">+2200</span>
</div>
<div class="win_user r-flex ali-c jut-sb">
    <span class="win_user_left">Rahul (912******6)</span>
    <span class="win_user_right">+3200</span>
</div>
<div class="win_user r-flex ali-c jut-sb">
    <span class="win_user_left">Sonia (908******9)</span>
    <span class="win_user_right">+1700</span>
</div>
<div class="win_user r-flex ali-c jut-sb">
    <span class="win_user_left">Alok (916******8)</span>
    <span class="win_user_right">+4200</span>
</div>
<div class="win_user r-flex ali-c jut-sb">
    <span class="win_user_left">Aarti (913******7)</span>
    <span class="win_user_right">+3700</span>
</div>
<div class="win_user r-flex ali-c jut-sb">
    <span class="win_user_left">Manoj (917******5)</span>
    <span class="win_user_right">+1200</span>
</div>
<div class="win_user r-flex ali-c jut-sb">
    <span class="win_user_left">Deepak (906******4)</span>
    <span class="win_user_right">+2800</span>
</div>
<div class="win_user r-flex ali-c jut-sb">
    <span class="win_user_left">Riya (902******1)</span>
    <span class="win_user_right">+4300</span>
</div>
<div class="win_user r-flex ali-c jut-sb">
		<span class="win_user_left">Rajesh (987******6)</span>
		<span class="win_user_right">+4100</span>
	</div>
	<div class="win_user r-flex ali-c jut-sb">
		<span class="win_user_left">Neha (876******5)</span>
		<span class="win_user_right">+4100</span>
	</div>
	<div class="win_user r-flex ali-c jut-sb">
		<span class="win_user_left">Vijay (765******4)</span>
		<span class="win_user_right">+4100</span>
	</div>
	<div class="win_user r-flex ali-c jut-sb">
		<span class="win_user_left">Shruti (654******3)</span>
		<span class="win_user_right">+4100</span>
	</div>
	<div class="win_user r-flex ali-c jut-sb">
		<span class="win_user_left">Kapil (903******3)</span>
		<span class="win_user_right">+4100</span>
	</div>
	<div class="win_user r-flex ali-c jut-sb">
		<span class="win_user_left">Deepak (987******6)</span>
		<span class="win_user_right">+4100</span>
	</div>
	<div class="win_user r-flex ali-c jut-sb">
		<span class="win_user_left">Monika (876******5)</span>
		<span class="win_user_right">+4100</span>
	</div>
	<div class="win_user r-flex ali-c jut-sb">
		<span class="win_user_left">Ajay (765******4)</span>
		<span class="win_user_right">+4100</span>
	</div>
	<div class="win_user r-flex ali-c jut-sb">
		<span class="win_user_left">Aarti (654******3)</span>
		<span class="win_user_right">+4100</span>
	</div>
	<div class="win_user r-flex ali-c jut-sb">
		<span class="win_user_left">Siddharth (903******3)</span>
		<span class="win_user_right">+4100</span>
	</div>
	<div class="win_user r-flex ali-c jut-sb">
		<span class="win_user_left">Sangeeta (987******6)</span>
		<span class="win_user_right">+4100</span>
	</div>
	<div class="win_user r-flex ali-c jut-sb">
		<span class="win_user_left">Shiv (876******5)</span>
		<span class="win_user_right">+4100</span>
	</div>
	<div class="win_user r-flex ali-c jut-sb">
		<span class="win_user_left">Hina (765******4)</span>
		<span class="win_user_right">+4100</span>
	</div>

                </div>
           
    </main>
    <!-- <footer></footer> -->

    <script>
        const progressBar = document.querySelector(".progress-bar");
        const shareButton = document.getElementById("share-button");
        const nextButton = document.getElementById("next-button");
  
        let shareCount = 0;
  
        shareButton.addEventListener("click", () => {
          shareCount++;
          progressBar.style.width = `${shareCount * 25.33}%`; // 33.33% represents one-third of the progress bar width
          
            let count = parseInt(document.getElementById("leftsharecount").innerHTML);
            count--;
            document.getElementById("leftsharecount").innerHTML = count.toString();
            
          
          if (shareCount === 3) {
            nextButton.disabled = false;
            nextButton.style.background="#344A86";
            nextButton.style.color = 'white';
            
          }
        });
     
        const whatsappButton = document.getElementById("share-button");
  
        whatsappButton.addEventListener("click", () => {
          const url = encodeURIComponent(window.location.href);
         // const text = encodeURIComponent("Ye dekho kya mast cheez hai https://pokipro.com/p/?p=65");
          const text = "Ye%20dekho%20kya%20mast%20cheez%20hai%20%0Ahttps%3A%2F%2Fpokipro.com%2Fp%2F%3Fp%3D65";
         // const shareUrl = `https://api.whatsapp.com/send?text=${text} ${url}`;
         const shareUrl = `https://api.whatsapp.com/send?text=${text}`;
             window.open(shareUrl, "_blank");
        });

        //   point value increase;


      </script>
   
</body>
</html>