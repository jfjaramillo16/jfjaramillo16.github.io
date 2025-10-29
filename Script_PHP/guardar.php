<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<script>
document.forms["FormProducto"].addEventListener("submit", function(e) {
  e.preventDefault();
  const producto = {
    nombre: this.txtNombre.value,
    descripcion: this.txtaDescripcion.value,
    impuesto: this.cmbImpuesto.value,
    promocion: this.rbPromocion.value
  };
  localStorage.setItem("producto_guardado", JSON.stringify(producto));
  alert("Producto guardado en LocalStorage");
});
</script>
