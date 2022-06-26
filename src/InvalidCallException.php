<?php
/**
 * Reagordi Component
 *
 * @link https://reagordi.com/
 * @copyright Copyright (c) 2020 - 2022 Universe Group
 * @license https://dev.reagordi.com/license
 */

declare(strict_types=1);

namespace Reagordi\Contracts\Exceptions;

use Throwable;

/**
 * InvalidCallException represents an exception caused by calling a method in a wrong way.
 *
 * @author Sergej Rufov <support@reagordi.com>
 * @since 1.0
 */
class InvalidCallException extends SystemException
{
    /**
     * {@inheritdoc}
     */
    public function __construct(string $message = '', int $code = 500, $file = '', int $line = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $file, $line, $previous);
    }

    /**
     * @return string the user-friendly name of this exception
     */
    public function getName(): string
    {
        return 'Invalid Call';
    }
}
