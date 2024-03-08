<?php

declare(strict_types=1);

namespace Bennet\Extajax\Controller;


/**
 * This file is part of the "Ajax Test" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 
 */

/**
 * ListeController
 */
class ListeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * listeRepository
     *
     * @var \Bennet\Extajax\Domain\Repository\ListeRepository
     */
    protected $listeRepository = null;

    /**
     * @param \Bennet\Extajax\Domain\Repository\ListeRepository $listeRepository
     */
    public function injectListeRepository(\Bennet\Extajax\Domain\Repository\ListeRepository $listeRepository)
    {
        $this->listeRepository = $listeRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $listes = $this->listeRepository->findAll();
        $this->view->assign('listes', $listes);
        return $this->htmlResponse();
    }

    public function ajaxCallAction()
    {
        $listes = $this->listeRepository->findAll();
        
        $titles = [];
    
        foreach ($listes as $item) {
            $titles[] = $item->getTitle();
        }
    
        header('Content-Type: application/json');
    
        return json_encode($titles);
    }
    
}
