<?
class UserIdentity extends CUserIdentity
{
    const ERROR_ROLE_INVALID=3;
    private $_id;
    public function authenticate()
    {
        $record=Moderators::model()->findByAttributes(array('login'=>$this->username, 'deleted'=>0));

        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->password!==md5($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$record->id;
            $this->setState('username', $record->user_name);
            $this->setState('id', $record->id);
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->_id;
    }
}
