<?php

namespace Bulkly;

use Illuminate\Database\Eloquent\Model;

class BufferPosting extends Model
{
   public function groupInfo()
    {
        return $this->belongsTo(SocialPostGroups::Class,'group_id');
    }
   public function accountInfo()
    {
        return $this->belongsTo(SocialAccounts::Class, 'account_id');
    }

}
