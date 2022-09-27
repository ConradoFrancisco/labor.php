<?php
    include "../includes/main.php";
    include "../includes/includer.php";
?>
<div class="widget-box ms-3 border-solid">
    <div class="widget-header">
        <h4>Usuarios Labor</h4>
    </div>
    <div class="widget-main">
        <button class="btn btn-success"> Agregar usuario labor</button>
        <table id="Labor_usuarios" class="w-100 mt-3">
            <thead>
                <tr>
                    <th>Editar</th>
                    <th>Nombre</th>
                    <th>Documento de Identidad</th>
                    <th>Usuario</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $test = new UsersView();
                    $test->showUsers();
                ?>
                
            </tbody>
            
        </table>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</body>
</html>