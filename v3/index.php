<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include('../php/head.php'); 
?>  
  
    <title>Answer & Win Prizes</title>

    <style>
        body{
            background: #090F1E;
        }
        header{
            background-color: #090F1E;
            padding: 19px 0px;
        }
        nav{
            padding:11px 12px;
            border-radius: 10px;
        }
        .right_navBar{
            font-weight: 700;
            font-size: 10px;
            line-height: 12px;
            background: #FFD63B;
            color: #2C2C2C;
            padding: 2px 7px;
            border-radius: 10px;
            text-decoration: none;
        }
        .main-hero-cont{
            margin-top: 14px;
        }
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
            background: linear-gradient(180deg, #0095FF 0%, rgba(4, 119, 227, 0.526042) 99.99%, rgba(8, 85, 196, 0) 100%);
            filter: drop-shadow(0px 6px 22px rgba(5, 109, 218, 0.3));
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
            background-color: #090F1E;
            border: 1px solid #151C30;
        }
        .qution-box{
            margin-top: 25px;
            /* background-color: #007E23; */
        }
        .main-hero-cont{
            padding:17px;
        }

        main{
            background: #090F1E;
            border: 1px solid #151C30;
        }
        .qution-box{
            background: linear-gradient(180deg, #007E23 0%, rgba(0, 126, 35, 0.5625) 96.35%, rgba(0, 126, 35, 0) 110%);
            border: 1px solid #141B2E;
        }
        .color_dash{
            background: linear-gradient(180deg, #007E23 0%, rgba(0, 126, 35, 0.5625) 96.35%, rgba(0, 126, 35, 0) 100%);
        }
        .main-heading{
            color: #ffffff;
        }
        /* .answer_box:checked+label{
            border: 1px solid #344a86;
            background: linear-gradient(180deg, #0095FF 0%, rgba(4, 119, 227, 0.526042) 99.99%, rgba(8, 85, 196, 0) 100%);
            filter: drop-shadow(0px 5.5px 20.1667px rgba(5, 109, 218, 0.3));
            border-radius: 5px;
        } */
        .answer_box:checked+label{
            background: linear-gradient(180deg, #0095FF 0%, rgba(4, 119, 227, 0.526042) 99.99%, rgba(8, 85, 196, 0) 100%);
            filter: drop-shadow(0px 5.5px 20.1667px rgba(5, 109, 218, 0.3));
            /* border: 1px solid rgba(5, 109, 218, 0.3);  */
        }
        .win_user{
            font-weight: 700;
            font-size: 14px;
            line-height: 16px;
            background: linear-gradient(180deg, #FFF173 0.52%, #FFB800 100%);
            color: #090F1E;
        }
        .win_user_right{
            color: #007E23;
        }
        .recent_head{
            color: #ffffff;
        }
        .win_user_left{
            gap: 6px;
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
                        <circle cx="11" cy="11" r="11" fill="#027EDE"/>
                        <path d="M6.96666 6.2333C6.96666 6.13606 7.00529 6.0428 7.07405 5.97403C7.14282 5.90527 7.23608 5.86664 7.33333 5.86664H14.6667C14.7639 5.86664 14.8572 5.90527 14.9259 5.97403C14.9947 6.0428 15.0333 6.13606 15.0333 6.2333C15.0333 6.62784 15.0245 7.0033 15.0084 7.3597C15.2982 7.40769 15.5754 7.51321 15.8237 7.67004C16.072 7.82687 16.2865 8.03184 16.4543 8.27286C16.6222 8.51388 16.7401 8.78607 16.801 9.07338C16.862 9.36069 16.8649 9.6573 16.8094 9.94572C16.7539 10.2341 16.6412 10.5085 16.478 10.7527C16.3148 10.9969 16.1043 11.2059 15.859 11.3675C15.6137 11.529 15.3386 11.6398 15.0498 11.6933C14.761 11.7468 14.4644 11.742 14.1775 11.679C13.5982 13.0467 12.8003 13.7155 12.1 13.8871V15.4806L13.145 15.7417C13.2873 15.7769 13.4215 15.8407 13.5388 15.9287L14.8867 16.94C14.9482 16.9861 14.9937 17.0505 15.0166 17.124C15.0396 17.1974 15.0388 17.2762 15.0145 17.3493C14.9902 17.4223 14.9435 17.4858 14.8811 17.5308C14.8186 17.5758 14.7436 17.6 14.6667 17.6H7.33333C7.25637 17.6 7.18136 17.5758 7.11893 17.5308C7.0565 17.4858 7.00981 17.4223 6.98548 17.3493C6.96114 17.2762 6.96039 17.1974 6.98334 17.124C7.00628 17.0505 7.05176 16.9861 7.11333 16.94L8.46119 15.9287C8.57853 15.8407 8.71273 15.7769 8.85499 15.7417L9.89999 15.4806V13.8871C9.19966 13.7155 8.40179 13.0467 7.82246 11.6783C7.53542 11.7416 7.23862 11.7467 6.94957 11.6934C6.66052 11.64 6.38509 11.5293 6.13954 11.3677C5.894 11.2062 5.68332 10.9971 5.51994 10.7527C5.35657 10.5084 5.24382 10.2338 5.18834 9.94512C5.13287 9.65647 5.1358 9.35963 5.19695 9.07214C5.25811 8.78464 5.37626 8.51231 5.54442 8.27124C5.71259 8.03017 5.92735 7.82524 6.17604 7.66855C6.42472 7.51186 6.70228 7.4066 6.99233 7.35897C6.97506 6.984 6.9665 6.60868 6.96666 6.2333ZM7.03926 8.09597C6.6566 8.16599 6.31742 8.38515 6.09635 8.70524C5.87527 9.02534 5.79041 9.42014 5.86043 9.8028C5.93044 10.1855 6.14961 10.5246 6.4697 10.7457C6.78979 10.9668 7.1846 11.0517 7.56726 10.9816C7.32306 10.2116 7.13606 9.26124 7.03926 8.09597ZM14.4335 10.9816C14.8161 11.0517 15.2109 10.9668 15.531 10.7457C15.8511 10.5246 16.0703 10.1855 16.1403 9.8028C16.2103 9.42014 16.1254 9.02534 15.9044 8.70524C15.6833 8.38515 15.3441 8.16599 14.9615 8.09597C14.8639 9.26197 14.6769 10.2116 14.4335 10.9816Z" fill="white"/>
                    </svg>                        
                    <span>Play423</span>
                </div>
                <a href="#" onclick="gtag('event', 'check_other_contest');" class="right_navBar">Check Other Contests</a>
            </nav>
        </div>
        
    </header>
    <main>
        <div class="container ">
        <?php 
include('php/header.php'); 
?>  
            
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
    <?php include('/php/winners3.php'); ?>  

    <script>
    
       function myURL() {
         document.location.href = "2.php";
        }
    
      </script>
       
</body>
</html>