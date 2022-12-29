<?php

namespace Creativestyle\Composer\Patchset;

use Composer\IO\IOInterface;
use Psr\Log\AbstractLogger;
use Psr\Log\LogLevel;

class IOLogger extends AbstractLogger
{
    const VERBOSITY_LEVEL_MAP = [
        LogLevel::DEBUG => IOInterface::DEBUG,
        LogLevel::INFO => IOInterface::NORMAL,
        LogLevel::NOTICE => IOInterface::QUIET,
        LogLevel::WARNING => IOInterface::QUIET,
        LogLevel::ERROR => IOInterface::QUIET,
        LogLevel::CRITICAL => IOInterface::QUIET,
        LogLevel::ALERT => IOInterface::QUIET,
        LogLevel::EMERGENCY => IOInterface::QUIET
    ];

    const ERROR_LEVELS = [
        LogLevel::ERROR,
        LogLevel::CRITICAL,
        LogLevel::ALERT,
        LogLevel::EMERGENCY,
    ];

    /**
     * @var IOInterface
     */
    private $io;

    /**
     * @param IOInterface $io
     */
    public function __construct(IOInterface $io)
    {
        $this->io = $io;
    }
}
