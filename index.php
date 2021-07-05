<?php 
	
	// checking if the form is submit
	if ( isset($_POST['submit']) ) {
		$name	= $_POST['name'];
		$email		= $_POST['email'];

		$to	 		  = 'sahanakalanka818@gmail.com';
		$mail_subject = 'Message from Website';
		$email_body   = "Message from Contact Us Page of the Website: <br>";
		$email_body   .= "<b>From:</b> {$name} <br>";
		$email_body   .= "<b>Email:</b> {$email} <br>";
		

		$header       = "From: {$email}\r\nContent-Type: text/html;";

		$send_mail_result = mail($to, $mail_subject, $email_body, $header);

		if ( $send_mail_result ) {
			echo "Message Sent.";
		} else {
			echo "Message Not Sent.";
		}
	}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;800&family=Lobster&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Baloo+Tammudu+2:wght@400;800&family=Lobster&display=swap');
      *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Poppins', sans-serif;
        
      }

      html,body{
            /* background: url('img/bg.jpg'); */
            background: linear-gradient(
            to bottom,
            rgba(0,0,0, 0),
            rgba(0,0,0, 100)
            ),url('img/bg.jpg');
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            place-items: center;
            display: grid;
            background-repeat: no-repeat;
      }

      .wrapper{
          color: #fff;
          max-width: 900px;
          text-align: center;
          padding: 0 50px;
      }


      /*test*/

      .wrapper form{
          margin: 50px 0;
      }
      .wrapper form .email-field{
          height: 50px;
          width: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
      }
      form .email-field input{
          width: 60%;
          height: 100%;
          padding-left: 20px;
          border: none;
          outline: none;
          font-size: 18px;

      }
      form .email-field button{
          height: 100%;
          width: 200px;
          border: none;
          outline: none;
          background: #FC4782;
          color: #fff;
          font-size: 20px;
          cursor: pointer;
          transition: background-color 0.3s ease;}

      form .email-field button:hover{
          background: #000;
      }
      .wrapper .title{
          font-size: 50px;
          font-weight: 400;
          font-family: 'Abril Fatface', cursive;
          color:  #fff741;
          

      }

      .email-field #Name{
        background-color: rgb(189 192 192);
      }
      .email-field #Email{
        background-color: #fff;
      }
      .wrapper .title #cs{
        font-family: 'Abril Fatface', cursive;
        /* color: #FC4782; */


      }
      /*countdown*/
      .wrapper .count-down{
        display: flex;
        width: 100%;
        height: 100px;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-around;
    }

    .wrapper .count-down .timer{
        width: 100px;
        height: 100%;
        border: 2px solid;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;

    }
    .count-down .timer .numb{
        font-size: 25px;
        font-weight: 500;
    }

    .count-down .timer .text{
        font-size: 15px;
    }

    .count-down  .clone{
        font-size: 45px;
    } 

    /* Style all font awesome icons */
    .fa {
    padding: 20px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
    }

    /* Add a hover effect if you want */
    .fa:hover {
    opacity: 0.7;
    }

    /* Set a specific color for each brand */

    /* Facebook */
    .fa-facebook {
    background: #3B5998;
    color: white;
    border-radius: 100%;
        padding: 10px 13px;
        

    }

    /* Twitter */
    .fa-twitter {
    background: #55ACEE;
    color: white;
    border-radius: 100%;
        padding: 10px 13px;

    }
    .fa-whatsapp{
    background: #128C7E;
    color: white;
    border-radius: 100%;
    padding: 10px 13px;

    }
    #sicons{
    width: 30%;
    display: flex;
    justify-content: space-between;
    margin: 38px 269px;
        
    }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Our Website is <span id="cs">Coming soon,</span> subscribe us to<br> get lates updates!</div>
      <form action="index.php" method="post" class="form">
          <div class="email-field">
              <input type="text" name="name" placeholder="Enter Your Name" id="Name" required>
              <input type="email" name="email" placeholder="Enter Your Email" id="Email" required>
              <button type="submit" name="submit">Subscribe</button>
          </div>

      </form>
      <div class="count-down">
            <div class="timer day">
                <div class="count">
                    <div class="numb">00</div>
                    <div class="text">Days</div>
                </div>
            </div>
            <div class="clone">:</div>
            <div class="timer hour">
                <div class="count">
                    <div class="numb">00</div>
                    <div class="text">Hours</div>
                </div>
            </div>
            <div class="clone">:</div>
            <div class="timer min">
                <div class="count">
                    <div class="numb">00</div>
                    <div class="text">Minutes</div>
                </div>
            </div>
            <div class="clone">:</div>
            <div class="timer sec">
                <div class="count">
                    <div class="numb">00</div>
                    <div class="text">Seconds</div>
                </div>
            </div>



        </div>
        <div id="sicons">
          <div class="i"> <a href="#" class="fa fa-facebook"></a></div>
          <div class="i"><a href="#" class="fa fa-twitter"></a></div>
          <div class="i"><a href="#" class="fa fa-whatsapp"></a></div>
        </div>
        
    </div>
    
   <!-- countdown script -->
    <script>
        const day = document.querySelector(".day .numb");
        const hour = document.querySelector(".hour .numb");
        const min = document.querySelector(".min .numb");
        const sec = document.querySelector(".sec .numb");
        var timer = setInterval(()=>{
            var currentDate = new Date().getTime();
            var launchDate = new Date('sep 20, 2021 13:00:00').getTime();
            var duration = launchDate - currentDate;
            var days = Math.floor(duration / (1000 * 60 * 60 * 24));
            var hours = Math.floor((duration % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((duration % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((duration % (1000 * 60)) / 1000);
            day.innerHTML = days;
            hour.innerHTML = hours;
            min.innerHTML = minutes;
            sec.innerHTML = seconds;
            if(days < 10){
                day.innerHTML = '0' + days;
            }
            if(hours < 10){
                day.innerHTML = '0' + hours;
            }
            if(minutes < 10){
                day.innerHTML = '0' + minutes;
            }
            if(seconds < 10){
                day.innerHTML = '0' + seconds;
            }
            if(duration < 0){
                clearInterval(timer);
            }
        },1000);
    </script>
  </body>

    


        
  </html>