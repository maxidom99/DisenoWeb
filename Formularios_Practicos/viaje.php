<?php
class FormularioViaje {
    private $nombreProcesado;
    private $apellidoProcesado;
    private $telefono;
    private $email;
    private $user;
    private $pass;
    private $passcheck;
    private $ciudadSeleccionada;
    private $fechaIda;
    private $fechaVuelta;
    private $tipoServicio;

    function guardarDatos() {
        // Generar un nombre único para el archivo JSON
        $nombreArchivo = $this->user . '_' . date('YmdHis') . '.json';

        $data = array(
            'nombre' => $this->nombreProcesado,
            'apellido' => $this->apellidoProcesado,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'usuario' => $this->user,
            'pass' => $this->pass,
            'passcheck' => $this->passcheck,
            'ciudad' => $this->ciudadSeleccionada,
            'fechaIda' => $this->fechaIda,
            'fechaVuelta' => $this->fechaVuelta,
            'tipoServicio' => $this->tipoServicio
        );

        $jsonData = json_encode($data);

        $file = 'historial/' . $nombreArchivo;

        if (file_put_contents($file, $jsonData)) {
            echo "Los datos se guardaron correctamente en el archivo $nombreArchivo";
        } else {
            echo "Hubo un error al guardar los datos en el archivo $nombreArchivo";
        }
    }

    function setNombre($nombre) {
        // Convertir el nombre a mayúsculas
        $nombreProcesado = strtoupper($nombre);

        // Asignar el nombre procesado al atributo "nombreProcesado" del objeto
        $this->nombreProcesado = $nombreProcesado;
    }

    function getNombre() {
        // Devolver el valor del atributo "nombreProcesado" del objeto
        return $this->nombreProcesado;
    }

    function setApellido($apellido) {
        // Convertir el apellido a mayúsculas
        $apellidoProcesado = strtoupper($apellido);
        $this->apellidoProcesado = $apellidoProcesado;
    }

    function getApellido(){
        return $this->apellidoProcesado;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function getTelefono(){
        return $this->telefono;
    }

    function setEmail($email) {
        // Convertir el email a mayúsculas
        $emailProcesado = strtoupper($email);
        $this->email = $emailProcesado;
    }

    function getEmail(){
        return $this->email;
    }

    function setUser($user) {
        // Convertir el Usuario a mayúsculas
        $userProcesado = strtoupper($user);
        $this->user = $userProcesado;
    }

    function getUser(){
        return $this->user;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function getPass(){
        return $this->pass;
    }

    function setPassCheck($passcheck) {
        $this->passcheck = $passcheck;
    }

    function getPassCheck(){
        return $this->passcheck;
    }

    function setCiudad($city) {
        $this->ciudadSeleccionada = $city;
    }

    function getCiudad() {
        // Devolver el valor del atributo "ciudadSeleccionada" del objeto
        return $this->ciudadSeleccionada;
    }

    function setFechas($fechaIda, $fechaVuelta) {
        // Asignar los valores de las fechas al atributo "fechaIda" y "fechaVuelta" del objeto
        $this->fechaIda = $fechaIda;
        $this->fechaVuelta = $fechaVuelta;
    }

    function getFechaIda() {
        // Devolver el valor del atributo "fechaIda" del objeto
        return $this->fechaIda;
    }

    function getFechaVuelta() {
        // Devolver el valor del atributo "fechaVuelta" del objeto
        return $this->fechaVuelta;
    }

    function setTipoServicio($tipo) {
        // Asignar el valor del tipo de servicio al atributo "tipoServicio" del objeto
        $this->tipoServicio = $tipo;
    }

    function getTipoServicio() {
        // Devolver el valor del atributo "tipoServicio" del objeto
        return $this->tipoServicio;
    }
}

$formulario = new FormularioViaje();

$formulario->setNombre($_POST['nombre']);
$formulario->setApellido($_POST['apellido']);
$formulario->setTelefono($_POST['telefono']);
$formulario->setEmail($_POST['email']);
$formulario->setUser($_POST['user']);
$formulario->setPass($_POST['pass']);
$formulario->setPassCheck($_POST['passcheck']);
$formulario->setCiudad($_POST['city']);
$formulario->setFechas($_POST['fechaida'], $_POST['fechavuelta']);
$formulario->setTipoServicio($_POST['tipo']);

$hospedajes = array();
if (isset($_POST['hotel'])) {
    $hospedajes[] = 'Hotel';
}
if (isset($_POST['Hostel'])) {
    $hospedajes[] = 'Hostel';
}
if (isset($_POST['Estancia'])) {
    $hospedajes[] = 'Estancia Turistica';
}
if (isset($_POST['Habitacion'])) {
    $hospedajes[] = 'Habitacion';
}

$formulario->guardarDatos();
?>
