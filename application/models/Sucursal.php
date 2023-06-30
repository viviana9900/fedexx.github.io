<?php
   class Sucursal extends CI_Model
   {

    function __construct()
    {
      parent::__construct();

    }
    function insertar ($datos){
        return $this->db->insert("sucursal",
        $datos);
    }

    function obtenerTodos(){
        $listadoSucursal=
        $this->db->get("sucursal");
        if($listadoSucursal->num_rows()>0){
            return $listadoSucursal->result();
        }else {
            return false;
        }
    }
    public function borrar ($id_suc){
        //borrar cliente
            $this->db->where("id_suc", $id_suc);
            if ($this->db->delete('sucursal')) {
            return true;
            }else{
            return false;
            }
        }
    function obtenerSuc  (){
    $listadoSucursal=$this->db->get("sucursal");
    if ($listadoSucursal->num_rows() >0) {
      return $listadoSucursal->result();
    }
    return false;
  }
    }//Cierre de la clase
?>
