<?php
class JsTPhpMessageSource extends CPhpMessageSource
{
    private $_messages = array();

    public function getMessages()
    {
        return $this->_messages;
    }

    /**
     * Collect all messages
     *
     * @param string $category
     * @param string $language
     * @return array
     */
    protected function loadMessages($category, $language)
    {
        $messages = parent::loadMessages($category, $language);
        $this->_messages += $messages;
        return $messages;
    }
}