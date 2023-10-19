<?php 
    namespace App\Controllers;
    use App\Controllers\BaseController;
    use App\Models\ConfiguracionModel;

    class Configuracion extends BaseController{
        protected $configuracion;
        protected $reglas;

        public function __construct(){
            $this -> configuracion = new ConfiguracionModel();
            helper(['form']);

            $this -> reglas = [
                'nombre' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'El campo {field} es obligatorio.'
                        ]
                ],
                'nombre_corto' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'El campo {field} es obligatorio.'
                        ]
                    ]
            ];
        }
    
        public function index($activo = 1) {
            $nombre = $this->configuracion->where('nombre', 'tienda_nombre') -> first();
            $rfc = $this->configuracion->where('nombre', 'tienda_rfc') -> first();
            $direccion = $this->configuracion->where('nombre', 'tienda_direccion') -> first();
            $email = $this->configuracion->where('nombre', 'tienda_email') -> first();
            $telefono = $this->configuracion->where('nombre', 'tienda_telefono') -> first();
            $ticket = $this->configuracion->where('nombre', 'ticket') -> first();
            $data = ['titulo' => 'Configuracion', 'nombre' => $nombre,
            'rfc' => $rfc,
            'direccion' => $direccion,
            'email' => $email,
            'telefono' => $telefono,
            'ticket' => $ticket,];

            echo view('header');
            echo view('configuracion/configuracion', $data);
            echo view('footer');
        }
        public function actualizar(){
            if ($this -> request -> getMethod() == "post" && $this -> validate($this -> reglas)){
                $this -> configuracion -> update($this -> request -> getPost('id'),[ 'nombre' => $this -> request -> getPost('nombre'), 'nombre_corto' => $this -> request -> getPost('nombre_corto')]);
                return redirect() -> to(base_url().'configuracion');
            } else{
                //return $this -> editar($this -> request -> getPost('id'), $this -> validator);
            }
        }
    }
?>