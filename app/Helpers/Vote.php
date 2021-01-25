<?php

use App\Models\Vote;

//getting all vote counts
 function getVoteCount($id)
 {
     return $count = Vote::where('image_id', '=', $id)->get();
 }
