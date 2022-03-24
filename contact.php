<?php
/*
 Template Name: Contact-page
 */
get_header();

?>
  <?php get_template_part('onload') ?>

<main id="primary" class="site-main">
        <style>
            .sp{
                left:-15.50% !important;
            }
            .main-contact-1{
                display:flex;
                flex-direction:column;
                align-items:flex-start;
            }
            .lorem{
                margin:30px;
                width:90%;
                text-align:left;
            }
            
            .form-content{
                
                background:transparent;
                margin-left:5%;
                width:90%;
                height:400px; 
            }
            .hidden{
               
                display: none !important;
            }
            
            
              
            .message-hidden{
                left:15%;
                top:-10%;
                position:absolute;
                z-index:6001;
                width: 472px;
                height: 169px;
                background: #FFFFFF;
                border-radius: 24px;
                text-align:left;
                padding:30px 0px 0 40px ;
               
            }
            .message-hidden img.x-hidden{
                position:relative;
                float:right;
                margin-right:20px;
                margin-top:-15px;
                cursor:pointer;
            }
             table.table-contact{
                border:none;
                border-collapse: separate;
                border-spacing: 40px 20px;
                max-width: 800px;
            }
             table.table-contact tr{
               padding:20px;
            }
            .form-content table tr td{
                border:none;
                background: #FFFFFF;
                box-shadow: inset -1px 3px 3px rgba(179, 91, 11, 0.5);
                border-radius: 16px;
                height: 56px;
                width:auto;
               
            }
            .form-content table tr td input#btn{
                width:100%;
                border-radius:inherit;
                height:100%;
                background: #FF000A;
                box-shadow: 0px 10px 20px #BD000B;
                border:none;
                font-family: 'komi';
                font-style: normal;
                font-weight: 600;
                font-size:24pt;
                color: #FFFFFF;
                cursor: pointer;
                
            }
                
            
            .form-content table tr td input{
                border:none;
                width:100%;
                height:100%;
                border-radius:inherit;
                padding-left:10px;
                background-color:#ffffff;
            }
            .form-content table tr td textarea{
                width: 100%;
                height: 110px;
                border:none;
                padding-left:10px;
                border-radius:inherit;
            }

            .mess{
                width:300px;
                height:20px;
                background:transparent;
                position: relative;
                z-index:6001;
               left:50%;
               bottom:25%;
            }
            #error{
                color:red;
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 700;
                cursor: not-allowed;

            }
            #ok{
                color:green;
                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 700;
                cursor: not-allowed;
            }



            .bg-small{
                flex:1;
                
                background-image:url("<?php echo get_template_directory_uri();?>/image/bg-small.png");
                background-size:100%;
                width:100%;
                height:100%;
                background-repeat:no-repeat;
                border-radius:30px;
                margin-bottom:2px;
                border: 3px dotted #FFB489;
                background-size: 100% 100%;
                display:flex;
                flex-direction:row;
                align-items:center;
                justify-content:left;
                text-align:left;
                
            }
            .address-icon{
                width:10%;

                margin-left:30px;
               position: relative;
               bottom:10px;
               animation: address 2000ms ease-in-out infinite;

            }
            .email-icon{
                width:10%;
                margin-left:30px;
                position: relative;
               bottom:10px;


            }
            .phone-icon{
                width:10%;
                margin-left:30px;
                position: relative;
               bottom:10px;
              
              
            }
            .addres-site{
                margin-left:30px;
                padding: 0px 10px;
                width:70%;
                height:auto;
                display:inline;
                align-item:left;
            }
            .google-map{
                height:500px;
                width:560px;
                position: absolute;
                right:50px;
                bottom:0px;
                background:transparent;
                z-index: 200;
            }
            .google-map input#btn-map{
                visibility: hidden;
            }
            .google-map iframe.if-map-1{
                width:100%;
                height:100%;
                position: relative;
                top:0;
                display: none;
            }
            input[type="checkbox"]:checked~  iframe{
                display:block;
            }
            label{
                cursor: pointer;
            }
            @keyframes address {
                0%{transform:translateY(0px);}
                50%{transform:translateY(-20px);}
                100%{transform:translateY(0px);}
            }

                    
              
    


        </style>
    <div class="main-content">
            <div class="content-container">
                
            </div>
                <div class="heading-title">
                    <img id="contact" src="<?php echo get_template_directory_uri();?>/image/Liên hệ.png">
                </div>
                <div class="main_interaction">
                    <div class="main-left main-contact-1">
                         <img class="main-left-human sp" src="<?php echo get_template_directory_uri();?>/image/Alex.png" alt="">" 

                        <div class="lorem">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumqu
                            e totam inventore obcaecati rerum magni al
                            iquid, vel, temporibus nulla cupiditate odit in quam possimus
                             distinctio! Possimus aperiam veniam tenetur quae alias.</div>
                        <div class="form-content">
                            <div class="hidden  message-hidden">
                                <img id="x" class="x-hidden" src="<?php echo get_template_directory_uri();?>/icon/x.png" alt="">
                               
                                <p>Gửi liên hệ thànhh công.</p>
                                <p>Vui lòng đợi phản hồi từ chúng tôi, bạn nhé!</p>
                                
                            </div>                          
                            <form action="#" id="form-contact" method="POST" name="form1" target="hidden_iframe" >
                                <table class="table-contact">
                                   
                                    <tr>
                                        <td style="width:293px"><input type="text" name="name" id="name" placeholder="Tên" require></td>
                                        <td><input type="email" name="email" id="email" placeholder="Email"></td>

                                    </tr>

                                    <tr>
                                        <td><input type="tel"  id="sdt"  name="sdt" placeholder="Số điện thoại"></td>
                                        <td><input type="text" name="address" id="address" placeholder="Địa chỉ"></td>
                                    </tr>

                                    <tr>
                                        <td colspan=2>
                                            <textarea name="message" id="message" placeholder="Lời nhắn" cols="30" rows="10"></textarea>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td ><input type="submit" name="btn-submit" id="btn" value="Gửi liên hệ"></td>
                                    </tr>



            
                                </table>
                            </form>
                            <div class="mess" id="error">
                                 
                             </div>
                             <div class="mess" id="ok">
                                 
                             </div>
                            <iframe class = "myifram hidden" name="hidden_iframe"></iframe>
                       </div>
                       
                    </div>
                    <div  id="main-right-contact">
                        <div  class="address bg-small">

                            <div class="address-icon">
                                
                            <label id="l1" for="btn-map"><img src="<?php echo get_template_directory_uri();?>/image/address 1.png" alt=""></label>
                            </div>
                            <div class="addres-site">
                                <h3>Địa chỉ :</h3></h3>
                                <p>86/33 Âu Cơ,phường 9, Quận Tân Bình, Tp.Hồ Chí Minh</p>
                                
                                <div class="google-map">
                                <input id="btn-map" type="checkbox"  >
                               <iframe id="if-map" class="if-map-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5401021565435!2d106.64898331471437!3d10.76988326225962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752e956089727f%3A0xadbc524cc8614425!2zODYsIDMzIMOCdSBDxqEsIFBoxrDhu51uZyAxNCwgUXXhuq1uIDExLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1647365934541!5m2!1svi!2s" width="1380" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                            
                            

                        </div>
                        <div class="email bg-small">

                            <div class="email-icon">
                            <img src="<?php echo get_template_directory_uri();?>/image/mail-1.png" alt="">
                            </div>
                            <div class="addres-site">
                                <h3>Email :</h3></h3>
                                <p>investigate@your-site.com</p>

                            </div>

                        </div>
                        <div class="phone-number bg-small">
                            <div class="phone-icon">
                            <img src="<?php echo get_template_directory_uri();?>/image/phone-1.png" alt="">
                            </div>
                            <div class="addres-site">
                                 <h3>Điện thoại :</h3></h3>
                                <p>+84 145 689 798 </p>

                            </div>


                        </div>

                        

                    </div>

                </div>
            
    </div>
    <script type="text/javascript">
	$("#btn").on("click", function(){
        $(".message-hidden").show();
		var name = $("#name").val();
		var email = $("#email").val();
        var sdt = $("#sdt").val();
		var error = $("#error");
        var message = $("#message").val();
		var ok = $("#ok");

		// resert 2 thẻ div thông báo trở về rỗng mỗi khi click nút đăng nhập
		error.html("");
		ok.html("");

		// Kiểm tra nếu username rỗng thì báo lỗi
		if (name == "") {
			error.html("Tên không được để trống");
			return false;
		}
		// Kiểm tra nếu password rỗng thì báo lỗi
		if (email == "") {
			error.html("Email không được để trống");
			return false;
		}
		if (sdt == "") {
			error.html("Số điện thoại  không được để trống");
			return false;
		}
		
		$.ajax({
		  url: "<?php echo get_template_directory_uri();?>/check-mail.php",
		  method: "POST",
		  data: { name : name , message:message ,sdt:sdt,email : email},
		    success : function(response){
		  	if (response == "1") {
		  		ok.html("Sent message success !!! ");
                  
               
                  
		  	}else{             
               	    error.html("Send message fail !!! ");
                 
                 
		  	}
            
		  }
		});
       
	});
</script>    

</main><!-- #main -->
