<?php
namespace Vishwas\Contact\Controller\Adminhtml\Contacts;

use Magento\Backend\App\Action;

class MassStatus extends \Magento\Backend\App\Action
{
    /**
     * Update blog post(s) status action
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     * @throws \Magento\Framework\Exception\LocalizedException|\Exception
     */
    public function execute()
    {
        $contactIds = $this->getRequest()->getParam('contacts');
        if (!is_array($contactIds) || empty($contactIds)) {
            $this->messageManager->addError(__('Please select contact(s).'));
        } else {
            try {
                $status = (int) $this->getRequest()->getParam('status');
                foreach ($contactIds as $postId) {
                    $post = $this->_objectManager->get('Vishwas\Mycontact\Model\Contacts')->load($postId);
                    $post->setIsActive($status)->save();
                }
                $this->messageManager->addSuccess(
                    __('A total of %1 record(s) have been updated.', count($contactIds))
                );
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }
        return $this->resultRedirectFactory->create()->setPath('mycontact/*/index');
    }

}
