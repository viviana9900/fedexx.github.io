<?php
    class Clientes extends CI_Controller
    {

      function __construct()
      {
        parent::__construct();
        //cargar todos los modelos que necesitemos
       $this->load->model('Cliente');
      }
//Funcion que renderiza la vista index
      public function lista(){
       $data['clientes']=$this->Cliente->obtenerTodos();
       //print_r($productos);
       $this->load->view('header');
        $this->load->view('clientes/lista', $data);
        $this->load->view('footer');
      }
      public function nuevo(){
        $this->load->view('header');
        $this->load->view('clientes/nuevo');
        $this->load->view('footer');
      }
      public function menu(){
        $this->load->view('header');
        $this->load->view('clientes/menu');
        $this->load->view('footer');
      }
      public function ubiCli(){
        $data["clientes"]=$this->Cliente->obtenerCli();
        $this->load->view('header');
        $this->load->view('clientes/ubiCli', $data);
        $this->load->view('footer');
      }
      public function guardar(){
        $datosNuevoCliente=array(
          "cedula_cli"=>$this->input->post('cedula_cli'),
          "nombre_cli"=>$this->input->post('nombre_cli'),
          "apellido_cli"=>$this->input->post('apellido_cli'),
          "telefono_cli"=>$this->input->post('telefono_cli'),
          "email_cli"=>$this->input->post('email_cli'),
          "latitud_cli"=>$this->input->post('latitud_cli'),
          "longitud_cli"=>$this->input->post('longitud_cli'),
          "direccion_cli"=>$this->input->post('direccion_cli'),
        );


        //imprime los datos del array que creamos
        //print_r($datosNuevoCliente);
        if ($this->Cliente->insertar($datosNuevoCliente)){
          redirect('clientes/lista');
        }else {
         echo "<h1>  Error al insertar datos</h1>";
        }
      }
      // funcion para eliminara istructores
      public function eliminar($id_cli){
        //echo $id_cli;
        if ($this->Cliente->borrar($id_cli)) {//invocando al modelo
        redirect('clientes/lista');
        }else{
        echo "ERROR AL ELIMINAR :(";
        }
    }
    }//Ciere de la clase
  ?>
