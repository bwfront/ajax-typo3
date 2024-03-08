<?php

declare(strict_types=1);

namespace Bennet\Extajax\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 */
class ListeControllerTest extends UnitTestCase
{
    /**
     * @var \Bennet\Extajax\Controller\ListeController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Bennet\Extajax\Controller\ListeController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllListesFromRepositoryAndAssignsThemToView(): void
    {
        $allListes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $listeRepository = $this->getMockBuilder(\Bennet\Extajax\Domain\Repository\ListeRepository::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $listeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allListes));
        $this->subject->_set('listeRepository', $listeRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('listes', $allListes);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }
}
