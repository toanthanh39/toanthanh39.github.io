<?php
/*
 Template Name: Checkout-page.
 */
get_header();

// $ve= (isset($_SESSION["name"]))?$_SESSION["name"]:null;
// session_start();
// session_destroy();
$ve1= (isset($_SESSION["ve"]))? $_SESSION["ve"]:[];
// $cart=(isset($_SESSION['cart']))? $_SESSION['cart']:[];
   

//     echo"<pre>";

//     // print_r($_SESSION['ve']);]
//     var_dump($ve1['name']);
//     print_r($ve1);
//   echo $name;

$total=$ve1["quantity"]*$ve1["total_price"];
    $_SESSION["totalprice"]=$total;
?>

<style>
/* banner-small */
.banner-small {
    background-image: url("<?php echo get_template_directory_uri();?>/image/banner-small.png");
    width: 375px;
    height: 80px;
    background-size: 100% 90%;
    background-repeat: no-repeat;
    position: absolute;
    right: 9%;
    top: -20px;
    display: flex;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;


}

.left {
    position: absolute;
    left: 10%;
    top: -20px;
}

.banner-small h1 {
    font-style: normal;
    color: white;
    line-height: 30px;
    margin-top: -1px;
    font-size: 20pt;

}

.main-checkout {
    display: flex;
    justify-content: center;
    align-items: center;
}

/* form-left */
.form-checkout-left {

    width: 83%;
    height: 80%;
    margin-left: 5%;

}

.form-checkout-left form {
    width: 100%;
    height: 100%;
}

.outer-form {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    width: 100%;
    height: 100%;

}

.form-row {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    gap: 50px;
}

.form-row-thumb {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    text-align: left;
    gap :10px;
    margin-top:20px;
}

.form-row-thumb input {
    box-shadow: inset -1px 3px 3px rgba(179, 91, 11, 0.5);
    border-radius: 16px;
    border: none;
    height: 46px;
    padding-left: 10px;
    background-color: white;
    font-weight:400;
    color:black;
}

.form-row-thumb input[type="number"] {
    width: 100px;
}
.txt input{
    width:300px;
}

/* -------------- */
.imp {
    display: flex;
    flex-direction: row;

}

.imp p {
    margin-left: 8px;
}


/* ---------------- */

/* form-right */
.form-checkout-right{
    width: 100%;
    height: 80%;
    margin-left: 10%;
    
}
.form-checkout-right form {
    width: 100%;
    height: 100%;
}
.right input{
    width:85%;
}
.right button{
    border-radius:10px;
    width:75%;
    font-family:'komi';
    color:white;
    height:56px;
    background:red;
    box-shadow: 0 10px 5px rgb(147,0,10);
    border:none;
    font-size:18pt;
    margin-left:10%;
}
.right input#ck_name{ text-transform: uppercase;}
/* ---------------- */
</style>
<?php
    
    
   ?>
 <main id="primary" class="site-main">
    <div class="main-content">
        <div class="content-container">
        </div>
        <div class="heading-title">
            <img id="checkout" src="<?php echo get_template_directory_uri();?>/image/Thanh toán.png">
        </div>
        <div class="main_interaction">

            <div class="main-left main-checkout">

                <img class="main-left-human" src="<?php echo get_template_directory_uri();?>/image/tini.png" alt="">"
                <div class="banner-small left">
                    <h1>VÉ CỔNG - VÉ GIA ĐÌNH</h1>
                </div>
                <div class="form-checkout-left">
                    
                    <form action="" name="checkout-detail" method="POST">
                        <div class="outer-form">
                            <div class="form-row">
                            
                                <div class=" form-row-thumb total-price">
                                    <label for="get-price">Số tiền thanh toán</label>
                                    <input type="text" readonly name="pirce" id="get_price" value="<?php echo number_format($total,0,".",".") ?> VND ">

                                </div>
                                <div class="form-row-thumb total-quantity">
                                    <label for="get_quantity">Số lượng vé</label>
                                    <div class="imp"><input type="number" readonly name="quantity" id="get_quantity" value="<?php echo $ve1['quantity']; ?>">
                                        <p>vé</p>
                                    </div>
                                </div>
                                <div class="form-row-thumb ">
                                    <label for="get-date">Ngày sử dụng</label>
                                    <input type="date" readonly name="pirce" id="get_date" value="<?php echo $ve1['date']; ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-row-thumb txt">
                                    <label for="get-price">Thông tin liên hệ</label>
                                    
                                    <input type="text" readonly name="txt_name" id="txt_name" value=" <?php echo $ve1['name'];  ?>">
                                  
                                </div>  
                                
                            </div>
                            <div class="form-row">
                                <div class="form-row-thumb txt">
                                    <label for="txt_sdt">Điện thoại</label>
                                    <input type="phone" readonly name="txt_sdt" id="txt_sdt" value=" <?php echo $ve1['sdt'];  ?>">
                                </div>  
                            </div>
                            <div class="form-row">
                                <div class="form-row-thumb txt">
                                     <label for="txt_email">Email</label>
                                    <input type="email" readonly name="txt_email" id="txt_email" value=" <?php echo $ve1['email'];  ?>">
                                </div>  
                            </div>

                        </div>
                   
                      
                    </form>
                </div>

            </div>
            <div class="main-center">

            </div>
            <div class="main-right main-checkout">
                <div class="banner-small">
                    <h1>THÔNG TIN THANH TOÁN</h1>
                </div>
                <div class="form-checkout-right">
                    
                    <form action="<?php echo get_template_directory_uri();?>/insertdb.php" method="POST" name="inf-checkout">
                    <div class=" outer-form">
                                <div class="form-row-thumb right">
                                    <label for="get_codepin">Số thẻ</label>
                                    <input type="text" required name="get_codepin" id="get_codepin" placeholder="Mã số thẻ" >
                                </div>

                                <div class="form-row-thumb right">
                                    <label for="ck_name">Họ tên chủ thẻ</label>
                                    <input type="text" required name="ck_name" id="ck_name" placeholder="HO VA TEN">
                                </div>

                                <div class="form-row-thumb right">
                                    <label for="ck_date">Ngày hết hạn</label>
                                    <input type="date" required  name="ck_date" id="ck_date" >
                                </div>
                                
                                <div class="form-row-thumb right">
                                    <label for="ck_cvv">CVV/CVC</label>
                                    <input style="width:20%;" type="text" readonly  name="ck_cvv" id="ck_cvv" value="...">
                                </div>

                                <div class="form-row-thumb right">
                                    
                                    <button type="submit"  name="ck_btn" id="ck_btn">Thanh toán</button>
                                </div>
                    </div>
                   
                    </form>
                   
                </div>

            </div>
        </div>

    </div>


</main> 
  