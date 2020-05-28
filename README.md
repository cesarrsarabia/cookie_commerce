<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>



## Cookie Commerce

Coookie commerce es una tienda en linea de galletas, que simula un e-commerce en la cual se pueden realizar pedidos , ver productos. Administrar productos como administrador , ventas, usuarios y categorias.

## Programacion Para Internet . D13
## Integrantes
- César Ramírez 
- Ivan Collignon 

## Instalación 
- Despues de instalar el proyecto. Ejecutar: php artisan storage:link , para habilitar el almacenamiento de imagenes
- Ejecutar migraciones y seeder: php artisan migrate:fresh --seed

## Usuarios de Prueba 
- Administrador. Email: admin@cookie.mx  Contraseña : password
- Usuario. Email: user@gmail.com Contraseña: 12345678

## Envio de correo
- Al momento de registrar un nuevo usuario se enviará un correo de bienvenida. Utilizamos el servidor de correos "MailTrap". El cual simula el envío de correos.
- Para que usted pueda verificar que esto funciona tendrá que registrarse en "MailTrap".
- Copiar el usuario y contraseña que aparecen en la parte de credenciales del inbox de MailTrap.
- En el archivo ".env" pegamos en la parte de "MAIL_USERNAME=" el usuario que copiamos de las credenciales.
- Y en la parte de "MAIL_PASSWORD=" pegamos la contrasema que copiamos de las credenciales.
- Ahora detenemos el servidor de php y volvemos a iniciarlo para que estos cambios se vean reflejados.
- De esta forma usted podrá ver que la parte de evío de correos está funcionando. Si se quiere lanzar a producción esta aplicación utilizaríamos otro servidor de correo.
