
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="../Issets/css/pods-vapers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
    <?php
    require("../Controllers/ControllerProducto.php");
    $obj = new usernameControlerProducto();
    $rows = $obj->VerProducto();
    require 'Header.php'
    ?>
    <style>
        .a{
            display: none;
        }
    </style>
    <div class="Container">
        <h2>Lista de Productos</h2>
        <a class="buton">Nuevo Producto</a><br><br>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th colspan="2">Operaciones</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($rows):?>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?=$row[0]?></td>
                        <td><?=$row[2]?></td>
                        <td><img height="50px" src="data:image/webp;base64,<?= base64_encode($row[3]) ?>"></td>
                        <td><?=$row[4]?></td>
                        <td>$<?=number_format($row[5], 2)?></td>
                        <td><a onclick="openModal('<?=$row[0]?>')">Modificar</a></td>
                        <td><a href="../Crud/EliminarProducto.php?id=<?=$row[0]?>">Eliminar</a></td>
                    </tr>
                    <?php
                    $user=$obj->ShowProducto($row[0]);
                    ?>
                    <div id="modal<?=$row[0]?>" class="service-modal flex-center">
                        <div class="service-modal-body">
                            <a  class="close" onclick="closeModal('<?=$row[0]?>')">&times;</a>
                            <form action="../Crud/ModificarProducto.php" method="post" enctype="multipart/form-data">
                                <h3>Modificar Producto</h3>
                                <h4 for="nombreActualiado">nombreActualiado:</h4>
                                <input type="text" name="nombreActualiado" id="nombreActualiado" placeholder="nombreActualiado..." value="<?= $user[2]?>" required>
                                
                                <h4>Categoria</h4>
                                <select name="IdCategoria" id="IdCategoria">
                                    <option value="1">Pods</option>
                                    <option value="2">Vapers</option>
                                </select>

                                <h4 for="imagenactualizado">imagenactualizado:</h4>
                                <img height="25%" width="25%" src="data:image/webp;base64,<?= base64_encode($user[3])?>">
                                <input type="file" name="imagenactualizado" id="imagenactualizado">

                                <h4 for="descripcionactualizado">Descripción:</h4>
                                <textarea name="descripcionactualizado" id="descripcionactualizado" placeholder="Descripción del producto..." required><?=$user[4]?></textarea>
                            
                                <h4 for="precioactualizado">Precioactualizado:</h4>
                                <input type="text" name="precioactualizado" id="precioactualizado" placeholder="Precioactualizado..." value="<?= $user[5]?>" required>

                                <input type="submit" value="Aceptar" class="buton">
                            </form>
                        </div>
                    </div>
                    <?php endforeach;?>
                <?php endif;?>
            </tbody>
        </table>
    </div>

    <div class="service-modal modalform flex-center">
        <div class="service-modal-body">
            <i class="fas fa-times modal-close-btn"></i>
            <form action="../Crud/InsertarProducto.php" method="post" enctype="multipart/form-data">
            <h3>Formulario de Productos</h3>
                <h4 for="nombre">Nombre:</h4>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre del producto..." required>

                <h4>Categoria</h4>
                <select name="IdCategoria" id="IdCategoria">
                    <option value="1">Pods</option>
                    <option value="2">Vapers</option>
                </select>

                <h4 for="imagen">Imagen:</h4>
                <input type="file" name="imagen" id="imagen" required>

                <h4 for="descripcion">Descripción:</h4>
                <textarea name="descripcion" id="descripcion"style="resize: none;height:100px; padding: 1em 1em;font-size: 14px;" placeholder="Descripción del producto..." required></textarea>

                <h4 for="precio">Precio:</h4>
                <input type="text" name="precio" id="precio" placeholder="Precio del producto..." required>


                <input class="buton" type="submit" value="Guardar Producto">
            </form>
        </div>
    </div>
<script src="../Issets/js/main.js"></script>
<script>
const serviceModals = document.querySelectorAll(".modalform");
const learnmoreBtns = document.querySelectorAll(".buton");
const modalCloseBtns = document.querySelectorAll(".modal-close-btn");

var modal = function(modalClick){
    serviceModals[modalClick].classList.add("active");
}

learnmoreBtns.forEach((learnmoreBtn, i) => {
    learnmoreBtn.addEventListener("click", () => {
        modal(i);
    });
});

modalCloseBtns.forEach((modalCloseBtn) => {
    modalCloseBtn.addEventListener("click", () =>{
        serviceModals.forEach((modalView)=>{
            modalView.classList.remove("active");
        })
    });
});

//Funciones del modal
function openModal(id) { 
    document.getElementById('modal' + id).style.visibility = 'visible';
    document.getElementById('modal' + id).style.opacity = 1;
}
function closeModal(id) {
    document.getElementById('modal' + id).style.visibility = 'hidden';   
    document.getElementById('modal' + id).style.opacity = 0;
    document.getElementById('modal' + id).style.transition = '.3s ease';
}
</script>
</body>
</html>
