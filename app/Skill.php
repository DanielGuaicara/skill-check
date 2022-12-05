<?php

namespace App;

use App\Events\FeedEntryCreated;
use Fico7489\Laravel\Pivot\Traits\PivotEventTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use PivotEventTrait;
    use SoftDeletes;

    protected $table = 'skills';

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'certificate',
        'event_id',
        'level_id',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function skill_lists()
    {
        return $this->belongsToMany(SkillList::class, 'skill_lists_has_skills', 'skill_id', 'skill_list_id')
            ->withPivot('order', 'skill_id', 'skill_list_id');
    }

    public function gymnasts()
    {
        return $this->belongsToMany(Gymnast::class, 'gymnasts_has_skills', 'skill_id', 'gymnast_id')->withTimestamps();
    }

    protected static function booted()
    {
        static::pivotAttached(function ($model, $relationName, $member, $data) {
            event(new FeedEntryCreated(Gymnast::find($member[0]), ['progress' => $data[$member[0]]['progress_status'],'model' => $model]));
        });
        static::pivotUpdated(function ($model, $relationName, $member, $data) {
            event(new FeedEntryCreated(Gymnast::find($member[0]), ['progress' => $data[$member[0]]['progress_status'],'model' => $model]));
        });
    }
}
