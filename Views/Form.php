<?php

?>
<form action="procesar.php" method="post">
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>
    </div>
    <div>
        <label for="comentarios">Comentarios:</label>
        <textarea id="comentarios" name="comentarios" required></textarea>
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>