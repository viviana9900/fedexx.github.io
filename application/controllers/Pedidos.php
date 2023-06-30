<?php
    class Pedidos extends CI_Controller
    {

      function __construct()
      {
        parent::__construct();
        //cargar todos los modelos que necesitemos
       $this->load->model('Pedido');
      }
//Funcion que renderiza la vista index
      public function lista(){
       $data['pedidos']=$this->Pedido->obtenerTodos();
       //print_r($productos);
       $this->load->view('header');
        $this->load->view('pedidos/lista', $data);
        $this->load->view('footer');
      }
      public function nuevo(){
        $this->load->view('header');
        $this->load->view('pedidos/nuevo');
        $this->load->view('footer');
      }
      public function menu(){
        $this->load->view('header');
        $this->load->view('pedidos/menu');
        $this->load->view('footer');
      }
      public function ubicaPed(){
        $data["pedidos"]=$this->Pedido->obtenerPed();
        $this->load->view('header');
        $this->load->view('pedidos/ubicaPed', $data);
        $this->load->view('footer');
      }
      public function guardar(){
        $datosNuevoPedido=array(
          "nombre_ped"=>$this->input->post('nombre_ped'),
          "fecha_ped"=>$this->input->post('fecha_ped'),
          "latitud_ped"=>$this->input->post('latitud_ped'),
          "longitud_ped"=>$this->input->post('longitud_ped'),
          "des_ped"=>$this->input->post('des_ped'),
        );


        //imprime los datos del array que creamos
        //print_r($datosNuevoCliente);
        if ($this->Pedido->insertar($datosNuevoPedido)){
          redirect('pedidos/lista');
        }else {
         echo "<h1>  Error al insertar datos</h1>";
        }
      }
      // funcion para eliminara istructores
      public function eliminar($id_ped){
        //echo $id_cli;
        if ($this->Pedido->borrar($id_ped)) {//invocando al modelo
        redirect('pedidos/lista');
        }else{
        echo "ERROR AL ELIMINAR :(";
        }
    }
    }//Ciere de la clase
  ?>
