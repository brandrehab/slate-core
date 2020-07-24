<?php

declare(strict_types=1);

namespace Slate\Http\Controllers\Admin;

use Slate\Factories\AdminViewFactory;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Base controller class.
 */
abstract class Controller extends BaseController
{
    /**
     * View factory.
     *
     * @var \Slate\Factories\AdminViewFactory
     */
    protected $view;

    /**
     * Class constructor.
     */
    public function __construct(AdminViewFactory $view)
    {
        $this->view = $view;
    }
}
