<?php
   class Cliente extends CI_Model
   {

    function __construct()
    {
      parent::__construct();

    }
    function insertar ($datos){
        return $this->db->insert("clientes",
        $datos);
    }

    function obtenerTodos(){
        $listadoClientes=
        $this->db->get("clientes");
        if($listadoClientes->num_rows()>0){
            return $listadoClientes->result();
        }else {
            return false;
        }
    }
    public function borrar ($id_cli){
        //borrar cliente
            $this->db->where("id_cli", $id_cli);
            if ($this->db->delete('clientes')) {
            return true;
            }else{
            return false;
            }
        }
        function obtenerCli  (){
        $listadoClientes=$this->db->get("clientes");
        if ($listadoClientes->num_rows() >0) {
          return $listadoClientes->result();
        }
        return false;
      }
    }//Cierre de la clase
?>
