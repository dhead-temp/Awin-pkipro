<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include('php/head.php'
header('Location: php/post_data.php');

); 
?>  
    <title>Submit Details</title>

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
                <a href="#winnerslist" class="winList" onclick="gtag('event', 'see_winners_list');" >See Winners List</a>
            </div>
            <div class="main-container-box">
                <div class="form_heading">Enter Your Info to Proceed </div>
                <form action="php/post_data.php" class="get-lead-form" method="post">
                    <div class="tab">
                        <input type="text" name="name" placeholder="Name" id="name">
                        <label for="name" class="from_lable">Name</label>
                        <input type="number" name="mobileNumber" id="mobile_number" placeholder="Phone">
                        <label for="mobile_number" class="from_lable">Phone</label>
                        <input type="text" name="city_name" id="city_name" placeholder="Your City">
                        <label for="city_name" class="from_lable">Your City</label>
                        
                        <button type="submit" onclick="gtag('event', 'submitted_details');">Submit Details</button>
                    </div>
                </form>
                
            </div>
                <span ></span>
            </div>
        </div>
    </main>
    <!-- <footer></footer> -->

    <script>
        function checked_answer() {
          document.getElementById("text").style.display = "none";
          document.getElementById("sub_Btn").style.display = "flex";
         //  console.log('dgd');
        
        }
    </script>
</body>
</html>