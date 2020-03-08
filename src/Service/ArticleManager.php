<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service;

use Slince\Shopify\Model\Article;
use Slince\Shopify\Service\Contracts\ArticleManagerInterface;

class ArticleManager extends NestCrudable implements ArticleManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function getParentResourceName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Article::class;
    }
}
