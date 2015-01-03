<?php
/**
 * Created by PhpStorm.
 * User: Ansar
 * Date: 1/2/15
 * Time: 11:38 PM
 */
set_time_limit(0);
Class UnderstandingPhalconController extends \Phalcon\Mvc\Controller
{
    static $count=0;
    public function getSampleDataAction()
    {
        $customer = Customer::findFirst(1);

        $robots = Customer::find();
        echo "There are ", count($robots), "\n";
      // echo $customer->name;
        $this->view->data1 =   count($robots);
        $this->view->data2 =   $customer->name;


        $this->flash->success("The first robot with the name " . $customer->name . ".");


    }

    public function loadSampleDataAction($counts=786)
    {
        $names = array('Galaxy'=>'Ansar', 'Los Angeles'=>' Spiderman', 'Laboratory'=>'Hulk', 'Gotham City'=>'Batman', 'Asgard'=>'Thor', 'Shield'=>'Cap. America', 'Asgard'=>'Loki', 'Stark Mansion, Malibu'=>'Iron Man');

        for($i=0;$i<$counts;$i++)
        {
            $customer = new Customer();
            $superHero = array_rand($names,1);
            $customer->name = $names[$superHero];
            $customer->addr = $superHero;
            $customer->phone = rand(9977786000, 9977855555);

            //load to database
            $this->loadToDb($customer);

        }
    }

    public function loadToDb(Customer $customer)
    {
        if($customer->create() == false)
        {
            echo 'couldnt load :(';
            foreach($customer->getMessages() as $message)
            {
                echo $message . '\n';
            }
        }
        else
        {
            UnderstandingPhalconController::$count++;
            echo 'Successfully loaded'.   $customer->name . 'records';
        }
    }

}