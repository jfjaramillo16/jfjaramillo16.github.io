function validar(event) {
  event.preventDefault(); // Evita el envío normal del formulario

  let correo = document.getElementById("txtEmail").value.trim();
  let telefono = document.getElementById("txtTelefono").value.trim();
  let fecha = document.querySelector("input[type='date']").value;
  const expresion = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

  // Validar correo
  if (!expresion.test(correo)) {
    alert("El correo no es válido");
    return false;
  }

  // Validar teléfono
  if (telefono.length != 10 || isNaN(telefono)) {
    alert("El teléfono no es correcto. Debe tener 10 dígitos numéricos.");
    return false;
  }

  // Guardar en LocalStorage
  const contacto = {
    email: correo,
    telefono: telefono,
    fecha: fecha
  };

  localStorage.setItem("contacto_usuario", JSON.stringify(contacto));
  alert("✅ Datos de contacto guardados correctamente en el navegador.");

  // Redirigir a página de confirmación
  window.location.href = "FormContactoEnviado.html";
  return true;
}
