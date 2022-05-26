<style>
#need-help-outer{
    position: fixed;
    z-index:99999999999;
    display:none;
    width:100%;
    height:100vh;
    justify-content:center;
    align-items:flex-start;
    margin-top:10%;
}
.help {
    z-index: 999999999;
    display: flex;
    align-items: center;
    position: fixed;
    right: 0;
    top: 320px;
    width: 170px;
    height: 64px;
    background: #749CC6;
    box-shadow: 2px 4px 15px 2px rgba(70, 119, 171, 0.25);
    border-radius: 15px;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;

}

.help ion-icon {
    width: 32px;
    height: 32px;
    margin: 5px;
}

.help p {
    position: relative;
    top: 5px;
}

.nh-flex{
    width:100%;
    height:100%;
    justify-content:center;
    display: flex;
    align-items:flex-start;
}

.box-help {
    display: flex;
    flex-direction: column;
    align-items: center;
    z-index: 999999999;
    width: 419px;
    background: #FFFFFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 16px;
    height: 362px;

}

.box-help-active {
    display: flex;
}

.box-help-header {
    width: 100%;
    height: 50px;
    background: #749CC6;
    border-radius: 16px 16px 0px 0px;
    font-weight: 700;
    font-size: 18px;
    line-height: 21px;
    letter-spacing: 0.005em;
    color: #F5F6F7;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;

}

.box-help-header p {
    margin-bottom: 0 !important;
}

form#help-form {
    width: 100%;
    height: 50%;
    padding: 20px;
    margin-right: 20px;
}
form#help-form button{
    visibility: hidden;
}
form#help-form input {
    width: 100%;
    height: 36px;
    background: #F5F6F7;
    border: 1px solid #749CC6;
    box-sizing: border-box;
    border-radius: 4px;
    font-family: 'Roboto';
    font-style: italic;
    font-weight: 400;
    font-size: 18px;
    line-height: 21px;
    letter-spacing: 0.005em;
    color: #030609;
    padding: 2px 10px 2px 30px;

}

form#help-form textarea {
    padding: 2px 10px 2px 30px;

}

.form-need {
    width: 100%;
    height: auto;
    display: flex;

    margin-bottom: 10px;
}

.form-need ion-icon {
    position: relative;
    left: 30px;
    margin: 7px 5px 0 0;

}
</style>


<div class="help" id="help">
        <ion-icon name="chatbox-ellipses-sharp"></ion-icon>
        <p>Need Help ?</p>
 </div>

 <div id="need-help-outer">
    <div class="nh-flex">
        <div class="box-help">
            <div class="box-help-header">
                <p> Please leave us some message</p>
                <div class="box-help-close">
                    <ion-icon name="close-outline"></ion-icon>

                </div>
            </div>
            <form action="" method="POST" name="help-form" id="help-form">
                <div class="NH-user form-need">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" placeholder="Your Name" name="NH-name">

                </div>
                <div class="NH-mail form-need">
                    <ion-icon name="mail"></ion-icon>
                    <input type="email" name="NH-mail" id="NH-mail" placeholder="Your Email">
                </div>
                <div class="NH-message form-need">
                    <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                    <textarea name="NH-mess" id="NH-mess" cols="5" rows="8" placeholder="Content"></textarea>

                </div>
                <button type="submit">submit</button>

            </form>
        </div>
    </div>
</div>