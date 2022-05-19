
<style>
    .search-outer{
        
        display:none;
        width:100%;
        height:1080px;
    }
    .search-fixed{
        
        position: fixed;
        z-index: 999999999999;
        top:90px;
        left:0;
        width:100%;
        height:1080px;
        background:rgb(0,0,0,0.9);
        display:flex;
        justify-content:center;
        align-items:flex-start;
        
    }
    .screen-search{
        margin-top:150px;
        width:100%;
        height:200px;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }
    .screen-search .screen-search-title{
        width: 557px;
        height: 56px;
        text-align:center;
        margin-bottom:30px;
    }
    .screen-search-title h2{
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 56px;
        letter-spacing: 0.005em;
        color: #F5F6F7 !important;
        
    }
    form#s-search{
        width:50%;
        height:60px;
        margin-bottom:30px;
    }
    form#s-search input{
        width:100%;
        height:60px;
        background: #FFFFFF;
        border-radius: 16px;
        padding: 0 20px 0 60px;
        cursor: pointer;
    }
    .search-icon1{
        position:relative;
        top:-45px;
        left:15px;
        color:black;
        font-size:20pt;
        width:40px;
        height:40px;
        
    }
    .close{
        position: absolute;
        right:300px;
        top:100px;
    }
    .close ion-icon{
        color:#fff;
        font-size:30px;
    }
    .content-looking{
        
        width:50%;
        display:flex;
        flex-wrap:wrap;
        height:auto;
        
    }
    .cat1{
        border: 2px solid #FFFFFF;
        border-radius: 4px;
        width: 124px;
        height: 32px;
        margin: 10px 15px 5px 15px;
        color:#fff;
        text-align:center;
        transition:all 0.5s;
    }
    .cat1:hover{
        color:#000;
        background:#ffffff;

    }

</style>
<div class="search-outer">
    <div class="search-fixed">
        <div class="screen-search">
            <div class="screen-search-title">
                <h2>What are you looking for?</h2>
            </div>
        <div class="close">
                <ion-icon name="close-outline"></ion-icon>
        </div>
            <form id="s-search" class="search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" id="input-search" name="s" placeholder="<?php _e('Search in Asiavina','glw'); ?>"
                    value="<?php the_search_query(); ?>" id="<?php echo esc_attr( uniqid( 'search-form-' ) ); ?>" />
                <div class="search-icon1">  <ion-icon id="search-icon2" name="search-outline"></ion-icon></div>
            </form>
            <div class="content-looking">
                <div class="cat1">
                    <p>Stand Fan</p>
                </div>
                <div class="cat1">
                    <p>Stand Fan</p>
                </div><div class="cat1">
                    <p>Stand Fan</p>
                </div>
                <div class="cat1">
                    <p>Stand Fan</p>
                </div>
                <div class="cat1">
                    <p>Stand Fan</p>
                </div>
                <div class="cat1">
                    <p>Stand Fan</p>
                </div>
                
            </div>
        </div>
    </div>
</div>