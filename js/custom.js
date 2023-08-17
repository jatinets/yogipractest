jQuery(document).ready(function(){

        jQuery("table tr td").on('click', function(){
           
            var key = jQuery(this).attr('datakey');
            //alert(key);
            //alert(globalvars.current_user);
            $.ajax({ 
                url: "ajax/processajax.php",
                type:"POST",
                data:{
                    key: key,
                    user: globalvars.current_user
                },
                success:function(data){
                    console.log(data); 
                    
                    // Based on Data 
                    // Javascript Logic 
                    
                }
        });
    });

});