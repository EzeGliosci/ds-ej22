<?php
class Mascota

{
    public $Id;
    public $Nombre;
    public $Raza;
    public $Dueniomascota;



public function MostrarPropiedades()
{ echo 'Mascota: <br>';
    echo 'Id: '. $this->Id . '<br>';
    echo 'Nombre: '. $this->Nombre . '<br>';
    echo 'Raza: '. $this->Raza . '<br>';
    echo '-------------------------------------<br>';
    echo 'Dueño mascota: <br>';
        echo 'Id: '. $this->Dueniomascota->Id . '<br>';
        echo 'Nombre: '. $this->Dueniomascota->Nombre . '<br>';
        echo 'Apellido: '. $this->Dueniomascota->Apellido . '<br>';
        echo 'Documento: ' . $this->Dueniomascota->Documento . '<br>';
        echo 'Celular: ' . $this->Dueniomascota->Celular . '<br>';
        echo 'Direccion: ' . $this->Dueniomascota->Direccion . '<br>' ;
    


}
}