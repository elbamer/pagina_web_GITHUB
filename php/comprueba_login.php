
<html>
    <head>
        <title>title</title>
    </head>
    <body>      
        <?php 
        try{
        // Libreria PDO- try y catch, para que si hay algun error 
        $base=new PDO ("mysql:host=localhost; dbname=pruebas","elba","liayan686");// datos de conexcion 
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// propiedades de la conexion 
        $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD= :password";// preparamos la sentencia sql,
        $resultado=$base->prepare($sql);// consulta `reparada, 
       
      $login=htmlentities(addslashes($_POST["login"]));//htmlentities convierte cualquier simbolo en html //rescatar el login y el password, en login 
      //addslashes para escapar caracter de tipo comillo, caracter extraño, evitar inyeccyion sql
            $password=htmlentities(addslashes($_POST["password"])) ;
           $resultado->bindValue(":login", $login) ;//resultado llama a binvalue
           $resultado->bindValue(":password", $password);
           $resultado->execute();
           $numero_registro=$resultado->rowCount();// NOS DICE EL NUMERO DE REGISTROS            
           if($numero_registro!=0){
               session_start();// antes de redirigir , si el usuario esta en la base de datos entonces  me creas una sesion
               
              $_SESSION["usuario"]=$_POST["login"]; // en la variable super global  almacenamos 
              //el login del usuario, al almacenarlo, lo podemos usar en cualquer pagina de nuestro sitio 
              // vamos a la pagia que vamos a redireccionar y poner ......
            header("location:../index.html");
             
               
           }else{
               header("location:eleccionVolverLogarte.php");// L eredirijo a esta pagina
           }
        }catch (Exception $e){
            
            die("Error:" . $e->getMessage());
        }
        
        
        ?>

    </body>
</html> 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 