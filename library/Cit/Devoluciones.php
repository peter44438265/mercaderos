<?php

class Cit_Devoluciones extends Cit_Resource {
    const URL_REFUND = "/cargos/devoluciones/";
    public function create($options = NULL)
    {
        return $this->request("POST", Cit_Devoluciones::URL_REFUND, $api_key = $this->culqi->api_key, $options);
    }
    public function getList($options = NULL)
    {
        return $this->request("GET", Cit_Devoluciones::URL_REFUND, $api_key = $this->culqi->api_key, $options);
    }
    public function get($id)
    {
        return $this->request("GET", Cit_Devoluciones::URL_REFUND . $id . "/", $api_key = $this->culqi->api_key);
    }
}