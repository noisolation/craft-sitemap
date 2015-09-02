<?php

namespace Craft;

class Sitemap_AlternateUrlModel extends Sitemap_BaseModel
{
    /**
     * {@inheritdoc} Sitemap_UrlModel::getDomElement()
     */
    public function getDomElement(\DOMDocument $document)
    {
        $element = $document->createElement('xhtml:link');
        $element->setAttribute('rel', 'alternate');
        $element->setAttribute('hreflang', $this->hreflang);
        $element->setAttribute('href', $this->href);

        return $element;
    }

    /**
     * {@inheritdoc} BaseModel::defineAttributes()
     */
    protected function defineAttributes()
    {
        return array(
            'hreflang' => AttributeType::Locale,
            'href' => AttributeType::Url,
        );
    }
}
