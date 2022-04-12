<?php
/*
 Template Name: Home-page
 */

get_header();
// session_start();
?>

<?php get_template_part('onload') ?>

<main id="primary" class="site-main">
<style>
    /* left */
    
    
    .main-right-home {
        position: relative;

    }
    .main-left-outer{
        width:90%;
        height:80%;
        display:flex;
        flex-direction:column;
        align-items:center;
    }
    .left-lorem-1 {
       width:100%;
       height: 100%;
       margin-bottom:10px;
       text-align: left;
    margin-left: 10%;
    margin-top:20px;
    }
    .left-lorem-2{
        display:flex;
        flex-direction:column;
        justify-content:center;
        font-weight:700;
        font-size:14 requiredpt;
        width:90%;
        height:70%;
        margin-left:100px;
        
    }
    .left-lorem-2 span{
        color:orange;
        margin-right:5px;
    }

    /* right */
    .banner-small {
        background-image: url("<?php echo get_template_directory_uri();?>/image/banner-small.png");
        width: 284px;
        height: 80.5px;
        background-size: 100%;
        background-repeat: no-repeat;
        position: absolute;
        right: 24%;
        top: -20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .banner-small h1 {
        font-family: 'komi';
        font-style: normal;
        font-weight: 900;
        color: white;
        line-height: 41px;
    }



    /* form */
    .form-checkout-home {
        position: relative;
        background: transparent;
        top: 22%;
        left: 8%;
        width: 85%;
        height: 75%;



    }

    form#form-checkout-home {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
      gap:20px;
    }

    .row {

        height: 46px;
        background:transparent;
        display:flex;
        flex-direction:row;
        justify-content:flex-start;
        align-items:center;
        width:100%;
    }
    .row-1 input{
        width:100%;
        
    }
    .row-3 input,.row-4,.row-5,.row-6{
        
    }
    .row-2 input[type="number"]{
       margin-right:10px;
       width:40%;
    }
    .row-2 span{
        width:46px;
        height:46px;
        background-image:url("<?php echo get_template_directory_uri();?>/icon/label-date.png");
        position: relative;
        z-index: 1000;
        pointer-events:none;
        background-size:100%;
        margin-left:10px;
        
    }
    .row-6{
        display:flex;
        flex-direction:row;
        justify-content:center;
        align-items:center;
    }
    .row input[type="date"]{
       
       width:45%;
    }
    .row input{
         box-shadow: inset -1px 3px 3px rgba(179, 91, 11, 0.5);
        border-radius: 16px;
        border:none;
        height:100%;
        background-color:white;
        padding-left:20px;
        position: relative;
        
    }
    


     /* input--webkit */
    .row input:focus,input:hover{
        outline:none !important;
        background-color:#eee;
    }

    
    .row input[type="text"]::-webkit-calendar-picker-indicator {
       
        position:relative;
        right:-50px;
   
      
   
    }
    
    .row input[type="text"]::-webkit-inner-spin-button{
        /* display:none;
        -webkit-appearance: none; */
        color:orange;
        font-size:30pt;
        background:blue;
    }
    .row input[type="date"]::-webkit-inner-spin-button{
        /* display:none;
        -webkit-appearance: none; */
        color:orange;
        font-size:30pt;
        background:blue;
    }


    .row input[type="date"]::-webkit-calendar-picker-indicator {
    /* display: none; */
    /* -webkit-appearance: none; */
    position:relative;
    right:-60px;
    font-size:30pt;
     }
    
     
    .row input:focus{
        border:none !important;
    }
    /* --------------------- */
   
   
    /* row1 */
    
    
    .box{
            width: 100%;
            height:46pxplaceholder="" ;
        }

     .box:before{
            content: "\f0d7";
            position: absolute;
            font-family: "Font Awesome 5 Free";
            right: 0px;
            width: 46px;
            height: 46px;
        /* background:white; */
        box-shadow: 2px 0px 5px rgb(196, 132, 14);
            pointer-events:none;
            background-image: url("<?php echo get_template_directory_uri();?>/icon/label.png");
            background-size: 100%;
            background-position:cover;
            appearance:none;
            border-radius:8px;
            font-size:30pt;
            color:orange;
}

