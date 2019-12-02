<!-- < ? php
    
    class Game extends CI_Model
    {
        public function tampil_data()
        {
            return $this->db->get('game'); //nama tabel
        }
        public function tampil_id($id)
        {
                                    //nama kolom
            return $this->db->where('ID', $id)->get('game')->row();//ngambil sebaris
        }
    }
    
? > -->