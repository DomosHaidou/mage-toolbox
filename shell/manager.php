<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Allan MacGregor <dev@allanmacgregor.com>
 *
 * @category    Mage
 * @package     Mage_Shell
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

require_once 'abstract.php';

class Mage_Shell_Manager extends Mage_Shell_Abstract
{

    protected function _getCategory($categoryId){

    }

    protected function _getProduct($productId){

    }


    public function run(){

    }


    /*
        * Retrieve Usage Help Message
        *
        * @return string
        */
    public function usageHelp(){
        return <<<USAGE
Usage:  php -f manager.php -- [options]
        php -f manager.php [command] --[task] [options]

  category          Category related operations
    --anchorall     Set all categories anchor to true

  product           Product related operations
    --

  cache             Cache related operations
    --clear
    --clearall
    --clearold
    --clearimage


  help              This help

USAGE;
    }
}

$shell = new Mage_Shell_Manager();
$shell->run();