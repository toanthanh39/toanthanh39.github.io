<?php
/*
 Template Name:onload-page
 */


?>
<style>
    #onload-page{
        width:100%;
        height:100%;
        position: fixed;
        top:0;
        left:0;
        display:flex;
        justify-content:center;
        align-items:center;
        background: radial-gradient(97.91% 60.14% at 50% 50%, #FFDB7E 0%, #FF7A00 100%);
        z-index: 6000;
    }
    .fixed-load{
        display:none;

        
    }
    @keyframes rotate {
        from{
            transform:rotate(0deg)
        }
        to{
            transform:rotate(360deg)
        }
    }
    .onload-icon{
        width:100px;
        height:100px;
        background:transparent;
        
    }
    .onload-icon img{
        width:100%;
        height:100%;
        max-width:100px;
        max-height:100px;
        animation: rotate 1000ms  infinite linear ;
        background:transparent;
    }

</style>
<div id="onload-page">
    <div class="onload-icon">
        <img src="<?php echo get_template_directory_uri();?>/image/loading6.png" alt="">
    </div>
</div>