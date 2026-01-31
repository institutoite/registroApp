<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title>Registrate</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{ asset('image/ite.ico') }}" type="image/x-icon">
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{ asset('colorib/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('colorib/css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <style>
            :root {
                --primary: rgb(38,186,165);
                --primary-700: #1fae9a;
                --primary-600: #24c1ab;
                --primary-500: #26baa5;
                --primary-300: #7de0d2;
                --secondary: rgb(55,95,122);
                --secondary-700: #2f5168;
                --secondary-600: #375f7a;
                --secondary-500: #3f6c8b;
                --secondary-300: #8fb2c6;
                --bg: #f7fafb;
                --card: #ffffff;
                --text: #102a43;
                --muted: #6b7280;
                --border: #e5e7eb;
            }

            body {
                background: radial-gradient(1200px 600px at 10% -10%, #dff7f2 0%, transparent 60%),
                            radial-gradient(900px 500px at 110% 10%, #dce9f1 0%, transparent 55%),
                            var(--bg);
                color: var(--text);
                font-family: "Poppins", sans-serif;
            }

            .wrapper {
                background: transparent;
                padding: 48px 24px;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .form-inner {
                background: var(--card);
                border-radius: 24px;
                padding: 40px 48px;
                box-shadow: 0 20px 60px rgba(16,42,67,0.12);
                border: 1px solid var(--border);
                width: min(100%, 560px);
            }

            .form-header h3,
            .form-group label {
                color: var(--secondary-700);
            }

            .form-header p {
                color: var(--muted);
            }

            .form-control {
                border: 1px solid var(--border);
                border-radius: 12px;
                padding: 12px 14px;
                transition: all 0.2s ease;
                background-color: #f9fbfc;
            }

            .form-control:focus {
                border-color: var(--primary);
                box-shadow: 0 0 0 4px rgba(38,186,165,0.2);
                background-color: #ffffff;
            }

            .form-text {
                color: var(--secondary-600);
                font-size: 12px;
                margin-top: 6px;
                display: block;
            }

            button[type="submit"] {
                background: linear-gradient(135deg, var(--primary-600), var(--primary-700));
                border-radius: 12px;
                border: none;
                color: #fff;
                font-weight: 600;
                letter-spacing: 0.3px;
                padding: 14px 24px;
                width: 100%;
                box-shadow: 0 12px 24px rgba(38,186,165,0.25);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }

            button[type="submit"]:hover {
                transform: translateY(-1px);
                box-shadow: 0 16px 28px rgba(38,186,165,0.3);
            }

            .btn-login {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                margin-top: 12px;
                padding: 12px 20px;
                border-radius: 12px;
                border-color: rgba(55,95,122,0.35);
                color: var(--secondary-700);
                border: 1px solid rgba(55,95,122,0.2);
                background: rgba(55,95,122,0.08);
                font-weight: 600;
                transition: all 0.2s ease;
            }

            .btn-login:hover {
                background: rgba(55,95,122,0.08);
                color: var(--secondary-700);
            }

            .socials {
                background: linear-gradient(140deg, rgba(38,186,165,0.12), rgba(55,95,122,0.12));
                border-radius: 16px;
                padding: 16px;
                margin-top: 18px;
                border: 1px solid rgba(55,95,122,0.15);
            }

            .socials p {
                color: var(--secondary-700);
                margin-bottom: 10px;
                font-weight: 600;
            }

            .socials-icon {
                color: var(--secondary-700);
                background: #ffffff;
                border-radius: 10px;
                padding: 10px 12px;
                margin-right: 8px;
                box-shadow: 0 8px 16px rgba(16,42,67,0.08);
                border: 1px solid rgba(55,95,122,0.12);
                transition: all 0.2s ease;
            }

            .socials-icon:hover {
                color: var(--primary-700);
                border-color: rgba(38,186,165,0.4);
                transform: translateY(-2px);
            }

            @media (max-width: 991px) {
                .wrapper {
                    padding: 24px 16px;
                    min-height: auto;
                }

                .form-inner {
                    padding: 32px 24px;
                }
            }
        </style>
	</head>

	<body>

		<div class="wrapper">
			<div class="form-inner">
				<form action="{{ route('personas.store') }}" method="POST">
                    @csrf
                    <div class="form-header">
                        <h3>Regístrate</h3>
                        <p>¡Elige el taller que más se ajuste a ti!</p>
                        <img src="{{ asset('image/sign-up.png') }}" alt="" class="sign-up-icon">
                    </div>
                
                    <div class="form-group">
                        <label for="nombrs">Nombre:</label>
                        <input type="text" name="nombrs" class="form-control" data-validation="length alphanumeric" data-validation-length="3-20" required>
                    </div>
                
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" name="apellidos" class="form-control" data-validation="length alphanumeric" data-validation-length="3-20" required>
                    </div>
                
                    <div class="form-group">
                        <label for="fnacimiento">Fecha de Nacimiento:</label>
                        <input type="date" name="fnacimiento" class="form-control" required>
                    </div>
                
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="text" name="telefono" class="form-control" data-validation="number" data-validation-length="8" required>
                    </div>
                
                    <div class="form-group">
                        <label for="taller_id">Taller:</label>
                        <select name="taller_id" class="form-control" required>
                            <option value="">Seleccione un taller</option>
                            @foreach($talleres as $taller)
                                <option value="{{ $taller->id }}" @if(!$taller->estado) disabled @endif>
                                    {{ $taller->taller }}@if(!$taller->estado) (próximamente)@endif
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ciudad_id">Ciudad:</label>
                        <select name="ciudad_id" class="form-control" required>
                            <option value="">Seleccione una ciudad</option>
                            @foreach($ciudades as $ciudad)
                                <option value="{{ $ciudad->id }}" @if(!$ciudad->estado) disabled @endif>
                                    {{ $ciudad->ciudad }}@if(!$ciudad->estado) (Próximamente)@endif
                                </option>
                            @endforeach
                        </select>
                    </div>
                
                    <button type="submit">Registrar</button>
                
                    <a class="btn-login" href="{{ url('admin') }}">Login</a>

                    <div class="socials">
                        <p>Síguenos en las redes socialesx</p>
                        <a href="https://www.facebook.com/ite.educabol" target="_blanck" class="socials-icon"><i class="zmdi zmdi-facebook"></i></a>
                        <a href="https://www.tiktok.com/@ite_educabol" target="_blanck" class="socials-icon"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="https://www.youtube.com/@ite_educabol" target="_blanck" class="socials-icon"><i class="zmdi zmdi-youtube"></i></a>
                    </div>
                </form>
                
			</div>
			
		</div>
		
		<script src="{{ asset('colorib/js/jquery-3.3.1.min.js') }}"></script>
		{{-- <script src="{{ asset('colorib/js/jquery.form-validator.min.js') }}"></script> --}}
		<script src="{{ asset('colorib/js/main.js') }}"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

