<?php
declare(strict_types=1);

namespace WernerDweight\SpotifyApiClientBundle\Service;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use WernerDweight\RA\Exception\RAException;
use WernerDweight\RA\RA;
use WernerDweight\SpotifyApiClient\Client\ClientInterface;
use WernerDweight\SpotifyApiClientBundle\Exception\ApiFactoryException;

/**
 * Provides api clients via tagged services.
 */
class ApiFactory
{
    /** @var RA */
    private $clients;

    /**
     * ApiFactory constructor.
     * @param RewindableGenerator $clients
     */
    public function __construct(RewindableGenerator $clients)
    {
        $this->clients = new RA();
        /** @var \Generator $iterator */
        $iterator = $clients->getIterator();
        while ($iterator->valid()) {
            /** @var ClientInterface $client */
            $client = $iterator->current();
            $this->clients->set($client->getClientType(), $client);
            $iterator->next();
        }
    }

    /**
     * @param string $clientType
     * @return ClientInterface
     * @throws ApiFactoryException
     * @throws RAException
     */
    public function get(string $clientType): ClientInterface
    {
        if ($this->clients->hasKey($clientType) !== true) {
            throw new ApiFactoryException(
                ApiFactoryException::INVALID_CLIENT_TYPE,
                $clientType
            );
        }
        /** @var ClientInterface $client */
        $client = $this->clients->get($clientType);
        return $client;
    }
}
