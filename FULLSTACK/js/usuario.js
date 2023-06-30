function mostrarBotones() {
    var linkContainer = document.getElementById("linkContainer");
  
    var link1 = document.createElement("a");
    link1.innerHTML = "Enlace 1";
    link1.href = "pagina1.html";
    link1.className = "link";
  
    var link2 = document.createElement("a");
    link2.innerHTML = "Enlace 2";
    link2.href = "pagina2.html";
    link2.className = "link";
  
    var link3 = document.createElement("a");
    link3.innerHTML = "Enlace 3";
    link3.href = "pagina3.html";
    link3.className = "link";
  
    linkContainer.appendChild(link1);
    linkContainer.appendChild(link2);
    linkContainer.appendChild(link3);
  
    var mainButton = document.getElementById("mainButton");
    mainButton.disabled = true;
  }
  
  