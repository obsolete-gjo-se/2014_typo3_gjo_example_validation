<?php
namespace Gjo\GjoExampleValidation\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Gjo\GjoExampleValidation\Domain\Model\Validation;

class ValidationController extends ActionController
{
    /**
     * @var \Gjo\GjoExampleValidation\Domain\Repository\ValidationRepository
     * @inject
     */
    protected $validationRepository;

    /**
     * @return void
     */
    public function findAllAction() {
        $this->view->assign('validation', $this->validationRepository->findAll());
    }

    /**
     * @param \Gjo\GjoExampleValidation\Domain\Model\Validation $validation
     * @return void
     */
    public function showAction(Validation $validation) {
        $this->view->assign('validation', $validation);
    }

    /**
     * @return void
     */
    public function addFormAction() {
    }

    /**
     * @param \Gjo\GjoExampleValidation\Domain\Model\Validation $addForm
     * @return void
     */
    public function addAction(Validation $addForm) {
        $this->validationRepository->add($addForm);
        $this->redirect('findAll');
    }

    /**
     * @param \Gjo\GjoExampleValidation\Domain\Model\Validation $validation
     * @return void
     */
    public function updateFormAction(Validation $validation) {
        $this->view->assign('validation', $validation);
    }

    /**
     * @param \Gjo\GjoExampleValidation\Domain\Model\Validation $updateForm
     * @return void
     */
    public function updateAction(Validation $updateForm) {
        $this->validationRepository->update($updateForm);
        $this->redirect('findAll');
    }

    /**
     * @param \Gjo\GjoExampleValidation\Domain\Model\Validation $validation
     * @return void
     */
    public function removeAction(Validation $validation){
        $this->validationRepository->remove($validation);
        $this->redirect('findAll');
    }
    
}