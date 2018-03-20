<html>
    <head>
        <title>:D</title>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#boton").click(function(){
                    $.ajax({
                        // cargamos url a nuestro contralador y método indicado
                        url:"<?php echo site_url();?>/controlador/cargaDatos",
                        type:"post",
                        success:function(data){
                            if(data){
                                alert(data)
                            }
                            else{
                                alert("error")
                            }
                        }
                    })
                })
            })
        </script>
    </head>
    <body>
        <?php
            echo $datox;
        ?>
        <button name="boton" id="boton" value="click">click</button>
    </body>
    </html>