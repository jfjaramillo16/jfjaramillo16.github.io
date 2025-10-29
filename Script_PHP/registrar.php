<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<script>
document.forms["FormDireccion"].addEventListener("submit", function(e) {
  e.preventDefault();
  const datos = {
    principal: this.txtPrincipal.value,
    transversal: this.txtTransversal.value,
    entrega1: this.chbEntrega1.checked,
    entrega2: this.chbEntrega2.checked,
    canton: this.cmbCantones.value
  };
  localStorage.setItem("registro_direccion", JSON.stringify(datos));
  alert("Datos de registro guardados en el navegador");
});
</script>
