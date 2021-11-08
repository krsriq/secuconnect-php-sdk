<?php
/** @noinspection PhpUnused */

namespace Secuconnect\Client\Logger;

use Psr\Log\LoggerInterface;
use Secuconnect\Client\LoggingException;
use Stringable;

/**
 * Class LocalFileLogger
 */
class LocalFileLogger implements LoggerInterface
{
    /**
     * The name of a directory which will contain
     * all logs directories and files.
     *
     * @var string
     */
    private string $dirName;

    /**
     * @param string $dirName
     */
    public function __construct(string $dirName = 'logs/')
    {
        $this->dirName = $dirName;
    }

    /**
     * @inheritDoc
     * @throws LoggingException
     */
    public function emergency(string|Stringable $message, array $context = []): void
    {
        $this->saveMessageToLogFile($message, "emergency.log");
    }

    /**
     * @inheritDoc
     * @throws LoggingException
     */
    public function alert(string|Stringable $message, array $context = []): void
    {
        $this->saveMessageToLogFile($message, "alert.log");
    }

    /**
     * @inheritDoc
     * @throws LoggingException
     */
    public function critical(string|Stringable $message, array $context = []): void
    {
        $this->saveMessageToLogFile($message, "critical.log");
    }

    /**
     * @inheritDoc
     * @throws LoggingException
     */
    public function error(string|Stringable $message, array $context = []): void
    {
        $this->saveMessageToLogFile($message, "error.log");
    }

    /**
     * @inheritDoc
     * @throws LoggingException
     */
    public function warning(string|Stringable $message, array $context = []): void
    {
        $this->saveMessageToLogFile($message, "warning.log");
    }

    /**
     * @inheritDoc
     * @throws LoggingException
     */
    public function notice(string|Stringable $message, array $context = []): void
    {
        $this->saveMessageToLogFile($message, "notice.log");
    }

    /**
     * @inheritDoc
     * @throws LoggingException
     */
    public function info(string|Stringable $message, array $context = []): void
    {
        $this->saveMessageToLogFile($message, "info.log");
    }

    /**
     * @inheritDoc
     * @throws LoggingException
     */
    public function debug(string|Stringable $message, array $context = []): void
    {
        $this->saveMessageToLogFile($message, "debug.log");
    }

    /**
     * @inheritDoc
     * @throws LoggingException
     */
    public function log($level, string|Stringable $message, array $context = []): void
    {
        $this->saveMessageToLogFile($message, "log.log");
    }

    /**
     * Function for saving a message in a file.
     *
     * @param string|Stringable $message
     * @param string $fileName
     * @throws LoggingException
     */
    private function saveMessageToLogFile(string|Stringable $message, string $fileName): void
    {
        $this->checkDirectory($this->dirName, 'Error while creating directory for logs.');

        $dirForTodayLogs = $this->dirName . date("d-m-Y") . '/';
        $this->checkDirectory($dirForTodayLogs, 'Error while creating directory for today logs.');

        $message = $this->prepareFullLogMessage($message);

        $fileHandle = fopen($dirForTodayLogs . $fileName, "a+");

        if ($fileHandle) {
            if (!fwrite($fileHandle, $message)) {
                throw new LoggingException('Error while writing to log file.');
            }

            if (!fclose($fileHandle)) {
                throw new LoggingException('Error while closing log file.');
            }
        } else {
            throw new LoggingException('Error while obtaining file pointer resource.');
        }
    }

    /**
     * Function for checking if directory exists and
     * if doesn't exist it create new directory.
     *
     * @param string $dirName
     * @param string|Stringable $errorMessage
     * @throws LoggingException
     */
    private function checkDirectory(string $dirName, string|Stringable $errorMessage): void
    {
        if (!file_exists($dirName)) {
            if (!mkdir($dirName)) {
                throw new LoggingException($errorMessage);
            }
        }
    }

    /**
     * Function for preparing full log message.
     * It adds the current date and EOL.
     *
     * @param string|Stringable $message
     * @return string
     */
    private function prepareFullLogMessage(string|Stringable $message): string
    {
        return "[ " . date("G:i:s") . " ] - " . $message . PHP_EOL;
    }

    /**
     * @return string
     */
    public function getDirName(): string
    {
        return $this->dirName;
    }

    /**
     * @param string $dirName
     * @return $this
     */
    public function setDirName(string $dirName): static
    {
        $this->dirName = $dirName;
        return $this;
    }
}
