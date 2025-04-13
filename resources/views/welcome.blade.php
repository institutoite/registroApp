<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registrate</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{ asset('colorib/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('colorib/css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="image-holder">
				<img src="{{ asset('colorib/images/registration-form-8.jpg') }}" alt="">
			</div>
			<div class="form-inner">
				<form action="{{ route('personas.store') }}" method="POST">
                    @csrf
                    <div class="form-header">
                        <h3>Regístrate</h3>
                        <img src="{{ asset('colorib/images/sign-up.png') }}" alt="" class="sign-up-icon">
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
                                <option value="{{ $taller->id }}">{{ $taller->taller }}</option>
                            @endforeach
                        </select>
                    </div>
                
                    <button type="submit">Registrar</button>
                
                    <div class="socials">
                        <p>Síguenos en las redes sociales</p>
                        <a href="https://www.facebook.com/ite.educabol" class="socials-icon"><i class="zmdi zmdi-facebook"></i></a>
                        <a href="https://www.tiktok.com/@ite_educabol" class="socials-icon"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="https://www.instagram.com/ite.educabol/" class="socials-icon"><i class="zmdi zmdi-instagram"></i></a>
                        <a href="https://www.youtube.com/@ite_educabol" class="socials-icon"><i class="zmdi zmdi-youtube"></i></a>
                    </div>
                </form>
                
			</div>
			
		</div>
		
		<script src="{{ asset('colorib/js/jquery-3.3.1.min.js') }}"></script>
		{{-- <script src="{{ asset('colorib/js/jquery.form-validator.min.js') }}"></script> --}}
		<script src="{{ asset('colorib/js/main.js') }}"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

