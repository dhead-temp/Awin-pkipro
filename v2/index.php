<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include('../php/head.php'); 
?>  
  
    <title>Answer & Win Prizes</title>

    <style>
        .side_clo_heading {
            position: absolute;
            top: 15px;
            gap: 4px;
            display: flex;
            background: #007E23;
            align-items: center;
            font-weight: 500;
            font-size: 11px;
            line-height: 13px;
            color: #FFFFFF;
            left: 0;
            padding: 5px;
            border-radius: 0px 115px 111px 0px;
        }
        .main-heroHeading {
            font-weight: 700;
            font-size: 18px;
            line-height: 21px;
            margin-top:12px;
        }
        .main-herohelpHeading {
            font-weight: 300;
            font-size: 12px;
            line-height: 14px;
        }
        .mainherorightcont {
            width: 100%;
            max-width: 72px;
            text-align: center;
        }
        .hero-rightimg-box img {
            width:100%;
        }
        .hero-rightimg-box {
            background: #b34b0047;
            border-radius: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .mainherorightcont a {
            font-weight: 100;
            font-size: 7px;
            line-height: 8px;
            color: #000000;
        }
        .main-container-box{
            margin-top: 7px;
            border-top: 1px solid #e4e4e4;
            border-radius: 5px;
        }
        .qution-box{
            margin-top: 25px;
            /* background-color: #007E23; */
        }
    </style>
</head>
<body>
<?php 
include('/php/header.php'); 
?>  
    <main>
        <div class="container ">
        <div class="main-hero-cont" style="background: #FFE1CB; border-radius: 10px;">
                <!-- <div class="heroMoney_img">
                    <img src="money.png?version=0.0.3" alt="money">
                </div>
                <div class="rightHero_textbox">Answer & Win 4100 Rs</div>
                <a href="#winnerslist" class="winList" >See Winners List</a> -->
                <div class="side_clo_heading">
                    <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_668_328)">
                        <path d="M2.22922 7.08335V4.16669H3.08255V7.08335H2.22922ZM4.78922 7.08335V4.16669H5.64255V7.08335H4.78922ZM0.949219 3.33335V2.50002L5.21589 0.416687L9.48255 2.50002V3.33335H0.949219ZM0.949219 8.75002V7.91669H6.09055C6.10477 8.06252 6.12255 8.20308 6.14389 8.33835C6.16522 8.47363 6.19722 8.61085 6.23989 8.75002H0.949219ZM7.34922 5.52085V4.16669H8.20255V5.10419L7.34922 5.52085ZM8.62922 10C8.13855 9.88196 7.73137 9.60585 7.40767 9.17169C7.08397 8.73752 6.92227 8.25669 6.92255 7.72919V6.66669L8.62922 5.83335L10.3359 6.66669V7.72919C10.3359 8.25696 10.1742 8.73794 9.85077 9.1721C9.52735 9.60627 9.12017 9.88224 8.62922 10ZM8.31989 8.75002L9.80255 7.31252L9.35455 6.87502L8.31989 7.8646L7.90389 7.45835L7.45589 7.90627L8.31989 8.75002Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_668_328">
                        <rect width="10.24" height="10" fill="white" transform="translate(0.0959473)"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <span>GUARANTEED PRIZE</span>
                </div>
                <div class="mainhero-cont-box r-flex ali-c jut-sb">
                        <div class="mainheroleftcont">
                            <div class="main-heroHeading">Answer & Get 423 Rs</div>
                            <div class="main-herohelpHeading">for Every Participant</div>
                        </div>
                        <div class="mainherorightcont">
                            <div class="hero-rightimg-box">
                                <img src="assets/img/money.png?version=0.0.5" alt="money">
                            </div>
                            <a href="#">T & C applied</a>
                        </div>
                    </div>
            </div>
            
            <div class="main-container-box">
                <div class="qution-box">
                    <span>Q1</span>
                </div>
                <div class="q_proces_bar r-flex ali-c jut-sb">
                    <span class="proces_dash color_dash"></span>
                    <span class="proces_dash"></span>
                    <span class="proces_dash"></span>
                </div>
                <div class="main-heading">भारत किस महाद्वीप में स्थित है ?</div>
                <div class="choose-qution-from">
                    <form action="#" id="myForm" >
                        <input type="radio" value="0" name="a1" id="awn_1" class="answer_box" onclick="selected_answer(this)">
                        <label for="awn_1" class="answer-box-label r-flex ali-c jut-sb">
                            <div class="left-awn r-flex ali-c jut-c">
                                <span>A</span>
                            </div>
                            <div class="mid-awn">
                            अमेरिका
                            </div>
                            <div class="right-awn">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="10.5" stroke="#d4d4d4"/>
                                </svg>                                  
                            </div>
                            <div class="check-svg">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.736 6.97C15.8042 6.90036 15.8857 6.84504 15.9756 6.80728C16.0655 6.76951 16.162 6.75006 16.2595 6.75006C16.357 6.75006 16.4535 6.76951 16.5434 6.80728C16.6333 6.84504 16.7147 6.90036 16.783 6.97C17.069 7.259 17.073 7.72599 16.793 8.01999L10.88 15.01C10.8129 15.0837 10.7314 15.143 10.6406 15.1841C10.5498 15.2253 10.4515 15.2475 10.3518 15.2493C10.2521 15.2512 10.1531 15.2327 10.0608 15.195C9.96849 15.1573 9.88485 15.1011 9.815 15.03L6.217 11.384C6.07823 11.2425 6.0005 11.0522 6.0005 10.854C6.0005 10.6558 6.07823 10.4655 6.217 10.324C6.28524 10.2544 6.36669 10.199 6.45658 10.1613C6.54647 10.1235 6.64299 10.1041 6.7405 10.1041C6.838 10.1041 6.93452 10.1235 7.02441 10.1613C7.1143 10.199 7.19575 10.2544 7.264 10.324L10.316 13.417L15.716 6.992C15.7222 6.98427 15.7289 6.97692 15.736 6.97Z" fill="white"/>
                                    <circle cx="11" cy="11" r="10.5" stroke="white"/>
                                </svg>                                    
                            </div>
                        </label>

                        <input type="radio" value="0" name="a1" id="awn_2" class="answer_box" onclick="selected_answer(this)">
                        <label for="awn_2" class="answer-box-label r-flex ali-c jut-sb">
                            <div class="left-awn r-flex ali-c jut-c">
                                <span>B</span>
                            </div>
                            <div class="mid-awn">
                            ऑस्ट्रेलिया 


                            </div>
                            <div class="right-awn-2">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="10.5" stroke="#d4d4d4"/>
                                </svg>                                  
                            </div>
                            <div class="check-svg">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.736 6.97C15.8042 6.90036 15.8857 6.84504 15.9756 6.80728C16.0655 6.76951 16.162 6.75006 16.2595 6.75006C16.357 6.75006 16.4535 6.76951 16.5434 6.80728C16.6333 6.84504 16.7147 6.90036 16.783 6.97C17.069 7.259 17.073 7.72599 16.793 8.01999L10.88 15.01C10.8129 15.0837 10.7314 15.143 10.6406 15.1841C10.5498 15.2253 10.4515 15.2475 10.3518 15.2493C10.2521 15.2512 10.1531 15.2327 10.0608 15.195C9.96849 15.1573 9.88485 15.1011 9.815 15.03L6.217 11.384C6.07823 11.2425 6.0005 11.0522 6.0005 10.854C6.0005 10.6558 6.07823 10.4655 6.217 10.324C6.28524 10.2544 6.36669 10.199 6.45658 10.1613C6.54647 10.1235 6.64299 10.1041 6.7405 10.1041C6.838 10.1041 6.93452 10.1235 7.02441 10.1613C7.1143 10.199 7.19575 10.2544 7.264 10.324L10.316 13.417L15.716 6.992C15.7222 6.98427 15.7289 6.97692 15.736 6.97Z" fill="white"/>
                                    <circle cx="11" cy="11" r="10.5" stroke="white"/>
                                </svg>                                    
                            </div>
                        </label>

                        <input type="radio" value="1" name="a1" id="awn_3" class="answer_box" onclick="selected_answer(this)">
                        <label for="awn_3" class="answer-box-label r-flex ali-c jut-sb">
                            <div class="left-awn r-flex ali-c jut-c">
                                <span>C</span>
                            </div>
                            <div class="mid-awn">
                            एशिया 
                            </div>
                            <div class="right-awn-3">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="10.5" stroke="#d4d4d4"/>
                                </svg>                                  
                            </div>
                            <div class="check-svg">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.736 6.97C15.8042 6.90036 15.8857 6.84504 15.9756 6.80728C16.0655 6.76951 16.162 6.75006 16.2595 6.75006C16.357 6.75006 16.4535 6.76951 16.5434 6.80728C16.6333 6.84504 16.7147 6.90036 16.783 6.97C17.069 7.259 17.073 7.72599 16.793 8.01999L10.88 15.01C10.8129 15.0837 10.7314 15.143 10.6406 15.1841C10.5498 15.2253 10.4515 15.2475 10.3518 15.2493C10.2521 15.2512 10.1531 15.2327 10.0608 15.195C9.96849 15.1573 9.88485 15.1011 9.815 15.03L6.217 11.384C6.07823 11.2425 6.0005 11.0522 6.0005 10.854C6.0005 10.6558 6.07823 10.4655 6.217 10.324C6.28524 10.2544 6.36669 10.199 6.45658 10.1613C6.54647 10.1235 6.64299 10.1041 6.7405 10.1041C6.838 10.1041 6.93452 10.1235 7.02441 10.1613C7.1143 10.199 7.19575 10.2544 7.264 10.324L10.316 13.417L15.716 6.992C15.7222 6.98427 15.7289 6.97692 15.736 6.97Z" fill="white"/>
                                    <circle cx="11" cy="11" r="10.5" stroke="white"/>
                                </svg>                                    
                            </div>
                        </label>

                        <input type="radio" value="0" name="a1" id="awn_4" class="answer_box" onclick="selected_answer(this)">
                        <label for="awn_4" class="answer-box-label r-flex ali-c jut-sb">
                            <div class="left-awn r-flex ali-c jut-c">
                                <span>D</span>
                            </div>
                            <div class="mid-awn">
                            किसी में नहीं 
                            </div>
                            <div class="right-awn-4">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11" cy="11" r="10.5" stroke="#d4d4d4"/>
                                </svg>                                  
                            </div>
                            <div class="check-svg">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.736 6.97C15.8042 6.90036 15.8857 6.84504 15.9756 6.80728C16.0655 6.76951 16.162 6.75006 16.2595 6.75006C16.357 6.75006 16.4535 6.76951 16.5434 6.80728C16.6333 6.84504 16.7147 6.90036 16.783 6.97C17.069 7.259 17.073 7.72599 16.793 8.01999L10.88 15.01C10.8129 15.0837 10.7314 15.143 10.6406 15.1841C10.5498 15.2253 10.4515 15.2475 10.3518 15.2493C10.2521 15.2512 10.1531 15.2327 10.0608 15.195C9.96849 15.1573 9.88485 15.1011 9.815 15.03L6.217 11.384C6.07823 11.2425 6.0005 11.0522 6.0005 10.854C6.0005 10.6558 6.07823 10.4655 6.217 10.324C6.28524 10.2544 6.36669 10.199 6.45658 10.1613C6.54647 10.1235 6.64299 10.1041 6.7405 10.1041C6.838 10.1041 6.93452 10.1235 7.02441 10.1613C7.1143 10.199 7.19575 10.2544 7.264 10.324L10.316 13.417L15.716 6.992C15.7222 6.98427 15.7289 6.97692 15.736 6.97Z" fill="white"/>
                                    <circle cx="11" cy="11" r="10.5" stroke="white"/>
                                </svg>                                    
                            </div>
                        </label>

                        <span class="subline-text" id="text_below_option">Select correct option</span>

                        <!-- <button type="submit" id="sub_Btn" style="display: none;">Go to Next (2/4)</button> -->
                        
                    </form>
                    <div class="progras_bar" id="progress_bar" style="display: none;">
                        <span></span>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    <!-- <footer></footer> -->
    <?php include('php/winners.php'); ?>  

    <script>
    
       function myURL() {
         document.location.href = "2.php";
        }
    
      </script>
       
</body>
</html>