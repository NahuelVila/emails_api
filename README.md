<h1>Campos de Usuarios</h1>
<table>
    <tr>
        <th>Valor</th>
        <th>Nombre del campo</th>
    </tr>
    <tr>
        <td>Identificador</td>
        <td>id</td>
    </tr>
    <tr>
        <td>Nombre</td>
        <td>name</td>
    </tr>
    <tr>
        <td>Contraseña</td>
        <td>password</td>
    </tr>
    <tr>
        <td>Correo electrónico</td>
        <td>email</td>
    </tr>
</table>
<h1>Método de autenticación</h1>
<p>Sistema de tokens de autenticación con <b>Laravel/Sanctum</b></p>
<h1>Rutas de la API</h1>
<table>
    <tr>
        <th>Acción</th>
        <th>Autenticación</th>
        <th>Ruta</th>
        <th>Petición</th>
        <th>Campos</th>
        <th>Descripción</th>
    </tr>
    <tr>
        <th colspan="6">Autenticación</th>
    </tr>
    <tr>
        <td>register</td>
        <td>ninguna</td>
        <td>"(ruta de la app)/api/auth/register"</td>
        <td>POST</td>
        <td>name & email & password</td>
        <td>Almacena en base de datos un usuario con las credenciales recibidas en la petición y devuelve un token de autenticación.</td>
    </tr>
    <tr>
        <td>login</td>
        <td>ninguna</td>
        <td>"(ruta de la app)/api/auth/login"</td>
        <td>POST</td>
        <td>email & password</td>
        <td>Devuelve un token de autenticación para el usuario con las credenciales recibidas en la petición, si éste existe con las mismas credenciales en base de datos.</td>
    </tr>
    <tr>
        <th colspan="6">API Emails</th>
    </tr>
    <tr>
        <td>index</td>
        <td>token</td>
        <td>"(ruta de la app)/api/users"</td>
        <td>GET | HEAD</td>
        <td>ninguno</td>
        <td>Lista los usuarios en base de datos, paginados de 10 en 10.</td>
    </tr>
    <tr>
        <td>store</td>
        <td>token</td>
        <td>"(ruta de la app)/api/users"</td>
        <td>POST</td>
        <td>name & email & password</td>
        <td>Almacena en base de datos un usuario con las credenciales recibidas en la petición.</td>
    </tr>
    <tr>
        <td>show</td>
        <td>token</td>
        <td>"(ruta de la app)/api/users/{id}"</td>
        <td>GET | HEAD</td>
        <td>id</td>
        <td>Muestra los datos del usuario cuyo id corresponda con el recibido en la url.</td>
    </tr>
    <tr>
        <td>update</td>
        <td>token</td>
        <td>"(ruta de la app)/api/users/{id}"</td>
        <td>PUT | PATCH</td>
        <td>name | email | password</td>
        <td>Reemplaza los datos del usuario cuyo id corresponda con el recibido en la url con los datos recibidos en la petición.</td>
    </tr>
    <tr>
        <td>destroy</td>
        <td>token</td>
        <td>"(ruta de la app)/api/users/{id}"</td>
        <td>DELETE</td>
        <td>id</td>
        <td>Elimina los datos del usuario cuyo id corresponda con el recibido en la url.</td>
    </tr>
    <tr>
        <td>domains</td>
        <td>token</td>
        <td>"(ruta de la app)/api/users"</td>
        <td>GET | HEAD</td>
        <td>ninguno</td>
        <td>Muestra el conteo de dominios y subdominios diferentes recogidos en base de datos.</td>
    </tr>
</table>
