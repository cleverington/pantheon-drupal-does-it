<?php
namespace Drush\SiteAlias;

/**
 * Inflection trait for the site alias manager.
 */
trait SiteAliasManagerAwareTrait
{
    protected $siteAliasManager;

    /**
     * @inheritdoc
     */
    public function setSiteAliasManager($siteAliasManager)
    {
        $this->siteAliasManager = $siteAliasManager;
    }

    /**
     * @inheritdoc
     */
    public function siteAliasManager()
    {
        return $this->siteAliasManager;
    }

    /**
     * @inheritdoc
     */
    public function hasSiteAliasManager()
    {
        return isset($this->siteAliasManager);
    }
}
