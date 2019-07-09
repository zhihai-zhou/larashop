<?php
/**
 * This is not a free software, can not be copied and/or distributed.
 *
 * @copyright   翎医信息科技（上海）有限公司 ( http://www.doctopia.com.cn/)
 * @filename    BaseYzShop.php
 * @author      Dylan.Zhou <Dylan.Zhou@doctopia.com.cn>
 * @datetime    2019-07-04 17:45
 * @license     http://www.doctopia.com.cn/
 * @since       Version 1.0.0
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class BaseYzShop extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setConnection(config('database.mode_yzshop'));
    }

    public function getDateFormat()
    {
        return 'U';
    }
}