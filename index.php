<html>
    <head>
        <style>
            td { border:1px solid black; width: 50px; height: 50px; text-align: center;}
        </style>
        
        <script>
            var globalvars  = { current_user : "<?php echo isset($_GET['user']) ? $_GET['user'] : 0; ?>" };
        </script>
        <script src="js/jquery-3.7.0.min.js"></script>
        <script src="js/custom.js"></script>
    </head>
    <body></body>


<div class='game'>
    
<?php 
    include_once "helper/uihelper.php"; 
    prepareTable();
?>

</div>
</html>