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
use Exception;

/**
 * Exception represents a generic exception for all purposes.
 *
 * For more details and usage information on Exception, see the [guide article on handling errors](guide:runtime-handling-errors).
 *
 * @author Sergej Rufov <support@reagordi.com>
 * @since 1.0
 */
class SystemException extends Exception
{
    /**
     * Creates new exception object.
     *
     * @param string $message The Exception message to throw.
     * @param int $code The Exception code.
     * @param string $file The file where the exception occurred
     * @param int $line The line where the exception occurred
     * @param Throwable|null $previous The previous throwable used for the exception chaining.
     */
    public function __construct(string $message = '', int $code = 0, $file = '', int $line = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        if (!empty($file) && !empty($line)) {
            $this->file = $file;
            $this->line = $line;
        }
    }

    /**
     * @return string the user-friendly name of this exception
     */
    public function getName(): string
    {
        return 'System Exception';
    }
}
