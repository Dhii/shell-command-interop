<?php

namespace Dhii\ShellCommandInterop;

/**
 * Something that represents a shell command that provides means for basic
 * configuration of its execution parameters.
 * 
 * For more information, please see the
 * {@link https://github.com/Dhii/shell-command-interop/wiki/Shell-Command-Interop specification}.
 * 
 * @since 0.1
 *
 * @author Dhii Team <development@dhii.co>
 */
interface ConfigurableCommandInterface
{
    /**
     * Set the working directory for the process that will be created to run the command.
     * 
     * If the path is relative, the implementation is free to imply any sane base path.
     * 
     * @since 0.1
     *
     * @param string $directoryPath An absolute or relative path to the working directory of the process.
     */
    public function setWorkingDirectory($directoryPath);

    /**
     * Set the environment variables for the process that will be created to run the command.
     * 
     * @since 0.1
     *
     * @param array|null $environmentVars A map of environment variable names to their values.
     *                                    If null, the same environment as the current PHP process will be assumed.
     */
    public function setEnvironment($environmentVars);

    /**
     * Set additional options for the process that will be created to run the command.
     * 
     * @since 0.1
     *
     * @param array $optionVars A map of option names to their values.
     */
    public function setOptions($optionVars);
}
