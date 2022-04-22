
    <div class="modal fade" tabindex="-1" id="registerModal" aria-hidden="true" aria-labelledby="modalTitle">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle" style="color: black;">Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./registerMessage.php" method="post">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Dirección de Email" atofocus required>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" atofocus required>
                            <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" atofocus required>
                            <input type="password" name="password1" class="form-control" placeholder="Contraseña" atofocus required>
                            <input type="password" name="password2" class="form-control" placeholder="Repite contraseña" atofocus required>
                            <input type="submit" name="enviar" value="Enviar"> 
                        </div>
                    </form>
                </div>