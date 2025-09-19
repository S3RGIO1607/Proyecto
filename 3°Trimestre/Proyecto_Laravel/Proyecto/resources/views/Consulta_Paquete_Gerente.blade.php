@vite(['resources/css/app.css', 'resources/css/estilos.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EVENTOS AARON</title>
    <!-- Enlace al favicon de la página -->
    <link rel="shortcut icon" href="https://img.icons8.com/?size=100&id=dxoYK8bxqiJr&format=png&color=000000" type="image/x-icon">
    
</head>
<body>
    <header class="a">
        <!-- Logo de la empresa de eventos -->
        <img src="../img/logo2.png" alt="Logo">
    </header>
    <div class="container">
        <nav class="b">
            <section class="c">
                <!-- Campo de búsqueda en el menú -->
                <input class="d" type="search" placeholder="Filtrar Menu"/>
                <!-- Icono de búsqueda -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="e bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85zm-5.44-9.028a5.5 5.5 0 1 1 0 11 5.5 5.5 0 0 1 0-11z"/>
                </svg>
            </section>
            <ul class="f">
                <!-- Elementos del menú -->
                <li class="g">
                    <a class="h" href="#" target="_self">
                        <!-- Icono del Dashboard -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="i bi bi-speedometer" viewBox="0 0 16 16">
                            <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2M3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
                            <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.95 11.95 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0"/>
                        </svg>Inicio
                    </a>
                </li>
                <li class="g">
                    <a class="h" href="#" target="_self">  <!-- Redireccion de perfil gerente -->
                        <!-- Icono del perfil -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>Perfil
                    </a>
                </li>
                <li class="g">
                    <a class="h" href="#" target="_self">
                        <!-- Icono del usuario -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="i bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg>Usuario</a>
                    <ul class="j">
                        <li>
                            <a href="../vista/Consulta_Usuario_Gerente.html" target="_self">Consultar</a>
                        </li>
                    </ul>
                </li>
                <li class="g">
                    <a class="h" href="#" target="_self">
                        <!-- Icono del producto -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket3-fill" viewBox="0 0 16 16">
                            <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.468 15.426.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z"/>
                        </svg>Producto
                    </a>
                    <ul class="j">
                        <li>
                            <a href="../vista/Consulta_Producto_Gerente.html" target="_self">Consultar</a>
                        </li>
                    </ul>
                </li>
                <li class="g">
                    <a class="h" href="#" target="_self">
                        <!-- Icono del alquiler -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z"/>
                        </svg>Alquiler
                    </a>
                    <ul class="j">
                        <li>
                            <a href="../vista/Consulta_Alquiler_Gerente.html" target="_self">Consultar</a>
                        </li>
                    </ul>
                </li>
                <li class="g">
                    <a class="h" href="#" target="_self">
                        <!-- Icono del perfil -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                        </svg>Paquetes
                    </a>
                    <ul class="j">
                        <li>
                            <a href="../vista/Consulta_Paquete_Gerente.html" target="_self">Consultar</a>
                        </li>
                    </ul>
                </li>
                <li class="g">
                    <a class="h" href="#" target="_self">
                        <!-- Icono del perfil -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus-fill" viewBox="0 0 16 16">
                            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0"/>
                        </svg>Servicios
                    </a>
                    <ul class="j">
                        <li>
                            <a href="../vista/Consulta_Servisio_Gerente.html" target="_self">Consultar</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>


        <body class="Tab_Consulta">
            <div class="container_TC">
                <h1 class="h1_TC">Consulta de Paquetes</h1>
                
                <div class="search-box_TC">
                    <div class="input-group mb-3">
                        <input type="text" id="searchInput" class="form-control" placeholder="Buscar en la tabla...">
                        <button class="btn btn-outline-secondary" type="button" onclick="searchTable()">Buscar</button>
                    </div>
                </div>
        
                <div class="table-container_TC">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="table-header_TC">
                                <tr>
                                    <th>ID Paquete</th>
                                    <th>Tipo de Evento</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="rentalTable">
                                <!-- Example data rows - in a real app these would be populated from a database -->
                                <tr>
                                    <td>1</td>
                                    <td>Paquete Clásico</td>
                                    <td>Paquete de Fiesta</td>
                                    <td>Descripción del paquete clásico</td>
                                    <td>2500000</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-primary">Ver</button>
                                        <button class="btn btn-sm btn-warning">Editar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Paquete Premium</td>
                                    <td>Paquete de Boda</td>
                                    <td>Descripción del paquete premium</td>
                                    <td>3500000</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-primary">Ver</button>
                                        <button class="btn btn-sm btn-warning">Editar</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Paquete Corporativo</td>
                                    <td>Paquete de Aniversario</td>
                                    <td>Descripción del paquete corporativo</td>
                                    <td>4500000</td>
                                    <td class="action-buttons">
                                        <button class="btn btn-sm btn-primary">Ver</button>
                                        <button class="btn btn-sm btn-warning">Editar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
        
            <!-- Bootstrap JS Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            
            <script>
                function searchTable() {
                    const input = document.getElementById("searchInput");
                    const filter = input.value.toUpperCase();
                    const table = document.getElementById("rentalTable");
                    const tr = table.getElementsByTagName("tr");
        
                    for (let i = 0; i < tr.length; i++) {
                        let found = false;
                        const td = tr[i].getElementsByTagName("td");
                        
                        for (let j = 0; j < td.length - 1; j++) { // Exclude actions column from search
                            if (td[j]) {
                                const txtValue = td[j].textContent || td[j].innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    found = true;
                                    break;
                                }
                            }
                        }
                        
                        tr[i].style.display = found ? "" : "none";
                    }
                }
        
                function changeRowsPerPage() {
                    const select = document.getElementById("rowsPerPage");
                    console.log(`Mostrar ${select.value} filas por página`);
                    // In a real app, you would implement pagination logic here
                }
            </script>
        
        </body>
    </div>
</body>
</html>        