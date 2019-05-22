<?php
declare(strict_types=1);

namespace WernerDweight\SpotifyApiClientBundle\Exception;

final class ApiFactoryException extends \Exception implements \Throwable
{
    /** @var int */
    public const INVALID_CLIENT_TYPE = 1;

    /** @var string[] */
    private const MESSAGES = [
        self::INVALID_CLIENT_TYPE => 'No client of type %s is known.',
    ];

    /**
     * @param int    $code
     * @param string ...$payload
     */
    public function __construct(int $code, string ...$payload)
    {
        parent::__construct(sprintf(self::MESSAGES[$code], ...$payload), $code);
    }
}
