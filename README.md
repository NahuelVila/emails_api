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
<h1>Rutas de la API</h1>
<table>
    <tr>
        <th>Acción</th>
        <th>Ruta</th>
        <th>Petición</th>
        <th>Campos</th>
    </tr>
    <tr>
        <td>index</td>
        <td>"(ruta de la app)/api/users"</td>
        <td>GET | HEAD</td>
        <td>none</td>
    </tr>
    <tr>
        <td>store</td>
        <td>"(ruta de la app)/api/users"</td>
        <td>POST</td>
        <td>name & email & password</td>
    </tr>
    <tr>
        <td>show</td>
        <td>"(ruta de la app)/api/users/{id}"</td>
        <td>GET | HEAD</td>
        <td>id</td>
    </tr>
    <tr>
        <td>update</td>
        <td>"(ruta de la app)/api/users/{id}"</td>
        <td>PUT | PATCH</td>
        <td>name | email | password</td>
    </tr>
    <tr>
        <td>destroy</td>
        <td>"(ruta de la app)/api/users/{id}"</td>
        <td>DELETE</td>
        <td>id</td>
    </tr>
    <tr>
        <td>domains</td>
        <td>"(ruta de la app)/api/users"</td>
        <td>GET | HEAD</td>
        <td>none</td>
    </tr>
</table>
