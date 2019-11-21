<?php

class Data
{
    private $data;
    private $code;

    public function __construct($data, $code)    //Constructeur
    {
        $this->data = $data;
        $this->code = $code;
    }

    public function setData($value)
    {
        $this->data = $value;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setCode($value)
    {
        $this->code = $value;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function genererContenu()
    {
        header('Content-type: application/json');

        if ($this->code === 200) {
            header('Status: 200 OK');
        } else {
            header('Status: 500 Internal Server Error');
        }

        $json_data = "[";
        foreach ($this->data->jsonSerialize() as $value) {
            $encode = json_encode($value);
            if ($encode != "") {
                $json_data = $json_data . json_encode($value) . ",";
            }
        }
        $json_data = rtrim($json_data, ",") . "]";

        echo $json_data;
    }
}
