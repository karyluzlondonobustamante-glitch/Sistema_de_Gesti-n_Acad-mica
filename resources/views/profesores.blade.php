<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores - Sistema Académico</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Mismos estilos que la vista de estudiantes */
        :root {
            --color-fondo: #F5F0E8;
            --color-cajas: #FDFBF7;
            --color-bordes: #D4A574;
            --color-texto: #5C3D2E;
            --color-botones: #7BAF8A;
            --color-botones-hover: #5E8F6E;
            --color-sombra: rgba(92, 61, 46, 0.1);
            --color-danger: #c0392b;
            --color-danger-hover: #a93226;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--color-fondo);
            font-family: 'Montserrat', sans-serif;
            min-height: 100vh;
            padding: 30px;
        }

        .container-main {
            max-width: 1200px;
            margin: 0 auto;
            animation: fadeInUp 0.6s ease;
        }

        .header-section {
            background: var(--color-cajas);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            border: 2px solid var(--color-bordes);
            box-shadow: 0 4px 15px var(--color-sombra);
        }

        .header-section h1 {
            color: var(--color-texto);
            font-weight: 700;
            font-size: 2rem;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header-section h1 i {
            color: var(--color-botones);
            font-size: 2.2rem;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            padding: 15px 0;
            border-top: 2px solid var(--color-bordes);
            margin-top: 15px;
        }

        .nav-links a {
            color: var(--color-texto);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 50px;
            transition: all 0.3s ease;
            background: var(--color-fondo);
            border: 1px solid transparent;
        }

        .nav-links a:hover {
            background: var(--color-botones);
            color: white;
            border-color: var(--color-botones);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(123, 175, 138, 0.3);
        }

        .nav-links a i {
            margin-right: 8px;
        }

        .content-section {
            background: var(--color-cajas);
            border-radius: 20px;
            padding: 30px;
            border: 2px solid var(--color-bordes);
            box-shadow: 0 4px 15px var(--color-sombra);
        }

        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .content-header h2 {
            color: var(--color-texto);
            font-weight: 600;
            font-size: 1.6rem;
            margin: 0;
        }

        .btn-add {
            background: var(--color-botones);
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-add:hover {
            background: var(--color-botones-hover);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(123, 175, 138, 0.4);
        }

        .table-custom {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 12px;
            overflow: hidden;
        }

        .table-custom thead {
            background: var(--color-fondo);
        }

        .table-custom th {
            color: var(--color-texto);
            font-weight: 600;
            padding: 15px 20px;
            text-align: left;
            border-bottom: 2px solid var(--color-bordes);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table-custom td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--color-bordes);
            color: var(--color-texto);
            vertical-align: middle;
        }

        .table-custom tbody tr {
            transition: all 0.3s ease;
        }

        .table-custom tbody tr:hover {
            background: var(--color-fondo);
            transform: scale(1.01);
        }

        .table-custom tbody tr:last-child td {
            border-bottom: none;
        }

        .actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .btn-edit {
            color: var(--color-botones);
            text-decoration: none;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 50px;
            border: 2px solid var(--color-botones);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 0.85rem;
        }

        .btn-edit:hover {
            background: var(--color-botones);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(123, 175, 138, 0.3);
        }

        .btn-delete {
            color: var(--color-danger);
            text-decoration: none;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 50px;
            border: 2px solid var(--color-danger);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 0.85rem;
            background: none;
            cursor: pointer;
        }

        .btn-delete:hover {
            background: var(--color-danger);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(192, 57, 43, 0.3);
        }

        .badge-count {
            background: var(--color-fondo);
            color: var(--color-texto);
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            border: 1px solid var(--color-bordes);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            body {
                padding: 15px;
            }

            .header-section h1 {
                font-size: 1.5rem;
            }

            .content-header {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-add {
                justify-content: center;
            }

            .table-custom {
                font-size: 0.85rem;
            }

            .table-custom th,
            .table-custom td {
                padding: 10px 12px;
            }

            .actions {
                flex-direction: column;
                gap: 5px;
            }

            .btn-edit,
            .btn-delete {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .header-section {
                padding: 20px;
            }

            .nav-links {
                flex-direction: column;
                gap: 10px;
            }

            .nav-links a {
                text-align: center;
            }

            .table-custom {
                font-size: 0.75rem;
            }

            .table-custom th,
            .table-custom td {
                padding: 8px 10px;
            }
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>
<body>

<div class="container-main">
    <div class="header-section">
        <h1>
            <i class="fas fa-chalkboard-teacher"></i>
            Sistema de Gestión Académica
        </h1>
        <div class="nav-links">
            <a href="/"><i class="fas fa-home"></i> Inicio</a>
            <a href="/estudiantes"><i class="fas fa-user-graduate"></i> Estudiantes</a>
            <a href="/profesores"><i class="fas fa-chalkboard-teacher"></i> Profesores</a>
            <a href="/materias"><i class="fas fa-book-open"></i> Materias</a>
        </div>
    </div>

    <div class="content-section">
        <div class="content-header">
            <h2>
                <i class="fas fa-user-tie" style="color: var(--color-botones);"></i>
                Listado de Profesores
                <span class="badge-count">{{ $profesores->count() }}</span>
            </h2>
            <a href="/profesores/crear" class="btn-add">
                <i class="fas fa-plus-circle"></i> Añadir Nuevo Profesor
            </a>
        </div>

        <div class="table-responsive">
            <table class="table-custom">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($profesores as $profesor)
                    <tr>
                        <td><strong>#{{ $profesor->id }}</strong></td>
                        <td>{{ $profesor->nombre }}</td>
                        <td>{{ $profesor->apellido }}</td>
                        <td><i class="fas fa-envelope" style="color: var(--color-bordes);"></i> {{ $profesor->correo }}</td>
                        <td>
                            <div class="actions">
                                <a href="/profesores/editar/{{ $profesor->id }}" class="btn-edit">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <a href="/profesores/eliminar/{{ $profesor->id }}" class="btn-delete" onclick="return confirm('¿Seguro que deseas eliminar a este profesor?')">
                                    <i class="fas fa-trash-alt"></i> Eliminar
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if($profesores->isEmpty())
        <div class="text-center py-5" style="color: var(--color-texto); opacity: 0.6;">
            <i class="fas fa-inbox" style="font-size: 3rem; display: block; margin-bottom: 15px;"></i>
            <p>No hay profesores registrados aún.</p>
            <a href="/profesores/crear" class="btn-add" style="display: inline-flex; margin-top: 10px;">
                <i class="fas fa-plus-circle"></i> Registrar el primero
            </a>
        </div>
        @endif
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
