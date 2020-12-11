<?php
/**
 * Basado en el código de AnexSoft.com https://anexsoft.com/realizando-un-crud-con-el-patron-mvc-en-php
 */

require_once 'model/noticia.php';

class NoticiaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Noticia();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/noticia/noticia.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Noticia();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/noticia/noticia-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Noticia();
        
        $alm->id = $_REQUEST['id'];
        $alm->titulo = $_REQUEST['Nombre'];
        $alm->texto = $_REQUEST['Apellido'];
        $alm->categoria = $_REQUEST['Correo'];
        $alm->fecha = $_REQUEST['Sexo'];
      

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}