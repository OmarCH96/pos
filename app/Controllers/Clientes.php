<?php 
    namespace App\Controllers;
    use App\Controllers\BaseController;
    use App\Models\clientesModel;

    class Clientes extends BaseController{
        protected $clientes;
        protected $reglas;

        public function __construct(){
            $this -> clientes = new clientesModel();
            helper(['form']);

            $this -> reglas = [
                'nombre' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'El campo {field} es obligatorio.'
                        ]
                ],
                'direccion' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'El campo {field} es obligatorio.'
                        ]
                    ],
                'telefono' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'El campo {field} es obligatorio.'
                        ]
                ],
                'correo' => [
                    'rules' => 'required',
                    'errors' =>[
                        'required' => 'El campo {field} es obligatorio.'
                        ]
                    ]
            ];
        }
    
        public function index($activo = 1) {
            $clientes = $this->clientes->where('activo', $activo) -> findAll();
            $data = ['titulo' => 'Clientes', 'datos' => $clientes];

            echo view('header');
            echo view('clientes/clientes', $data);
            echo view('footer');
        }

        public function nuevo(){
            $data = ['titulo' => 'Agregar clientes'];
            echo view('header');
            echo view('clientes/nuevo', $data);
            echo view('footer');
        }

        public function insertar(){

            if ($this -> request -> getMethod() == "post" && $this -> validate($this -> reglas)){
                $this -> clientes -> save([ 
                    'nombre' => $this -> request -> getPost('nombre'), 
                    'direccion' => $this -> request -> getPost('direccion'),
                    'correo' => $this -> request -> getPost('correo'),
                    'telefono' => $this -> request -> getPost('telefono'),]);
                return redirect() -> to(base_url().'clientes');
            } else{
                $data = ['titulo' => 'Agregar clientes', 'validation' => $this -> validator];
                echo view('header');
                echo view('clientes/nuevo', $data);
                echo view('footer');
            }

        }

        public function editar($id, $valid=null){
            $unidad = $this->clientes->where('id', $id) -> first();
            if ($valid != null){
                $data = ['titulo' => 'Editar clientes', 'datos' => $unidad, 'validation' => $valid];
            } else{
                $data = ['titulo' => 'Editar clientes', 'datos' => $unidad];
            }
            echo view('header');
            echo view('clientes/editar', $data);
            echo view('footer');
        }

        public function actualizar(){
            if ($this -> request -> getMethod() == "post" && $this -> validate($this -> reglas)){
                $this -> clientes -> update($this -> request -> getPost('id'),
                ['nombre' => $this -> request -> getPost('nombre'), 
                'direccion' => $this -> request -> getPost('direccion'),
                'correo' => $this -> request -> getPost('correo'),
                'telefono' => $this -> request -> getPost('telefono')]);
                return redirect() -> to(base_url().'clientes');
            } else{
                return $this -> editar($this -> request -> getPost('id'), $this -> validator);
            }
        }

        public function eliminar($id){
            $this -> clientes -> update($id,[ 'activo' => 0]);
            return redirect() -> to(base_url().'clientes');
        }

        public function eliminados($activo = 0) {
            $clientes = $this->clientes->where('activo', $activo) -> findAll();
            $data = ['titulo' => 'Clientes eliminadas', 'datos' => $clientes];

            echo view('header');
            echo view('clientes/eliminados', $data);
            echo view('footer');
        }

        public function reingresar($id){
            $this -> clientes -> update($id,[ 'activo' => 1]);
            return redirect() -> to(base_url().'clientes');
        }
    }
?>