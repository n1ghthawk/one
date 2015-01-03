<?php

class Subscription extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var integer
     */
    protected $id_prod;

    /**
     *
     * @var integer
     */
    protected $id_cust;

    /**
     *
     * @var string
     */
    protected $startdatesubs;

    /**
     *
     * @var string
     */
    protected $enddatesubs;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field id_prod
     *
     * @param integer $id_prod
     * @return $this
     */
    public function setIdProd($id_prod)
    {
        $this->id_prod = $id_prod;

        return $this;
    }

    /**
     * Method to set the value of field id_cust
     *
     * @param integer $id_cust
     * @return $this
     */
    public function setIdCust($id_cust)
    {
        $this->id_cust = $id_cust;

        return $this;
    }

    /**
     * Method to set the value of field startdatesubs
     *
     * @param string $startdatesubs
     * @return $this
     */
    public function setStartdatesubs($startdatesubs)
    {
        $this->startdatesubs = $startdatesubs;

        return $this;
    }

    /**
     * Method to set the value of field enddatesubs
     *
     * @param string $enddatesubs
     * @return $this
     */
    public function setEnddatesubs($enddatesubs)
    {
        $this->enddatesubs = $enddatesubs;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field id_prod
     *
     * @return integer
     */
    public function getIdProd()
    {
        return $this->id_prod;
    }

    /**
     * Returns the value of field id_cust
     *
     * @return integer
     */
    public function getIdCust()
    {
        return $this->id_cust;
    }

    /**
     * Returns the value of field startdatesubs
     *
     * @return string
     */
    public function getStartdatesubs()
    {
        return $this->startdatesubs;
    }

    /**
     * Returns the value of field enddatesubs
     *
     * @return string
     */
    public function getEnddatesubs()
    {
        return $this->enddatesubs;
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'id_prod' => 'id_prod', 
            'id_cust' => 'id_cust', 
            'startdatesubs' => 'startdatesubs', 
            'enddatesubs' => 'enddatesubs'
        );
    }

}
