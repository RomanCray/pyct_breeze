<div>
    <style>
        /* Estilo para el sidebar */
        #sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            background-color: #343a40;
            color: #fff;
            padding-top: 20px;
            transition: all 0.3s;
        }

        #sidebar.collapsed {
            width: 0;
            overflow: hidden;
        }

        #sidebar .nav-link {
            color: #ddd;
        }

        #sidebar .nav-link:hover {
            background-color: #495057;
            color: #fff;
        }

        /* Ajuste del contenido principal */
        #main-content {
            margin-left: 250px;
            transition: all 0.3s;
        }

        #main-content.collapsed {
            margin-left: 0;
        }
    </style>
    <div id="sidebar">
        <h3 class="text-center">Mi Sidebar</h3>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Configuraciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cerrar Sesión</a>
            </li>
        </ul>
    </div>

    <!-- Botón para colapsar/expandir el Sidebar -->
    <button id="toggle-sidebar" class="btn btn-primary position-fixed" style="top: 20px; left: 260px;">
        Toggle Sidebar
    </button>

    <script>
        // JavaScript para colapsar y expandir el sidebar
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');
        const toggleButton = document.getElementById('toggle-sidebar');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('collapsed');

            // Cambiar posición del botón dependiendo del estado del sidebar
            if (sidebar.classList.contains('collapsed')) {
                toggleButton.style.left = '20px';
            } else {
                toggleButton.style.left = '260px';
            }
        });
    </script>
</div>
