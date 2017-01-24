<?php

define('ZEND_ACC_PUBLIC', 256);
define('ZEND_ACC_PROTECTED', 512);
define('ZEND_ACC_PRIVATE', 1024);
define('ZEND_ACC_STATIC', 1);
define('ZEND_ACC_FINAL', 4);
define('ZEND_ACC_ABSTRACT', 2);

/**
 * Provide a return value for an existing function
 *
 * @param string $class
 * @param string $method
 * @param mixed $value
 * @param bool $execute
 * If value is a Closure and execute flag is set, the Closure will
 * be executed in place of the existing function
 * @return bool
 */
function uopz_set_return(string $class, string $method, $value, bool $execute = false) : bool
{
    return true;
}

/**
 * Get a previously set return value
 *
 * @param string $class
 * @param string $method
 * @return mixed
 */
function uopz_get_return(string $class, string $method)
{
    return true;
}

/**
 * Unset a previously set return value
 *
 * @param string $class
 * @param string $method
 * @return bool
 */
function uopz_unset_return(string $class, string $method) : bool
{
    return true;
}

/**
 * Use mock in place of class for new objects
 *
 * @param string $class
 * @param mixed $mock
 * Mock can be an object, or the name of a class
 */
function uopz_set_mock(string $class, $mock) {}

/**
 * Get previously set mock for class
 *
 * @param string $class
 **/
function uopz_get_mock(string $class) {}

/**
 * Unset previously set mock
 *
 * @param string $class
 */
function uopz_unset_mock(string $class) {}

/**
 * Get static variables from method scope
 *
 * @param string $class
 * @param string $method
 * @return array
 */
function uopz_get_static(string $class, string $method) : array
{
    return [];
}

/**
 * Set static variables in method scope
 *
 * @param string $class
 * @param string $method
 * @param array $static
 **/
function uopz_set_static(string $class, string $method, array $static) {}

/**
 * Execute hook when entering class::method
 *
 * @param string $class
 * @param string $method
 * @param Closure $hook
 * @return bool
 */
function uopz_set_hook(string $class, string $method, Closure $hook) : bool
{
    return true;
}

/**
 * Get previously set hook on class::method
 * @param string $class
 * @param string $method
 * @return Closure
 */
function uopz_get_hook(string $class, string $method) : Closure
{
    return function () {};
}

/**
 * Remove previously set hook on class::method
 *
 * @param string $class
 * @param string $method
 * @return bool
 */
function uopz_unset_hook(string $class, string $method) : bool
{
    return true;
}

/**
 * Add a non-existent method
 *
 * @param string $class
 * @param string $method
 * @param Closure $handler
 * @param int $flags
 * @param bool $all
 * If all is true, all classes that descend from class will also be affected
 * @return bool
 */
function uopz_add_function(
    string $class,
    string $method,
    Closure $handler,
    int $flags = ZEND_ACC_PUBLIC,
    bool $all = true
) : bool
{
    return true;
}

/**
 * Delete a previously added method
 *
 * @param string $class
 * @param string $method
 * @param bool $all
 * If all is true, all classes that descend from class will also be affected
 */
function uopz_del_function(string $class, string $method, bool $all = true) {}

/**
 * Redefine $class::$constant to $value
 *
 * @param string $class
 * @param string $constant
 * @param mixed  $value
 * <b>Note</b>: only user constants should be redefined <br>
 * <b>Note</b>: if the constant does not exist it will be created
 */
function uopz_redefine(string $class, string $constant, $value) {}

/**
 * Delete $class::$constant
 *
 * @param string $class
 * @param string $constant
 * <b>Note</b>: only user constants should be undefined
 */
function uopz_undefine(string $class, string $constant) {}

/**
 * Makes $class implement $interface
 *
 * @param string $class
 * @param string $interface
 **/
function uopz_implement(string $class, string $interface) {}

/**
 * Makes $class extend $parent
 *
 * @param string $class
 * @param string $parent
 */
function uopz_extend(string $class, string $parent) {}

/**
 * Get or set flags on $class::$method()
 *
 * @param string $class
 * @param string $method
 * @param int $flags
 * @return int
 */
function uopz_flags(string $class, string $method, int $flags = 0) : int
{
    return 0;
}

/**
 * Set instance property
 *
 * @param object $instance
 * @param string $property
 * @param mixed $value
 */
function uopz_set_property($instance, string $property, $value) {}

/**
 * Get instance property
 *
 * @param object $instance
 * @param string $property
 * @return mixed
 */
function uopz_get_property(object $instance, string $property)
{
    return true;
}

/**
 * Retrieve the last set exit() status
 *
 * <b>Note</b>: opcache optimizes away dead code after unconditional exit<br>
 * <b>Note</b>: exit() breaks xdebug hooks
 */
function uopz_get_exit_status()
{
    return true;
}

/**
 * Allows control over disabled exit opcode
 *
 * @param bool $allow
 * <b>Note</b>: by default exit will be ignored
 */
function uopz_allow_exit(bool $allow) {}
