<?php
    class Sucursales extends CI_Controller
    {

      function __construct()
      {
        parent::__construct();
        //cargar todos los modelos que necesitemos
       $this->load->model('Sucursal');
      }
//Funcion que renderiza la vista index
      public function lista(){
       $data['sucursal']=$this->Sucursal->obtenerTodos();
       //print_r($productos);
       $this->load->view('header');
        $this->load->view('sucursales/lista', $data);
        $this->load->view('footer');
      }
      public function nuevo(){
        $this->load->view('header');
        $this->load->view('sucursales/nuevo');
        $this->load->view('footer');
      }
      public function menu(){
        $this->load->view('header');
        $this->load->view('sucursales/menu');
        $this->load->view('footer');
      }
      public function ubiSuc(){
        $data["sucursal"]=$this->Sucursal->obtenerSuc();
        $this->load->view('header');
        $this->load->view('sucursales/ubiSuc', $data);
        $this->load->view('footer');
      }

      public function guardar(){
        $datosNuevaSucursal=array(
          "nombre_suc"=>$this->input->post('nombre_suc'),
          "pais_suc"=>$this->input->post('pais_suc'),
          "ciudad_suc"=>$this->input->post('ciudad_suc'),
          "telefono_suc"=>$this->input->post('telefono_suc'),
          "latitud_suc"=>$this->input->post('latitud_suc'),
          "longitud_suc"=>$this->input->post('longitud_suc'),
          "direccion_suc"=>$this->input->post('direccion_suc'),
        );


        //imprime los datos del array que creamos
        //print_r($datosNuevoCliente);
        if ($this->Sucursal->insertar($datosNuevaSucursal)){
          redirect('Sucursales/lista');
        }else {
         echo "<h1>  Error al insertar datos</h1>";
        }
      }
      // funcion para eliminara istructores
      public function eliminar($id_suc){
        //echo $id_cli;
        if ($this->Sucursal->borrar($id_suc)) {//invocando al modelo
        redirect('Sucursales/lista');
        }else{
        echo "ERROR AL ELIMINAR :(";
        }
    }
    }//Ciere de la clase
    ?>
