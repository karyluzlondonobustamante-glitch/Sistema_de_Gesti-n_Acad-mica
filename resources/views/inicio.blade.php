<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Sistema de Gestión Académica</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Variables de color */
        :root {
            --color-fondo: #F5F0E8;        /* Crema / Lino suave */
            --color-cajas: #FDFBF7;         /* Blanco hueso */
            --color-bordes: #D4A574;        /* Terracota suave */
            --color-texto: #5C3D2E;         /* Marrón oscuro */
            --color-botones: #7BAF8A;       /* Verde salvia */
            --color-botones-hover: #5E8F6E; /* Verde salvia oscuro */
            --color-sombra: rgba(92, 61, 46, 0.1);
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            background-image:
                radial-gradient(circle at 20% 50%, rgba(212, 165, 116, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 50%, rgba(212, 165, 116, 0.05) 0%, transparent 50%);
        }

        .main-container {
            max-width: 900px;
            width: 100%;
            animation: fadeInUp 0.8s ease;
        }

        /* Header con logo */
        .header-section {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .header-section .icon-main {
            font-size: 60px;
            color: var(--color-botones);
            margin-bottom: 15px;
            display: block;
            animation: pulse 2s ease-in-out infinite;
        }

        .header-section h1 {
            color: var(--color-texto);
            font-weight: 700;
            font-size: 2.8rem;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(92, 61, 46, 0.1);
            position: relative;
            display: inline-block;
        }

        .header-section h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--color-botones), var(--color-bordes));
            border-radius: 2px;
        }

        .header-section .subtitle {
            color: var(--color-texto);
            opacity: 0.7;
            font-weight: 300;
            margin-top: 20px;
            font-size: 1.1rem;
        }

        /* Grid de tarjetas */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .card-module {
            background: var(--color-cajas);
            border-radius: 20px;
            padding: 35px 25px;
            text-align: center;
            text-decoration: none;
            color: var(--color-texto);
            border: 2px solid var(--color-bordes);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px var(--color-sombra);
        }

        .card-module::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--color-botones), var(--color-bordes));
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .card-module:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(92, 61, 46, 0.15);
            border-color: var(--color-botones);
        }

        .card-module:hover::before {
            transform: scaleX(1);
        }

        .card-module .icon {
            font-size: 45px;
            color: var(--color-botones);
            margin-bottom: 15px;
            display: block;
            transition: transform 0.3s ease;
        }

        .card-module:hover .icon {
            transform: scale(1.1) rotate(-5deg);
        }

        .card-module h3 {
            font-weight: 600;
            font-size: 1.4rem;
            margin-bottom: 8px;
            color: var(--color-texto);
        }

        .card-module p {
            font-weight: 300;
            font-size: 0.9rem;
            opacity: 0.7;
            margin: 0;
        }

        .card-module .badge-module {
            display: inline-block;
            margin-top: 12px;
            padding: 5px 15px;
            background: var(--color-fondo);
            color: var(--color-texto);
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 500;
            border: 1px solid var(--color-bordes);
        }

        /* Footer */
        .footer-section {
            text-align: center;
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid var(--color-bordes);
            color: var(--color-texto);
            opacity: 0.6;
            font-size: 0.9rem;
        }

        .footer-section i {
            color: var(--color-botones);
        }

        /* Animaciones */
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

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-section h1 {
                font-size: 2rem;
            }

            .cards-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .card-module {
                padding: 25px 20px;
            }

            .header-section .icon-main {
                font-size: 40px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 15px;
            }

            .header-section h1 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>

<div class="main-container">
    <!-- Header -->
    <div class="header-section">
        <i class="fas fa-graduation-cap icon-main"></i>
        <h1>Sistema de Gestión Académica</h1>
        <p class="subtitle">
            <i class="fas fa-arrow-right" style="color: var(--color-botones);"></i>
            Selecciona un módulo para comenzar
            <i class="fas fa-arrow-left" style="color: var(--color-botones);"></i>
        </p>
    </div>

    <!-- Tarjetas -->
    <div class="cards-grid">
        <!-- Estudiantes -->
        <a href="/estudiantes" class="card-module">
            <i class="fas fa-user-graduate icon"></i>
            <h3>Estudiantes</h3>
            <p>Gestiona los alumnos del sistema</p>
            <span class="badge-module">
                <i class="fas fa-users"></i> Ver todos
            </span>
        </a>

        <!-- Profesores -->
        <a href="/profesores" class="card-module">
            <i class="fas fa-chalkboard-teacher icon"></i>
            <h3>Profesores</h3>
            <p>Administra el cuerpo docente</p>
            <span class="badge-module">
                <i class="fas fa-user-tie"></i> Ver todos
            </span>
        </a>

        <!-- Materias -->
        <a href="/materias" class="card-module">
            <i class="fas fa-book-open icon"></i>
            <h3>Materias</h3>
            <p>Controla las asignaturas</p>
            <span class="badge-module">
                <i class="fas fa-book"></i> Ver todas
            </span>
        </a>
    </div>

    <!-- Footer -->
    <div class="footer-section">
        <i class="fas fa-heart"></i>
        Sistema desarrollado con <i class="fas fa-coffee"></i> y dedicación
        <br>
        <small>© 2024 - Todos los derechos reservados</small>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
