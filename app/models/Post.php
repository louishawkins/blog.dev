<?php 

class Post extends BaseModel
{
	public static $rules = array(
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:10000'
	);

	protected $table = 'posts';

	protected $fillable = array('title', 'body', 'user_id');

	public function user()
	{
		return $this->belongsTo('User');
	}
}