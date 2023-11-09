<?php
require_once 'Model/proveedor.php';

class tbl_proveedorcontroller{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Proveedor();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/proveedor.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new Proveedor();
        
        if(isset($_REQUEST['idproveedor'])){
            $alm = $this->model->getting($_REQUEST['idproveedor']);
        }
        
        require_once 'View/header.php';
        require_once 'View/proveedor-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new Proveedor();
        
        $alm->idproveedor = $_REQUEST['idproveedor'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->ciudad = $_REQUEST['ciudad'];
        $alm->telefono = $_REQUEST['telefono'];
        $alm->correo = $_REQUEST['correo'];
        $alm->colonia = $_REQUEST['colonia'];
        $alm->num_calle = $_REQUEST['num_calle'];
        $alm->nom_calle = $_REQUEST['nom_calle'];

        // SI ID proveedor ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA proveedor, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idproveedor > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idproveedor > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idproveedor']);
        header('Location: index.php');
    }
}
