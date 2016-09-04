<?php

class Database extends PDO{

    public function __construct()
    {
        parent::__construct('mysql:host=localhost;dbname=testphp', 'muttakin', '123456');
    }

    public function select($table, $optional=array(), $other = false){
        $where = '';
        if($optional != null){
            foreach ($optional as $key => $value){
                $where .= $key.' = :'.$key.' AND ';
            }
            $where = rtrim($where, ' AND ');
        }else{
            $where = 1;
        }
        if($other != null){
            $where = $other;
        }
        $sth = $this->prepare('SELECT * FROM '.$table.' WHERE '.$where);
        foreach ($optional as $key => $value){
            $sth->bindValue(':'.$key, $value);
        }
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insert($table, $data){
        $fieldNames = implode('`, `', array_keys($data));
        $fiedValues = implode(', :', array_keys($data));
        $fiedValues = rtrim($fiedValues, ', :');
        $sth = $this->prepare('INSERT INTO '.$table.' (`'.$fieldNames.'`) VALUES (:'.$fiedValues.')');
        foreach ($data as $key => $value){
            $sth->bindValue(":$key", $value);
        }
        $sth->execute();
    }
    public function delete(){}

}