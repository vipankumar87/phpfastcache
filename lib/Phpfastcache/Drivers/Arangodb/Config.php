<?php
/**
 *
 * This file is part of Phpfastcache.
 *
 * @license MIT License (MIT)
 *
 * For full copyright and license information, please see the docs/CREDITS.txt and LICENCE files.
 *
 * @author Georges.L (Geolim4)  <contact@geolim4.com>
 * @author Contributors  https://github.com/PHPSocialNetwork/phpfastcache/graphs/contributors
 */

declare(strict_types=1);

namespace Phpfastcache\Drivers\Arangodb;

use Phpfastcache\Config\ConfigurationOption;

/**
 * @see https://github.com/arangodb/arangodb-php/blob/devel/examples/init.php
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
class Config extends ConfigurationOption
{
    protected string $database;

    protected string $collection;

    /**
     *  HTTP ENDPOINT: ssl://127.0.0.1:8529
     *  SSL ENDPOINT: ssl://127.0.0.1:8529
     *  UNIX ENDPOINT: unix:///tmp/arangodb.sock
     *  Failover ENDPOINTS: ['tcp://127.0.0.1:8529', 'tcp://127.0.0.1:8529']
     */
    protected string|array $endpoint = 'tcp://127.0.0.1:8529';

    protected string $connection = 'Keep-Alive'; // enum{'Close', 'Keep-Alive'}

    protected string $authType = 'Basic'; // enum{'Bearer', 'Basic'}

    protected string $authUser = '';

    protected string $authPasswd = '';

    protected ?string $authJwt = null;

    protected bool $autoCreate = false; // Do not create unknown collections automatically

    protected int $connectTimeout = 3;

    protected int $requestTimeout = 5;

    protected string $updatePolicy = 'last';

    protected bool $verifyCert = true;

    protected bool $selfSigned = true;

    protected string $ciphers = 'DEFAULT'; // @see https://www.openssl.org/docs/manmaster/apps/ciphers.html

    protected ?\Closure $traceFunction = null;

    public function getDatabase(): string
    {
        return $this->database;
    }

    public function setDatabase(string $database): Config
    {
        $this->database = $database;
        return $this;
    }

    public function getCollection(): string
    {
        return $this->collection;
    }

    public function setCollection(string $collection): Config
    {
        $this->collection = $collection;
        return $this;
    }

    public function getEndpoint(): string|array
    {
        return $this->endpoint;
    }

    public function setEndpoint(string|array $endpoint): Config
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    public function getConnection(): string
    {
        return $this->connection;
    }

    public function setConnection(string $connection): Config
    {
        $this->connection = $connection;
        return $this;
    }

    public function getAuthType(): string
    {
        return $this->authType;
    }

    public function setAuthType(string $authType): Config
    {
        $this->authType = $authType;
        return $this;
    }

    public function getAuthUser(): string
    {
        return $this->authUser;
    }

    public function setAuthUser(string $authUser): Config
    {
        $this->authUser = $authUser;
        return $this;
    }

    public function getAuthPasswd(): string
    {
        return $this->authPasswd;
    }

    public function setAuthPasswd(string $authPasswd): Config
    {
        $this->authPasswd = $authPasswd;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthJwt(): ?string
    {
        return $this->authJwt;
    }

    /**
     * @param string|null $authJwt
     * @return Config
     */
    public function setAuthJwt(?string $authJwt): Config
    {
        $this->authJwt = $authJwt;
        return $this;
    }

    public function isAutoCreate(): bool
    {
        return $this->autoCreate;
    }

    public function setAutoCreate(bool $autoCreate): Config
    {
        $this->autoCreate = $autoCreate;
        return $this;
    }

    public function getConnectTimeout(): int
    {
        return $this->connectTimeout;
    }

    public function setConnectTimeout(int $connectTimeout): Config
    {
        $this->connectTimeout = $connectTimeout;
        return $this;
    }

    public function getRequestTimeout(): int
    {
        return $this->requestTimeout;
    }

    public function setRequestTimeout(int $requestTimeout): Config
    {
        $this->requestTimeout = $requestTimeout;
        return $this;
    }

    public function getUpdatePolicy(): string
    {
        return $this->updatePolicy;
    }

    public function setUpdatePolicy(string $updatePolicy): Config
    {
        $this->updatePolicy = $updatePolicy;
        return $this;
    }

    public function isVerifyCert(): bool
    {
        return $this->verifyCert;
    }

    public function setVerifyCert(bool $verifyCert): Config
    {
        $this->verifyCert = $verifyCert;
        return $this;
    }

    public function isSelfSigned(): bool
    {
        return $this->selfSigned;
    }

    public function setSelfSigned(bool $selfSigned): Config
    {
        $this->selfSigned = $selfSigned;
        return $this;
    }

    public function getCiphers(): string
    {
        return $this->ciphers;
    }

    public function setCiphers(string $ciphers): Config
    {
        $this->ciphers = $ciphers;
        return $this;
    }

    /**
     * @return \Closure|null
     */
    public function getTraceFunction(): ?\Closure
    {
        return $this->traceFunction;
    }

    /**
     * @param \Closure|null $traceFunction
     * @return Config
     */
    public function setTraceFunction(?\Closure $traceFunction): Config
    {
        $this->traceFunction = $traceFunction;
        return $this;
    }
}
