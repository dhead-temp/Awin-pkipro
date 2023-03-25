<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include('php/head.php'); 
?>  
    <title>Share</title>
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
<?php 
include('php/header.php'); 
?>  
    <main>
        <div class="container ">
            <div class="main-hero-cont r-flex ali-c">
                <div class="heroMoney_img">
                    <img src="assets/img/money.png" alt="money">
                </div>
                <div class="rightHero_textbox">Answer & Win 4100 Rs</div>
                <a href="#winnerslist" class="winList" onclick="gtag('event', 'see_winners_list');">See Winners List</a>
            </div>
            <div class="main-container-box">
                
                <div class="hero-container-box">
                    <div class="win-img"><img src="assets/img/win-cup.png" alt="win cup"></div>
                    <div class="herocucikes-img"><img src="assets/img/win-cucikes.png" alt="cookies"></div>
                    <div class="hero-head1">Final Step</div>
                    <div class="hero-head2">to get chance to WIN 4100 Rs</div>
                    <div class="hero-head3">Your Chances to Win</div>
                    <div class="hero-head4"> <span id="progress-bar-text">0</span>/100</div>
                    <div class="hero-head5">Share it & Increase your Chances to Win</div>
                </div>
    
                <div class="lower-btns">
                    <div class="progress-container">
                        <div class="progress-bar" id="progress-bar" style="max-width:100% !important;"></div>
                      </div>
                  
                    <button class="whatsAppBtn r-flex ali-c jut-c " id="share-button" onclick="gtag('event', 'invite_on_share2');">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.4937 3.47792C12.8443 2.82195 12.0708 2.30185 11.2183 1.94795C10.3658 1.59406 9.45132 1.41345 8.52828 1.41667C4.66078 1.41667 1.50869 4.56875 1.50869 8.43625C1.50869 9.67583 1.83453 10.88 2.44369 11.9425L1.45203 15.5833L5.17078 14.6058C6.19786 15.1654 7.35244 15.4629 8.52828 15.4629C12.3958 15.4629 15.5479 12.3108 15.5479 8.44334C15.5479 6.56625 14.8183 4.8025 13.4937 3.47792ZM8.52828 14.2729C7.47994 14.2729 6.45286 13.9896 5.55328 13.4583L5.34078 13.3308L3.13078 13.9117L3.71869 11.7583L3.57703 11.5388C2.9946 10.6087 2.68533 9.53363 2.68453 8.43625C2.68453 5.22042 5.30536 2.59958 8.52119 2.59958C10.0795 2.59958 11.5458 3.20875 12.6437 4.31375C13.1873 4.85489 13.6181 5.49855 13.9112 6.20743C14.2042 6.9163 14.3536 7.67629 14.3508 8.44334C14.3649 11.6592 11.7441 14.2729 8.52828 14.2729ZM11.7299 9.90958C11.5529 9.82458 10.6887 9.39959 10.5329 9.33583C10.3699 9.27917 10.2566 9.25083 10.1362 9.42084C10.0158 9.59792 9.68286 9.99459 9.58369 10.1079C9.48453 10.2283 9.37828 10.2425 9.20119 10.1504C9.02411 10.0654 8.45744 9.87417 7.79161 9.27917C7.26744 8.81167 6.92036 8.23792 6.81411 8.06083C6.71494 7.88375 6.79994 7.79167 6.89203 7.69958C6.96994 7.62167 7.06911 7.49417 7.15411 7.395C7.23911 7.29583 7.27453 7.21792 7.33119 7.10458C7.38786 6.98417 7.35953 6.885 7.31703 6.8C7.27453 6.715 6.92036 5.85084 6.77869 5.49667C6.63703 5.15667 6.48828 5.19917 6.38203 5.19209H6.04203C5.92161 5.19209 5.73744 5.23459 5.57453 5.41167C5.41869 5.58875 4.96536 6.01375 4.96536 6.87792C4.96536 7.74209 5.59578 8.57792 5.68078 8.69125C5.76578 8.81167 6.92036 10.5825 8.67703 11.3404C9.09494 11.5246 9.42078 11.6308 9.67578 11.7088C10.0937 11.8433 10.4762 11.8221 10.7808 11.7796C11.1208 11.73 11.822 11.3546 11.9637 10.9438C12.1124 10.5329 12.1124 10.1858 12.0629 10.1079C12.0133 10.03 11.907 9.99459 11.7299 9.90958Z" fill="white"/>
                        </svg>      

                        <span>Invite Your Friends (+5 Point)</span>
                    </button>
                    <button class="appDownlodBtn r-flex ali-c jut-c " id="download-button" onclick="gtag('event', 'download_app');">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 1.5C4.8675 1.5 1.5 4.8675 1.5 9C1.5 13.1325 4.8675 16.5 9 16.5C13.1325 16.5 16.5 13.1325 16.5 9C16.5 4.8675 13.1325 1.5 9 1.5ZM8.25 7.5V4.5H9.75V7.5H12L9 10.5L6 7.5H8.25ZM12.75 12.75H5.25V11.25H12.75V12.75Z" fill="white"/>
                        </svg>                                                
                        <span>Download App (+35 Point)</span>
                    </button>
                    <br><br>
                    <button href="#" class="payUPIbtn r-flex ali-c jut-c " id="next-button" onclick="window.location.href = '#';" disabled  onclick="gtag('event', 'claim_prize');">
                        <span>Claim Prize</span>
                        
                    </button>
                </div>
    

                <?php include('php/winners.php'); ?>  
    </main>
    <!-- <footer></footer> -->
