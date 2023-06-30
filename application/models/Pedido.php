<?php
   class Pedido extends CI_Model
   {

    function __construct()
    {
      parent::__construct();

    }
    function insertar ($datos){
        return $this->db->insert("pedidos",
        $datos);
    }

    function obtenerTodos(){
        $listadoPedido=
        $this->db->get("pedidos");
        if($listadoPedido->num_rows()>0){
            return $listadoPedido->result();
        }else {
            return false;
        }
    }
    public function borrar ($id_ped){
        //borrar cliente
            $this->db->where("id_ped", $id_ped);
            if ($this->db->delete('pedidos')) {
            return true;
            }else{
            return false;
            }
        }
    function obtenerPed  (){
    $listadoPedido=$this->db->get("pedidos");
    if ($listadoPedido->num_rows() >0) {
      return $listadoPedido->result();
    }
    return false;
  }
    }//Cierre de la clase
?>
