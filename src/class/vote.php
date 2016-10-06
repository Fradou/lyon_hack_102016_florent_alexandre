<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 06/10/16
 * Time: 18:35
 */

namespace hackaton;


class vote
{
    private $_host        = 'localhost';
    private $_database    = 'hack';
    private $_dbUser      = 'root';
    private $_dbPwd       = '';
    private $_con         = false;
    private $_optionTable = 'options';
    private $_voterTable  = 'voters';

    /**
     * Constructor
     */
    public function __construct()
    {
        if(!$this->_con)
        {
            $this->_con = mysqli_connect($this->_host,$this->_dbUser,$this->_dbPwd);
            if(!$this->_con){
                die('Could not connect: ' . mysqli_error);
            }
            mysqli_select_db($this->_database,$this->_con)|| die('Could not select database: ' . mysqli_error);

        }
    }

    //private functions
    private function  _query($sql)
    {
        $result = mysqli-query($sql,$this->_con);
        if(!$result){
            die('unable to query'. mysqli-query);
        }
        $data= array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $data[]=$row;
        }
        return $data;
    }

    private function _alreadyVote($ip)
    {
        $sql    = 'SELECT * FROM '.$this->_voterTable.' WHERE ip="'.$ip.'"';
        $result = $this->_query($sql);
        return sizeof($result)>0;
    }

    //public functions
    public function vote($optionId)
    {
        $ip  = $_SERVER['REMOTE_ADDR'];
        if(!$this->_alreadyVote($ip)){
            $sql ='INSERT INTO '.$this->_voterTable.' (id,option_id,ip) '.' VALUES(NULL,"'.mysqli_real_escape_string($optionId).'","'.mysql_real_escape_string($ip).'")';

            $result = mysqli_query($sql,$this->_con);
            if(!$result){
                die('unable to insert'. mysqli_error);
            }
        }
    }

    public function getList()
    {
        $sql    = 'SELECT * FROM '.$this->_optionTable;
        return  $this->_query($sql);
    }

    public function showResults()
    {
        $sql =
            'SELECT * FROM  '.$this->_optionTable.' LEFT JOIN '.'(SELECT option_id, COUNT(*) as number FROM  '.$this->_voterTable.' GROUP BY option_id) as votes'.
            ' ON '.$this->_optionTable.'.id = votes.option_id';
        return  $this->_query($sql);
    }

    public function getTotal()
    {
        $sql    = 'SELECT count(*)as total FROM '.$this->_voterTable;
        return  $this->_query($sql);
    }
}

?>
