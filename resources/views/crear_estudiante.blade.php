<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Estudiante - Sistema Académico</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Variables de color - Misma paleta */
        :root {
            --color-fondo: #F5F0E8;        /* Crema / Lino suave */
            --color-cajas: #FDFBF7;         /* Blanco hueso */
            --color-bordes: #D4A574;        /* Terracota suave */
            --color-texto: #5C3D2E;         /* Marrón oscuro */
            --color-botones: #7BAF8A;       /* Verde salvia */
            --color-botones-hover: #5E8F6E; /* Verde salvia oscuro */
            --color-sombra: rgba(92, 61, 46, 0.1);
            --color-input-focus: rgba(212, 165, 116, 0.3);
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

        .card-container {
            max-width: 600px;
            width: 100%;
            animation: fadeInUp 0.6s ease;
        }

        /* Tarjeta principal */
        .card-main {
            background: var(--color-cajas);
            border-radius: 25px;
            border: 2px solid var(--color-bordes);
            box-shadow: 0 20px 60px var(--color-sombra);
            padding: 40px;
            transition: all 0.3s ease;
        }

        .card-main:hover {
            box-shadow: 0 25px 70px rgba(92, 61, 46, 0.15);
        }

        /* Header de la tarjeta */
        .card-header-custom {
            text-align: center;
            margin-bottom: 35px;
            padding-bottom: 25px;
            border-bottom: 2px solid var(--color-bordes);
            position: relative;
        }

        .card-header-custom .icon-header {
            font-size: 50px;
            color: var(--color-botones);
            display: block;
            margin-bottom: 10px;
            animation: pulse 2s ease-in-out infinite;
        }

        .card-header-custom h1 {
            color: var(--color-texto);
            font-weight: 700;
            font-size: 2rem;
            margin: 0;
            letter-spacing: 1px;
        }

        .card-header-custom .subtitle {
            color: var(--color-texto);
            opacity: 0.6;
            font-weight: 300;
            font-size: 0.95rem;
            margin-top: 5px;
        }

        /* Campos del formulario */
        .form-group {
            margin-bottom: 22px;
        }

        .form-label {
            color: var(--color-texto);
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-label i {
            color: var(--color-botones);
            width: 20px;
            font-size: 1rem;
        }

        .form-label .required {
            color: #e74c3c;
            font-weight: 700;
        }

        .form-control {
            background: var(--color-fondo);
            border: 2px solid var(--color-bordes);
            border-radius: 12px;
            padding: 12px 16px;
            font-size: 1rem;
            color: var(--color-texto);
            transition: all 0.3s ease;
            font-family: 'Montserrat', sans-serif;
        }

        .form-control:focus {
            border-color: var(--color-botones);
            box-shadow: 0 0 0 4px var(--color-input-focus);
            background: var(--color-cajas);
            outline: none;
        }

        .form-control::placeholder {
            color: var(--color-texto);
            opacity: 0.4;
            font-weight: 300;
        }

        .form-text {
            color: var(--color-texto);
            opacity: 0.5;
            font-size: 0.8rem;
            margin-top: 5px;
            font-weight: 300;
        }

        .form-text i {
            color: var(--color-botones);
            margin-right: 5px;
        }

        /* Botones */
        .btn-actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            padding-top: 25px;
            border-top: 2px solid var(--color-bordes);
        }

        .btn-primary-custom {
            background: var(--color-botones);
            color: white;
            border: none;
            padding: 14px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-family: 'Montserrat', sans-serif;
        }

        .btn-primary-custom:hover {
            background: var(--color-botones-hover);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(123, 175, 138, 0.4);
            color: white;
        }

        .btn-primary-custom:active {
            transform: translateY(0);
        }

        .btn-secondary-custom {
            background: transparent;
            color: var(--color-texto);
            border: 2px solid var(--color-bordes);
            padding: 14px 25px;
            border-radius: 50px;
            font-weight: 500;
            font-size: 1rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
        }

        .btn-secondary-custom:hover {
            background: var(--color-fondo);
            border-color: var(--color-texto);
            color: var(--color-texto);
            transform: translateY(-2px);
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

        /* Estilos para errores de validación */
        .is-invalid {
            border-color: #e74c3c !important;
        }

        .is-invalid:focus {
            box-shadow: 0 0 0 4px rgba(231, 76, 60, 0.2) !important;
        }

        .invalid-feedback {
            color: #e74c3c;
            font-size: 0.85rem;
            margin-top: 5px;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding: 20px;
            }

            .card-main {
                padding: 25px;
            }

            .card-header-custom h1 {
                font-size: 1.6rem;
            }

            .card-header-custom .icon-header {
                font-size: 40px;
            }

            .btn-actions {
                flex-direction: column;
            }

            .btn-primary-custom,
            .btn-secondary-custom {
                width: 100%;
                padding: 12px 20px;
            }

            .form-control {
                font-size: 0.95rem;
                padding: 10px 14px;
            }
        }

        @media (max-width: 480px) {
            .card-main {
                padding: 20px;
            }

            .card-header-custom h1 {
                font-size: 1.3rem;
            }

            .form-label {
                font-size: 0.85rem;
            }
        }

        /* Estilo para el select (si lo usas) */
        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%235C3D2E' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            padding-right: 40px;
        }

        /* Checkbox y radio personalizados */
        .form-check-input {
            border: 2px solid var(--color-bordes);
        }

        .form-check-input:checked {
            background-color: var(--color-botones);
            border-color: var(--color-botones);
        }

        .form-check-input:focus {
            border-color: var(--color-botones);
            box-shadow: 0 0 0 4px var(--color-input-focus);
        }
    </style>
