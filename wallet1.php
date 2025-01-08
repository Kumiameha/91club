<?php 
   ob_start();
   session_start();
    if (isset($_SESSION['frontuserid'])) {
       $frontUserId = $_SESSION['frontuserid'];}
  else{header("location:login.php");exit();}?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <?php include'head.php' ?>
      <link rel="stylesheet" href="assets/css/style.css">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
      <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <style>
         .appHeader1 {
         background-color#fff !important;
         border-color: #fff !important;
         }
         * {
         box-sizing: border-box;
         }
         /* Create two equal columns that floats next to each other */
         .column1 {
         padding-left: 15px;
         padding-right: 15px;
         width: calc(100% / 3);
         float: left;
         /* Should be removed. Only for demonstration */
         }
         /* Clear floats after the columns */
         .row1:after {
         content: "";
         display: table;
         clear: both;
         margin-bottom: -0.50cm;
         }
         /* Create two equal columns that floats next to each other */
         .column {
         float: center;
         width: calc(100% / 2);
         /* Should be removed. Only for demonstration */
         }
         /* Clear floats after the columns */
         .row:after {
         content: "";
         display: table;
         clear: both;
         }
         .appContent3 {
         position: relative;
         /*background: url(../images/icons/mytop.png) no-repeat top;*/
         background-color:#fd877f;
         background-size: cover;
         height:230px;
         }
         .user-block img {
         width: 40px;
         height: 40px;
         float: left;
         margin-right:10px;
         margin-top:-10px;
         background:#333;
         }
         .img-circle {
         border-radius: 50%;
         }
         .accordion .btn-link {
         box-shadow:none;
         margin:0px 0px;
         color: #333 !important;
         font-size: 16px;
         font-weight: normal;
         }
         .accordion .collapsed {
         border:none;
         }
         .accordion .show {
         }
         .accordion .sub-link {
         box-shadow:none;
         color: #333 !important;
         font-size: 14px;
         font-weight: normal;
         display:block;
         }
         .accordion .sub-link:hover {
         color:#00F !important;
         }
         .accordion .btn-link:hover {
         background:#F5F5F5;
         }
         .accordion .btn-link {
         position: relative;
         }
         .btn3 {
         background-color: #FFD700;
         border-radius: 15px 15px 15px 15px;
         border: 1px solid white;
         padding-bottom: 4px;
         padding-top: 4px;
         padding-left: 25px;
         padding-right: 25px;
         transition: 0.5s;
         }
         .accordion .btn-link::after {
         content: "\f105";
         color: #545E68;
         top: 12px;
         right: 9px;
         position: absolute;
         font-family: "FontAwesome";
         font-size:24px;
         }
         .btn1 {
         border-radius: 15px 0px 15px 0px;
         border: 2px solid white;
         padding-bottom: 4px;
         padding-top: 4px;
         padding-left: 25px;
         padding-right: 25px;
         transition: 0.5s;
         }
         .right{
         float:right;
         }
         .btn2 {
         border-radius: 5px 05px 5px 5px;
         border: 2px solid white;
         padding-bottom: 4px;
         padding-top: 4px;
         padding-left: 30px;
         padding-right: 30px;
         transition: 0.5s;
         }
         .accordion .btn-link[aria-expanded="true"]::after {
         content: "\f106";
         }
         .light{
         height: 24px;
         padding: 0px 0px;
         margin: 5px 2px;
         border-radius: 20px;
         width: 24px;}
         .light1{
         height: 26px;
         padding: 0px 0px;
         margin: 5px 2px;
         border-radius: 20px;
         width: 26px;}
         .appHeader1 .right{
         top: 1%;
         right: 0.6rem;
         height: 30px;
         }
         .sticky {
         position: fixed;
         }
         .sticky + .content {
         padding-top: 102px;
         }
         .rightic{float:right;margin-top:-27px;}
         .intro{
         font-size:20px; font-weight:400;
         }
         .imgleft{
         padding:0 10px;
         }
         .profit{height:50px;}
         .wallet{height:64px;float:left;}
         #quick-links  .quick-links-box a{
         text-align: center;
         }
         #quick-links .quick-links-box{
         margin-top:-24px;
         border-radius: 7px 7px 5px  5px;
         padding: 20px 20px;
         background-color: #fff;
         position: relative;
         width: 100%;
         height:310px;
         color: #5E5E5E;
         font-weight: 500;
         text-align: center;
         }
         #quick-links  .quick-links-box1 a{
         text-align: center;
         }
         #quick-links .quick-links-box1{
         /*background: url(../images/icons/mytop11.png) no-repeat top;*/
         /*background-size: cover;*/
         background-color:white;
         height:220px;
         margin-top:25px;
         border-radius: 10px;
         background-size: 100% 100%;
         box-shadow: 0 0 0px 0px rgb(92 186 71 / 60%);
         padding: 10px 10px;
         background-color: #fff;
         position: relative;
         margin:0 -15px;
         margin-bottom:15px;
         height:160px;
         color: #5E5E5E;
         font-weight: 500;
         text-align: center;
         }
         .banner{
         margin: 0 .4rem .4rem;
         height: 1.38667rem;
         background: url(../images/icons/banner.png) no-repeat 0 0;
         background-size: 100% auto;
         font-size: .53333rem;
         color: #fff;
         position: relative;
         }
         .btnss{
         border-radius: 5px; height:45px; font-weight: 500; font-size: 14px;  
         width: 155px;
         margin: 0 auto;
        border: 1px solid #1BE18C;
         color: #fff;
         background-color: #1BE18C;
         box-shadow: 0 0 0px 0px rgb(207 0 69 / 15%);
         }
         .btns{
         border-radius: 5px; height:45px; font-weight: 500; font-size: 14px;  
         width: 155px;
         margin: 0 auto;
         border: 1px solid #6B6C6C;
         color: #FFF;
         background-color: #6B6C6C;
         box-shadow: 0 0 0px 0px rgb(207 0 69 / 15%);
         }
         .btnss:focus{
             outline:none;
             color:#fff;
         }
         .btns:focus{
             outline:none;
             color:#fff;
         }
         .banner .pageTitle {
         padding-top:18px;
         font-size: 21px;
         font-weight: 400;
         letter-spacing: .02em;
         color:#fff;
         }
         .three{
         width:50px;
         height:50px;
         margin-bottom:10px;
         }
         .imggg{
         margin-left: -18px; margin-right: 12px;  width:35px; height: 35px;
         }
         .cardheader{
         margin-top:-13px;
         margin-bottom:7px;
         }
         .cardheader1{
         margin-top:7px;
         margin-bottom:-13px;
         }
         .icon1{
         width: 80%;
         position: absolute;
         left: 10%;
         top:185px;
         height: 5%;
         background: url(../images/icons/walletbanner.png) no-repeat 0 0;
         background-size: 100% 100%;
         }
         .balance {
         padding: 0.4rem 0.4rem 0;
         background: linear-gradient(135deg,#fe9b0c,#ffcc51);
         border-radius: 0.26667rem;
         background-size: 100% 100%;
         box-shadow: 0 0.05333rem 0.42667rem 0 rgb(253 188 51 / 55%);
         }
         .m-t-10 {
         margin-top: 0.26667rem!important;
         }
         .txt {
         font-size: .4rem;
         color: #fff;
         }
         .c-row-middle {
         align-items: center;
         }
         .c-row {
         display: flex;
         }.c-row-middle-center {
         align-items: center;
         }
         .c-row-center, .c-row-middle-center {
         justify-content: center;
         }
         .c-row {
         display: flex;
         }
         .money {
         margin: 0.32rem 0;
         color: #fff;
         font-weight: 600;
         font-size: .8rem;
         }
         element.style {
         width: 25px;
         height: 25px;
         }
         .balance .img {
         width: 0.58667rem;
         height: 0.48rem;
         }
         .m-l-15 {
         margin-left: 0.4rem!important;
         }
         .van-image {
         position: relative;
         display: inline-block;
         }
         .van-image__error, .van-image__img, .van-image__loading {
         display: block;
         width: 100%;
         height: 100%;
         }
         .info {
         width: 100%;
         height: 1.06667rem;
         }
         .c-row {
         display: flex;
         }
         .appContent1{
         background:white;
         margin:16px;
         border-radius:5px;
         }
         .left{
         float:left;
         }
         .image-spin {
         animation: spin 2s linear infinite;
         }
         @keyframes spin {
         0% { transform: rotate(0deg); }
         100% { transform: rotate(360deg); }
         }
         .walletimg{width:28px;margin-right:5px;}
         .walletimg1{width:25px;margin-top:-12px; margin-left:10px;}
         .bottomtext{font-size:16px;font-weight:400;color:#FF350A;}
         
.imggg{
      width: 66px;
    height: 42px;
    text-align: center;
    justify-content: center;
    display: flex;
    margin-left: auto;
    margin-right: auto;
    margin-top: -13px;
}
.qli img{
    width:30px;
}
.qli a{
        font-size: 12px;
}
      </style>
   </head>
   <body style="background:#f3f0f0 !important;height:125vh !important;">
      <?php
         include("include/connection.php");
         
         $userid=$_SESSION['frontuserid'];
         $selectruser=mysqli_query($con,"select * from `tbl_user` where `id`='".$userid."'");
         $userresult=mysqli_fetch_array($selectruser);
         $selectwallet=mysqli_query($con,"select * from `tbl_wallet` where `userid`='".$userid."'");
         $walletResult=mysqli_fetch_array($selectwallet);
         $today=date('Y-m-d');
         ?>
      <!-- Page loading -->
      <!-- * Page loading --> 
      <!--<div id="header" class="appHeader1" >-->
      <!--   <div class="pageTitle">Wallet</div>-->
      <!--   <div class="right ">-->
      <!--      <a href="help.php" class="icon goBack"> <img  src="images/icons/headphone.png" class="back"> </a>-->
      <!--   </div>-->
      <!--</div>-->
      <!-- App Header -->
      <div style="margin-top:0px" class="appContent3 text-white">
         <div class="justify-centent-center" style="padding:20px;  text-align:center;display:flex;flex-direction:column;">
             <p style="    font-weight: 500;font-size: x-large;
    margin-top: -8px;">Wallet</p>
            <div style="padding-bottom:10px;">
               <img class="img-circle img-bordered-lg profit" src="assets/img/wallet.png">
            </div>
             <span style="color:white;  font-weight:500; font-size:32px;margin-top: 10px">€ <span id="balance" > <?php echo number_format(wallet($con,'amount',$userid), 2);?></span>
              <p style=" 

    font-weight: 400;
    line-height: .46667rem;
    letter-spacing: .04em;
    font-size: 20px;
    text-align: center;margin-top: 10px;">Total balance</p>
            <!--<span class="intro"><?php echo user($con,'username',$userid);?></span>-->
         </div>
      </div>
      <!--<div class="icon1"> </div>-->
      <section id="quick-links">
         <div class="container">
            <div class="quick-links-box">
               <div class="container">
                  
                  <div class="quick-links-box1">
                    
                     <div class="row align-items-center justify-content-between" >
                        <div  class="col-6 text-center" style="display: flex;
    flex-direction: column;" >  <img class="imggg" src="assets/img/circle.png"><span class="bottomtext"> <?php  $totalwith = mysqli_fetch_assoc(mysqli_query($con,"SELECT sum(amount) as total FROM tbl_withdrawal WHERE userid = '".$userid."' and status = 0")); $total = $totalwith['total']; if($total == ""){echo "0";}else{echo $total;}?><br> History Withdrawal</span></div>
                        <div class="col-6 text-center" style="display: flex;
    flex-direction: column;"> <img class="imggg" src="assets/img/circle.png">
                           <span class="bottomtext"> € <?php  $totalwith = mysqli_fetch_assoc(mysqli_query($con,"SELECT sum(amount) as total FROM tbl_withdrawal WHERE userid = '".$userid."' and status = 0 and date(`createdate`)='".$today."'")); $total = $totalwith['total']; $totalwith['total']; if($total == ""){echo "0";}else{echo $total;}?><br>Today Withdrawal</span>
                        </div>
                        <button style="width: 90%;
    color: white;
    background-color: red;
    border-radius: 68px;
    border: 2px solid red;
    text-align: center;
    justify-content: center;
    display: flex;
    margin-left: auto;
    margin-right: auto;
    margin-top: 14px;
    height: 37px;
    font-size: 22px;
    padding-top: 6px;" >Main Wallet Transfer</button>
    
    
                     </div>
                  </div>
               </div>
               
               <div style="   text-align: center;
    justify-content: center;   padding: 20px;
    text-align: center;
    display: flex;
    flex-direction: row;background-color:transparent;margin-top: -25px;margin-left:auto;margin-right:auto;" class="qli">
                   <a style=""  href="recharges.php" > <div style="background-color:#fff;border:1px solid grey;border-radius: 12px;padding: 10px 8px;">   <img  src="./images/dpt.png"></div>Deposit</a>
                   
                    <a href="withdrawals.php">  <div style="background-color:#fff;border:1px solid grey;border-radius: 12px;padding: 10px 8px;">   <img  src="./images/wtl.png"></div>Withdraw</a>
                  <a href="rechargehistory.php">  <div style="background-color:#fff;border:1px solid grey;border-radius: 12px;padding: 10px 8px;">   <img  src="images/depo.png"></div>Deposit history</a>
                 <a href="withdrawalrecord.php" >  <div  style="background-color:#fff;border:1px solid grey;border-radius: 12px;padding: 10px 8px;">   <img  src="images/withd.png"></div>Withdrawal History</a>
    
                   
                   </div>
              
            </div>
         </div>
      </section>
      
      
          
      
         <div style=" row-gap: 10px;  text-align: center;
    justify-content: center;   padding: 20px;
    text-align: center;
    display: flex;
    flex-direction: row;flex-wrap: wrap;background-color:transparent;margin-top: 55px;margin-left:auto;margin-right:auto;height:auto;justify-content:space-between">
       <div style="box-shadow: 4px 5px 5px #fd877f ;background-color:white;color:black;border-radius: 12px;width: 80px;padding-top: 10px;height:85px;">   <img " src="assets/img/deposit.png"></div>
             <div style="box-shadow: 4px 5px 5px #fd877f ;background-color:white;color:black;border-radius: 12px;width: 80px;padding-top: 10px;height:85px;">   <img " src="assets/img/deposit.png"></div>      
             <div style="box-shadow: 4px 5px 5px #fd877f ;background-color:white;color:black;border-radius: 12px;width: 80px;padding-top: 10px;height:85px;">   <img " src="assets/img/deposit.png"></div>     
             <div style="box-shadow: 4px 5px 5px #fd877f ;background-color:white;color:black;border-radius: 12px;width: 80px;padding-top: 10px;height:85px;">   <img " src="assets/img/deposit.png"></div>     
             <div style="box-shadow: 4px 5px 5px #fd877f ;background-color:white;color:black;border-radius: 12px;width: 80px;padding-top: 10px;height:85px;">   <img " src="assets/img/deposit.png"></div>
                    <div style="box-shadow: 4px 5px 5px #fd877f ;background-color:white;color:black;border-radius: 12px;width: 80px;padding-top: 10px;height:85px;">   <img " src="assets/img/deposit.png"></div>
                           <div style="box-shadow: 4px 5px 5px #fd877f ;background-color:white;color:black;border-radius: 12px;width: 80px;padding-top: 10px;height:85px;">   <img " src="assets/img/deposit.png"></div>
                                  <div style="box-shadow: 4px 5px 5px #fd877f ;background-color:white;color:black;border-radius: 12px;width: 80px;padding-top: 10px;height:85px;">   <img " src="assets/img/deposit.png"></div>
                                         <div style="box-shadow: 4px 5px 5px #fd877f ;background-color:white;color:black;border-radius: 12px;width: 80px;padding-top: 10px;height:85px;">   <img  src="assets/img/deposit.png"></div>
    
    </div>
      
      
         <!-- app Footer -->
         <!-- * app Footer --> 
      </div>
      <br><br> <br><br>
      <!-- appCapsule -->
      <?php include("include/footer.php");?>
      <!-- Jquery --> 
 
      <script>
         function reloadbtn(id){
             $('#loader').modal({backdrop: 'static', keyboard: false})  
          $('#loader').modal('show');
         
         $.ajax({
             type: "Post",
             data:"userid=" + id,
             url: "getwalletbalance.php",
             success: function (html) {
         	 
         			document.getElementById('balance').innerHTML =html;
               return false;
               },
               error: function (e) {}
               });
         	
         	}
      </script>
     <script>
         var spinImage = document.getElementById("spin-image");
         
         spinImage.addEventListener("click", function() {
         spinImage.classList.add("image-spin");
         
         setTimeout(function() {
         spinImage.classList.remove("image-spin");
         }, 2000);
         });
         
      </script>
      <script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
      <!-- Bootstrap--> 
      <script src="assets/js/lib/popper.min.js"></script> 
      <script src="assets/js/lib/bootstrap.min.js"></script> 
      <!-- Owl Carousel --> 
      <script src="assets/js/plugins/owl.carousel.min.js"></script> 
      <!-- Main Js File --> 
      <script src="assets/js/app.js"></script>
      <?php  include("include/pagestrick.php");?>
   </body>
</html>