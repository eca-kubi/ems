
<?php

class Contact extends Controller
{
    public function index()
    {
        if (Helpers::getRequestMethod() == 'POST' && !empty($_POST)) {
            //$dto = new ContactUsDTO(...$_POST);
            FlashMessageManager::setFlash(PageId::CONTACT, FlashMessageType::SUCCESS, 'Thank you for your message. We will get back to you shortly!');
            Helpers::redirect('contact', 'index');
        }
        $data = new ContactUsDTO(...[]);
        $this->view('contact/index', $data->toArray());
    }
}