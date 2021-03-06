<?php

    class Home extends Controller{
        public function __construct(){

            parent::__construct();

        }

        public function home(){

            $data['page_id'] = 1;
            $data['tag_page'] = "Home";
            $data['page_title'] = "Pagina principal";
            $data["page_name"] = "home";
            $data['page_content'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptates provident, possimus amet soluta quaerat libero. Nobis consequuntur possimus ratione dolores deleniti labore dolorum. Voluptate non tenetur pariatur ipsum voluptatibus.";
            $this->views->getView($this, "home", $data);

        }

        public function insert() {
            $data = $this->model->setUser("Edad", 24);
            print_r($data);
        }

        public function verUsuario($id) {
            $data = $this->model->getUser($id);
            print_r($data);
        }

        public function actualizar() {
            $data = $this->model->updateUser(1,"Roberto", 20);
            print_r($data);
        }

        public function verUsuarios() {
            $data = $this->model->getUsers();
            print_r($data);
        }

        public function eliminarUsuario($id) {
            $data = $this->model->delUser($id);
            print_r($data);
        }

    }

?>