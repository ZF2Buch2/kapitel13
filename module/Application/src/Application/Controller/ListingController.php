<?php
/**
 * ZF2 Buch Kapitel 13
 * 
 * Das Buch "Zend Framework 2 - Das Praxisbuch"
 * von Ralf Eggert ist im Galileo-Computing Verlag erschienen. 
 * ISBN 978-3-8362-2610-3
 * 
 * @package    Application
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.galileocomputing.de/3460
 */

/**
 * namespace definition and usage
 */
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Listing controller
 * 
 * Shows and executes the listings
 * 
 * @package    Application
 */
class ListingController extends AbstractActionController
{
    /**
     * Redirects to homepage
     */
    public function indexAction()
    {
        return $this->redirect()->toRoute('home');
    }
    
    /**
     * Show listing 13.01
     */
    public function listing1301Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.02
     */
    public function listing1302Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.03
     */
    public function listing1303Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.04
     */
    public function listing1304Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.05
     */
    public function listing1305Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.06
     */
    public function listing1306Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.07
     */
    public function listing1307Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.08
     */
    public function listing1308Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.09
     */
    public function listing1309Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.10
     */
    public function listing1310Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.11
     */
    public function listing1311Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.12
     */
    public function listing1312Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.13
     */
    public function listing1313Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.14
     */
    public function listing1314Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.15
     */
    public function listing1315Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 13.16
     */
    public function listing1316Action()
    {
        return new ViewModel();
    }
}
