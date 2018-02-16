<?php
class courses {
    public $id = -1;
    public $seccion;
    public $title;
    public $grade;
    public $credits;
    public $days;
    public $hours;
    public $place;
    public $room;
    
    
    public static function loadFromID($id) {       
        $records = getResultFromSQL('SELECT * FROM courses WHERE id = ?', [$id_courses]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new Courses();
        
        $u->id = $record['id'];
        $u->seccion = $record['seccion'];
        $u->title = $record['title'];
        $u->grade = $record['grade'];
        $u->credits = $record['credits'];
        $u->days = $record['days'];
        $u->hours = $record['hours'];
        $u->place = $record['place'];
        $u->room = $record['room'];
        
        return $u;
    }
    
    public static function loadFromseccion($seccion) {
        $records = getResultFromSQL('SELECT * FROM courses WHERE seccion = ?', [$seccion]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new courses();
        
        $u->id = $record['id'];
        $u->seccion = $record['seccion'];
        $u->title = $record['title'];
        $u->grade = $record['grade'];
        $u->credits = $record['credits'];
        $u->days = $record['days'];
        $u->hours = $record['hours'];
        $u->place = $record['place'];
        $u->room = $record['room'];
        
        return $u;
    }
    
    public function save() {
        if ($this->id == -1) {
            $sql = "INSERT INTO `courses` (`id_courses`, `seccion`, `title`, `grade`, `credits`, `days`, 'hours', 'place', 'room') VALUES (NULL, ?, ?, '', '', ?);";
            
            getResultFromSQL($sql, [$this->seccion, $this->title, $this->grade, $this->credits, $this->days, $this->hours, $this->place, $this->room]);
        }
    }
    

}

?>