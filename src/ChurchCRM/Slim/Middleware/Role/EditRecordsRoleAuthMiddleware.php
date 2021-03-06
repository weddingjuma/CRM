<?php

namespace ChurchCRM\Slim\Middleware\Role;

class EditRecordsRoleAuthMiddleware extends BaseAuthRoleMiddleware {

    function hasRole()
    {
        return $this->user->isEditRecordsEnabled();
    }

    function noRoleMessage()
    {
        return gettext('User must have Edit Records permission');
    }
}
