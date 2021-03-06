<?php
namespace mpcmf\modules\authex\actions;

use mpcmf\modules\moduleBase\actions\action;
use mpcmf\modules\moduleBase\actions\actionsBase;
use mpcmf\modules\moduleBase\exceptions\actionException;
use mpcmf\system\acl\aclManager;
use mpcmf\system\pattern\singleton;

/**
 * Class inviteActions
 *
 * Invite system
 *
 *
  * @generated by mpcmf/codeManager
 *
 * @package mpcmf\modules\authex\actions;
 * @date 2015-10-01 12:35:13
 *
 * @author Dmitry Emelyanov <gilberg.vrn@gmail.com>
 */
class inviteActions
    extends actionsBase
{

    use singleton;

    /**
     * Set options inside this method
     *
     * @return mixed
     */
    public function setOptions()
    {
        // TODO: Implement setOptions() method.
    }

    /**
     * Bind some custom actions
     *
     * @return mixed
     * @throws actionException
     */
    public function bind()
    {
        $this->registerAction('invite', new action([
            'name' => 'Регистрация пользователя',
            'method' => '_invite',
            'path' => '/invite/:invite',
            'http' => [
                'GET'
            ],
            'required' => [
                'invite'
            ],
            'template' => 'authex/invite.status.tpl',
            'useBase' => false,
            'relative' => false,
            'type' => action::TYPE__DEFAULT,
            'acl' => [
                aclManager::ACL__GROUP_GUEST
            ]
        ], $this));
    }
}