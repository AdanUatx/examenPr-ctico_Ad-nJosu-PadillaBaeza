<!-- Modal Eliminar-->
<div class="modal fade" id="modalEliminar<?php echo $data['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEliminar">Eliminar Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="eliminar.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <h5>¿Esta seguro de eliminar <?php echo $data['nombreProducto']?> ? </h5>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </div>
    </form>
    </div>
  </div>
</div>