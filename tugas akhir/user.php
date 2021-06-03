<?php 
    class user{
        protected $nama;
        protected $nim;
        protected $userdata;

        public function __construct($nama,$nim)
        {
            $this -> userdata=[
                (object)[
                    'nama' => "donny ridwan setiawan",
                    'nim' => "21120120130083",
                ],
                (object)[
                    'nama' => "rama aryasuta weihan",
                    'nim' => "21120120130084", 
                ],
                (object)[
                  'nama' => "muhammad fahreza isnanto",
                  'nim' => "21120120130085", 
                ],
                (object)[
                  'nama' => "muhammad hannan",
                  'nim' => "21120120130086", 
                ]
                //copas ae kalo mau nambah mahasiswa
            ];

            $this -> nama = $nama;
            $this -> nim = $nim;
        }
        protected function auth(){
            foreach($this->userdata as $key => $value){
              if($value->nama == $this->nama && $value->nim == $this->nim ){
                return $value;
              }
            }
            return false;
          }

        public function login(){
            $isUser = $this->auth();
            if($isUser){
              return $data = $isUser->nama;
            } else {
              return false;
            }
          }
    }
?>