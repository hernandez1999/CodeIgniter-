<?php


class Ruta extends CI_Model{
    
function obtenerListado($id = "")
{
   $query = $this->db->get('ruta');
   return $query->result_array();
   
}
}