<?php
require '../includes/app.php';

$db = conectarBD();
$errores = [];

// CREACION DE USUARIO MAESTRO EN CASO DE NO EXISTIR
$usuario = "admin";
$contraseña = "123456";
$contraseñaHash = password_hash($contraseña, PASSWORD_BCRYPT);

$queryCheck = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$result = mysqli_query($db, $queryCheck);

if (mysqli_num_rows($result) == 0) {
    $query = "INSERT INTO usuarios (usuario, contraseña) VALUES ( '$usuario', '$contraseñaHash'); ";
    mysqli_query($db, $query);
}

// Autenticar el usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = mysqli_real_escape_string($db, filter_var($_POST['user']));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$user) {
        $errores[] = "El usuario es obligatorio o no es valido";
    }
    if (!$password) {
        $errores[] = "El password es obligatorio";
    }

    if (empty($errores)) {
        //Revisar si el usuario existe
        $query = "SELECT * FROM usuarios WHERE usuario = '$user'";
        $resultado = mysqli_query($db, $query);

        if ($resultado->num_rows) {
            // Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);

            //verificar si el password es correcto o no
            $auth = password_verify($password, $usuario['contraseña']);

            if ($auth) {
                // El usuario esta autenticado
                session_start();

                //Llenar el arreglo de la sesion
                $_SESSION['usuario'] = $usuario['usuario'];
                $_SESSION['login'] = true;

                header('Location: /admin');
            } else {
                $errores[] = "La contraseña es incorrecta";
            }
        } else {
            $errores[] = "El usuario no existe";
        }
    }
}

incluirTemplate("header", $pagina = "login");
?>
<main>
    <form method="POST" class="inicio-sesion">
        <input type="text" name="user" placeholder="Tu usuario" id="user">
        <input type="password" name="password" placeholder="Tu Contraseña" id="password">
        <input type="submit" value="Iniciar Sesión">

        <?php foreach ($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
    </form>
</main>
<?php
incluirTemplate("footer", $pagina = "login");
?>