</head>
<body>

<div class="card-container">
    <div class="card-main">
        <!-- Header -->
        <div class="card-header-custom">
            <i class="fas fa-user-plus icon-header"></i>
            <h1>Registrar Estudiante</h1>
            <p class="subtitle">
                <i class="fas fa-arrow-right" style="color: var(--color-botones);"></i>
                Completa los datos del nuevo estudiante
            </p>
        </div>

        <!-- Formulario -->
        <form action="/estudiantes/guardar" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <!-- Nombre -->
            <div class="form-group">
                <label for="nombre" class="form-label">
                    <i class="fas fa-user"></i> Nombre <span class="required">*</span>
                </label>
                <input type="text"
                       class="form-control"
                       name="nombre"
                       id="nombre"
                       placeholder="Ej: Juan Carlos"
                       required>
                <div class="form-text">
                    <i class="fas fa-info-circle"></i> Ingresa el nombre completo
                </div>
            </div>

            <!-- Apellido -->
            <div class="form-group">
                <label for="apellido" class="form-label">
                    <i class="fas fa-user"></i> Apellido <span class="required">*</span>
                </label>
                <input type="text"
                       class="form-control"
                       name="apellido"
                       id="apellido"
                       placeholder="Ej: Pérez García"
                       required>
                <div class="form-text">
                    <i class="fas fa-info-circle"></i> Ingresa el apellido completo
                </div>
            </div>

            <!-- Correo -->
            <div class="form-group">
                <label for="correo" class="form-label">
                    <i class="fas fa-envelope"></i> Correo Electrónico <span class="required">*</span>
                </label>
                <input type="email"
                       class="form-control"
                       name="correo"
                       id="correo"
                       placeholder="ejemplo@universidad.edu"
                       required>
                <div class="form-text">
                    <i class="fas fa-info-circle"></i> Ingresa un correo institucional válido
                </div>
            </div>

            <!-- Programa -->
            <div class="form-group">
                <label for="programa" class="form-label">
                    <i class="fas fa-graduation-cap"></i> Programa Académico <span class="required">*</span>
                </label>
                <input type="text"
                       class="form-control"
                       name="programa"
                       id="programa"
                       placeholder="Ej: Ingeniería en Sistemas"
                       required>
                <div class="form-text">
                    <i class="fas fa-info-circle"></i> Programa al que pertenece el estudiante
                </div>
            </div>

            <!-- Botones -->
            <div class="btn-actions">
                <button type="submit" class="btn-primary-custom">
                    <i class="fas fa-save"></i> Guardar Estudiante
                </button>
                <a href="/estudiantes" class="btn-secondary-custom">
                    <i class="fas fa-arrow-left"></i> Cancelar
                </a>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Validación adicional en cliente (opcional) -->
<script>
    document.querySelector('form').addEventListener('submit', function(e) {
        const inputs = this.querySelectorAll('input[required]');
        let isValid = true;

        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('is-invalid');
                isValid = false;
            } else {
                input.classList.remove('is-invalid');
            }
        });

        if (!isValid) {
            e.preventDefault();
            alert('Por favor, completa todos los campos requeridos.');
        }
    });

    // Remover clase de error al escribir
    document.querySelectorAll('.form-control').forEach(input => {
        input.addEventListener('input', function() {
            if (this.value.trim()) {
                this.classList.remove('is-invalid');
            }
        });
    });
</script>

</body>
</html>
