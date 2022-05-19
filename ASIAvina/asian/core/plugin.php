<?php
    function auto_active_lugin_translate(){
        $plugins=array(
            array(
               "name"=>"switchlanguage",
               "sllug"=>"gtranslate",
               "required"=>true
            ),
            array(
                "name"=>"Redux Framework",
                "slug"=>"redux-framework",
                "required"=>true
             )
         );
         $config=array(
            'menu'=>"active_gtranslate",
            'has_notice'=>true,
            'dismmissable'=>true,
            'is_automatic'=> true
         );
         tgmpa($plugins,$config);
    }
add_action("tgmpa_register","auto_active_lugin_translate")
?>