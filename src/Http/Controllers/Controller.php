<?php

declare(strict_types=1);

namespace Slate\Http\Controllers;

use App\Factories\ViewFactory;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Base controller class.
 */
abstract class Controller extends BaseController
{
    /**
     * View factory.
     *
     * @var \App\Factories\ViewFactory
     */
    protected $view;

    /**
     * Class constructor.
     */
    public function __construct(ViewFactory $view)
    {
        $this->view = $view;
    }
}
