<?php
/**
 * Created by PhpStorm.
 * User: robitaille
 * Date: 2/26/21
 * Time: 4:51 PM
 */

namespace Anchour\Theme\Installer\Console\Style;

use Symfony\Component\Console\Style\OutputStyle;

class AnchourStyle extends OutputStyle
{

    /**
     * Formats a command title.
     */
    public function title(string $message)
    {
        // TODO: Implement title() method.
    }

    /**
     * Formats a section title.
     */
    public function section(string $message)
    {
        // TODO: Implement section() method.
    }

    /**
     * Formats a list.
     */
    public function listing(array $elements)
    {
        // TODO: Implement listing() method.
    }

    /**
     * Formats informational text.
     *
     * @param string|array $message
     */
    public function text($message)
    {
        // TODO: Implement text() method.
    }

    /**
     * Formats a success result bar.
     *
     * @param string|array $message
     */
    public function success($message)
    {
        // TODO: Implement success() method.
    }

    /**
     * Formats an error result bar.
     *
     * @param string|array $message
     */
    public function error($message)
    {
        // TODO: Implement error() method.
    }

    /**
     * Formats an warning result bar.
     *
     * @param string|array $message
     */
    public function warning($message)
    {
        // TODO: Implement warning() method.
    }

    /**
     * Formats a note admonition.
     *
     * @param string|array $message
     */
    public function note($message)
    {
        // TODO: Implement note() method.
    }

    /**
     * Formats a caution admonition.
     *
     * @param string|array $message
     */
    public function caution($message)
    {
        // TODO: Implement caution() method.
    }

    /**
     * Formats a table.
     */
    public function table(array $headers, array $rows)
    {
        // TODO: Implement table() method.
    }

    /**
     * Asks a question.
     *
     * @return mixed
     */
    public function ask(string $question, ?string $default = null, callable $validator = null)
    {
        // TODO: Implement ask() method.
    }

    /**
     * Asks a question with the user input hidden.
     *
     * @return mixed
     */
    public function askHidden(string $question, callable $validator = null)
    {
        // TODO: Implement askHidden() method.
    }

    /**
     * Asks for confirmation.
     *
     * @return bool
     */
    public function confirm(string $question, bool $default = true)
    {
        // TODO: Implement confirm() method.
    }

    /**
     * Asks a choice question.
     *
     * @param string|int|null $default
     *
     * @return mixed
     */
    public function choice(string $question, array $choices, $default = null)
    {
        // TODO: Implement choice() method.
    }

    /**
     * Starts the progress output.
     */
    public function progressStart(int $max = 0)
    {
        // TODO: Implement progressStart() method.
    }

    /**
     * Advances the progress output X steps.
     */
    public function progressAdvance(int $step = 1)
    {
        // TODO: Implement progressAdvance() method.
    }

    /**
     * Finishes the progress output.
     */
    public function progressFinish()
    {
        // TODO: Implement progressFinish() method.
    }
}