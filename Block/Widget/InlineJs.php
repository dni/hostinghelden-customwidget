<?php
namespace Hostinghelden\CustomWidget\Block\Widget;

/* use Magento\Catalog\Api\CategoryRepositoryInterface; */
/* use Magento\Catalog\Block\Product\Context; */
/* use Magento\Catalog\Block\Product\ListProduct; */
/* use Magento\Catalog\Model\Layer\Resolver; */
/* use Magento\Catalog\Model\ProductFactory; */
use Magento\Framework\Data\Helper\PostHelper;
use Magento\Framework\Url\Helper\Data;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class InlineJs extends Template implements BlockInterface
{
  protected $_template = "widget/inlinejs.phtml";

}
