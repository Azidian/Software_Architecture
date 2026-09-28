<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * HUMAN ATTRIBUTES
 * $this->attributes['id'] - int - contains the human primary key (incrementing)
 * $this->attributes['name'] - string - contains the human name
 * $this->attributes['aura'] - int - contains the aura quantity
 * $this->attributes['hierarchy'] - string - contains the hierarchy level (common, moderate, legendary)
 * $this->attributes['created_at'] - string - contains the creation date
 * $this->attributes['updated_at'] - string - contains the update date
 */
class Human extends Model
{
    protected $fillable = [
        'name',
        'aura',
        'hierarchy',
    ];

    public function getId(): int
    {
        return (int) $this->attributes['id'];
    }

    public function getName(): string
    {
        return (string) $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getAura(): int
    {
        return (int) $this->attributes['aura'];
    }

    public function setAura(int $aura): void
    {
        $this->attributes['aura'] = $aura;
    }

    public function getHierarchy(): string
    {
        return (string) $this->attributes['hierarchy'];
    }

    public function setHierarchy(string $hierarchy): void
    {
        $this->attributes['hierarchy'] = $hierarchy;
    }

    public function getCreatedAt(): string
    {
        return (string) $this->attributes['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return (string) $this->attributes['updated_at'];
    }
}
