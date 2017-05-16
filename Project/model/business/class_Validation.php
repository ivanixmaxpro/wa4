<?php

class Validation {

    private $ok = null;
    private $msg = null;

    public function __construct($ok, $msg) {
        $this->setOk($ok);
        $this->setMsg($msg);
    }

    public function getOk() {
        return $this->ok;
    }

    public function setOk($ok) {
        $this->ok = $ok;
    }

    public function getMsg() {
        return $this->msg;
    }

    public function setMsg($msg) {
        $this->msg = $msg;
    }
}

?>