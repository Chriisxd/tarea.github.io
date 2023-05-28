<?php
  class Instructores extends CI_Controller
  {
      //constructor
      function __construct()
      {
      parent::__construct();
      }
      //renderizacion o representacion grafica de la vista que muestra los desayunos
      public function zapatos()
          {
          $this->load->view('header');
          $this->load->view('instructores/zapatos');
          $this->load->view('footer');
          }

        //renderizacion de la vista que muestra los desayunos
          public function chompas()
          {
           $this->load->view('header');
           $this->load->view('instructores/chompas');
           $this->load->view('footer');
          }
          public function busos()
          {
           $this->load->view('header');
           $this->load->view('instructores/busos');
           $this->load->view('footer');
          }
          public function jeans()
          {
           $this->load->view('header');
           $this->load->view('instructores/jeans');
           $this->load->view('footer');
          }
          public function camisetas()
          {
           $this->load->view('header');
           $this->load->view('instructores/camisetas');
           $this->load->view('footer');
          }
  } // no borrar llave de cierre la clase
?>
