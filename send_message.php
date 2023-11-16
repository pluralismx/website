<?php
    require_once '/home/pluralis/message.php';

    if(isset($_POST['id_website'], $_POST['name'], $_POST['phone'], $_POST['email'], $_POST['content'])){
        $message = new Message();
        $message->setIdWebsite($_POST['id_website']);
        $message->setName($_POST['name']);
        $message->setPhone($_POST['phone']);
        $message->setEmail($_POST['email']);
        $message->setContent($_POST['content']);
        $status = $message->saveLead();
        
        if($status == true){
        echo '
    		<h1>Gracias por su mensaje, pronto nos comunicaremos con usted...</h1>
    		<br/>
    		<br />
    		<h1>Clic <a href="http://www.pluralis.com.mx">aquí </a>si no es redireccionado automáticamente</h1>
    		
    		<script>
    			setTimeout(function(){
    			window.location.href = "http://www.pluralis.com.mx";
    			}, 2000);
    		</script>
    	'; 
        }else{
            echo '
        		<h1>Hubo un error desconocido al enviar su mensaje...</h1>
        		<br/>
        		<br />
        		<h1>Clic <a href="http://www.pluralis.com.mx">aquí </a>si no es redireccionado automáticamente</h1>
        		
        		<script>
        			setTimeout(function(){
        			window.location.href = "http://www.pluralis.com.mx";
        			}, 3000);
        		</script>
    	    '; 
        }
    }else{
        echo '<h1>Hubo un error al enviar los datos del formulario!</h1>';
    }
?>