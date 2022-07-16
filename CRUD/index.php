<?php include 'template/header.php' ?>

<?php require_once 'model/conexion.php' ?>

<div class="container mt-5">


<button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#modalAgregar"> 
                                Agregar Producto
                                </button>
    <?php include 'modalRegistrar.php' ?>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de Productos
                </div>
                <div class="p-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Categoria</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                   $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria ORDER BY p.id DESC");
                    while ($data = mysqli_fetch_assoc($query)) { ?>    

                            <tr>
                                <td scope="row"><?php echo $data['id']?></td>
                                <td scope="row"><?php echo $data['nombreProducto']?></td>
                                <td scope="row"><?php echo $data['Cantidad']?></td>
                                <td scope="row"><?php echo $data['categoria']?></td>
                                <td><button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#modalEditar<?php echo $data['id']; ?>"> 
                                Modificar
                                </button>

                                <td><button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#modalEliminar<?php echo $data['id']; ?>"> 
                                Eliminar
                                </button></td>
                            </tr>
                            <?php include 'modalEditar.php' ?>
                            <?php include 'modalEliminar.php' ?>
                        <?php } ?>
                        </tbody>
                        
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>