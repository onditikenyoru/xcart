<?php
namespace XLite\Module\CDev\Coupons\Model;
/**
 * Coupon
 *
 * @Entity
 * @Table  (name="coupons",
 *      indexes={
 *          @Index (name="ce", columns={"code", "enabled"})
 *      }
 * )
 *
 * @HasLifecycleCallbacks
 */
class Coupon extends \XLite\Module\QSL\SpecialOffersBase\Module\CDev\Coupons\Model\Coupon {}