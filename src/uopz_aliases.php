<?php

/**
 * Provide a return value for an existing function
 *
 * @param string $function
 * @param mixed $value
 * @param bool $execute
 * If value is a Closure and execute flag is set, the Closure will
 * be executed in place of the existing function
 * @return bool
 */
function uopz_set_return(string $function, $value, bool $execute = false) : bool
{
    return true;
}

/**
 * Get a previously set return value
 *
 * @param string $function
 * @return mixed
 */
function uopz_get_return(string $function)
{
    return true;
}

/**
 * Unset a previously set return value
 *
 * @param string $function
 * @return bool
 */
function uopz_unset_return(string $function) : bool
{
    return true;
}

/**
 * Get static variables from function scope
 *
 * @param string $function
 * @return array
 */
function uopz_get_static(string $function) : array
{
    return [];
}

/**
 * Set static variables in function scope
 *
 * @param string $function
 * @param array $static
 */
function uopz_set_static(string $function, array $static) {}

/**
 * Execute hook when entering function
 *
 * @param string $function
 * @param Closure $hook
 * @return bool
 */
function uopz_set_hook(string $function, Closure $hook) : bool
{
    return true;
}

/**
 * Get previously set hook on function
 * @param string $function
 * @return Closure
 */
function uopz_get_hook(string $function) : Closure
{
    return function () {};
}

/**
 * Remove previously set hook on function
 *
 * @param string $function
 * @return bool
 */
function uopz_unset_hook(string $function) : bool
{
    return true;
}

/**
 * Add a non-existent function
 *
 * @param string $function
 * @param Closure $handler
 * @param int $flags
 * @param bool $all
 * If all is true, all classes that descend from class will also be affected
 * @return bool
 */
function uopz_add_function(
    string $function,
    Closure $handler,
    int $flags = ZEND_ACC_PUBLIC,
    bool $all = true
) : bool
{
    return true;
}

/**
 * Delete a previously added function
 *
 * @param string $function
 */
function uopz_del_function(string $function) {}

/**
 * Redefine $constant to $value
 *
 * @param string $constant
 * @param mixed  $value
 * <b>Note</b>: only user constants should be redefined <br>
 * <b>Note</b>: if the constant does not exist it will be created
 */
function uopz_redefine(string $constant, mixed $value) {}

/**
 * Delete $constant
 *
 * @param string $constant
 * <b>Note</b>: only user constants should be undefined
 */
function uopz_undefine(string $constant) {}

/**
 * Get or set flags on $function()
 *
 * @param string $function
 * @param int $flags
 * <b>Note</b>: use ZEND_ACC_FETCH as flags to get flags
 * @return int
 */
function uopz_flags(string $function, int $flags = 0) : int
{
    return 0;
}

/**
 * Set static class property
 *
 * @param string $class
 * @param string $property
 * @param mixed $value
 */
function uopz_set_property(string $class, string $property, $value) {}

/**
 * Get static class property
 *
 * @param string $class
 * @param string $property
 * @return mixed
 */
function uopz_get_property(string $class, string $property)
{
    return true;
}
