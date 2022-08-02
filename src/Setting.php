<?php

namespace KitLoong\MigrationsGenerator;

use Carbon\Carbon;

class Setting
{
    /**
     * The default DB connection name, also known as "previous" connection name if migration is called
     * with `--connection=other` option.
     *
     * @var string
     */
    private $defaultConnection;

    /** @var boolean */
    private $useDBCollation;

    /** @var boolean */
    private $ignoreIndexNames;

    /** @var boolean */
    private $ignoreForeignKeyNames;

    /** @var boolean */
    private $squash;

    /** @var string */
    private $path;

    /** @var string */
    private $stubPath;

    /** @var \Carbon\Carbon */
    private $date;

    /** @var string */
    private $tableFilename;

    /** @var string */
    private $viewFilename;

    /** @var string */
    private $fkFilename;

    /** @var boolean */
    private $anonymous;

    /**
     * @return string
     */
    public function getDefaultConnection(): string
    {
        return $this->defaultConnection;
    }

    /**
     * @param  string  $defaultConnection
     */
    public function setDefaultConnection(string $defaultConnection): void
    {
        $this->defaultConnection = $defaultConnection;
    }

    /**
     * @return bool
     */
    public function isUseDBCollation(): bool
    {
        return $this->useDBCollation;
    }

    /**
     * @param  bool  $useDBCollation
     */
    public function setUseDBCollation(bool $useDBCollation): void
    {
        $this->useDBCollation = $useDBCollation;
    }

    /**
     * @return bool
     */
    public function isIgnoreIndexNames(): bool
    {
        return $this->ignoreIndexNames;
    }

    /**
     * @param  bool  $ignoreIndexNames
     */
    public function setIgnoreIndexNames(bool $ignoreIndexNames): void
    {
        $this->ignoreIndexNames = $ignoreIndexNames;
    }

    /**
     * @return bool
     */
    public function isIgnoreForeignKeyNames(): bool
    {
        return $this->ignoreForeignKeyNames;
    }

    /**
     * @param  bool  $ignoreForeignKeyNames
     */
    public function setIgnoreForeignKeyNames(bool $ignoreForeignKeyNames): void
    {
        $this->ignoreForeignKeyNames = $ignoreForeignKeyNames;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param  string  $path
     */
    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getStubPath(): string
    {
        return $this->stubPath;
    }

    /**
     * @param  string  $stubPath
     */
    public function setStubPath(string $stubPath): void
    {
        $this->stubPath = $stubPath;
    }

    /**
     * @return bool
     */
    public function isSquash(): bool
    {
        return $this->squash;
    }

    /**
     * @param  bool  $squash
     */
    public function setSquash(bool $squash): void
    {
        $this->squash = $squash;
    }

    /**
     * @return string
     */
    public function getTableFilename(): string
    {
        return $this->tableFilename;
    }

    /**
     * @param  string  $tableFilename
     */
    public function setTableFilename(string $tableFilename): void
    {
        $this->tableFilename = $tableFilename;
    }

    /**
     * @return string
     */
    public function getViewFilename(): string
    {
        return $this->viewFilename;
    }

    /**
     * @param  string  $viewFilename
     */
    public function setViewFilename(string $viewFilename): void
    {
        $this->viewFilename = $viewFilename;
    }

    /**
     * @return string
     */
    public function getFkFilename(): string
    {
        return $this->fkFilename;
    }

    /**
     * @param  string  $fkFilename
     */
    public function setFkFilename(string $fkFilename): void
    {
        $this->fkFilename = $fkFilename;
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getDate(): Carbon
    {
        return $this->date;
    }

    /**
     * @param  \Carbon\Carbon  $date
     */
    public function setDate(Carbon $date): void
    {
        $this->date = $date;
    }

    /**
     * @param  bool  $anonymous
     */
    public function setAnonymous(bool $anonymous): void
    {
        $this->anonymous = $anonymous;
    }

    /**
     * @return bool
     */
    public function asAnonymousClass(): bool
    {
        return $this->anonymous;
    }
}
