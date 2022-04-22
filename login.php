
    <div class="modal fade" tabindex="-1" id="loginModal" aria-hidden="true" aria-labelledby="modalTitle">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle" style="color: black;">Iniciar sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <?php require 'conexionBaseDatos.php'; ?>
                    <form action="./home.php" method="post">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Dirección de Email" atofocus required>
                            <input type="password" name="password1" class="form-control" placeholder="Contraseña" atofocus>
                            <input type="checkbox" name="forgotPassword" autofocus> He olvidado la contraseña<br>       
                            <input type="submit" name="enviar" value="Enviar">
                        </div>
                    </form>
            </div>
        </div>
    </div>