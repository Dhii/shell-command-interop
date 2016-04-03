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
interface MutableCommandInterface
{
    /**
     * @since 0.1
     * @param string|mixed $mainCommand Something that represents the main command.
     *  Must be castable to string.
     */
    public function __construct($mainCommand);
    
    /**
     * Adds a sub command to the command.
     * 
     * @since 0.1
     * @param string|mixed $subCommand Something that represents a sub command.
     *  Must be castable to string.
     */
    public function addSubCommand($subCommand);
    
    /**
     * Adds a parameter to the command.
     * 
     * @since 0.1
     * @param string|mixed $parameter Something that represents a command parameter.
     *  Must be castable to string.
     */
    public function addParameter($parameter);
    
    /**
     * Adds an argument to the command.
     * 
     * @since 0.1
     * @param string|mixed $argument Something that represents a command argument.
     *  Must be castable to string.
     */
    public function addArgument($argument);
    
    /**
     * Adds a flag to the command.
     * 
     * @since 0.1
     * @param string|mixed $flag Something that represents a command flag.
     *  Must be castable to string.
     */
    public function addFlag($flag);
}
