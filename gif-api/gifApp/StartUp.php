<?php

namespace gifApp;


class StartUp
{
    protected array $urls;

    public function __construct($searchPhrase, $resultLimit)
    {
        $app = new ClientRequest($searchPhrase, $resultLimit);
        $take = new TakeGifUrl($app->getGifResource());
        $this->urls = $take->takeUrl();
    }

    public function getUrls(): array
    {
        return $this->urls;
    }
}
