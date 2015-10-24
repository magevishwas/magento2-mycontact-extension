<?php
namespace Vishwas\Mycontact\Controller\Adminhtml\Contacts;

use Magento\Backend\App\Action;

/**
 * Class MassDelete
 */
class MassDelete extends \Magento\Backend\App\Action
{
    /**
     * @return \Magento\Backend\Model\View\Result\Redirect
     */
    public function execute()
    {
        $contactIds = $this->getRequest()->getParam('contacts');
        if (!is_array($contactIds) || empty($contactIds)) {
            $this->messageManager->addError(__('Please select contact(s).'));
        } else {
            try {
                foreach ($contactIds as $postId) {
                    $post = $this->_objectManager->get('Vishwas\Mycontact\Model\Contacts')->load($postId);
                    $post->delete();
                }
                $this->messageManager->addSuccess(
                    __('A total of %1 record(s) have been deleted.', count($contactIds))
                );
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }
        return $this->resultRedirectFactory->create()->setPath('mycontact/*/index');
    }
}
