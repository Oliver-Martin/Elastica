<?php

namespace Elastica\Aggregation;

/**
 * Class MinBucket
 * 
 */
class MinBucket
{
    /**
     * @var string The name of this aggregation
     */    
    protected $_name = '';

    /**
     * @var string The value of buckets_path
     */    
    protected $_path = '';

    /**
     * @param string $name the name of this aggregation
     */
    public function __construct($name)
    {
        $this->setName($name);
    }

    /**
     * Set the name of this aggregation.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->_name = $name;

        return $this;
    }

    /**
     * Retrieve the name of this aggregation.
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }   

    /**
     * Set the path of this aggregation.
     *
     * @return string
     */
    public function setPath( $path ) {
       $this->_path = $path;
    }

    /**
     * Retrieve the path of this aggregation.
     *
     * @return string
     */
    public function getPath() {
        return $this->_path; 
    }   


    /**
     * @return array
     */
    public function toArray()
    {
        $array['min_bucket']['buckets_path'] = $this->_path;   

        return $array;
    }
}
