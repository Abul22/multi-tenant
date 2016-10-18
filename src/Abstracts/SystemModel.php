<?php

namespace Hyn\Tenancy\Abstracts;

use Hyn\Tenancy\Database\Connection;

abstract class SystemModel extends AbstractModel
{
    public function getConnectionName()
    {
        return app(Connection::class)->systemName();
    }
}