select{
        background-color: #fff;
       
        width: 100%;
        height:100%;
        padding:10px;
        border: none;
        -webkit-appearance: none;
        border-radius:16px;
        box-shadow: inset -1px 3px 3px rgba(179, 91, 11, 0.5);
        

}
    select:focus{
        outline:none;
    }
    /* -------------- */
    

    </style>
    <div class="main-content">

        <div class="content-container">
            <img class="back-icon" id="logo1" src="<?php echo get_template_directory_uri();?>/image/bg1.png" alt="">
            <img class="back-icon" id="logo2" src="<?php echo get_template_directory_uri();?>/image/DAM-SEN.png" alt="">
            <img class="back-icon" id="logo3" src="<?php echo get_template_directory_uri();?>/image/PARK.png" alt="">
            <img class="back-icon" id="logo4" src="<?php echo get_template_directory_uri();?>/image/bg8.png" alt="">
            <img class="back-icon" id="logo5" src="<?php echo get_template_directory_uri();?>/image/bg7.png" alt="">
            <img class="back-icon" id="logo6" src="<?php echo get_template_directory_uri();?>/image/bg6.png" alt="">
            <img class="back-icon" id="logo7" src="<?php echo get_template_directory_uri();?>/image/bg5.png" alt="">
            <img class="back-icon" id="logo8" src="<?php echo get_template_directory_uri();?>/image/bg4.png" alt="">
            <img class="back-icon" id="logo9" src="<?php echo get_template_directory_uri();?>/image/bg3.png" alt="">
            <img class="back-icon" id="logo10" src="<?php echo get_template_directory_uri();?>/image/bg2.png" alt="">

        </div>
        <div class="heading-title">

        </div>
        <div class="main_interaction">

            <div class="main-left main-left-home">
                <img class="main-left-human" src="<?php echo get_template_directory_uri();?>/image/lisa.png" alt="">
                <div class="main-left-outer">
                   
                    <div class="left-lorem-1">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In a
                        lias ullam veritatis fugiat tempora sunt perferendis eveniet
                        , provident, voluptates eos er
                        or reiciendis? Eligendi nostrum nihil corporis molestiae e
                        rror ducimus porro.</p>
                    </div>
                    <div class="left-lorem-2">
                        <p><span class="fa fa-star"></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscip.</p>
                        <p><span class="fa fa-star"></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscip.</p>
                        <p><span class="fa fa-star"></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscip.</p>
                        <p><span class="fa fa-star"></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscip.</p>
                        <p><span class="fa fa-star"></span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi suscip.</p>


                    </div>
                </div>
            </div>
            <div class="main-center">
            </div>
            <div class="main-right main-right-home">
                <div class="banner-small">
                    <h1>Vé của bạn</h1>
                </div>
                <div class="form-checkout-home">
                    <form action="<?php echo get_template_directory_uri();?>/post.php" name="form-home" method="POST" id="form-checkout-home">
                        <div class="row row-1">
                           
                            <div class="box"> 
                                <select name="loai" id="loai" required >
                                    <option selected value="ggd">Gói gia đình</option>
                                    <option  value="ggd1">Gói gia đình1</option>
                                    <option value="ggd2">Gói gia đình 2</option>
                                    <option value="ggd3">Gói gia đình 3</option>

                                </select> 
                            </div>
   
                            
                           
                        </div>
                        <div class="row row-2">
                            <input  type="number" required name="quantity" id="quantity" placeholder="Số lượng vé" min="0">
                            <input style="width: 47%;" type="text" name="date" id="date" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" placeholder="ngày sử dụng">
                            <span></span>
                        </div>

                        <div class="row row-3">
                            <input style="width:100%;" required placeholder="Họ và tên" name="name_kh" type="text">
                        </div>

                        <div class="row row-4">
                            <input style="width:100%;" required placeholder="Số điên thoại" name="sdt_kh" type="phone">
                        </div> 
                        <div class="row row-5">
                            <input style="width:100%;" required placeholder="Địa chỉ Email" name="email_kh"  type="email">
                        </div>
                        <div class="row row-6">
                            <button style="width:80%;font-family:'komi';color:white;height:50px;background:red;
                            box-shadow: 0 10px 5px rgb(147,0,10);border:none;" type="submit" name="btn-home" >Đặt vé</button>
                        </div>
                        

                </div>


                </form>
            </div>

        </div>
    </div>

    </div>

</main>