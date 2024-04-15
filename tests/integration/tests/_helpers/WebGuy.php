<?php

declare(strict_types=1);


/**
 * Inherited Methods
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
*/
class WebGuy extends \Codeception\Actor
{
    use _generated\WebGuyActions;

    /**
     * Define custom actions here
     */

    // multi session testing needs to be explicitly enabled since codeception 3, see https://codeception.com/04-24-2019/codeception-3.0.html
    use \Codeception\Lib\Actor\Shared\Friend;
}