<!-- 
    <script>
        const progressBar = document.querySelector(".progress-bar");
        const shareButton = document.getElementById("share-button");
        const downloadBtn = document.getElementById("next-button");
        const url = encodeURIComponent(window.location.href);
        const text = encodeURIComponent("Check out this link!");
        const shareUrl = `https://api.whatsapp.com/send?text=${text} ${url}`;
        let shareCount = 30;
  
        shareButton.addEventListener("click", () => {
          shareCount++;
          progressBar.style.width = `${shareCount + 5}px`; // 33.33% represents one-third of the progress bar width
          //   window.open(shareUrl, "_blank");
          let count = parseInt(document.getElementById("points").innerHTML);
            count += 5;
            document.getElementById("points").innerHTML = count.toString();
        });
        
        downloadBtn.addEventListener("click", () => {
          shareCount++;
          progressBar.style.width = `${shareCount + 30}px`; // 33.33% represents one-third of the progress bar width
          //   window.open(shareUrl, "_blank");
          let count = parseInt(document.getElementById("points").innerHTML);
            count += 30;
            document.getElementById("points").innerHTML = count.toString();
        });
        
        
        
      </script> -->
      <script>
      const shareButton = document.querySelector('#share-button');
      const downloadButton = document.querySelector('#download-button');
      const nextButton = document.getElementById("next-button");
      const progressBar = document.querySelector('#progress-bar');
      const progressText = document.querySelector('#progress-bar-text');
      const url = encodeURIComponent(window.location.href);


    //   const text = encodeURIComponent("Check out this link!");
    //   const shareUrl = `https://api.whatsapp.com/send?text=${text} ${url}`;
      const text = "Ye%20dekho%20kya%20mast%20cheez%20hai%20%0Ahttp%3A%2F%2Fbit.ly%2F3FII085";
      const shareUrl = `https://api.whatsapp.com/send?text=${text}`;
      let progress = 0;

      shareButton.addEventListener('click', () => {
        progress += 5;
        updateProgressBar();
        window.open(shareUrl, "_blank");
        if (progress > 99) {
            nextButton.disabled = false;
            nextButton.style.background="#344A86";
            nextButton.style.color = 'white';
            
          }
      });

      downloadButton.addEventListener('click', () => {
        progress += 30;
        updateProgressBar();
        downloadButton.disabled = true;
        downloadButton.style.background="#b5b5b5";
        downloadButton.style.color = '#8e8e8e';
        
        if (progress > 99) {
            nextButton.disabled = false;
            nextButton.style.background="#344A86";
            nextButton.style.color = 'white';
            
          }
      });

      function updateProgressBar() {
        progressBar.style.width = `${progress}%`;
        progressText.innerText = `${progress}`;
      }
    </script>
 
</body>
</html>