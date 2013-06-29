<?php

/**
 * @group Model
 */
class MemberModelTest extends CIUnit_TestCase
{
    protected $tables = array(
        'gma_user' => 'gma_user'
    );
    
    private $_pcm;
    
    public function __contruct($name = NULL, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
    }
    
    public function setUp()
    {
        $this->tearDown();
        parent::setUp();
        
        /*
        * this is an example of how you would load a product model,
        * load fixture data into the test database (assuming you have the fixture yaml files filled with data for your tables),
        * and use the fixture instance variable
        
        $this->CI->load->model('Product_model', 'pm');
        $this->pm=$this->CI->pm;
        $this->dbfixt('users', 'products');
        
        the fixtures are now available in the database and so:
        $this->users_fixt;
        $this->products_fixt;
        */
        
        $this->CI->load->model('member/member_model');
        $this->_pcm = $this->CI->member_model;
        $this->dbfixt(array('gma_user' => 'gma_user'));
    }
    
    public function tearDown()
    {
        parent::tearDown();
    }
    
    // ------------------------------------------------------------------------
    
    /**
     * @dataProvider testGetCarriersData
     */
    public function testGetCarriers(array $attributes, $expected)
    {
        $actual = $this->_pcm->authenticate('nitinkumarsoni@cdnsol.com', 'cdn123');
        
        $this->assertEquals($expected, count($actual));
    }
    
    public function testGetCarriersData()
    {
        return array(
            array(array('name'), 3)
        );
    }   
    
    // ------------------------------------------------------------------------
    
}
