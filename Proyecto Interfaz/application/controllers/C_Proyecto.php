<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Proyecto extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }
  public function cargarObras(){
    $this->load->view('modulos/v_obras');
  }
  public function cargarMateriales(){
    $this->load->view('modulos/header');
    $this->load->view('modulos/v_materiales');
  }
  function cargarHerramientas(){
    $this->load->view('modulos/header');
    $this->load->view('modulos/v_herramientas');

  }
  function cargarEmpleados(){

    $this->load->view('modulos/header');
    $this->load->view('modulos/v_empleados');
  }
  function cargarRubros(){
    $this->load->view('modulos/header');
    $this->load->view('modulos/v_rubros');
  }
  function cargarDocumentos (){
    $this->load->view('modulos/header');
    $this->load->view('modulos/v_documentos');
  }
  function cargarCompras(){
    $this->load->view('modulos/header');
    $this->load->view('modulos/v_compra');
  }
<<<<<<< HEAD
  function cargarFacturas()
  {
    $this->load->view('modulos/header');
    $this->load->view('modulos/v_facturas');
  }
  function cargarRemision()
  {
    $this->load->view('modulos/header');
    $this->load->view('modulos/v_remision');
  }
  function cargarUsuarios(){
    $this->load->view('modulos/header');
    $this->load->view('modulos/v_usuarios');

=======
  function cargarFacturas(){
    $this->load->view('modulos/header');
    $this->load->view('modulos/v_facturas');

  }
  function cargarRemision(){
    $this->load->view('modulos/header');
    $this->load->view('modulos/v_remision');
  }
  function cargaPagos(){
    $this->load->view('modulos/header');
    $this->load->view('modulos/v_pago_empleados');
  }
  function cargarInicio(){
    $this->load->view('modulos/header');
    $this->load->view('modulos/v_inicio');
>>>>>>> 64d1f434c04a5aadb1b0abd02dad1f53dd9386e3
  }
}
